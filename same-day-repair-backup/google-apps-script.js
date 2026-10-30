/**
 * Google Apps Script Code for Google Sheets Integration
 * Sheet URL: https://docs.google.com/spreadsheets/d/1iWjdMyJ_Qcjh7YL6wo4g-2wlLakZOByqdYN1I1tFylQ/edit
 *
 * Column Order:
 * Column A: Timestamp
 * Column B: Name
 * Column C: Phone
 * Column D: Email
 * Column E: City
 * Column F: Appliance
 * Column G: Page
 */

function doPost(e) {
  try {
    var sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
    
    // Parse request body
    var data = {};
    if (e.postData && e.postData.contents) {
      try {
        data = JSON.parse(e.postData.contents);
      } catch (jsonErr) {
        data = e.parameter || {};
      }
    } else {
      data = e.parameter || {};
    }

    var timestamp = new Date().toLocaleString("en-US", { timeZone: "America/Toronto" });
    var name = data.name || "";
    var phone = data.phone || "";
    var email = data.email || "";
    var city = data.city || "";
    var appliance = data.appliance || "";
    var page = data.page || "index.html";

    // 1. Append row matching Column Order: Timestamp | Name | Phone | Email | City | Appliance | Page
    sheet.appendRow([timestamp, name, phone, email, city, appliance, page]);

    // 2. Send Notification Email via Google Apps Script MailApp
    var recipient = "appliancerepairknights@gmail.com";
    var ccRecipient = "vyassagar9@gmail.com";
    var subject = "⚡ NEW LEAD: " + (appliance || "Appliance") + " Repair - " + name + " (" + (city || "GTA") + ")";

    var htmlBody = `
      <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #e2e8f0; border-radius: 12px; background-color: #ffffff;">
        <h2 style="color: #0F4C81; border-bottom: 2px solid #FF6B00; padding-bottom: 10px; margin-top: 0;">⚡ New Lead Dispatch Request</h2>
        <table style="width: 100%; border-collapse: collapse;">
          <tr><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #f1f5f9; color: #475569; width: 140px;">Full Name:</td><td style="padding: 10px; border-bottom: 1px solid #f1f5f9; color: #0f172a; font-weight: 600;">${name}</td></tr>
          <tr><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #f1f5f9; color: #475569;">Phone Number:</td><td style="padding: 10px; border-bottom: 1px solid #f1f5f9;"><a href="tel:${phone}" style="color: #FF6B00; font-weight: bold; font-size: 16px;">${phone}</a></td></tr>
          <tr><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #f1f5f9; color: #475569;">Email Address:</td><td style="padding: 10px; border-bottom: 1px solid #f1f5f9; color: #0f172a;">${email || 'N/A'}</td></tr>
          <tr><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #f1f5f9; color: #475569;">City / Area:</td><td style="padding: 10px; border-bottom: 1px solid #f1f5f9; color: #0f172a;">${city}</td></tr>
          <tr><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #f1f5f9; color: #475569;">Appliance:</td><td style="padding: 10px; border-bottom: 1px solid #f1f5f9; color: #0f172a;">${appliance}</td></tr>
          <tr><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #f1f5f9; color: #475569;">Source Page:</td><td style="padding: 10px; border-bottom: 1px solid #f1f5f9; color: #0f172a;">${page}</td></tr>
          <tr><td style="padding: 10px; font-weight: bold; color: #475569;">Received At:</td><td style="padding: 10px; color: #0f172a;">${timestamp}</td></tr>
        </table>
      </div>
    `;

    MailApp.sendEmail({
      to: recipient,
      cc: ccRecipient,
      subject: subject,
      htmlBody: htmlBody
    });

    return ContentService.createTextOutput(JSON.stringify({ "result": "success" }))
      .setMimeType(ContentService.MimeType.JSON);

  } catch (error) {
    return ContentService.createTextOutput(JSON.stringify({ "result": "error", "message": error.toString() }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}
