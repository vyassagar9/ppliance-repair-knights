<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true);

if (!is_array($data) || empty($data)) {
    if (!empty($rawInput)) {
        parse_str($rawInput, $parsedStr);
        if (is_array($parsedStr) && !empty($parsedStr)) {
            $data = $parsedStr;
        }
    }
}

if (!is_array($data)) {
    $data = array_merge($_POST, $_GET);
}

// Extract fields supporting multiple key aliases
$name = '';
foreach (['name', 'fname', 'fullName', 'client-name', 'client_name', 'full_name', 'user-name'] as $k) {
    if (isset($data[$k]) && trim((string)$data[$k]) !== '') { 
        $name = trim((string)$data[$k]); 
        break; 
    }
}

$phone = '';
foreach (['phone', 'client-phone', 'client_phone', 'phoneNumber', 'phone_number', 'mobile', 'tel'] as $k) {
    if (isset($data[$k]) && trim((string)$data[$k]) !== '') { 
        $phone = trim((string)$data[$k]); 
        break; 
    }
}

$email = '';
foreach (['email', 'client-email', 'client_email', 'emailAddress'] as $k) {
    if (isset($data[$k]) && trim((string)$data[$k]) !== '') { 
        $email = trim((string)$data[$k]); 
        break; 
    }
}

$city = '';
foreach (['city', 'client-city', 'client_city', 'location', 'area'] as $k) {
    if (isset($data[$k]) && trim((string)$data[$k]) !== '') { 
        $city = trim((string)$data[$k]); 
        break; 
    }
}

$appliance = '';
foreach (['appliance', 'appliance-type', 'appliance_type', 'service'] as $k) {
    if (isset($data[$k]) && trim((string)$data[$k]) !== '') { 
        $appliance = trim((string)$data[$k]); 
        break; 
    }
}

$message = '';
foreach (['message', 'issue', 'issue-description', 'issue_description', 'notes', 'comments'] as $k) {
    if (isset($data[$k]) && trim((string)$data[$k]) !== '') { 
        $message = trim((string)$data[$k]); 
        break; 
    }
}

$page = !empty($data['page']) ? trim($data['page']) : 'site-form';
$form_type = !empty($data['form_type']) ? trim($data['form_type']) : 'quote';

// Standardize data array before forwarding
$data['name']      = $name;
$data['phone']     = $phone;
$data['email']     = $email;
$data['city']      = $city;
$data['appliance'] = $appliance;
$data['message']   = $message;
$data['page']      = $page;
$data['form_type'] = $form_type;

if (empty($name) || empty($phone)) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Name and Phone are required."]);
    exit();
}

// 1. Secret Google Apps Script Endpoint (Protected on Server side)
$googleScriptUrl = "https://script.google.com/macros/s/AKfycbwITHQWhZrzV0M1HklmX7WdlGF1dvllT0g9b4RpxmNUcN0sut79XI23lp_YsSaqc2_-zQ/exec";

// Forward lead data to Google Sheets via cURL
$gSheetSuccess = false;
if (!empty($googleScriptUrl)) {
    $ch = curl_init($googleScriptUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));
    curl_setopt($ch, CURLOPT_TIMEOUT, 8);
    $gResult = curl_exec($ch);
    curl_close($ch);
    if ($gResult) {
        $gSheetSuccess = true;
    }
}

// 2. Send Email via Hostinger PHP mail()
$to       = "appliancerepairknights@gmail.com";
$cc       = "vyassagar9@gmail.com";
$subject  = "⚡ NEW LEAD: " . ($appliance ?: 'Appliance') . " Repair - " . $name . " (" . ($city ?: 'GTA') . ")";

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Appliance Repair Knights <no-reply@appliancerepairknights.ca>" . "\r\n";
$headers .= "Reply-To: " . ($email ?: "no-reply@appliancerepairknights.ca") . "\r\n";
$headers .= "Cc: " . $cc . "\r\n";

$messageBlock = '';
if (!empty($message)) {
    $messageBlock = '<div class="field"><span class="label">Message:</span><span class="val">' . nl2br(htmlspecialchars($message)) . '</span></div>';
}

$body = '
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: Arial, sans-serif; background-color: #f8fafc; margin: 0; padding: 20px; }
    .card { background-color: #ffffff; max-width: 600px; margin: 0 auto; border-radius: 12px; padding: 24px; border: 1px solid #e2e8f0; }
    .header { color: #0F4C81; border-bottom: 2px solid #FF6B00; padding-bottom: 12px; margin-bottom: 20px; }
    .field { padding: 10px 0; border-bottom: 1px solid #f1f5f9; display: flex; }
    .label { font-weight: bold; width: 140px; color: #475569; }
    .val { color: #0f172a; font-weight: 600; }
    .highlight { color: #FF6B00; font-size: 16px; font-weight: bold; }
  </style>
</head>
<body>
  <div class="card">
    <h2 class="header">⚡ New Lead Request (' . htmlspecialchars(strtoupper($form_type)) . ')</h2>
    <div class="field"><span class="label">Form Type:</span><span class="val">' . htmlspecialchars(strtoupper($form_type)) . '</span></div>
    <div class="field"><span class="label">Full Name:</span><span class="val">' . htmlspecialchars($name) . '</span></div>
    <div class="field"><span class="label">Phone:</span><span class="val highlight"><a href="tel:' . preg_replace('/[^0-9+]/', '', $phone) . '">' . htmlspecialchars($phone) . '</a></span></div>
    <div class="field"><span class="label">Email:</span><span class="val">' . htmlspecialchars($email ?: 'N/A') . '</span></div>
    <div class="field"><span class="label">City / Region:</span><span class="val">' . htmlspecialchars($city ?: 'GTA') . '</span></div>
    <div class="field"><span class="label">Appliance:</span><span class="val">' . htmlspecialchars($appliance ?: 'N/A') . '</span></div>
    ' . $messageBlock . '
    <div class="field"><span class="label">Source Page:</span><span class="val">' . htmlspecialchars($page) . '</span></div>
    <div class="field"><span class="label">Time Received:</span><span class="val">' . date('Y-m-d H:i:s') . ' (EST)</span></div>
  </div>
</body>
</html>
';

// 3. Try Sending Email
$mailError = '';
$mailSent = mail($to, $subject, $body, $headers);

if (!$mailSent) {
    $lastError = error_get_last();
    $mailError = isset($lastError['message']) ? $lastError['message'] : 'PHP mail() function returned false. (Check SMTP/Sendmail server settings on host)';
}

// 4. Log lead to local file as backup (leads.log)
$logEntry = date('[Y-m-d H:i:s]') . " | Type: {$form_type} | Name: {$name} | Phone: {$phone} | City: {$city} | Appliance: {$appliance} | GSheet: " . ($gSheetSuccess ? 'OK' : 'FAIL') . " | Mail: " . ($mailSent ? 'OK' : 'FAIL') . "\n";
file_put_contents(__DIR__ . '/leads.log', $logEntry, FILE_APPEND);

// Return full diagnostic status
echo json_encode([
    "status" => ($mailSent || $gSheetSuccess) ? "success" : "partial_success",
    "message" => "Lead process completed.",
    "googleSheet" => [
        "success" => $gSheetSuccess,
        "response" => $gResult
    ],
    "email" => [
        "sent" => $mailSent,
        "error" => $mailError
    ]
]);

