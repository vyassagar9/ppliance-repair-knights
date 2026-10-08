<?php
/**
 * Appliance Repair Knights - Specialized Coffee Machine & Commercial Espresso PPC Landing Page
 * Highly specialized Conversion-Rate Optimized (CRO) Minimalist UI for Google Ads.
 * Strictly adheres to AGENTS.md:
 * - No specific pricing/cost numbers (upfront written quotes, diagnostic fee waived with repair)
 * - No specific warranty day/month/year numbers (comprehensive written parts and labour warranty)
 * - No hardcoded operational day counts (available daily for prompt dispatch)
 * - Isolated PPC page: noindex, follow
 */

$city_param = strtolower(trim($_GET['city'] ?? 'toronto'));

$city_names = [
    'toronto' => 'Toronto',
    'mississauga' => 'Mississauga',
    'brampton' => 'Brampton',
    'vaughan' => 'Vaughan',
    'markham' => 'Markham',
    'richmond-hill' => 'Richmond Hill',
    'oakville' => 'Oakville',
    'burlington' => 'Burlington',
    'etobicoke' => 'Etobicoke',
    'north-york' => 'North York',
    'scarborough' => 'Scarborough',
    'hamilton' => 'Hamilton',
    'kitchener' => 'Kitchener-Waterloo',
    'oshawa' => 'Oshawa / Durham'
];

if (!array_key_exists($city_param, $city_names)) {
    $city_param = 'toronto';
}

$city_name = $city_names[$city_param];
$city_slug = $city_param;

$brand_param = trim($_GET['brand'] ?? '');
$type_param = strtolower(trim($_GET['type'] ?? ''));

// Neighborhoods per city
$city_neighborhoods = [
    'toronto' => ['Downtown Toronto', 'Financial District', 'North York', 'Scarborough', 'Etobicoke', 'Yorkville', 'Midtown', 'The Annex', 'Liberty Village', 'East York'],
    'mississauga' => ['City Centre / Square One', 'Port Credit', 'Streetsville', 'Erin Mills', 'Meadowvale', 'Cooksville', 'Lorne Park', 'Clarkson', 'Lakeview', 'Airport Corporate Centre'],
    'brampton' => ['Bramalea', 'Mount Pleasant', 'Castlemore', 'Downtown Brampton', 'Heart Lake', 'Springdale', "Fletcher's Meadow", 'Goreway', 'Bram West', 'Peel Village'],
    'vaughan' => ['Vaughan Metropolitan Centre', 'Woodbridge', 'Maple', 'Thornhill', 'Kleinburg', 'Concord', 'Vellore Village', 'Patterson', 'Pine Grove', 'Sonoma Heights'],
    'markham' => ['Markham Corporate Park', 'Unionville', 'Markham Village', 'Cornell', 'Milliken', 'Thornhill East', 'Wismer', 'Box Grove', 'Cachet', 'Buttonville'],
    'richmond-hill' => ['Oak Ridges', 'Bayview Glen', 'Mill Pond', 'Langstaff', 'Rouge Woods', 'Jefferson', 'Crosby', 'Elgin Mills', 'Devonsleigh', 'Richvale'],
    'oakville' => ['Old Oakville', 'Bronte', 'Glen Abbey', 'River Oaks', 'West Oak Trails', 'Joshua Creek', 'Clearview', 'Falgarwood', 'College Park', 'Morrison'],
    'burlington' => ['Aldershot', 'Downtown Burlington', 'Brant Hills', 'Millcroft', 'The Orchard', 'Palmer', 'Roseland', 'Shoreacres', 'Mountainside', 'Appleby']
];

$hoods = $city_neighborhoods[$city_slug] ?? [
    "Downtown {$city_name}", "Corporate {$city_name}", "North {$city_name}", "East {$city_name}", "West {$city_name}",
    "{$city_name} Business Park", "{$city_name} Heights", "{$city_name} Valley", "{$city_name} Central", "{$city_name} Core"
];

// Verified Google Business Profile data (single source of truth: config.php + reviews-data.php)
require_once __DIR__ . '/../config.php';
$gmb_rating  = defined('GMB_RATING_VALUE') ? GMB_RATING_VALUE : '5.0';
$gmb_reviews = defined('GMB_REVIEW_COUNT') ? GMB_REVIEW_COUNT : '12';
$all_reviews = @include __DIR__ . '/../reviews-data.php';
$ppc_reviews = is_array($all_reviews) ? array_slice($all_reviews, 0, 3) : [];

// Booking day label for honest urgency (Toronto time)
$tz_now = new DateTime('now', new DateTimeZone('America/Toronto'));
$booking_day = ((int)$tz_now->format('G') >= 18) ? 'Tomorrow' : 'Today';

$coffee_brands = [
    ['name' => 'JURA', 'color' => '#E2001A'],
    ['name' => 'BREVILLE', 'color' => '#E31837'],
    ['name' => 'DE\'LONGHI', 'color' => '#002B49'],
    ['name' => 'MIELE', 'color' => '#D40026'],
    ['name' => 'BUNN', 'color' => '#C41230'],
    ['name' => 'FRANKE', 'color' => '#D50000'],
    ['name' => 'SAECO', 'color' => '#005A9C'],
    ['name' => 'LA MARZOCCO', 'color' => '#D9232E'],
    ['name' => 'GAGGENAU', 'color' => '#1A1A1A'],
    ['name' => 'ROCKET ESPRESSO', 'color' => '#1A1A1A'],
    ['name' => 'BRAVILOR BONAMAT', 'color' => '#E30613'],
    ['name' => 'THERMADOR', 'color' => '#0F2C59'],
    ['name' => 'SCHAERER', 'color' => '#005C8A'],
    ['name' => 'CURTIS', 'color' => '#B31B1B']
];

$page_title = "Same-Day Coffee Machine & Espresso Repair in {$city_name} | Local Certified Technicians";
$meta_desc  = "Specialized coffee machine & espresso repair in {$city_name}. Commercial office systems & luxury built-in units. Genuine OEM parts, fast dispatch & diagnostic fee waived with repair.";
$canonical_url = "https://www.appliancerepairknights.com/same-day-repair/coffee-machine-{$city_slug}";
?>
<!DOCTYPE html>
<html lang="en-CA" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Preconnect & DNS-Prefetch for High-Priority External Assets -->
  <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">

  <!-- Google Tag Manager -->
  <script>
    window.dataLayer = window.dataLayer || [];
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M7B6FLPR');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Primary Meta Tags for PPC -->
  <title id="page-title"><?php echo htmlspecialchars($page_title); ?></title>
  <meta id="meta-title" name="title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta id="meta-desc" name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <meta name="keywords" content="coffee machine repair <?php echo strtolower($city_name); ?>, espresso machine repair <?php echo strtolower($city_name); ?>, commercial coffee maker service gta, miele coffee machine repair, jura repair, bunn coffee maker repair, office espresso machine repair">
  <meta name="robots" content="noindex, follow">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">

  <!-- Production Stylesheets with Cache-Busting -->
  <link rel="stylesheet" href="../css/tailwind.min.css?v=<?php echo file_exists(__DIR__ . '/../css/tailwind.min.css') ? filemtime(__DIR__ . '/../css/tailwind.min.css') : '1.0'; ?>">
  <link rel="stylesheet" href="../css/style.min.css?v=<?php echo file_exists(__DIR__ . '/../css/style.min.css') ? filemtime(__DIR__ . '/../css/style.min.css') : '1.0'; ?>">

  <style>
    /* Self-Hosted Clean Fonts */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 100 900;
      font-display: swap;
      src: url('../fonts/inter-latin.woff2') format('woff2');
    }

    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 100 900;
      font-display: swap;
      src: url('../fonts/montserrat-latin.woff2') format('woff2');
    }

    :root {
      --brand-navy: #0F2038;
      --brand-blue: #0F4C81;
      --brand-orange: #FF6B00;
      --brand-orange-hover: #E85D00;
      --brand-dark: #0A1626;
      --brand-slate: #0f172a;
      --brand-muted: #64748b;
      --brand-border: #e2e8f0;
      --brand-bg: #f8fafc;
      --brand-emerald: #059669;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background-color: #ffffff;
      color: #1e293b;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    h1, h2, h3, h4, .font-heading {
      font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      letter-spacing: -0.02em;
    }

    /* Core Brand Token Utilities (Guarantees Perfect Styling Everywhere) */
    .bg-brandDarkBlue { background-color: var(--brand-navy) !important; }
    .bg-brandNavy { background-color: var(--brand-dark) !important; }
    .bg-brandBlue { background-color: var(--brand-blue) !important; }
    .text-brandDarkBlue { color: var(--brand-navy) !important; }
    .text-brandBlue { color: var(--brand-blue) !important; }
    .bg-brandOrange { background-color: var(--brand-orange) !important; }
    .bg-brandOrangeHover:hover { background-color: var(--brand-orange-hover) !important; }
    .text-brandOrange { color: var(--brand-orange) !important; }
    .border-brandOrange { border-color: var(--brand-orange) !important; }
    .border-brandBorder { border-color: var(--brand-border) !important; }

    /* Clean horizontal scrollbar hiding for snap carousels */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

    /* Bulletproof Responsive On-Site Gallery */
    .onsite-gallery-section {
      overflow-x: clip;
      overflow-y: visible;
    }
    .gallery-slider-track {
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      -webkit-overflow-scrolling: touch;
      gap: 14px;
      padding-top: 4px;
      padding-bottom: 12px;
      scroll-behavior: smooth;
    }
    .gallery-slider-card {
      flex: 0 0 82vw;
      width: 82vw;
      max-width: 340px;
      scroll-snap-align: center;
      scroll-snap-stop: always;
    }
    .gallery-card-img-wrap {
      position: relative;
      width: 100%;
      height: 210px;
      overflow: hidden;
      background-color: #f1f5f9;
      border-top-left-radius: 0.9rem;
      border-top-right-radius: 0.9rem;
    }
    .gallery-card-img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    @media (min-width: 640px) {
      .gallery-slider-card {
        flex: 0 0 310px;
        width: 310px;
        scroll-snap-align: start;
      }
      .gallery-card-img-wrap {
        height: 210px;
      }
    }
    @media (min-width: 1024px) {
      .gallery-slider-track {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 20px;
        overflow-x: visible;
        padding-bottom: 0;
      }
      .gallery-slider-card {
        flex: 1 1 auto;
        width: auto;
        max-width: 100%;
      }
      .gallery-card-img-wrap {
        height: 180px;
      }
    }

    /* Minimalist Elevation & Card Tokens */
    .minimal-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 1rem;
      transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .minimal-card:hover {
      border-color: #cbd5e1;
      box-shadow: 0 10px 30px -10px rgba(15, 32, 56, 0.08);
      transform: translateY(-2px);
    }

    .minimal-input {
      border: 1px solid #cbd5e1;
      border-radius: 0.75rem;
      background-color: #ffffff;
      transition: all 0.2s ease;
    }

    .minimal-input:focus {
      outline: none;
      border-color: var(--brand-orange);
      box-shadow: 0 0 0 3px rgba(255, 107, 0, 0.15);
    }

    /* Subtle pulse indicator */
    .live-pulse {
      position: relative;
    }
    .live-pulse::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      border-radius: 9999px;
      background-color: inherit;
      animation: live-ping 1.8s cubic-bezier(0, 0, 0.2, 1) infinite;
      opacity: 0.75;
    }

    @keyframes live-ping {
      75%, 100% {
        transform: scale(2);
        opacity: 0;
      }
    }

    .pulse-ring-cta {
      box-shadow: 0 4px 14px rgba(255, 107, 0, 0.35);
      transition: all 0.2s ease;
    }
    .pulse-ring-cta:hover {
      box-shadow: 0 6px 20px rgba(255, 107, 0, 0.45);
      transform: translateY(-1px);
    }

    /* Exact Signature Vibrant Orange Button (Matches Provided Design) */
    .btn-call-orange {
      background-color: #FF6B00 !important;
      color: #FFFFFF !important;
      box-shadow: 0 8px 24px -4px rgba(255, 107, 0, 0.45), 0 3px 8px -2px rgba(255, 107, 0, 0.25) !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
      border: none !important;
      font-weight: 800 !important;
      letter-spacing: -0.01em;
    }
    .btn-call-orange:hover {
      background-color: #E85D00 !important;
      color: #FFFFFF !important;
      box-shadow: 0 12px 28px -2px rgba(255, 107, 0, 0.55), 0 4px 12px -2px rgba(255, 107, 0, 0.35) !important;
      transform: translateY(-1.5px) !important;
    }
    .btn-call-orange:active {
      transform: scale(0.98) !important;
    }

    /* Solid Conversion Header (100% Opaque, Crisp Border, Distinct Shadow) */
    .solid-ppc-header {
      background-color: #FFFFFF !important;
      border-bottom: 1px solid #CBD5E1 !important;
      box-shadow: 0 4px 20px -2px rgba(15, 32, 56, 0.08), 0 2px 6px -1px rgba(15, 32, 56, 0.04) !important;
      backdrop-filter: none !important;
      -webkit-backdrop-filter: none !important;
    }

    /* Exact Book Diagnostic Orange Pill Button (Matches User Screenshot 1) */
    .btn-book-diagnostic-header {
      background-color: #FF6B00 !important;
      color: #FFFFFF !important;
      border-radius: 9999px !important;
      font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, sans-serif !important;
      font-weight: 800 !important;
      text-transform: uppercase !important;
      letter-spacing: 0.02em !important;
      box-shadow: 0 8px 22px -2px rgba(255, 107, 0, 0.45), 0 3px 8px -2px rgba(255, 107, 0, 0.25) !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
      border: none !important;
      align-items: center;
      gap: 0.5rem;
      display: none !important;
    }
    @media (min-width: 768px) {
      .btn-book-diagnostic-header {
        display: inline-flex !important;
      }
    }
    .btn-book-diagnostic-header:hover {
      background-color: #E85D00 !important;
      color: #FFFFFF !important;
      box-shadow: 0 12px 28px -2px rgba(255, 107, 0, 0.55), 0 4px 12px -2px rgba(255, 107, 0, 0.35) !important;
      transform: translateY(-1.5px) !important;
    }
    .btn-book-diagnostic-header:active {
      transform: scale(0.98) !important;
    }

    /* Header Phone CTA Navy Pill */
    .btn-header-phone {
      background-color: #0F2038 !important;
      color: #FFFFFF !important;
      border-radius: 9999px !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
      box-shadow: 0 4px 12px rgba(15, 32, 56, 0.25) !important;
    }
    .btn-header-phone:hover {
      background-color: #0A1626 !important;
      color: #FFFFFF !important;
      transform: translateY(-1px) !important;
    }

    /* Header WhatsApp Button */
    .btn-header-whatsapp {
      background-color: #00A884 !important;
      color: #FFFFFF !important;
      border-radius: 1rem !important;
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
      box-shadow: 0 4px 12px rgba(0, 168, 132, 0.25) !important;
    }
    .btn-header-whatsapp:hover {
      background-color: #008f6f !important;
      color: #FFFFFF !important;
      transform: translateY(-1px) !important;
    }

    /* Custom FAQ Details Reset */
    details summary::-webkit-details-marker {
      display: none;
    }

    /* Infinite Marquee Animation (Matches Screenshot 2) */
    @keyframes marquee {
      0% {
        transform: translateX(0%);
      }
      100% {
        transform: translateX(-50%);
      }
    }

    .animate-marquee {
      display: flex;
      width: max-content;
      animation: marquee 30s linear infinite;
    }

    .animate-marquee:hover {
      animation-play-state: paused;
    }
  </style>
