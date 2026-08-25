<?php
/**
 * Dynamic Master Location Page Template
 * Appliance Repair Knights Ltd.
 */

require_once __DIR__ . '/../config.php';

// Load location dataset
$all_locations = require __DIR__ . '/location-data.php';

// Get and sanitize requested slug
$raw_slug = isset($_GET['slug']) ? strtolower(trim($_GET['slug'])) : '';
// Remove trailing .php if passed in slug
$slug = preg_replace('/\.php$/', '', $raw_slug);

// Known slug typo aliases (301 Permanent Redirect)
$slug_aliases = [
    'caldeon-appliance-repair' => 'caledon-appliance-repair',
    'caledeon-appliance-repair' => 'caledon-appliance-repair',
];

if (isset($slug_aliases[$slug])) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: https://www.appliancerepairknights.com/locations/" . $slug_aliases[$slug]);
    exit;
}

if (empty($slug) || !isset($all_locations[$slug])) {
    http_response_code(404);
    $base_url = '../';
    include __DIR__ . '/../404.php';
    exit;
}

$loc = $all_locations[$slug];

// Define Page Meta & Variables
$base_url = '../';
$current_page = $slug;
$page_title = $loc['meta_title'];
$page_description = $loc['meta_description'];
$page_keywords = $loc['keywords'];
$canonical_url = 'https://www.appliancerepairknights.com/locations/' . $slug;

$disable_global_schema = true;
?>
<!DOCTYPE html>
<html lang="en-CA" class="scroll-smooth">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-M7B6FLPR');</script>
  <!-- End Google Tag Manager -->

  <!-- Technical Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="theme-color" content="#0F4C81">

  <!-- Primary On-Page SEO Meta Tags -->
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="language" content="English">
  <meta name="author" content="Appliance Repair Knights">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

  <!-- Local SEO Geo Meta Tags -->
  <meta name="geo.region" content="CA-ON">
  <meta name="geo.placename" content="<?php echo htmlspecialchars($loc['city_name']); ?>">
  <meta name="geo.position" content="<?php echo (float)($loc['geo']['latitude'] ?? 43.6487); ?>;<?php echo (float)($loc['geo']['longitude'] ?? -79.3817); ?>">
  <meta name="ICBM" content="<?php echo (float)($loc['geo']['latitude'] ?? 43.6487); ?>, <?php echo (float)($loc['geo']['longitude'] ?? -79.3817); ?>">

  <!-- Favicon & App Icons -->
  <link rel="icon" type="image/x-icon" href="<?php echo $base_url; ?>img/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url; ?>img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url; ?>img/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>img/apple-touch-icon.png">
  <link rel="manifest" href="<?php echo $base_url; ?>img/site.webmanifest">
  <meta name="msapplication-TileColor" content="#0F4C81">

  <!-- Open Graph / Social -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Appliance Repair Knights">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:image" content="https://www.appliancerepairknights.com/img/logo.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale" content="en_CA">

  <!-- Twitter Meta Tags -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="twitter:image" content="https://www.appliancerepairknights.com/img/logo.png">

  <!-- Performance & Fonts (Zero-Latency Self-Hosted Fonts & CSS) -->
  <link rel="preload" href="<?php echo $base_url; ?>fonts/inter-latin.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo $base_url; ?>fonts/montserrat-latin.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/fonts.min.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/tailwind.min.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.min.css">

  <!-- UNIFIED DYNAMIC CITY SCHEMA (@graph: LocalBusiness + Service + BreadcrumbList + FAQPage) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "LocalBusiness",
        "@id": "<?php echo $canonical_url; ?>#localbusiness",
        "name": "Appliance Repair Knights Ltd. - <?php echo htmlspecialchars($loc['city_name']); ?>",
        "image": "https://www.appliancerepairknights.com/img/logo.png",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "905-717-8905",
        "priceRange": "$$",
        "hasMap": "https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059",
        "sameAs": [
          "https://www.facebook.com/Appliancerepairknights",
          "https://www.instagram.com/appliancerepairknights/",
          "https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059"
        ],
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "100 King St W",
          "addressLocality": "Toronto",
          "addressRegion": "ON",
          "postalCode": "M5X 1A9",
          "addressCountry": "CA"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": <?php echo (float)($loc['geo']['latitude'] ?? 43.6487); ?>,
          "longitude": <?php echo (float)($loc['geo']['longitude'] ?? -79.3817); ?>
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "<?php echo GMB_RATING_VALUE; ?>",
          "reviewCount": "<?php echo GMB_REVIEW_COUNT; ?>"
        },
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          "opens": "08:00",
          "closes": "21:00"
        },
        "areaServed": [
          {
            "@type": "AdministrativeArea",
            "name": "<?php echo htmlspecialchars($loc['city_name']); ?>, ON"
          },
          {
            "@type": "AdministrativeArea",
            "name": "<?php echo htmlspecialchars($loc['region']); ?>"
          }<?php if (!empty($loc['postal_codes'])): ?><?php foreach ($loc['postal_codes'] as $pc): ?>,
          {
            "@type": "PostalCodeRangeSpecification",
            "postalCode": "<?php echo htmlspecialchars($pc); ?>"
          }<?php endforeach; ?><?php endif; ?>
        ]
      },
      {
        "@type": "Service",
        "@id": "<?php echo $canonical_url; ?>#service",
        "serviceType": "Appliance Repair Service",
        "provider": {
          "@id": "<?php echo $canonical_url; ?>#localbusiness"
        },
        "areaServed": {
          "@type": "AdministrativeArea",
          "name": "<?php echo htmlspecialchars($loc['city_name']); ?>, ON"
        },
        "description": "Same-day inspection and repair services for refrigerators, washers, dryers, dishwashers, stoves, ovens, and microwaves in <?php echo htmlspecialchars($loc['city_name']); ?> and <?php echo htmlspecialchars($loc['region']); ?>."
      },
      {
        "@type": "BreadcrumbList",
        "@id": "<?php echo $canonical_url; ?>#breadcrumb",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.appliancerepairknights.com/"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Service Areas",
            "item": "https://www.appliancerepairknights.com/#service-areas"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "<?php echo htmlspecialchars($loc['city_name']); ?> Appliance Repair",
            "item": "<?php echo $canonical_url; ?>"
          }
        ]
      }<?php if (!empty($loc['faqs'])): ?>,
      {
        "@type": "FAQPage",
        "@id": "<?php echo $canonical_url; ?>#faq",
        "mainEntity": [
          <?php 
          $faq_json_items = [];
          foreach ($loc['faqs'] as $f) {
              $faq_json_items[] = json_encode([
                  '@type' => 'Question',
                  'name' => $f['q'],
                  'acceptedAnswer' => [
                      '@type' => 'Answer',
                      'text' => $f['a']
                  ]
              ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
          }
          echo implode(",\n          ", $faq_json_items);
          ?>
        ]
      }<?php endif; ?>
    ]
  }
  </script>
