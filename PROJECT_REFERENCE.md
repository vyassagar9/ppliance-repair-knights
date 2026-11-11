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

## 4. SEO & On-Page Keyword Refinements (COMPLETED)
* **Homepage (`index.php`) On-Page Keyword Integration**:
  * **Target Query**: Integrated `"appliance repair near you"` / `"appliance repair near me"` naturally into:
    1. **Hero Subtitle**: Updated intro hook: *"Looking for reliable appliance repair near you? We serve homeowners across the Greater Toronto Area & Southern Ontario with fast, certified, same-day repairs backed by warranty."*
    2. **FAQ Section & Schema**: Updated voice-search FAQ: *"How quickly can an appliance repair technician near me arrive?"* (with prompt GTA dispatch answer in both HTML accordion and FAQPage JSON-LD schema).
  * **Locations Hub (`locations/index.php`) & Template (`locations/location.php`)**:
    * Integrated natural "near you" intent into the master locations hub subtitle and location page closing CTAs.
* **GSC Real-Time Query Optimizations (November 2026)**:
  * **Hamilton (`hamilton-appliance-repair`)**: Upgraded from 1 thin FAQ to 7 comprehensive FAQs, trimmed meta title under 60 chars (`Appliance Repair Hamilton | Fridge, Washer & Dishwasher Fix`), trimmed description under 155 chars, full "near me" conversational triggers (hero intro hook, FAQ #1 voice-search schema, and keywords), and intro targeting top GSC impression drivers: `appliance repair hamilton` (206 imp), `dishwasher repair hamilton` (165 imp), `refrigerator repair hamilton` (139 imp), `fridge repair hamilton` (124 imp), and `washing machine repair hamilton` (123 imp).
  * **Vaughan (`vaughan-appliance-repair`)**: Targeted high-probability Page 2 queries: `dishwasher repair vaughan` (134 imp, Pos 18.7) and `washing machine repair vaughan` (126 imp, Pos 20.8) with dedicated dishwasher and washing machine FAQs, 59-char meta title, 151-char meta description, and H1 refined to "Licensed Appliance Repair Services in Vaughan" to eliminate "Same-Day" triple-stuffing.
  * **Markham (`markham-appliance-repair`)**: Targeted `dishwasher repair markham` (146 imp) and `fridge repair markham` (130 imp) with dedicated dishwasher repair FAQ, 58-char meta title, and description including "fridges" under 150 chars.
  * **Burlington (`burlington-appliance-repair`)**: Targeted `appliance repair burlington` (149 imp, Pos 25.4) with dedicated laundry and kitchen drainage FAQ, 60-char meta title, and 142-char description.
  * **Locations Hub (`locations/index.php`)**: Meta title streamlined to "Appliance Repair Locations in the GTA | Repair Knights" (54 chars, removing "Toronto & GTA" redundancy).
  * **Policy Compliance**: Cleaned all legacy "OEM" phrasing across `locations/location.php` and `locations/location-data.php` to "genuine quality parts" / "factory-grade parts".

* **Brands Architecture & Dedicated Hubs (COMPLETED - November 2026)**:
  * **Master Brands Directory**: [`brands/index.php`](file:///Applications/MAMP/htdocs/canada/brands/index.php) (`/brands`) showcasing 4-card trust feature pills (Same-Day Repair Service, Highly Skilled Technicians, All Major Brands, Affordable Rates) and Tier 1 Everyday, Tier 2 Luxury European, and Tier 3 Universal brands.
  * **Flagship Brand Guide**: [`brands/samsung-appliance-repair.php`](file:///Applications/MAMP/htdocs/canada/brands/samsung-appliance-repair.php) (`/brands/samsung-appliance-repair`).
    - Carousel cards updated to clean service titles without brand repetition (Refrigerator Repair, Washing Machine Repair, Dryer Repair, Dishwasher Repair, Range Repair, Microwave Repair) and equipped with high-converting isolated product images (`img/service-card-*.webp`) matching the PPC landing pages.
    - Section heading standardized to: "Samsung Appliance Repair in the Greater Toronto Area (GTA)".
    - Near-Me & Proximity SEO Optimized: Natural voice-search query triggers ("near you" in hero subtitle and meta description, "How quickly can a Samsung appliance repair technician near me arrive?" in accordion + FAQPage schema, LocalBusiness GPS geo-coordinates, areaServed array, and 20-city regional internal mesh).
    - Focuses on Samsung Twin Cooling Plus refrigerators (ice maker freeze-ups, 14E code, deli drawer leaks), VRT Plus washers (5E/nd drainage, UB/UE spin balance), dryers (tE/hE heating element coils), dishwashers (LC, 4C), and ranges.
    - Features a dedicated Samsung Error Code Quick Reference Guide (RightFix benchmark style, zero DIY trap).
    - Regional service area linking grid with clean city anchor names (no repetitive keyword stuffing).
    - Fully compliant with `AGENTS.md` (0 OEM claims, 0 price numbers, waived diagnostic fee with repair, written warranty).
  * **Internal Linking Mesh**: Connected via Homepage marquee (`index.php`), Sitewide Header Navigation Dropdown (`header.php`), Sitewide Footer (`footer.php`), `sitemap.xml`, `sitemap.php`, and `llms.txt`.

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

---

## 6. Service + Location SEO Strategy & Navigation Blueprint (Saved for Later)

### A. High-Level Strategy & Goal
* **Target Intent**: Capture high-intent queries where homeowners search specific appliance + city (e.g., *"refrigerator repair mississauga"*, *"washing machine repair brampton"*).
* **Current Limitation**: 
  * `/services/fridge-repair` is broad GTA-level.
  * `/locations/mississauga-appliance-repair` is generic city-level.
  * Dedicated service + location pages bridge this gap to maximize organic rankings and conversion rates (3x–4x higher conversion).

### B. Safe Launch Protocol (Avoid Google "Doorway Page" / Thin Content Penalty)
* **Rule**: DO NOT auto-generate 120 low-quality pages via simple find-and-replace.
* **Phase 1 Pilot**: Start with Top 5 Cities × Top 4 Services (15–20 high-value pages):
  * **Cities**: Toronto, Mississauga, Brampton, Vaughan, Markham.
  * **Services**: Refrigerator Repair, Washing Machine Repair, Dryer Repair, Dishwasher Repair.
* **Unique Content Checklist per Page**:
  1. Specific symptom breakdown (e.g. for fridge: not cooling, water leak, ice maker jammed).
  2. Localized neighborhood mentions (e.g. Square One, Port Credit, Streetsville) & postal codes.
  3. Unique Local FAQ section with schema (`FAQPage` + `LocalBusiness` JSON-LD).
  4. Core trust messaging: Diagnostic service call fee waived with repairs, written parts & labor warranty, prompt same-day dispatch.

### C. Site Architecture & Navigation Menu Placement
To avoid cluttering the primary header navigation, place links strategically:
1. **Header Dropdowns**: 
   * Inside `Services` dropdown: Add top city quick-links (e.g., *Refrigerator Repair → Toronto | Mississauga | Brampton*).
   * Inside `Service Areas` dropdown: Include popular sub-service links under primary cities.
2. **City Hub Cross-Links (Highest PageRank Pass-through)**:
   * On `/locations/[city]-appliance-repair`: Add a prominent grid *"Popular Appliance Repairs in [City]"* linking directly to the sub-service pages.
3. **Service Page Cross-Links**:
   * On `/services/[service]`: Add an *"Areas We Service for [Service]"* grid linking to city subpages.
4. **Sitewide Footer**:
   * Add a *"Top Local Repairs"* column with high-priority service + city pages for instant crawlability.

### D. Preferred URL Structure
* **Option A (Recommended & Consistent with codebase)**:
  `https://www.appliancerepairknights.com/locations/mississauga-fridge-repair`
* **Option B (Folder / Silo)**:
  `https://www.appliancerepairknights.com/locations/mississauga/fridge-repair`


