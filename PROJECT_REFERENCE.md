# Appliance Repair Knights Ltd. - Project Reference & Guidelines

## 1. Business Profile & Google Maps
* **Business Name**: Appliance Repair Knights Ltd.
* **Google Maps Listing**: [Appliance Repair Knights Ltd. on Google Maps](https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059)
* **Coordinates**: 43.7836619, -79.5314952 (Serving Toronto, GTA & surrounding areas)

---

## 2. Business Model & Pricing Rules
* **Service Call / Diagnostic Fee**:
  * Diagnostic fee IS the service call fee (covers technician travel, inspection, and diagnosis).
  * **Waiver Rule**: **"Service call fee waived off with repairs"** (or **"Service Call Fee Waived with Repair"**).
  * **Strict Constraint**: Never write "100% free" or "$0 service call" on client-facing pages.
* **Average Repair Cost Policy**:
  * **Strict Constraint**: Do NOT publish or mention average repair cost numbers (e.g., "$300" or "$50–$80 ranges") on client-facing pages, as it anchors arbitrary numbers in customers' minds before diagnosing the specific issue.
* **Discount Policy**:
  * Do NOT offer isolated, unverified coupon claims (e.g., "$15 OFF" / "$50 OFF") that confuse users. Focus on the service call fee waiver with repair.
* **Warranty Policy**:
  * Standardized terminology across the site: **"Repair with Warranty"** / **"Written Parts & Labor Warranty"**.
  * **Strict Constraint**: Do NOT specify timeframes (no "90-day", "1-year", "months", "days").
  * **Wording Rule**: Strictly use **"warranty"**; do not mix or use "guarantee" in warranty copy.
* **Dispatch & Response Time Policy (Solopreneur Logistics)**:
  * Business is managed directly by a dedicated solo owner/operator.
  * **Strict Constraint**: Do NOT promise rigid arrival windows like "within 2 to 4 hours across 20 locations" or callbacks "within 15 minutes".
  * **Standard Phrasing**: Use **"Prompt same-day service based on daily schedule availability"** and **"Our team will contact you promptly to confirm your appointment window"**.

---

## 3. Design Benchmark & Content References
* **Primary Benchmark (Design & Content Structure)**: [appliancerepaircompany.ca](https://appliancerepaircompany.ca)
  * Clean, accessible card layouts, clear service categories, professional tone, and transparent warranty/fee messaging.
* **Secondary Benchmark (Header & CTA Layout)**: [appliancerepairteam.ca](https://www.appliancerepairteam.ca) (The A-Team Appliance Repair)
  * Top-bar regional dispatch contacts, prominent click-to-call, and "Book Online" action triggers.

---

## 4. Next Month SEO & On-Page Roadmap (Pending Updates)
* **Homepage (`index.php`) On-Page Keyword Refinement**:
  * **Target Query**: Integrate `"appliance repair near you"` / `"appliance repair near me"` naturally into:
    1. **Hero Subtitle**: Update intro hook to: *"Looking for reliable appliance repair near you? We serve homeowners across the Greater Toronto Area with fast, certified, same-day repairs."*
    2. **FAQ Section**: Add natural voice-search & audit-compliant question: *"How quickly can an appliance repair technician near me arrive?"* (Answer highlighting prompt GTA same-day dispatch).
  * **Timing**: Scheduled for next month's SEO sprint to allow Google to index current schema, UI, and speed updates without index churn.

---

## 5. CSS Build & Pre-Upload Safeguards (CRITICAL)
* **Tailwind CSS Source**:
  * ALWAYS compile from `./css/input.css` (contains `@tailwind base; @tailwind components; @tailwind utilities;`).
  * NEVER use `css/style.css` as input for Tailwind CLI!
* **Automated Build Command**:
  * `npm run build:css` (runs Tailwind CLI + automated size & lint verification).
* **Automated Safety Script**:
  * `scripts/verify-build.js` / `npm run verify`:
    1. Checks `css/tailwind.min.css` size (MUST be >= 30 KB, verifies core utility classes exist).
    2. Checks `css/style.min.css` size.
    3. Verifies `head.php` has active cache-busting tokens (`?v=filemtime`) on both CSS files.
    4. Lints all PHP files with 0 syntax errors.
* **Browser Caching Rules**:
  * Hostinger / LiteSpeed caches static CSS for 1 year (`max-age=31536000`).
  * Therefore, `head.php` MUST always link CSS with dynamic timestamp cache-busters (`css/tailwind.min.css?v=...` and `css/style.min.css?v=...`).