</head>
<body class="bg-lightbg text-secondary font-sans antialiased min-h-screen flex flex-col selection:bg-brandOrange selection:text-white">

<?php include __DIR__ . '/../header.php'; ?>

  <!-- BREADCRUMBS NAVIGATION -->
  <nav class="bg-white border-b border-bordercolor" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 py-3 text-xs font-semibold flex items-center gap-2">
      <a href="../index.php" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <a href="../index.php#service-areas" class="text-secondary hover:text-accent transition-colors">Service Areas</a>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold"><?php echo htmlspecialchars($loc['city_name']); ?> Appliance Repair</span>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow">
    
    <!-- SERVICE AREA HERO SECTION -->
    <section class="bg-primary text-white py-12 md:py-16 overflow-hidden relative">
      <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Left Hero Content -->
        <div class="lg:col-span-7 space-y-6">
          <div class="flex flex-wrap items-center gap-3">
            <span class="inline-flex items-center gap-2 bg-brandOrange/20 border border-brandOrange/40 text-accent text-xs md:text-sm font-bold uppercase tracking-widest px-3 py-1 rounded-full">
              <span class="w-2 h-2 rounded-full bg-accent animate-ping"></span>
              <?php echo htmlspecialchars($loc['badge_text']); ?>
            </span>
            <span class="inline-flex items-center gap-1.5 bg-amber-400/20 border border-amber-400/40 text-amber-300 text-xs font-bold px-3 py-1 rounded-full">
              ★ 5.0 GOOGLE RATED
            </span>
          </div>
          
          <h1 class="text-3xl sm:text-4xl md:text-5xl font-heading font-extrabold text-white tracking-tight leading-tight">
            <?php echo htmlspecialchars($loc['h1_title']); ?>
          </h1>
          
          <p class="text-slate-300 text-base md:text-lg max-w-xl leading-relaxed">
            <?php echo htmlspecialchars($loc['intro_text']); ?>
          </p>

          <div class="space-y-3 pt-2">
            <div class="flex items-center gap-2.5 text-slate-200 text-sm md:text-base">
              <svg class="w-5 h-5 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span>Licensed <?php echo htmlspecialchars($loc['city_name']); ?> &amp; <?php echo htmlspecialchars($loc['region']); ?> appliance repair technicians</span>
            </div>
            <div class="flex items-center gap-2.5 text-slate-200 text-sm md:text-base">
              <svg class="w-5 h-5 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span>Same-day dispatch with common factory parts in stock</span>
            </div>
            <div class="flex items-center gap-2.5 text-slate-200 text-sm md:text-base">
              <svg class="w-5 h-5 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              <span>Transparent flat-rate quotes &amp; 90-day parts &amp; labor warranty</span>
            </div>
          </div>

          <div class="pt-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
            <a href="tel:9057178905" class="gtm-web-call bg-brandOrange hover:bg-orange-600 text-white font-bold text-base px-7 py-3.5 rounded-lg shadow-lg hover:shadow-xl transition-all duration-200 text-center flex items-center justify-center gap-2">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
              Call 905-717-8905
            </a>
            <a href="../schedule.php" class="bg-slate-800 hover:bg-slate-700 text-white font-semibold text-base px-7 py-3.5 rounded-lg border border-slate-700 transition-all duration-200 text-center">
              <?php echo htmlspecialchars($loc['cta_text']); ?>
            </a>
          </div>
        </div>

        <!-- Right Quick Contact Form Card -->
        <div class="lg:col-span-5">
          <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl text-secondary border border-bordercolor relative">
            <div class="mb-5">
              <span class="text-xs font-bold text-accent uppercase tracking-wider">Fast Response</span>
              <h2 class="text-xl md:text-2xl font-bold text-primary mt-1">Book Repair in <?php echo htmlspecialchars($loc['city_name']); ?></h2>
              <p class="text-xs text-slate-500 mt-1">Fill out the form below or call <a href="tel:9057178905" class="gtm-web-call text-brandOrange font-bold underline">905-717-8905</a> for instant dispatch.</p>
            </div>

            <?php include __DIR__ . '/../forms/quote-form.php'; ?>
          </div>
        </div>

      </div>
    </section>

    <!-- APPLIANCE SERVICES IN CITY -->
    <section class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-4">
        
        <div class="text-center max-w-3xl mx-auto mb-12">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-extrabold text-primary">
            Appliance Services We Provide in <span class="text-accent"><?php echo htmlspecialchars($loc['city_name']); ?></span>
          </h2>
          <p class="text-slate-600 mt-3 text-sm md:text-base">
            Our experienced technicians diagnose and fix all major household appliances using original manufacturer parts.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          
          <!-- Refrigerator Repair -->
          <a href="../services/fridge-repair" class="group bg-white rounded-2xl border border-slate-200/80 hover:border-accent/40 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden">
            <div>
              <div class="h-44 sm:h-48 w-full overflow-hidden relative bg-slate-100">
                <img src="../img/fridge-repair.avif" alt="Refrigerator Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute top-3 right-3 w-10 h-10 rounded-xl bg-white/90 backdrop-blur-sm text-primary group-hover:text-accent flex items-center justify-center shadow-sm transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2zm0 8h14M10 3v8M10 15v3"></path></svg>
                </div>
              </div>
              <div class="p-6 space-y-3">
                <h3 class="text-lg font-heading font-bold text-primary group-hover:text-accent transition-colors">Refrigerator & Freezer Repair</h3>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                  Same-day fixes for cooling failures, compressor issues, water valve leaks, and ice maker malfunctions.
                </p>
              </div>
            </div>
            <div class="px-6 pb-6 pt-0 flex items-center justify-between text-xs font-semibold text-accent">
              <span>Explore Refrigerator Repair</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </div>
          </a>

          <!-- Washing Machine Repair -->
          <a href="../services/washer-repair" class="group bg-white rounded-2xl border border-slate-200/80 hover:border-accent/40 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden">
            <div>
              <div class="h-44 sm:h-48 w-full overflow-hidden relative bg-slate-100">
                <img src="../img/washer-repair.avif" alt="Washing Machine Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute top-3 right-3 w-10 h-10 rounded-xl bg-white/90 backdrop-blur-sm text-primary group-hover:text-accent flex items-center justify-center shadow-sm transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-4a6 6 0 100-12 6 6 0 000 12zm0-2a4 4 0 110-8 4 4 0 010 8z"></path></svg>
                </div>
              </div>
              <div class="p-6 space-y-3">
                <h3 class="text-lg font-heading font-bold text-primary group-hover:text-accent transition-colors">Washing Machine Repair</h3>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                  Resolving spin failures, drainage clogs, excessive noise, lid lock errors, and front/top-load leaks.
                </p>
              </div>
            </div>
            <div class="px-6 pb-6 pt-0 flex items-center justify-between text-xs font-semibold text-accent">
              <span>Explore Washer Repair</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </div>
          </a>

          <!-- Clothes Dryer Repair -->
          <a href="../services/dryer-repair" class="group bg-white rounded-2xl border border-slate-200/80 hover:border-accent/40 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden">
            <div>
              <div class="h-44 sm:h-48 w-full overflow-hidden relative bg-slate-100">
                <img src="../img/dryer-repair.avif" alt="Clothes Dryer Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute top-3 right-3 w-10 h-10 rounded-xl bg-white/90 backdrop-blur-sm text-primary group-hover:text-accent flex items-center justify-center shadow-sm transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
              </div>
              <div class="p-6 space-y-3">
                <h3 class="text-lg font-heading font-bold text-primary group-hover:text-accent transition-colors">Clothes Dryer Repair</h3>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                  Heating element replacement, belt fixes, thermal fuse checks, and drum roller adjustments for gas & electric models.
                </p>
              </div>
            </div>
            <div class="px-6 pb-6 pt-0 flex items-center justify-between text-xs font-semibold text-accent">
              <span>Explore Dryer Repair</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </div>
          </a>

          <!-- Dishwasher Repair -->
          <a href="../services/dishwasher-repair" class="group bg-white rounded-2xl border border-slate-200/80 hover:border-accent/40 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden">
            <div>
              <div class="h-44 sm:h-48 w-full overflow-hidden relative bg-slate-100">
                <img src="../img/Open Dishwasher.avif" alt="Dishwasher Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute top-3 right-3 w-10 h-10 rounded-xl bg-white/90 backdrop-blur-sm text-primary group-hover:text-accent flex items-center justify-center shadow-sm transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
              </div>
              <div class="p-6 space-y-3">
                <h3 class="text-lg font-heading font-bold text-primary group-hover:text-accent transition-colors">Dishwasher Repair</h3>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                  Fixing un-drained water, poor wash results, door latch leaks, and circulation pump errors.
                </p>
              </div>
            </div>
            <div class="px-6 pb-6 pt-0 flex items-center justify-between text-xs font-semibold text-accent">
              <span>Explore Dishwasher Repair</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </div>
          </a>

          <!-- Oven, Range & Stove Repair -->
          <a href="../services/stove-repair" class="group bg-white rounded-2xl border border-slate-200/80 hover:border-accent/40 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden">
            <div>
              <div class="h-44 sm:h-48 w-full overflow-hidden relative bg-slate-100">
                <img src="../img/oven-repair.avif" alt="Oven and Stove Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute top-3 right-3 w-10 h-10 rounded-xl bg-white/90 backdrop-blur-sm text-primary group-hover:text-accent flex items-center justify-center shadow-sm transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path></svg>
                </div>
              </div>
              <div class="p-6 space-y-3">
                <h3 class="text-lg font-heading font-bold text-primary group-hover:text-accent transition-colors">Oven, Range & Stove Repair</h3>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                  Diagnosis and repair for uneven heating, broken igniters, gas range valves, and electronic control boards.
                </p>
              </div>
            </div>
            <div class="px-6 pb-6 pt-0 flex items-center justify-between text-xs font-semibold text-accent">
              <span>Explore Oven & Stove Repair</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </div>
          </a>

          <!-- Microwave Repair -->
          <a href="../services/microwave-repair" class="group bg-white rounded-2xl border border-slate-200/80 hover:border-accent/40 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between overflow-hidden">
            <div>
              <div class="h-44 sm:h-48 w-full overflow-hidden relative bg-slate-100">
                <img src="../img/microwave-repair-service.webp" alt="Microwave Repair in <?php echo htmlspecialchars($loc['city_name']); ?>" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute top-3 right-3 w-10 h-10 rounded-xl bg-white/90 backdrop-blur-sm text-primary group-hover:text-accent flex items-center justify-center shadow-sm transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
              </div>
              <div class="p-6 space-y-3">
                <h3 class="text-lg font-heading font-bold text-primary group-hover:text-accent transition-colors">Microwave Repair</h3>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                  Over-the-range & built-in repairs for magnetron failures, door switches, sparking, and unresponsive touchpads.
                </p>
              </div>
            </div>
            <div class="px-6 pb-6 pt-0 flex items-center justify-between text-xs font-semibold text-accent">
              <span>Explore Microwave Repair</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </div>
          </a>

        </div>

      </div>
    </section>

    <!-- LOCAL NEIGHBORHOODS & POSTAL CODES COVERED -->
    <section class="py-16 bg-lightbg border-t border-bordercolor">
      <div class="max-w-7xl mx-auto px-4">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          
          <div class="lg:col-span-6 space-y-6">
            <span class="text-xs font-bold text-accent uppercase tracking-widest">Local Coverage</span>
            <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-primary">
              Serving All Communities Across <span class="text-brandOrange"><?php echo htmlspecialchars($loc['city_name']); ?></span>
            </h2>
            <p class="text-slate-600 text-sm md:text-base leading-relaxed">
              We maintain fully stocked service vans deployed directly in <?php echo htmlspecialchars($loc['city_name']); ?>, ensuring rapid arrival times whether you are located in central neighborhoods or surrounding subdivisions.
            </p>

            <div>
              <h4 class="text-xs font-bold uppercase text-slate-400 tracking-wider mb-3">Key Neighborhoods Covered:</h4>
              <div class="flex flex-wrap gap-2">
                <?php foreach ($loc['neighborhoods'] as $nb): ?>
                  <span class="bg-white border border-bordercolor text-slate-700 text-xs font-semibold px-3 py-1.5 rounded-md shadow-sm">
                    📍 <?php echo htmlspecialchars($nb); ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="pt-2">
              <h4 class="text-xs font-bold uppercase text-slate-400 tracking-wider mb-3">Postal Code Zones Covered:</h4>
              <div class="flex flex-wrap gap-2">
                <?php foreach ($loc['postal_codes'] as $pc): ?>
                  <span class="bg-primary/5 text-primary text-xs font-bold px-2.5 py-1 rounded border border-primary/10">
                    <?php echo htmlspecialchars($pc); ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- Right Card: Why Choose Appliance Repair Knights -->
          <div class="lg:col-span-6">
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-bordercolor space-y-6">
              <h3 class="text-xl font-bold text-primary">Why <?php echo htmlspecialchars($loc['city_name']); ?> Residents Choose Us</h3>

              <div class="space-y-4">
                <div class="flex items-start gap-4">
                  <div class="w-10 h-10 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 font-bold">1</div>
                  <div>
                    <h4 class="text-sm font-bold text-primary">$0 Service Call Fee with Repair</h4>
                    <p class="text-xs text-slate-600 mt-0.5">Our standard $50-$80 inspection fee is completely waived when you move forward with the repair.</p>
                  </div>
                </div>

                <div class="flex items-start gap-4">
                  <div class="w-10 h-10 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 font-bold">2</div>
                  <div>
                    <h4 class="text-sm font-bold text-primary">Upfront Flat-Rate Pricing</h4>
                    <p class="text-xs text-slate-600 mt-0.5">No hourly billing surprises. You get an exact quote upfront before any technician turns a wrench.</p>
                  </div>
                </div>

                <div class="flex items-start gap-4">
                  <div class="w-10 h-10 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 font-bold">3</div>
                  <div>
                    <h4 class="text-sm font-bold text-primary">90-Day Parts &amp; Labor Warranty</h4>
                    <p class="text-xs text-slate-600 mt-0.5">All repairs in <?php echo htmlspecialchars($loc['city_name']); ?> are backed by our full 90-day satisfaction guarantee.</p>
                  </div>
                </div>
              </div>

              <div class="pt-4 border-t border-bordercolor flex items-center justify-between">
                <div>
                  <span class="text-xs text-slate-500">Need Immediate Help?</span>
                  <a href="tel:9057178905" class="gtm-web-call text-lg font-bold text-brandOrange hover:underline">905-717-8905</a>
                </div>
                <a href="tel:9057178905" class="gtm-web-call bg-brandOrange text-white font-bold text-xs px-5 py-2.5 rounded-lg hover:bg-orange-600 transition-colors">
                  Call for Fast Repair
                </a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- GOOGLE MAP & NAP (NAME, ADDRESS, PHONE) SECTION -->
    <section class="py-16 bg-white border-t border-bordercolor">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-10">
          <span class="text-xs font-bold text-accent uppercase tracking-widest">Local Presence &amp; Verification</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-primary mt-1">
            Appliance Repair Knights – Serving <span class="text-brandOrange"><?php echo htmlspecialchars($loc['city_name']); ?> &amp; Surrounding Areas</span>
          </h2>
          <p class="text-slate-600 mt-2 text-sm">
            Licensed local technicians available 7 days a week for fast service in <?php echo htmlspecialchars($loc['city_name']); ?> and across the Greater Toronto Area.
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
          
          <!-- Left: NAP Business Card -->
          <div class="lg:col-span-5 bg-slate-900 text-white p-8 rounded-2xl shadow-xl flex flex-col justify-between border border-slate-800 space-y-6">
            <div class="space-y-4">
              <div class="flex items-center gap-3">
                <img src="<?php echo $base_url; ?>img/Appliance_Repair_Knights_Logo-white.avif" alt="Appliance Repair Knights Logo" class="h-12 w-auto object-contain">
                <div>
                  <h3 class="text-xl font-extrabold text-white">Appliance Repair Knights Ltd.</h3>
                  <p class="text-xs text-amber-400 font-semibold">★ 5.0 Rated on Google Maps</p>
                </div>
              </div>

              <hr class="border-slate-800">

              <div class="space-y-3.5 text-xs sm:text-sm text-slate-300">
                <div class="flex items-start gap-3">
                  <svg class="w-5 h-5 text-brandOrange flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                  <div>
                    <strong class="text-white block">Service Address (GTA HQ):</strong>
                    <span>100 King St W, Toronto, ON M5X 1A9</span>
                    <span class="block text-slate-400 text-xs mt-0.5">(Proudly Serving <?php echo htmlspecialchars($loc['city_name']); ?>, <?php echo htmlspecialchars($loc['region']); ?> &amp; the entire GTA)</span>
                  </div>
                </div>

                <div class="flex items-center gap-3">
                  <svg class="w-5 h-5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                  <div>
                    <strong class="text-white block">Dispatch Phone:</strong>
                    <a href="tel:9057178905" class="gtm-web-call text-brandOrange font-bold text-base hover:underline">905-717-8905</a>
                  </div>
                </div>

                <div class="flex items-start gap-3">
                  <svg class="w-5 h-5 text-brandOrange flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  <div>
                    <strong class="text-white block">Operating Hours:</strong>
                    <span>Open 7 Days a Week: 8:00 AM – 9:00 PM</span>
                  </div>
                </div>
              </div>
            </div>

            <a href="https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059" target="_blank" rel="noopener noreferrer" class="w-full bg-brandOrange hover:bg-orange-600 text-white font-bold text-xs py-3 px-4 rounded-xl text-center flex items-center justify-center gap-2 transition-all shadow-md">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
              View Listing on Google Maps
            </a>
          </div>

          <!-- Right: Google Maps Embed Iframe -->
          <div class="lg:col-span-7 bg-lightbg rounded-2xl overflow-hidden border border-bordercolor shadow-md min-h-[350px]">
            <iframe 
              title="Appliance Repair Knights Service Map - <?php echo htmlspecialchars($loc['city_name']); ?>"
              src="https://maps.google.com/maps?q=Appliance+Repair+Knights+Ltd.+<?php echo urlencode($loc['city_name']); ?>+ON&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed" 
              width="100%" 
              height="100%" 
              style="border:0; min-height: 380px;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>

        </div>
      </div>
    </section>

    <!-- LOCAL CUSTOMER REVIEWS & TESTIMONIALS SECTION -->
    <?php if (!empty($loc['reviews'])): ?>
    <section class="py-16 bg-lightbg border-t border-bordercolor">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
          <span class="text-xs font-bold text-accent uppercase tracking-widest">Local Testimonials</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-primary mt-1">
            Real Customer Reviews from <span class="text-brandOrange"><?php echo htmlspecialchars($loc['city_name']); ?></span> Homeowners
          </h2>
          <div class="flex items-center justify-center gap-1 mt-2">
            <div class="flex text-amber-400 text-sm">★★★★★</div>
            <span class="text-xs font-bold text-slate-700 ml-1">5.0 / 5.0 Rating across GTA</span>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
          <?php foreach ($loc['reviews'] as $rev): ?>
            <div class="bg-white p-6 rounded-2xl border border-bordercolor shadow-md flex flex-col justify-between space-y-4">
              <div class="space-y-3">
                <div class="flex items-center justify-between">
                  <div class="flex text-amber-400 text-sm">
                    <?php for ($i=0; $i<($rev['rating']??5); $i++): ?>★<?php endfor; ?>
                  </div>
                  <span class="text-xs font-semibold text-slate-400"><?php echo htmlspecialchars($rev['date']); ?></span>
                </div>
                <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                  "<?php echo htmlspecialchars($rev['text']); ?>"
                </p>
              </div>
              <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                <div>
                  <h4 class="text-xs font-bold text-primary"><?php echo htmlspecialchars($rev['author']); ?></h4>
                  <p class="text-[11px] text-slate-500">📍 <?php echo htmlspecialchars($rev['location']); ?></p>
                </div>
                <span class="inline-flex items-center gap-1 bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2 py-0.5 rounded border border-emerald-200">
                  ✓ Verified Repair
                </span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- FAQS SECTION -->
    <?php if (!empty($loc['faqs'])): ?>
    <section class="py-16 bg-white border-t border-bordercolor">
      <div class="max-w-4xl mx-auto px-4">
        
        <div class="text-center mb-12">
          <span class="text-xs font-bold text-accent uppercase tracking-widest">Got Questions?</span>
          <h2 class="text-2xl sm:text-3xl font-heading font-extrabold text-primary mt-1">
            Frequently Asked Questions – <?php echo htmlspecialchars($loc['city_name']); ?> Appliance Repair
          </h2>
        </div>

        <div class="space-y-4">
          <?php foreach ($loc['faqs'] as $index => $faq): ?>
            <div class="bg-lightbg rounded-xl border border-bordercolor p-5">
              <h3 class="text-base font-bold text-primary flex items-center gap-2">
                <span class="text-brandOrange font-bold">Q.</span>
                <?php echo htmlspecialchars($faq['q']); ?>
              </h3>
              <p class="text-xs sm:text-sm text-slate-600 mt-2 pl-6 leading-relaxed">
                <?php echo htmlspecialchars($faq['a']); ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section>
    <?php endif; ?>

    <!-- CALL TO ACTION BANNER -->
    <section class="bg-primary text-white py-12 border-t border-slate-800">
      <div class="max-w-7xl mx-auto px-4 text-center space-y-6">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-heading font-extrabold">
          Ready to Get Your Appliance Fixed in <span class="text-accent"><?php echo htmlspecialchars($loc['city_name']); ?></span>?
        </h2>
        <p class="text-slate-300 max-w-xl mx-auto text-sm md:text-base">
          Our team is on standby 7 days a week. Book online or call <a href="tel:9057178905" class="gtm-web-call text-brandOrange font-bold underline">905-717-8905</a> now to lock in your same-day repair appointment.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
          <a href="tel:9057178905" class="gtm-web-call bg-brandOrange hover:bg-orange-600 text-white font-bold text-base px-8 py-3.5 rounded-lg shadow-lg hover:shadow-xl transition-all">
            Call 905-717-8905
          </a>
          <a href="../schedule.php" class="bg-white/10 hover:bg-white/20 text-white font-semibold text-base px-8 py-3.5 rounded-lg border border-white/20 transition-all">
            Book Online Now
          </a>
        </div>
      </div>
    </section>

  </main>

<?php include __DIR__ . '/../footer.php'; ?>
