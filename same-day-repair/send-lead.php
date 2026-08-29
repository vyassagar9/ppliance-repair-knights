<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true);

if (!$data) {
    $data = $_POST;
}

$name      = isset($data['name']) ? trim($data['name']) : '';
$phone     = isset($data['phone']) ? trim($data['phone']) : '';
$email     = isset($data['email']) ? trim($data['email']) : '';
$city      = isset($data['city']) ? trim($data['city']) : '';
$appliance = isset($data['appliance']) ? trim($data['appliance']) : '';
$page      = isset($data['page']) ? trim($data['page']) : 'index.html';

if (empty($name) || empty($phone)) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Name and Phone are required."]);
    exit();
}

$googleScriptUrl = "https://script.google.com/macros/s/AKfycbz32LNUCMmCP_FKU2gvC-5SPNrTI4IBNqNg_bz1k_97Kk68hf9B8yXeQB9XHcAFKUDO/exec";

// Forward data to Google Sheets via server-side cURL
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
$headers .= "From: Appliance Repair Knights <no-reply@appliancerepairknights.com>" . "\r\n";
$headers .= "Reply-To: " . ($email ?: "no-reply@appliancerepairknights.com") . "\r\n";
$headers .= "Cc: " . $cc . "\r\n";

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
    <h2 class="header">⚡ New Lead Dispatch Request</h2>
    <div class="field"><span class="label">Full Name:</span><span class="val">' . htmlspecialchars($name) . '</span></div>
    <div class="field"><span class="label">Phone:</span><span class="val highlight"><a href="tel:' . preg_replace('/[^0-9+]/', '', $phone) . '">' . htmlspecialchars($phone) . '</a></span></div>
    <div class="field"><span class="label">Email:</span><span class="val">' . htmlspecialchars($email ?: 'N/A') . '</span></div>
    <div class="field"><span class="label">City / Region:</span><span class="val">' . htmlspecialchars($city ?: 'GTA') . '</span></div>
    <div class="field"><span class="label">Appliance:</span><span class="val">' . htmlspecialchars($appliance ?: 'N/A') . '</span></div>
    <div class="field"><span class="label">Source Page:</span><span class="val">' . htmlspecialchars($page) . '</span></div>
    <div class="field"><span class="label">Time Received:</span><span class="val">' . date('Y-m-d H:i:s') . ' (EST)</span></div>
  </div>
</body>
</html>
';

$mailSent = @mail($to, $subject, $body, $headers);

echo json_encode([
    "status" => "success",
    "message" => "Lead processed successfully.",
    "gSheet" => $gSheetSuccess,
    "mailSent" => $mailSent
]);