</head>

<body class="antialiased text-slate-800">

  <!-- TOP DISPATCH STATUS BAR (MINIMALIST LIVE TICKER) -->
  <div class="bg-slate-900 text-white text-xs py-1.5 px-4 border-b border-slate-800">
    <div class="max-w-6xl mx-auto flex flex-wrap justify-between items-center gap-2">
      <div class="flex items-center gap-2">
        <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 live-pulse"></span>
        <span class="text-slate-300 font-medium text-[11px] sm:text-xs">
          Priority Same-Day Dispatch in <strong class="text-white font-semibold"><?php echo htmlspecialchars($city_name); ?></strong> &amp; GTA — Zero Shop Drop-Off
        </span>
      </div>
      <div class="hidden sm:flex items-center gap-3 text-xs text-slate-300">
        <span class="text-slate-400 font-normal">Standby Dispatch:</span>
        <a href="tel:9057178905" onclick="trackGtmCall('topbar');" class="text-amber-400 hover:text-white font-bold transition-colors">
          (905) 717-8905
        </a>
      </div>
    </div>
  </div>

  <!-- MINIMALIST CONVERSION HEADER (SOLID, GROUNDED & SPACIOUS) -->
  <header class="sticky top-0 z-50 solid-ppc-header">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 h-16 sm:h-20 flex justify-between items-center gap-3">

      <!-- Logo & City Tag -->
      <div class="flex items-center gap-3">
        <a href="#" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;" class="flex items-center" aria-label="Appliance Repair Knights">
          <picture>
            <source srcset="../img/logo.webp" type="image/webp">
            <img src="../img/logo-opt.png" alt="Appliance Repair Knights" width="220" height="64"
              class="h-11 sm:h-16 w-auto object-contain" fetchpriority="high">
          </picture>
        </a>
        <div class="hidden lg:flex items-center gap-1.5 pl-3 border-l border-slate-200 text-xs text-slate-500 font-medium">
          <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
          <span><?php echo htmlspecialchars($city_name); ?> Direct Unit</span>
        </div>
      </div>

      <!-- Header CTAs (Matches Screenshot 1 on Mobile & Desktop) -->
      <div class="flex items-center gap-2 sm:gap-3">
        
        <!-- Direct Phone CTA (Dark Navy Pill - Exact Match to Screenshot 1) -->
        <a href="tel:9057178905" onclick="trackGtmCall('header');"
          class="gtm-ppc-call gtm-ppc-call-header btn-header-phone text-white font-black px-4 py-2.5 sm:px-6 sm:py-2.5 rounded-full text-xs sm:text-base transition-all flex items-center gap-1.5 sm:gap-2 shadow-md">
          <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white fill-current flex-shrink-0" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
          </svg>
          <span class="tracking-tight font-extrabold whitespace-nowrap">905-717-8905</span>
        </a>

        <!-- WhatsApp Header CTA (Exact Green Button from Screenshot 1) -->
        <a id="whatsapp-header-btn"
          href="https://wa.me/19057178905?text=Hi%2C%20I%20need%20same-day%20coffee%20machine%20repair%20in%20<?php echo urlencode($city_name); ?>"
          onclick="trackGtmWhatsApp('header');" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"
          class="gtm-ppc-whatsapp-header btn-header-whatsapp flex text-white p-2.5 sm:p-2.5 rounded-2xl text-xs font-extrabold items-center justify-center shadow-md transition-all flex-shrink-0">
          <svg class="w-5 h-5 fill-current flex-shrink-0" viewBox="0 0 24 24">
            <path
              d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
          </svg>
        </a>

        <!-- Fast Booking CTA (Exact Match to User Screenshot 1) -->
        <a href="#book-form"
          class="btn-book-diagnostic-header hidden md:inline-flex px-5 py-2.5 lg:px-6 lg:py-2.5 text-xs sm:text-sm">
          <span>BOOK DIAGNOSTIC</span>
          <svg class="w-4 h-4 text-white flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <line x1="4" y1="12" x2="20" y2="12"></line>
            <polyline points="14 6 20 12 14 18"></polyline>
          </svg>
        </a>

      </div>

    </div>
  </header>

  <!-- HERO SECTION (MINIMALIST 2-COLUMN WITH AIRY WHITESPACE) -->
  <section class="relative bg-gradient-to-b from-slate-50 via-white to-slate-50 border-b border-slate-200/70 pt-5 pb-8 sm:py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
      <style>
        @media (min-width: 1024px) {
          .hero-grid-force { display: grid !important; grid-template-columns: repeat(2, minmax(0, 1fr)) !important; gap: 3rem !important; }
          .hero-text-col { order: 1 !important; }
          .hero-form-col { order: 2 !important; }
        }
      </style>
      <div class="hero-grid-force flex flex-col gap-5 sm:gap-6 items-start">
        
        <!-- Left Column (Swapped to Right on Desktop): Clear Value Proposition -->
        <div id="text-col" class="hero-text-col w-full space-y-4 sm:space-y-5 text-left pt-1 sm:pt-2">
          
          <!-- Dual Micro-Pills (High-Impact Mobile Trust & Local Availability) -->
          <div class="flex flex-wrap items-center gap-2 pt-0.5">
            <!-- Pill 1: Google Rating Social Proof -->
            <div aria-label="Read our Google Reviews" class="inline-flex items-center gap-1.5 bg-white border border-slate-200/90 shadow-2xs px-3 py-1.5 rounded-full text-[11px] sm:text-xs font-semibold text-slate-700 transition-all">
              <span class="inline-flex text-amber-500 font-extrabold items-center gap-1">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <span>★ <?php echo htmlspecialchars($gmb_rating); ?></span>
              </span>
              <span class="text-slate-600 font-medium"><?php echo htmlspecialchars($gmb_reviews); ?> Google Reviews</span>
            </div>

            <!-- Pill 2: 100% On-Site Mobile Service + Local Zone -->
            <div class="inline-flex items-center gap-1.5 bg-emerald-50/90 border border-emerald-200/90 shadow-2xs px-3 py-1.5 rounded-full text-[11px] sm:text-xs font-bold text-emerald-900">
              <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse shrink-0" aria-hidden="true"></span>
              <span>100% On-Site Mobile Service</span>
              <span class="text-emerald-400 font-normal shrink-0" aria-hidden="true">•</span>
              <span class="text-emerald-700 font-extrabold"><?php echo htmlspecialchars($city_name); ?></span>
            </div>
          </div>

          <!-- Main Conversion Headline -->
          <h1 class="text-[28px] leading-[1.1] sm:text-4xl lg:text-5xl font-heading font-black text-slate-900 tracking-tight">
            Same-Day <?php echo $brand_param ? htmlspecialchars(ucwords($brand_param)) . ' ' : ''; ?><?php echo $type_param === 'commercial' ? 'Commercial Coffee' : ($type_param === 'residential' ? 'Espresso' : 'Coffee &amp; Espresso Machine'); ?> Repair in <?php echo htmlspecialchars($city_name); ?>, <span class="text-brandOrange">Fixed On-Site</span>
          </h1>

          <!-- Concise Mechanism Subhead -->
          <p class="text-slate-700 text-sm sm:text-base leading-relaxed max-w-xl">
            Don't haul heavy <?php echo $type_param === 'commercial' ? 'commercial brewers' : 'built-in cabinetry machines'; ?> to a repair depot. <strong class="text-slate-900 font-bold">Our certified technicians travel directly to your <?php echo $type_param === 'commercial' ? 'office or restaurant' : 'home'; ?></strong>. Same-day diagnostics and genuine OEM parts.
          </p>
          
          <div class="flex items-start sm:items-center gap-2 mt-2 bg-slate-50 border border-slate-200 p-2.5 rounded-lg max-w-xl">
            <svg class="w-5 h-5 text-brandOrange flex-shrink-0 mt-0.5 sm:mt-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            <span class="text-[11px] sm:text-[13px] font-bold text-slate-800 leading-tight">Factory-Trained Technicians • Comprehensive Written Warranty on Parts &amp; Labour</span>
          </div>

          <!-- Symptom Recognition (Pain Agitation) -->
          <div class="pt-1 pb-1 hidden sm:block">
            <div class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-3">We Specialize In Fixing:</div>
            <div class="flex flex-wrap gap-2 sm:gap-2.5">
              <span class="inline-flex items-center gap-1.5 bg-slate-50 text-slate-700 text-[11px] sm:text-xs font-semibold px-3 py-1.5 rounded-lg border border-slate-200 shadow-sm">
                <svg class="w-3.5 h-3.5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 2.25c-5.385 6.465-7.5 10.133-7.5 13.5a7.5 7.5 0 0015 0c0-3.367-2.115-7.035-7.5-13.5z"></path></svg>
                Leaking Base / Group Head
              </span>
              <span class="inline-flex items-center gap-1.5 bg-slate-50 text-slate-700 text-[11px] sm:text-xs font-semibold px-3 py-1.5 rounded-lg border border-slate-200 shadow-sm">
                <svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Power Failure / Error Codes
              </span>
              <span class="inline-flex items-center gap-1.5 bg-slate-50 text-slate-700 text-[11px] sm:text-xs font-semibold px-3 py-1.5 rounded-lg border border-slate-200 shadow-sm">
                <svg class="w-3.5 h-3.5 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Low Pressure / Weak Extraction
              </span>
              <span class="inline-flex items-center gap-1.5 bg-slate-50 text-slate-700 text-[11px] sm:text-xs font-semibold px-3 py-1.5 rounded-lg border border-slate-200 shadow-sm">
                <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                Grinder Jammed
              </span>
            </div>
          </div>

          <!-- Hero Visual (desktop only, keeps form above the fold on mobile) -->
          <div class="hidden lg:block relative rounded-2xl overflow-hidden border border-slate-200/90 shadow-md h-56">
            <picture>
              <source media="(min-width: 1024px)" srcset="../img/coffee-machine-repair-service.webp">
              <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Technician repairing an espresso machine in <?php echo htmlspecialchars($city_name); ?>" class="w-full h-full object-cover" width="720" height="224">
            </picture>
            <div class="absolute bottom-3 left-3 right-3 flex flex-wrap gap-2">
              <span class="bg-white/95 text-slate-900 text-[11px] font-bold px-2.5 py-1 rounded-full shadow-sm">✓ 100% On-Site Service (No Drop-Off)</span>
              <span class="bg-white/95 text-slate-900 text-[11px] font-bold px-2.5 py-1 rounded-full shadow-sm">✓ Diagnostic fee waived with repair</span>
              <span class="bg-white/95 text-slate-900 text-[11px] font-bold px-2.5 py-1 rounded-full shadow-sm">✓ Genuine OEM parts &amp; warranty</span>
            </div>
          </div>



        </div>

        <!-- Right Column (Swapped to Left on Desktop): Primary Conversion Module -->
        <div class="hero-form-col w-full" id="book-form">
          <!-- UNIFIED MINIMALIST CARD (CALL-FIRST FOCUS) -->
          <div class="bg-white rounded-2xl p-6 sm:p-7 shadow-xl border border-slate-200/90 relative">
            
            <!-- Dispatch Status Header -->
            <div class="flex items-center justify-between mb-5 pb-4 border-b border-slate-100">
              <div class="flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse"></span>
                <span class="text-[11px] font-bold uppercase tracking-wider text-emerald-700">Priority <?php echo htmlspecialchars($city_name); ?> On-Site Dispatch</span>
              </div>
              <span class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full">Booking <?php echo $booking_day; ?></span>
            </div>

            <!-- PRIMARY CTA: FAST DISPATCH CALL BLOCK -->
            <div class="text-center mb-6">
              <div class="inline-block bg-rose-50 text-rose-600 border border-rose-200 text-[10px] font-black uppercase tracking-widest py-1 px-3 rounded-full mb-3">
                Fastest Response
              </div>
              
              <h2 class="font-heading font-extrabold text-xl sm:text-2xl text-slate-900 leading-tight mb-2">
                Need On-Site Dispatch Right Now?
              </h2>
              <p class="text-slate-500 text-xs mb-4 px-2">
                Skip the depot lines. Speak directly with a local <?php echo htmlspecialchars($city_name); ?> technician for prompt on-site appointment scheduling.
              </p>
              
              <a href="tel:9057178905" onclick="trackGtmCall('hero_primary');"
                 class="gtm-ppc-call w-full btn-call-orange text-white font-black py-3.5 sm:py-4 px-6 rounded-2xl text-lg sm:text-xl shadow-xl transition-all flex items-center justify-center gap-3 cursor-pointer hover:scale-[1.02]">
                <svg class="w-5 h-5 sm:w-6 sm:h-6 fill-current animate-pulse text-white" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
                <span>905-717-8905</span>
              </a>
              <div class="mt-3 text-[10px] sm:text-[11px] text-slate-400 font-medium">
                <span class="text-emerald-500 font-bold">Fast Local Connection</span>
              </div>
            </div>

            <!-- SECONDARY FALLBACK: THE FORM -->
            <div class="flex items-center justify-center mb-5">
              <div class="h-px bg-slate-200 flex-1"></div>
              <span class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest bg-white z-10">Or Request On-Site Callback</span>
              <div class="h-px bg-slate-200 flex-1"></div>
            </div>

            <form id="ppc-coffee-lead-form" class="space-y-3.5" onsubmit="event.preventDefault(); handlePpcCoffeeSubmit(this);">
              <input type="hidden" name="form_type" value="ppc_coffee_lead">
              <input type="hidden" name="page" value="coffee-machine-repair-<?php echo htmlspecialchars($city_slug); ?>">
              
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                  <label for="lead-name" class="block text-[11px] font-bold uppercase tracking-wider text-slate-600 mb-1">Your Name / Contact *</label>
                  <input type="text" id="lead-name" name="name" required autocomplete="name" placeholder="e.g. Michael Smith"
                    class="minimal-input w-full px-3.5 py-2.5 text-slate-900 text-sm">
                </div>
                <div>
                  <label for="lead-phone" class="block text-[11px] font-bold uppercase tracking-wider text-slate-600 mb-1">Phone Number *</label>
                  <input type="tel" id="lead-phone" name="phone" required autocomplete="tel" inputmode="tel" placeholder="(416) 555-0123"
                    class="minimal-input w-full px-3.5 py-2.5 text-slate-900 text-sm">
                </div>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                  <label for="lead-city" class="block text-[11px] font-bold uppercase tracking-wider text-slate-600 mb-1">Service Location *</label>
                  <select id="lead-city" name="city" required
                    class="minimal-input w-full px-3 py-2.5 text-slate-900 text-sm bg-white font-medium">
                    <option value="Toronto" <?php echo $city_slug === 'toronto' ? 'selected' : ''; ?>>Toronto (Downtown &amp; GTA)</option>
                    <option value="Mississauga" <?php echo $city_slug === 'mississauga' ? 'selected' : ''; ?>>Mississauga</option>
                    <option value="Brampton" <?php echo $city_slug === 'brampton' ? 'selected' : ''; ?>>Brampton</option>
                    <option value="Vaughan" <?php echo $city_slug === 'vaughan' ? 'selected' : ''; ?>>Vaughan / Concord</option>
                    <option value="Markham" <?php echo $city_slug === 'markham' ? 'selected' : ''; ?>>Markham</option>
                    <option value="Richmond Hill" <?php echo $city_slug === 'richmond-hill' ? 'selected' : ''; ?>>Richmond Hill</option>
                    <option value="Oakville" <?php echo $city_slug === 'oakville' ? 'selected' : ''; ?>>Oakville</option>
                    <option value="Burlington" <?php echo $city_slug === 'burlington' ? 'selected' : ''; ?>>Burlington</option>
                    <option value="Etobicoke" <?php echo $city_slug === 'etobicoke' ? 'selected' : ''; ?>>Etobicoke</option>
                    <option value="North York" <?php echo $city_slug === 'north-york' ? 'selected' : ''; ?>>North York</option>
                    <option value="Scarborough" <?php echo $city_slug === 'scarborough' ? 'selected' : ''; ?>>Scarborough</option>
                    <option value="Hamilton" <?php echo $city_slug === 'hamilton' ? 'selected' : ''; ?>>Hamilton</option>
                    <option value="Kitchener" <?php echo $city_slug === 'kitchener' ? 'selected' : ''; ?>>Kitchener-Waterloo</option>
                    <option value="Oshawa" <?php echo $city_slug === 'oshawa' ? 'selected' : ''; ?>>Oshawa / Durham</option>
                  </select>
                </div>
                <div>
                  <label for="lead-appliance" class="block text-[11px] font-bold uppercase tracking-wider text-slate-600 mb-1">Machine &amp; Location Type *</label>
                  <select id="lead-appliance" name="appliance"
                    class="minimal-input w-full px-3 py-2.5 text-slate-900 text-sm bg-white font-medium">
                    <option value="Commercial Office Coffee System" <?php echo $type_param === 'commercial' ? 'selected' : ''; ?>>Office / Commercial Breakroom System</option>
                    <option value="Commercial Batch Brewer">Commercial Batch Brewer (Bunn, Curtis, Bravilor)</option>
                    <option value="Luxury Built-In Cabinet System" <?php echo $type_param === 'residential' ? 'selected' : ''; ?>>Built-In Cabinet System (Miele, Jura, Gaggenau)</option>
                    <option value="Prosumer Countertop Espresso" <?php echo $type_param === '' ? 'selected' : ''; ?>>Countertop Espresso (Breville, De'Longhi, Rocket)</option>
                    <option value="Cafe or Restaurant Espresso">Cafe / Restaurant Espresso Station</option>
                    <option value="Other Premium Coffee System">Other / Not Sure</option>
                  </select>
                </div>
              </div>

              <!-- DE-PRIORITIZED FORM SUBMIT BUTTON -->
              <button type="submit" id="ppc-submit-btn"
                class="gtm-ppc-btn-submit w-full bg-slate-100 hover:bg-slate-200 text-slate-700 border border-slate-300 font-bold py-3.5 px-6 rounded-2xl text-sm shadow-sm transition-all flex items-center justify-center gap-2 uppercase tracking-wider cursor-pointer mt-3 active:scale-98">
                <span>Request On-Site Call Back &rarr;</span>
              </button>
              
              <div id="form-msg" class="hidden text-xs text-center p-3 rounded-xl mt-2 font-medium"></div>
              
              <div class="mt-3 flex flex-col items-center justify-center gap-1.5">
                <p class="text-[11px] text-slate-500 font-medium flex items-center gap-1.5">
                  <svg class="w-3 h-3 text-slate-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                  <span>Your information is 100% secure. No hidden charges.</span>
                </p>
                <p class="text-[11px] text-emerald-600 font-bold flex items-center gap-1.5">
                  <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Diagnostic fee is waived when you proceed with repair.</span>
                </p>
              </div>
            </form>

          </div>
        </div>

      </div>

      <!-- INTEGRATED TRUST PILLARS BAR (EXACT MATCH TO USER SCREENSHOT 2) -->
      <div class="mt-8 pt-4 sm:pt-6 border-t border-slate-200/80">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-2.5 sm:gap-3.5 md:gap-4">

          <!-- Pillar 1: 100% On-Site Mobile Service -->
          <div class="group flex items-center gap-2.5 sm:gap-3 py-2.5 sm:py-3 px-3 sm:px-3.5 rounded-xl sm:rounded-2xl bg-white border border-slate-200/90 shadow-2xs hover:border-brandOrange/40 hover:shadow-md transition-all h-full">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-orange-50 border border-orange-100/80 text-brandOrange flex-shrink-0 flex items-center justify-center transition-colors duration-200">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
            </div>
            <div class="min-w-0 text-left">
              <span class="block text-xs sm:text-sm font-extrabold text-slate-900 leading-tight group-hover:text-brandBlue transition-colors">100% On-Site Service</span>
              <span class="block text-[10px] text-slate-500 font-medium truncate">We Visit Your Location</span>
            </div>
          </div>

          <!-- Pillar 2: Priority Same-Day Dispatch -->
          <div class="group flex items-center gap-2.5 sm:gap-3 py-2.5 sm:py-3 px-3 sm:px-3.5 rounded-xl sm:rounded-2xl bg-white border border-slate-200/90 shadow-2xs hover:border-brandOrange/40 hover:shadow-md transition-all h-full">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-orange-50 border border-orange-100/80 text-brandOrange flex-shrink-0 flex items-center justify-center transition-colors duration-200">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="9"></circle>
                <polyline points="12 7 12 12 15 15"></polyline>
              </svg>
            </div>
            <div class="min-w-0 text-left">
              <span class="block text-xs sm:text-sm font-extrabold text-slate-900 leading-tight group-hover:text-brandBlue transition-colors">Same-Day Dispatch</span>
              <span class="block text-[10px] text-slate-500 font-medium truncate"><?php echo htmlspecialchars($city_name); ?> &amp; GTA Wide</span>
            </div>
          </div>

          <!-- Pillar 3: All Major Brands -->
          <div class="group flex items-center gap-2.5 sm:gap-3 py-2.5 sm:py-3 px-3 sm:px-3.5 rounded-xl sm:rounded-2xl bg-white border border-slate-200/90 shadow-2xs hover:border-brandOrange/40 hover:shadow-md transition-all h-full">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-orange-50 border border-orange-100/80 text-brandOrange flex-shrink-0 flex items-center justify-center transition-colors duration-200">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
              </svg>
            </div>
            <div class="min-w-0 text-left">
              <span class="block text-xs sm:text-sm font-extrabold text-slate-900 leading-tight group-hover:text-brandBlue transition-colors">OEM Factory Parts</span>
              <span class="block text-[10px] text-slate-500 font-medium truncate">Office &amp; Luxury Units</span>
            </div>
          </div>

          <!-- Pillar 4: Affordable Rates -->
          <div class="group flex items-center gap-2.5 sm:gap-3 py-2.5 sm:py-3 px-3 sm:px-3.5 rounded-xl sm:rounded-2xl bg-white border border-slate-200/90 shadow-2xs hover:border-brandOrange/40 hover:shadow-md transition-all h-full">
            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-orange-50 border border-orange-100/80 text-brandOrange flex-shrink-0 flex items-center justify-center transition-colors duration-200">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <div class="min-w-0 text-left">
              <span class="block text-xs sm:text-sm font-extrabold text-slate-900 leading-tight group-hover:text-brandBlue transition-colors">Fee Waived w/ Repair</span>
              <span class="block text-[10px] text-slate-500 font-medium truncate">Zero Hidden Charges</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: INFINITE MARQUEE BRAND SLIDER (100% COFFEE & ESPRESSO BRANDS) -->
  <section class="py-12 bg-white border-b border-slate-200 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 mb-8 text-center">
      <div
        class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 font-extrabold text-[11px] uppercase tracking-wider px-3.5 py-1.5 rounded-full mb-2.5 border border-blue-200">
        <svg class="w-3.5 h-3.5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
        <span>ALL MAJOR COFFEE &amp; ESPRESSO BRANDS SERVICED WITH OEM PARTS</span>
      </div>
      <h2 class="text-xl sm:text-2xl font-heading font-black text-brandDarkBlue tracking-tight mb-2">We Service Your Brand With Genuine Parts</h2>
      <p class="text-slate-700 text-xs sm:text-sm max-w-xl mx-auto mb-4 leading-relaxed font-medium">
        Jura, Breville, De'Longhi, Miele, Bunn, Franke, La Marzocco, and more — our certified technicians carry original factory parts for same-day repairs across <?php echo htmlspecialchars($city_name); ?> &amp; the GTA.
      </p>
      <div class="w-20 h-1 bg-brandOrange mx-auto rounded-full"></div>
    </div>

    <!-- Infinite Brand Scroller with Authentic Coffee Brand Colors & Edge Fade -->
    <div class="relative w-full overflow-hidden flex items-center py-2 mb-8">
      <!-- Edge Fades for Seamless Infinite Flow -->
      <div class="absolute left-0 top-0 bottom-0 w-12 sm:w-24 bg-gradient-to-r from-white via-white/80 to-transparent z-10 pointer-events-none"></div>
      <div class="absolute right-0 top-0 bottom-0 w-12 sm:w-24 bg-gradient-to-l from-white via-white/80 to-transparent z-10 pointer-events-none"></div>

      <div class="animate-marquee flex items-center gap-3 sm:gap-4 py-2">

        <?php 
        // Output brands twice for seamless continuous infinite loop
        for ($i = 0; $i < 2; $i++) {
            foreach ($coffee_brands as $brand) { 
        ?>
        <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-full sm:rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
          <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: <?php echo $brand['color']; ?>;"></span>
          <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: <?php echo $brand['color']; ?>;"><?php echo $brand['name']; ?></span>
        </div>
        <?php 
            }
        } 
        ?>

      </div>
    </div>

    <!-- Bottom Callout Pill (100% Coffee & Espresso Focused) -->
    <div class="text-center px-4 mt-3">
      <div
        class="inline-flex items-center gap-2 bg-slate-100 px-4 py-2 rounded-full border border-slate-200 text-xs text-slate-700 font-medium">
        <span class="text-brandOrange font-bold">Fast Local Dispatch:</span>
        <span>Our mobile vans carry certified factory replacement parts for commercial office brewers and luxury residential espresso models across <?php echo htmlspecialchars($city_name); ?> &amp; GTA.</span>
      </div>
    </div>
  </section>

  <!-- 2 PILLARS OF SERVICE (MINIMALIST 2-COLUMN BENTO) -->
  <section class="py-12 sm:py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4">
      
      <div class="max-w-2xl mx-auto text-center mb-10">
        <div class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-brandOrange mb-1">
          Precision Engineering
        </div>
        <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-900 tracking-tight">
          Specialized for Commercial Office &amp; Luxury Built-In Systems in <?php echo htmlspecialchars($city_name); ?>
        </h2>
        <p class="text-slate-500 text-xs sm:text-sm mt-2">
          From high-volume morning workplace brewing to delicate built-in cabinetry espresso units, our mobile technicians carry specialized pressure gauges, digital ohmmeters, and food-grade components.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- Pillar 1: Commercial & Office -->
        <div class="minimal-card overflow-hidden flex flex-col justify-between">
          <div>
            <div class="relative h-52 sm:h-60 overflow-hidden bg-slate-900">
              <img src="../img/commercial-coffee-machine.webp" 
                   alt="Commercial Office Coffee Machine Repair Toronto &amp; GTA" 
                   class="w-full h-full object-cover opacity-90 hover:scale-103 transition-transform duration-500"
                   loading="lazy">
              <div class="absolute top-3 left-3 bg-slate-900 text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md border border-slate-700">
                Commercial &amp; Workplace
              </div>
            </div>

            <div class="p-6">
              <h3 class="font-heading font-black text-lg sm:text-xl text-slate-900 mb-2">
                Commercial Office &amp; Workplace Coffee Systems
              </h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                Avoid sudden morning coffee downtime in your office. We provide emergency breakdown diagnostics, sanitary descaling, solenoid rebuilds, and rotary pump replacements for corporate breakrooms, medical clinics, and cafes.
              </p>

              <ul class="space-y-2 text-xs text-slate-700">
                <li class="flex items-start gap-2">
                  <span class="text-emerald-600 font-bold">✔</span>
                  <span><strong>High-Capacity Batch Brewers:</strong> Bunn, Bravilor Bonamat, Curtis, Grindmaster.</span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="text-emerald-600 font-bold">✔</span>
                  <span><strong>Corporate Bean-to-Cup Units:</strong> Franke, Schaerer, Saeco Professional, Mastrena.</span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="text-emerald-600 font-bold">✔</span>
                  <span><strong>Zero Workflow Interruption:</strong> Priority same-day emergency dispatch across <?php echo htmlspecialchars($city_name); ?>.</span>
                </li>
              </ul>
            </div>
          </div>

          <div class="p-6 pt-0">
            <a href="tel:9057178905" onclick="trackGtmCall('service_commercial');" class="inline-flex items-center justify-center gap-2 w-full bg-brandOrange hover:bg-brandOrangeHover text-white text-[11px] sm:text-xs font-bold uppercase tracking-wider px-5 py-3.5 rounded-xl shadow-md transition-all hover:-translate-y-0.5 active:translate-y-0">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
              </svg>
              <span>Call For Commercial Service</span>
            </a>
          </div>
        </div>

        <!-- Pillar 2: Luxury Residential Built-In -->
        <div class="minimal-card overflow-hidden flex flex-col justify-between">
          <div>
            <div class="relative h-52 sm:h-60 overflow-hidden bg-slate-900">
              <img src="../img/residential-coffee-machine.webp" 
                   alt="Residential Built-In Coffee Machine Repair Toronto &amp; GTA" 
                   class="w-full h-full object-cover opacity-90 hover:scale-103 transition-transform duration-500"
                   loading="lazy">
              <div class="absolute top-3 left-3 bg-slate-900 text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md border border-slate-700">
                Residential &amp; Home
              </div>
            </div>

            <div class="p-6">
              <h3 class="font-heading font-black text-lg sm:text-xl text-slate-900 mb-2">
                Residential &amp; Home Espresso Machines
              </h3>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-4">
                Integrated cabinetry espresso machines require specialized handling to protect surrounding custom millwork. Our technicians conduct precision electronic calibrations and pressure adjustments on luxury units.
              </p>

              <ul class="space-y-2 text-xs text-slate-700">
                <li class="flex items-start gap-2">
                  <span class="text-emerald-600 font-bold">✔</span>
                  <span><strong>Integrated Cabinetry Units:</strong> Miele, Jura, Gaggenau, Thermador, Bosch.</span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="text-emerald-600 font-bold">✔</span>
                  <span><strong>Prosumer Dual Boilers:</strong> Breville Dual Boiler/Oracle, De'Longhi Specialista, Rocket.</span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="text-emerald-600 font-bold">✔</span>
                  <span><strong>Protected Installation:</strong> Scratch-free cabinetry extraction and food-safe seals.</span>
                </li>
              </ul>
            </div>
          </div>

          <div class="p-6 pt-0">
            <a href="tel:9057178905" onclick="trackGtmCall('service_luxury');" class="inline-flex items-center justify-center gap-2 w-full bg-brandOrange hover:bg-brandOrangeHover text-white text-[11px] sm:text-xs font-bold uppercase tracking-wider px-5 py-3.5 rounded-xl shadow-md transition-all hover:-translate-y-0.5 active:translate-y-0">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
              </svg>
              <span>Call For Residential Service</span>
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ON-SITE VS DROP-OFF DEPOT COMPARISON SECTION (PROVEN CRO VALUE PROP) -->
  <section class="py-12 sm:py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-5xl mx-auto px-4">

      <div class="max-w-2xl mx-auto text-center mb-10">
        <div class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-brandOrange mb-1">
          The Mobile Advantage
        </div>
        <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-900 tracking-tight">
          Why On-Site Repair Beats Driving to a Drop-Off Depot
        </h2>
        <p class="text-slate-500 text-xs sm:text-sm mt-2">
          Most repair shops require you to disconnect, lift, and transport heavy 20–30kg machines across town, then wait weeks. We eliminate the entire hassle.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card 1: Traditional Retail Drop-Off Shop -->
        <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/90 shadow-2xs flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
              <span class="text-xs font-black uppercase tracking-wider text-rose-600 bg-rose-50 px-3 py-1 rounded-full">
                Traditional Drop-Off Depots
              </span>
              <span class="text-slate-400 text-xs font-medium">Standard Model</span>
            </div>

            <ul class="space-y-3.5 text-xs sm:text-sm text-slate-600">
              <li class="flex items-start gap-2.5">
                <span class="w-5 h-5 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✕</span>
                <span><strong>Heavy Lifting Required:</strong> You have to disconnect plumbing, unmount built-in millwork, and haul a 30kg machine to your car.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="w-5 h-5 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✕</span>
                <span><strong>Prolonged Downtime:</strong> Wait in long queue lines at the repair shop while your staff or household goes without coffee.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="w-5 h-5 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✕</span>
                <span><strong>Risk of Transport Damage:</strong> Carrying sensitive internal boilers and copper tubing risks further leaks and cosmetic scratches.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="w-5 h-5 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✕</span>
                <span><strong>Non-Refundable Bench Fees:</strong> Mandatory upfront intake fees regardless of whether you proceed with the repair.</span>
              </li>
            </ul>
          </div>

          <div class="pt-6 mt-6 border-t border-slate-100 text-center">
            <span class="text-xs text-slate-400 font-medium">Results in lost hours, transport stress &amp; prolonged downtime</span>
          </div>
        </div>

        <!-- Card 2: Appliance Repair Knights On-Site Service -->
        <div class="bg-white rounded-2xl p-6 sm:p-7 border-2 border-brandOrange shadow-lg flex flex-col justify-between relative overflow-hidden">
          <div class="absolute top-0 right-0 bg-brandOrange text-white text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-bl-xl shadow-xs">
            RECOMMENDED
          </div>

          <div>
            <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
              <span class="text-xs font-black uppercase tracking-wider text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full">
                Appliance Repair Knights Mobile Unit
              </span>
            </div>

            <ul class="space-y-3.5 text-xs sm:text-sm text-slate-700">
              <li class="flex items-start gap-2.5">
                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                <span><strong>We Come Directly To You:</strong> Certified technician arrives at your office, clinic, or private residence with fully stocked mobile vans.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                <span><strong>Zero Heavy Lifting:</strong> The machine stays safely in place. Built-in cabinetry millwork and water supply lines remain protected.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                <span><strong>Prompt Same-Day Turnaround:</strong> On-site pressure diagnostics, descaling, valve rebuilds, and pump repairs executed on the spot.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                <span><strong>Diagnostic Fee Waived With Repair:</strong> Transparent written quotes before any work begins, with full parts &amp; labour warranty protection.</span>
              </li>
            </ul>
          </div>

          <div class="pt-6 mt-6 border-t border-slate-100">
            <a href="tel:9057178905" onclick="trackGtmCall('comparison_cta');"
               class="btn-call-orange text-white font-bold text-xs uppercase tracking-wider py-3.5 px-4 rounded-xl flex items-center justify-center gap-2 w-full shadow-md">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
              </svg>
              <span>Book On-Site Dispatch: 905-717-8905</span>
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- SECTION: RECENT ON-SITE REPAIRS GALLERY (100% PROOF OF MOBILE SERVICE) -->
  <section class="onsite-gallery-section py-12 sm:py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4">

      <div class="max-w-2xl mx-auto text-center mb-10">
        <div class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 border border-emerald-200 px-3 py-1 rounded-full mb-2">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          <span>100% Mobile Field Service</span>
        </div>
        <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-900 tracking-tight">
          Recent On-Site Repairs Across <?php echo htmlspecialchars($city_name); ?> &amp; the GTA
        </h2>
        <p class="text-slate-500 text-xs sm:text-sm mt-2">
          From corporate office breakrooms to custom residential kitchens, our certified technicians diagnose and repair espresso equipment right where it sits. No heavy lifting, no shop drop-off.
        </p>
      </div>

      <!-- Gallery Container: Responsive Mobile Snap Slider & Desktop 4-Card Grid -->
      <div id="onsite-gallery-track" class="gallery-slider-track no-scrollbar">

        <!-- Card 1: Commercial Office Breakroom -->
        <div class="minimal-card overflow-hidden group flex flex-col justify-between gallery-slider-card">
          <div>
            <div class="gallery-card-img-wrap">
              <img src="../img/coffee-repair-office.webp"
                   alt="Commercial office coffee machine repair on-site in Toronto &amp; GTA"
                   class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                   loading="lazy" width="900" height="675">
              <div class="absolute top-2.5 left-2.5 bg-slate-900/90 backdrop-blur-xs text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md border border-slate-700 shadow-xs">
                📍 Office Breakroom
              </div>
            </div>
            <div class="p-4">
              <h3 class="font-heading font-bold text-sm sm:text-base text-slate-900 mb-1.5">
                Corporate Workplace System
              </h3>
              <p class="text-slate-600 text-xs leading-relaxed">
                Dual-boiler commercial espresso system serviced on-site in a corporate lunchroom. Restored solenoid pressure and cleared mineral scaling with zero workplace disruption.
              </p>
            </div>
          </div>
          <div class="px-4 pb-4 pt-0">
            <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-md border border-emerald-100">
              ✓ On-site prompt service
            </span>
          </div>
        </div>

        <!-- Card 2: Luxury Built-in Kitchen Unit -->
        <div class="minimal-card overflow-hidden group flex flex-col justify-between gallery-slider-card">
          <div>
            <div class="gallery-card-img-wrap">
              <img src="../img/coffee-repair-builtin.webp"
                   alt="Built-in luxury coffee machine repair on sliding rails in private kitchen"
                   class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                   loading="lazy" width="900" height="675">
              <div class="absolute top-2.5 left-2.5 bg-slate-900/90 backdrop-blur-xs text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md border border-slate-700 shadow-xs">
                📍 Luxury Built-In Unit
              </div>
            </div>
            <div class="p-4">
              <h3 class="font-heading font-bold text-sm sm:text-base text-slate-900 mb-1.5">
                Integrated Cabinetry System
              </h3>
              <p class="text-slate-600 text-xs leading-relaxed">
                Sliding rail extraction and electronics service in a custom home kitchen. Countertop protected with rubber work mats to keep surrounding millwork in flawless condition.
              </p>
            </div>
          </div>
          <div class="px-4 pb-4 pt-0">
            <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-md border border-emerald-100">
              ✓ Protected cabinetry
            </span>
          </div>
        </div>

        <!-- Card 3: Precision Diagnostics & Solenoid Rebuild -->
        <div class="minimal-card overflow-hidden group flex flex-col justify-between gallery-slider-card">
          <div>
            <div class="gallery-card-img-wrap">
              <img src="../img/coffee-repair-diagnostics.webp"
                   alt="Precision multimeter diagnostics and solenoid valve testing inside espresso machine"
                   class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                   loading="lazy" width="900" height="675">
              <div class="absolute top-2.5 left-2.5 bg-slate-900/90 backdrop-blur-xs text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md border border-slate-700 shadow-xs">
                📍 Precision Diagnostics
              </div>
            </div>
            <div class="p-4">
              <h3 class="font-heading font-bold text-sm sm:text-base text-slate-900 mb-1.5">
                Internal Boiler &amp; Valve Testing
              </h3>
              <p class="text-slate-600 text-xs leading-relaxed">
                Digital multimeter testing of heating elements and 3-way solenoid valves. Replaced calcified valves and food-grade pressure seals right on the spot.
              </p>
            </div>
          </div>
          <div class="px-4 pb-4 pt-0">
            <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-md border border-emerald-100">
              ✓ Genuine OEM components
            </span>
          </div>
        </div>

        <!-- Card 4: Restored 9-Bar Extraction & Calibration -->
        <div class="minimal-card overflow-hidden group flex flex-col justify-between gallery-slider-card">
          <div>
            <div class="gallery-card-img-wrap">
              <img src="../img/coffee-repair-extraction.webp"
                   alt="Calibrated 9-bar espresso extraction with rich golden crema after on-site repair"
                   class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                   loading="lazy" width="900" height="675">
              <div class="absolute top-2.5 left-2.5 bg-slate-900/90 backdrop-blur-xs text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md border border-slate-700 shadow-xs">
                📍 Calibrated Extraction
              </div>
            </div>
            <div class="p-4">
              <h3 class="font-heading font-bold text-sm sm:text-base text-slate-900 mb-1.5">
                9-Bar Pressure &amp; Temp Calibrated
              </h3>
              <p class="text-slate-600 text-xs leading-relaxed">
                Post-repair pressure profiling and steam temperature calibration. Verified steady 9-bar extraction and velvety golden crema before completing service.
              </p>
            </div>
          </div>
          <div class="px-4 pb-4 pt-0">
            <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-md border border-emerald-100">
              ✓ Written warranty protection
            </span>
          </div>
        </div>

      </div>

      <!-- Mobile/Tablet Swipe Hint & Interactive Progress Dots -->
      <div class="flex items-center justify-between lg:hidden mt-3 pt-1 px-1 text-slate-500">
        <div class="flex items-center gap-1.5 text-[11px] font-medium text-slate-500">
          <svg class="w-3.5 h-3.5 text-brandOrange animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
          <span>Swipe to explore on-site repairs</span>
        </div>
        <div class="flex items-center gap-1.5" id="gallery-dots">
          <button type="button" aria-label="Go to slide 1" class="gallery-dot w-5 h-1.5 rounded-full bg-brandOrange transition-all duration-300" onclick="scrollGalleryTo(0)"></button>
          <button type="button" aria-label="Go to slide 2" class="gallery-dot w-1.5 h-1.5 rounded-full bg-slate-300 transition-all duration-300" onclick="scrollGalleryTo(1)"></button>
          <button type="button" aria-label="Go to slide 3" class="gallery-dot w-1.5 h-1.5 rounded-full bg-slate-300 transition-all duration-300" onclick="scrollGalleryTo(2)"></button>
          <button type="button" aria-label="Go to slide 4" class="gallery-dot w-1.5 h-1.5 rounded-full bg-slate-300 transition-all duration-300" onclick="scrollGalleryTo(3)"></button>
        </div>
      </div>

      <!-- Quick Trust Callout -->
      <div class="mt-8 p-4 rounded-xl bg-slate-50 border border-slate-200/80 flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
        <div class="flex items-center gap-3">
          <span class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-sm shrink-0">✓</span>
          <p class="text-xs text-slate-600 font-medium">
            <strong class="text-slate-900">100% On-Site Assurance:</strong> You never have to lift, box, or haul your coffee equipment. We come directly to you with mobile tooling.
          </p>
        </div>
        <a href="tel:9057178905" onclick="trackGtmCall('gallery_cta');"
           class="whitespace-nowrap btn-call-orange text-white text-xs font-bold uppercase tracking-wider py-2.5 px-5 rounded-lg shadow-sm hover:scale-102 transition-transform">
          Call 905-717-8905
        </a>
      </div>

    </div>
  </section>

  <!-- COMMON BREAKDOWN SYMPTOMS (6 MINIMALIST CARDS) -->
  <section class="py-12 sm:py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4">
      
      <div class="max-w-2xl mx-auto text-center mb-10">
        <div class="text-xs font-bold uppercase tracking-wider text-brandOrange mb-1">Common Mechanical Symptoms</div>
        <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-900 tracking-tight">
          Issues We Resolve Same-Day in <?php echo htmlspecialchars($city_name); ?>
        </h2>
        <p class="text-slate-500 text-xs sm:text-sm mt-1.5">
          Mobile service vehicles stocked with genuine OEM pumps, microswitches, valves, and food-grade gaskets.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        
        <!-- Card 1 -->
        <div class="minimal-card p-5">
          <div class="text-[10px] font-black uppercase tracking-wider text-rose-600 bg-rose-50 px-2 py-0.5 rounded inline-block mb-2.5">
            Pressure Loss
          </div>
          <h3 class="font-heading font-bold text-base text-slate-900 mb-1.5">
            Low Pressure / Weak Crema / Water Trickle
          </h3>
          <p class="text-slate-600 text-xs leading-relaxed">
            Coffee dispensing as a slow drip or lacking crema. Caused by failing vibration pumps, clogged shower screens, or calcified 3-way solenoid valves.
          </p>
        </div>

        <!-- Card 2 -->
        <div class="minimal-card p-5">
          <div class="text-[10px] font-black uppercase tracking-wider text-amber-600 bg-amber-50 px-2 py-0.5 rounded inline-block mb-2.5">
            Leakage Risk
          </div>
          <h3 class="font-heading font-bold text-base text-slate-900 mb-1.5">
            Water Leaking From Base or Group Head
          </h3>
          <p class="text-slate-600 text-xs leading-relaxed">
            Water puddling under the unit or leaking around the portafilter collar. Typically due to hardened silicone group gaskets or ruptured Teflon pressure lines.
          </p>
        </div>

        <!-- Card 3 -->
        <div class="minimal-card p-5">
          <div class="text-[10px] font-black uppercase tracking-wider text-blue-600 bg-blue-50 px-2 py-0.5 rounded inline-block mb-2.5">
            Heating Fault
          </div>
          <h3 class="font-heading font-bold text-base text-slate-900 mb-1.5">
            Lukewarm Coffee / Steam Wand Not Frothing
          </h3>
          <p class="text-slate-600 text-xs leading-relaxed">
            Machine unable to reach brewing temperature or steam wand emitting only warm water. Indicates open thermal fuses, burnt heating coils, or failed NTC sensors.
          </p>
        </div>

        <!-- Card 4 -->
        <div class="minimal-card p-5">
          <div class="text-[10px] font-black uppercase tracking-wider text-purple-600 bg-purple-50 px-2 py-0.5 rounded inline-block mb-2.5">
            Grinder Jam
          </div>
          <h3 class="font-heading font-bold text-base text-slate-900 mb-1.5">
            Grinder Jammed / Bean Feeder Error Code
          </h3>
          <p class="text-slate-600 text-xs leading-relaxed">
            Grinder motor humming without dispensing grounds, or flashing bean container errors. Often caused by oily residue, foreign bean stones, or worn conical burrs.
          </p>
        </div>

        <!-- Card 5 -->
        <div class="minimal-card p-5">
          <div class="text-[10px] font-black uppercase tracking-wider text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded inline-block mb-2.5">
            Sensor Error
          </div>
          <h3 class="font-heading font-bold text-base text-slate-900 mb-1.5">
            Descaling Failure / Flow Meter Stalled
          </h3>
          <p class="text-slate-600 text-xs leading-relaxed">
            Machine locked in an endless descale loop or prompting "Fill Water Tank" when the tank is full. Usually a jammed turbine flow meter or magnetic reed glitch.
          </p>
        </div>

        <!-- Card 6 -->
        <div class="minimal-card p-5">
          <div class="text-[10px] font-black uppercase tracking-wider text-slate-700 bg-slate-100 px-2 py-0.5 rounded inline-block mb-2.5">
            Electrical Fault
          </div>
          <h3 class="font-heading font-bold text-base text-slate-900 mb-1.5">
            Tripping Breaker / Main PCB Board Failure
          </h3>
          <p class="text-slate-600 text-xs leading-relaxed">
            Unit immediately trips the kitchen GFCI breaker when powering on or shows blank displays. Caused by internal moisture shorting heating terminals or relay burnout.
          </p>
        </div>

      </div>

      <div class="mt-8 text-center">
        <a href="#book-form" class="inline-flex items-center gap-2 bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs sm:text-sm py-3 px-6 rounded-xl shadow-xs transition-all">
          <span>Experiencing one of these faults? Book a Same-Day Diagnostic &rarr;</span>
        </a>
      </div>

    </div>
  </section>

  <!-- 3-STEP STREAMLINED REPAIR PROCESS -->
  <section class="py-12 sm:py-16 bg-white border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4">
      
      <div class="max-w-2xl mx-auto text-center mb-10">
        <div class="text-xs font-bold uppercase tracking-wider text-brandOrange mb-1">Simple &amp; Transparent</div>
        <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-900 tracking-tight">
          How Our <?php echo htmlspecialchars($city_name); ?> Same-Day Service Works
        </h2>
        <p class="text-slate-500 text-xs sm:text-sm mt-1">
          Zero hidden fees, transparent written quotes, and rapid local dispatch.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <div class="p-6 rounded-2xl border border-slate-200/90 bg-slate-50/50 relative">
          <div class="w-8 h-8 rounded-full bg-slate-900 text-white font-black text-xs flex items-center justify-center mb-4">
            01
          </div>
          <h3 class="font-heading font-bold text-base text-slate-900 mb-2">
            Schedule Dispatch
          </h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Call <a href="tel:9057178905" onclick="trackGtmCall('process_step');" class="text-brandOrange font-bold hover:underline">905-717-8905</a> or submit our quick online form. Our coordinator confirms your location and dispatches a certified technician.
          </p>
        </div>

        <div class="p-6 rounded-2xl border border-slate-200/90 bg-slate-50/50 relative">
          <div class="w-8 h-8 rounded-full bg-brandOrange text-white font-black text-xs flex items-center justify-center mb-4">
            02
          </div>
          <h3 class="font-heading font-bold text-base text-slate-900 mb-2">
            On-Site Diagnostic &amp; Written Quote
          </h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Our technician inspects hydraulics, heating, and electronics on-site and provides an upfront written quote. The diagnostic fee is completely waived when you proceed with repair.
          </p>
        </div>

        <div class="p-6 rounded-2xl border border-slate-200/90 bg-slate-50/50 relative">
          <div class="w-8 h-8 rounded-full bg-emerald-600 text-white font-black text-xs flex items-center justify-center mb-4">
            03
          </div>
          <h3 class="font-heading font-bold text-base text-slate-900 mb-2">
            Precision OEM Repair &amp; Warranty
          </h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            We install genuine OEM parts and calibrate extraction pressure. Every completed repair is backed by our comprehensive written warranty on parts and labour.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- OBJECTION-BUSTING FAQ ACCORDION -->
  <section class="py-12 sm:py-16 bg-white border-b border-slate-200">
    <div class="max-w-4xl mx-auto px-4">
      
      <div class="text-center mb-10">
        <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-900 tracking-tight">
          Frequently Asked Questions
        </h2>
        <p class="text-slate-500 text-xs sm:text-sm mt-1">
          Everything you need to know about our commercial and residential coffee machine diagnostics.
        </p>
      </div>

      <div class="space-y-3">
        
        <details class="group border border-slate-200 rounded-xl p-4 sm:p-5 bg-white open:bg-slate-50/40 transition-colors">
          <summary class="flex justify-between items-center font-heading font-bold text-sm sm:text-base text-slate-900 cursor-pointer list-none">
            <span>How fast can a technician arrive for coffee machine repair in <?php echo htmlspecialchars($city_name); ?>?</span>
            <span class="transition group-open:rotate-180 text-slate-400">▼</span>
          </summary>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-3 pt-3 border-t border-slate-100">
            We provide priority same-day dispatch across <?php echo htmlspecialchars($city_name); ?> and the Greater Toronto Area. When you call or submit a booking enquiry, our espresso and coffee technician is dispatched promptly with a mobile inventory of common pumps, valves, and gaskets.
          </p>
        </details>

        <details class="group border border-slate-200 rounded-xl p-4 sm:p-5 bg-white open:bg-slate-50/40 transition-colors">
          <summary class="flex justify-between items-center font-heading font-bold text-sm sm:text-base text-slate-900 cursor-pointer list-none">
            <span>Do I need to disconnect and bring my coffee machine to a repair shop?</span>
            <span class="transition group-open:rotate-180 text-slate-400">▼</span>
          </summary>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-3 pt-3 border-t border-slate-100">
            <strong>No, never.</strong> Unlike retail depots where you must unmount plumbing, haul heavy 30kg equipment across town, and wait in long queue lines, Appliance Repair Knights is a <strong>100% mobile on-site service</strong>. Our certified technicians travel directly to your corporate office, cafe, or private residence in <?php echo htmlspecialchars($city_name); ?> with fully equipped vans to diagnose and repair your machine right where it sits.
          </p>
        </details>

        <details class="group border border-slate-200 rounded-xl p-4 sm:p-5 bg-white open:bg-slate-50/40 transition-colors" open>
          <summary class="flex justify-between items-center font-heading font-bold text-sm sm:text-base text-slate-900 cursor-pointer list-none">
            <span>How does your diagnostic service call fee work?</span>
            <span class="transition group-open:rotate-180 text-slate-400">▼</span>
          </summary>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-3 pt-3 border-t border-slate-100">
            We believe in complete pricing transparency. Our diagnostic service call fee is completely waived when you proceed with the authorized repair. You receive a firm, upfront written quote before any work begins, with zero hidden travel charges or surprise fees.
          </p>
        </details>

        <details class="group border border-slate-200 rounded-xl p-4 sm:p-5 bg-white open:bg-slate-50/40 transition-colors">
          <summary class="flex justify-between items-center font-heading font-bold text-sm sm:text-base text-slate-900 cursor-pointer list-none">
            <span>Do you repair commercial office brewers as well as luxury built-in machines?</span>
            <span class="transition group-open:rotate-180 text-slate-400">▼</span>
          </summary>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-3 pt-3 border-t border-slate-100">
            Yes. We service commercial workplace equipment (Bunn batch brewers, corporate bean-to-cup espresso systems, breakroom stations) as well as residential luxury built-in cabinetry units (Miele, Jura, Gaggenau, Thermador, Bosch) and premium prosumer countertop units (Breville, De'Longhi, Rocket).
          </p>
        </details>

        <details class="group border border-slate-200 rounded-xl p-4 sm:p-5 bg-white open:bg-slate-50/40 transition-colors">
          <summary class="flex justify-between items-center font-heading font-bold text-sm sm:text-base text-slate-900 cursor-pointer list-none">
            <span>Do your technicians use genuine OEM factory parts?</span>
            <span class="transition group-open:rotate-180 text-slate-400">▼</span>
          </summary>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-3 pt-3 border-t border-slate-100">
            Yes. We install genuine manufacturer factory replacement parts, food-grade silicone seals, and certified high-pressure hydraulic components to ensure your machine brews safely and maintains factory specifications.
          </p>
        </details>

        <details class="group border border-slate-200 rounded-xl p-4 sm:p-5 bg-white open:bg-slate-50/40 transition-colors">
          <summary class="flex justify-between items-center font-heading font-bold text-sm sm:text-base text-slate-900 cursor-pointer list-none">
            <span>Is there a written warranty on your repairs?</span>
            <span class="transition group-open:rotate-180 text-slate-400">▼</span>
          </summary>
          <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-3 pt-3 border-t border-slate-100">
            Every repair completed by Appliance Repair Knights is backed by our comprehensive written warranty on parts and labour, giving you complete peace of mind.
          </p>
        </details>
      </div>

      <!-- INLINE FAQ CTA -->
      <div class="mt-10 sm:mt-12 text-center">
        <a href="tel:9057178905" onclick="trackGtmCall('faq_cta');"
           class="inline-flex items-center justify-center gap-2.5 w-full sm:w-auto bg-brandOrange hover:bg-brandOrangeHover text-white text-sm sm:text-[15px] font-black uppercase tracking-wide px-8 py-4 sm:py-4.5 rounded-xl shadow-lg transition-all hover:-translate-y-0.5 active:translate-y-0">
          <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
          </svg>
          <span>STILL HAVE QUESTIONS? CALL 905-717-8905</span>
        </a>
        <div class="mt-4 sm:mt-5 text-center text-[14px] sm:text-[15px] font-bold text-slate-600 leading-relaxed sm:leading-loose">
          <span class="inline-block whitespace-nowrap"><span class="inline-flex items-center align-middle"><span class="text-base mr-1.5">🛡️</span> Diagnostic Fee Waived With Repairs</span> <span class="text-slate-300 mx-2 sm:mx-3">•</span></span>
          <span class="inline-block">Speak Directly With a Technician</span>
          <span class="text-slate-300 mx-2 sm:mx-3 inline-block">•</span>
          <span class="inline-block">Same-Day Availability</span>
        </div>
      </div>

    </div>
  </section>

  <!-- CLOSING MINIMALIST CTA SECTION -->
  <section class="py-12 sm:py-16 bg-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-4 text-center space-y-4">
      <div class="inline-flex items-center gap-1.5 bg-slate-800 text-amber-300 text-xs font-semibold px-3 py-1 rounded-full border border-slate-700">
        <span>Prompt Daily Dispatch In <?php echo htmlspecialchars($city_name); ?></span>
      </div>
      <h2 class="text-2xl sm:text-4xl font-heading font-extrabold tracking-tight">
        Need Your Coffee Flowing Flawlessly Today?
      </h2>
      <p class="text-slate-300 text-xs sm:text-sm max-w-xl mx-auto leading-relaxed">
        Don't let a broken office breakroom or luxury kitchen espresso system disrupt your routine. Call our local dispatch team or book online — the diagnostic fee is waived when you proceed with the repair.
      </p>
      <div class="flex flex-wrap items-center justify-center gap-3 pt-3">
        <a href="tel:9057178905" onclick="trackGtmCall('bottom_cta');"
          class="gtm-ppc-call btn-call-orange text-white font-black text-xs sm:text-sm px-6 py-3.5 rounded-2xl shadow-lg transition-all flex items-center gap-2">
          <svg class="w-4 h-4 fill-current text-white flex-shrink-0" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
          </svg>
          <span class="tracking-tight uppercase">CALL 905-717-8905 NOW</span>
        </a>
        <a href="#book-form"
          class="bg-slate-800 hover:bg-slate-700 text-slate-200 font-bold text-xs sm:text-sm px-6 py-3.5 rounded-2xl border border-slate-700 transition-all">
          <span>Book Diagnostic Online</span>
        </a>
      </div>
    </div>
  </section>

  <!-- COMPREHENSIVE FOOTER -->
  <footer class="bg-slate-900 text-slate-300 py-12 sm:py-16 border-t border-slate-800 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
      
      <!-- Top Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
        
        <!-- Col 1: Brand Info -->
        <div class="space-y-4">
          <div class="flex items-center gap-2">
            <h2 class="text-lg font-heading font-black text-white tracking-tight uppercase">
              <span class="text-brandOrange">Appliance</span> Repair Knights
            </h2>
          </div>
          <p class="text-xs sm:text-sm leading-relaxed text-slate-400">
            Appliance Repair Knights is your trusted local provider for fast, same-day home appliance repairs across Toronto, GTA &amp; Southern Ontario.
          </p>
          <div class="text-xs sm:text-sm space-y-1.5 pt-2 text-slate-400">
            <div><strong class="text-slate-200">Dispatch:</strong> <a href="tel:9057178905" onclick="trackGtmCall('footer');" class="text-brandOrange hover:underline font-bold">905-717-8905</a></div>
            <div><strong class="text-slate-200">Email:</strong> <a href="mailto:info@appliancerepairknights.com" class="hover:underline break-all">info@appliancerepairknights.com</a></div>
            <div><strong class="text-slate-200">Region:</strong> Toronto &amp; GTA Service Zones</div>
          </div>
        </div>

        <!-- Col 2: Services -->
        <div class="space-y-4">
          <h4 class="text-xs font-black tracking-widest uppercase text-amber-500">Repair Services</h4>
          <ul class="text-xs sm:text-sm space-y-2.5 text-slate-400">
            <li><span class="hover:text-white transition-colors cursor-pointer" onclick="document.getElementById('lead-appliance').value='Commercial Office Coffee System'; document.getElementById('book-form').scrollIntoView({behavior:'smooth'});">Commercial Office Coffee Repair</span></li>
            <li><span class="hover:text-white transition-colors cursor-pointer" onclick="document.getElementById('lead-appliance').value='Luxury Built-In Cabinet System'; document.getElementById('book-form').scrollIntoView({behavior:'smooth'});">Residential Espresso Machine Repair</span></li>
          </ul>
        </div>

        <!-- Col 3: Hours -->
        <div class="space-y-4">
          <h4 class="text-xs font-black tracking-widest uppercase text-amber-500">Dispatch Hours</h4>
          <div class="text-xs sm:text-sm space-y-2.5 text-slate-400">
            <div class="flex justify-between items-center gap-4">
              <span>Availability:</span>
              <span class="text-slate-200 font-semibold text-right">Available daily for prompt dispatch</span>
            </div>
            <div class="mt-4 pt-4 border-t border-slate-800">
              <strong class="text-slate-200 block mb-1">Corporate Office:</strong>
              123 Appliance Way, Toronto, ON<br>
              <span class="text-[10px] italic">(Mobile Dispatch Center)</span>
            </div>
          </div>
        </div>

        <!-- Col 4: Legal -->
        <div class="space-y-4">
          <h4 class="text-xs font-black tracking-widest uppercase text-amber-500">Legal &amp; Policies</h4>
          <ul class="text-xs sm:text-sm space-y-2.5 text-slate-400">
            <li><a href="../privacy-policy" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Privacy Policy</a></li>
            <li><a href="../terms-and-conditions" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Terms of Service</a></li>
            <li><a href="../privacy-policy#google-ads" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Google Ads Policy Disclaimer</a></li>
          </ul>
        </div>

      </div>

      <!-- Divider & Legal Disclaimer -->
      <div class="border-t border-slate-800/80 pt-8 space-y-4 text-[10px] sm:text-[11px] leading-relaxed text-slate-500">
        <p>
          <strong class="text-slate-300">Third-Party Independent Service &amp; Trademark Disclosure:</strong> Appliance Repair Knights is an independent appliance service provider specializing in prompt, out-of-warranty coffee and espresso machine repairs across Toronto and the Greater Toronto Area. All brand names, trademarks, model designations, and logos referenced on this website (including Jura, Breville, De'Longhi, Miele, Bunn, Franke, and others) are the property of their respective trademark holders and are utilized strictly for identification and descriptive purposes to indicate parts and diagnostic repair compatibility. Appliance Repair Knights is not affiliated with, sponsored by, or endorsed by any of these original equipment manufacturers.
        </p>
        <p>
          Transparent, upfront written quotes are provided prior to starting any repair work. The diagnostic service call fee is completely waived when you proceed with repairs. All qualifying repairs are backed by our comprehensive written parts and labour warranty.
        </p>
      </div>

      <!-- Copyright Bottom Bar -->
      <div class="border-t border-slate-800/80 mt-8 pt-6 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] sm:text-xs text-slate-500">
        <div>
          &copy; <?php echo date('Y'); ?> Appliance Repair Knights. All Rights Reserved.
        </div>
        <div class="flex gap-4">
          <a href="../privacy-policy" target="_blank" rel="noopener noreferrer" class="hover:text-slate-300 transition-colors">Privacy Policy</a>
          <span>&bull;</span>
          <a href="../terms-and-conditions" target="_blank" rel="noopener noreferrer" class="hover:text-slate-300 transition-colors">Terms of Service</a>
        </div>
      </div>
      
      <!-- Mobile Sticky Bar Spacer -->
      <div class="h-20 sm:hidden w-full"></div>

    </div>
  </footer>

  <!-- MINIMALIST MOBILE STICKY CONVERSION BAR -->
  <div class="sm:hidden fixed bottom-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-t border-slate-200 px-3 py-2.5 shadow-xl flex items-center gap-2">
    <a href="tel:9057178905" onclick="trackGtmCall('sticky_bar');"
      class="gtm-ppc-call-sticky flex-1 btn-call-orange text-white font-black text-xs py-3.5 px-3 rounded-xl flex items-center justify-center gap-1.5 shadow-md active:scale-98">
      <svg class="w-3.5 h-3.5 text-white fill-current flex-shrink-0" viewBox="0 0 20 20">
        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
      </svg>
      <span class="tracking-tight uppercase">CALL 905-717-8905</span>
    </a>
    <a href="#book-form"
      class="flex-1 bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs py-3.5 px-3 rounded-xl flex items-center justify-center gap-1.5 shadow-sm active:scale-98">
      <span>Book Diagnostic &rarr;</span>
    </a>
  </div>

  <!-- JAVASCRIPT LOGIC & CONVERSION TRACKING -->
  <script>
    function handlePpcCoffeeSubmit(form) {
      const btn = document.getElementById('ppc-submit-btn');
      const msg = document.getElementById('form-msg');
      const name = form.querySelector('[name="name"]').value.trim();
      const phone = form.querySelector('[name="phone"]').value.trim();
      const city = form.querySelector('[name="city"]').value;
      const appliance = form.querySelector('[name="appliance"]').value;
      const page = form.querySelector('[name="page"]').value;

      if (!name || !phone) {
        alert('Please provide your name and phone number.');
        return;
      }

      btn.disabled = true;
      btn.innerHTML = '<span>DISPATCHING REQUEST...</span>';

      const payload = {
        name: name,
        phone: phone,
        city: city,
        appliance: appliance,
        page: page
      };

      // Get GCLID
      const urlParams = new URLSearchParams(window.location.search);
      payload.gclid = urlParams.get('gclid') || '';

      fetch('send-lead.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      })
      .then(res => res.json())
      .then(data => {
        if(data.status === 'success') {
          // GTM Event Trigger (ONLY ON SUCCESS)
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
            'event': 'ppc_lead_form_submitted',
            'lead_appliance': appliance,
            'lead_city': city
          });
          btn.innerHTML = '<span>✓ REQUEST RECEIVED!</span>';
          btn.style.backgroundColor = '#059669';
          msg.classList.remove('hidden', 'bg-rose-50', 'text-rose-800', 'border-rose-200');
          msg.classList.add('bg-emerald-50', 'text-emerald-800', 'border', 'border-emerald-200');
          msg.innerHTML = '<strong>Success!</strong> Redirecting...';
          setTimeout(() => {
            window.location.href = '../thank-you?city=' + encodeURIComponent(city);
          }, 800);
        } else {
          throw new Error(data.message || 'Server error');
        }
      })
      .catch(err => {
        btn.disabled = false;
        btn.innerHTML = '<span>Request On-Site Call Back →</span>';
        msg.classList.remove('hidden', 'bg-emerald-50', 'text-emerald-800', 'border-emerald-200');
        msg.classList.add('bg-rose-50', 'text-rose-800', 'border', 'border-rose-200');
        msg.innerHTML = '<strong>Connection Error!</strong> Please call us directly at <strong>(905) 717-8905</strong> for immediate dispatch.';
      });
    }

    // Phone Auto-Formatter
    const phoneInput = document.getElementById('lead-phone');
    if (phoneInput) {
      phoneInput.addEventListener('input', function (e) {
        let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
      });
    }

    // GTM PPC Conversion Trackers
    function trackGtmCall(location) {
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event': 'ppc_phone_click',
        'click_location': location,
        'value': 1
      });
    }

    function trackGtmWhatsApp(location) {
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event': 'ppc_whatsapp_click',
        'click_location': location,
        'value': 1
      });
    }

    // Responsive On-Site Gallery Controls
    function scrollGalleryTo(index) {
      const track = document.getElementById('onsite-gallery-track');
      if (!track) return;
      const cards = track.children;
      if (cards[index]) {
        cards[index].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
      }
    }

    (function initGalleryObserver() {
      const track = document.getElementById('onsite-gallery-track');
      const dots = document.querySelectorAll('.gallery-dot');
      if (!track || !dots.length) return;
      track.addEventListener('scroll', () => {
        const scrollLeft = track.scrollLeft;
        const cardWidth = track.firstElementChild ? track.firstElementChild.offsetWidth : 300;
        const activeIndex = Math.min(dots.length - 1, Math.max(0, Math.round(scrollLeft / cardWidth)));
        dots.forEach((dot, idx) => {
          if (idx === activeIndex) {
            dot.className = 'gallery-dot w-5 h-1.5 rounded-full bg-brandOrange transition-all duration-300';
          } else {
            dot.className = 'gallery-dot w-1.5 h-1.5 rounded-full bg-slate-300 transition-all duration-300';
          }
        });
      }, { passive: true });
    })();
  </script>

  <!-- Exit Intent Popup -->
  <div id="exit-popup" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-slate-900/60 backdrop-blur-sm p-4 transition-opacity">
    <div class="bg-white w-full max-w-md rounded-2xl p-6 md:p-8 shadow-2xl relative transform transition-all">
      <button onclick="closeExitPopup()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 transition-colors cursor-pointer p-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
      </button>
      <div class="text-center">
        <div class="inline-block bg-brandDarkBlue text-white text-[10px] font-black uppercase tracking-widest py-1.5 px-3 rounded-full mb-4">
          Wait! Before you leave...
        </div>
        <h3 class="font-heading font-extrabold text-2xl text-slate-900 mb-2">Need Priority Dispatch?</h3>
        <p class="text-sm text-slate-500 mb-6">Lock in your time slot now. Diagnostic fee is waived when you proceed with the repair.</p>
        <a href="tel:9057178905" onclick="trackGtmCall('exit_popup'); closeExitPopup();" class="w-full inline-flex btn-call-orange text-white font-black py-3.5 px-6 rounded-2xl text-lg shadow-xl transition-all items-center justify-center gap-2 cursor-pointer hover:scale-[1.02] mb-4">
          <svg class="w-5 h-5 fill-current animate-pulse text-white" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
          </svg>
          <span>Call 905-717-8905</span>
        </a>
        <button onclick="closeExitPopup()" class="text-[11px] font-bold text-slate-400 hover:text-slate-600 underline cursor-pointer uppercase tracking-wider">No thanks</button>
      </div>
    </div>
  </div>

  <!-- DESKTOP FLOATING CTAS (Hidden on mobile where sticky bar rules) -->
  <aside id="desktop-floating-ctas" aria-label="Quick Contact" class="hidden lg:flex flex-col gap-2 select-none" style="position: fixed; right: 0; bottom: 40px; z-index: 90;">
    
    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/19057178905?text=Hi%2C%20I%20need%20same-day%20coffee%20machine%20repair%20in%20<?php echo urlencode($city_name); ?>" 
       target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp" title="Chat on WhatsApp"
       class="transition-transform duration-200 hover:-translate-x-1 active:scale-95"
       style="width: 44px; height: 44px; background-color: #25D366; border-radius: 22px 0 0 22px; padding-left: 4px; display: flex; align-items: center; justify-content: center; box-shadow: -2px 2px 8px rgba(0,0,0,0.18);">
      <div style="width: 30px; height: 30px; border-radius: 50%; border: 1.5px solid rgba(255,255,255,0.75); display: flex; align-items: center; justify-content: center;">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="#ffffff">
          <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2zm0 18.12c-1.5 0-2.97-.4-4.26-1.16l-.31-.18-3.13.82.83-3.05-.2-.32a8.04 8.04 0 0 1-1.24-4.32c0-4.47 3.64-8.11 8.11-8.11 2.17 0 4.2 0.85 5.73 2.38a8.06 8.06 0 0 1 2.38 5.73c0 4.47-3.64 8.11-8.11 8.11zm4.45-6.09c-.24-.12-1.44-.71-1.66-.79-.22-.08-.38-.12-.55.12-.16.24-.63.79-.77.95-.14.16-.28.18-.52.06-.24-.12-1.02-.38-1.95-1.21-.72-.64-1.21-1.44-1.35-1.68-.14-.24-.01-.37.11-.49.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.55-1.32-.75-1.81-.2-.48-.4-.41-.55-.42h-.47c-.16 0-.42.06-.64.3-.22.24-.85.83-.85 2.02s.87 2.34.99 2.5c.12.16 1.71 2.61 4.14 3.66.58.25 1.03.4 1.38.51.58.18 1.11.16 1.53.1.47-.07 1.44-.59 1.64-1.16.2-.57.2-1.06.14-1.16-.06-.1-.22-.16-.46-.28z"/>
        </svg>
      </div>
    </a>

    <!-- Phone Call Floating Button -->
    <a href="tel:9057178905" onclick="trackGtmCall('desktop_floating');" aria-label="Call Now" title="Call 905-717-8905"
       class="gtm-ppc-call transition-transform duration-200 hover:-translate-x-1 active:scale-95"
       style="width: 44px; height: 44px; background-color: #0A2E52; border-radius: 22px 0 0 22px; padding-left: 4px; display: flex; align-items: center; justify-content: center; box-shadow: -2px 2px 8px rgba(0,0,0,0.18);">
      <div style="width: 30px; height: 30px; border-radius: 50%; border: 1.5px solid rgba(255,255,255,0.75); display: flex; align-items: center; justify-content: center;">
        <svg width="15" height="15" viewBox="0 0 20 20" fill="#ffffff">
          <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
        </svg>
      </div>
    </a>
  </aside>

  <script>
    let popupShown = false;
    document.addEventListener('mouseout', function(e) {
      if (e.clientY < 0 && !popupShown) {
        document.getElementById('exit-popup').classList.remove('hidden');
        popupShown = true;
      }
    });
    function closeExitPopup() {
      document.getElementById('exit-popup').classList.add('hidden');
    }
  </script>

</body>
</html>
