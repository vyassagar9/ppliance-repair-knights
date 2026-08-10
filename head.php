<?php
// Dynamic Head Variables with Fallbacks
$base_url = isset($base_url) ? $base_url : '';
$page_title = isset($page_title) ? $page_title : 'Same-Day Appliance Repair Toronto & GTA | Appliance Repair Knights';
$page_description = isset($page_description) ? $page_description : 'Licensed & insured same-day appliance repair across Toronto, GTA, Hamilton, Kitchener-Waterloo & Oshawa. 24/7 refrigerator, washer, dryer, stove, dishwasher repair. Free service call with repair! Call 905-717-8905.';
$page_keywords = isset($page_keywords) ? $page_keywords : 'appliance repair Toronto, same day appliance repair GTA, fridge repair Hamilton, washer repair Mississauga, dryer repair Brampton, dishwasher repair Oshawa, stove repair Kitchener, Appliance Repair Knights';
$canonical_url = isset($canonical_url) ? $canonical_url : 'https://www.appliancerepairknights.com/';
$og_image = isset($og_image) ? $og_image : 'https://www.appliancerepairknights.com/img/logo.png';
$og_type = isset($og_type) ? $og_type : 'website';
$robots_meta = isset($robots_meta) ? $robots_meta : 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';
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
  <!-- 1. Technical Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="theme-color" content="#0F4C81">

  <!-- 2. Primary On-Page SEO Meta Tags -->
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
  <meta name="robots" content="<?php echo htmlspecialchars($robots_meta); ?>">
  <meta name="language" content="English">
  <meta name="author" content="Appliance Repair Knights">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

  <!-- 3. Local SEO Geo Tags (Crucial for GTA Service Business) -->
  <meta name="geo.region" content="CA-ON">
  <meta name="geo.placename" content="Toronto">
  <meta name="geo.position" content="43.6487;-79.3817">
  <meta name="ICBM" content="43.6487, -79.3817">

  <!-- 4. Complete Favicon & App Icons Set -->
  <link rel="icon" type="image/x-icon" href="<?php echo $base_url; ?>img/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url; ?>img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url; ?>img/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>img/apple-touch-icon.png">
  <link rel="manifest" href="<?php echo $base_url; ?>img/site.webmanifest">
  <meta name="msapplication-TileColor" content="#0F4C81">

  <!-- 5. Open Graph Meta Tags (Social Media & WhatsApp Preview) -->
  <meta property="og:type" content="<?php echo htmlspecialchars($og_type); ?>">
  <meta property="og:site_name" content="Appliance Repair Knights">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale" content="en_CA">

  <!-- Twitter Meta Tags -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">

  <!-- 7. Performance & Resource Preloading (PageSpeed Optimizer) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800;900&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Production Local Compiled Tailwind CSS (Fastest Load Speed) -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/tailwind.min.css">

  <!-- Global Custom Stylesheet -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">

  <!-- Central JSON-LD LocalBusiness Schema for Google SEO & Entity Matching -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "@id": "https://www.appliancerepairknights.com/#organization",
    "name": "Appliance Repair Knights Ltd.",
    "url": "https://www.appliancerepairknights.com/",
    "logo": "https://www.appliancerepairknights.com/img/logo.png",
    "image": "https://www.appliancerepairknights.com/img/bnr.png",
    "telephone": "905-717-8905",
    "email": "info@appliancerepairknights.com",
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
      "latitude": 43.6487,
      "longitude": -79.3817
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        "opens": "08:00",
        "closes": "21:00"
      }
    ]
  }
  </script>
</head>
