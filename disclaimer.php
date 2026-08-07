<?php 
$base_url = './';
$current_page = 'disclaimer';
?>
<!DOCTYPE html>
<html lang="en-CA" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disclaimer | Appliance Repair Knights</title>
  <meta name="description" content="Official Disclaimer for Appliance Repair Knights. Important information regarding out-of-warranty repairs and brand servicing policies.">
  <meta name="robots" content="index, follow">

  <!-- Google Fonts: Montserrat & Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brandBlue: '#0F4C81',
            brandDarkBlue: '#0A2E52',
            brandNavy: '#071D36',
            brandOrange: '#FF6B00',
            brandOrangeHover: '#E05D00',
            brandGreen: '#16A34A',
            brandLightBg: '#F4F7FB',
            brandBorder: '#E2E8F0'
          },
          fontFamily: {
            heading: ['Montserrat', 'sans-serif'],
            sans: ['Inter', 'sans-serif']
          }
        }
      }
    }
  </script>
  <!-- Global Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-white text-slate-800 font-sans antialiased">

<?php include 'header.php'; ?>

  <!-- BREADCRUMBS -->
  <nav class="bg-slate-50 border-b border-brandBorder py-3">
    <div class="max-w-7xl mx-auto px-4 text-xs font-medium text-slate-500 flex items-center gap-2">
      <a href="index.php" class="hover:text-brandOrange">Home</a>
      <span>/</span>
      <span class="text-slate-800 font-semibold">Disclaimer</span>
    </div>
  </nav>

  <main class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 space-y-8">
      
      <div class="border-b border-brandBorder pb-6">
        <h1 class="text-3xl sm:text-4xl font-heading font-black text-brandDarkBlue tracking-tight">WEBSITE &amp; SERVICE DISCLAIMER</h1>
        <p class="text-xs text-slate-400 mt-2">Last Updated: August 2026</p>
      </div>

      <div class="prose prose-slate max-w-none text-sm leading-relaxed space-y-6 text-slate-600">
        <p>
          The information provided on <strong>Appliance Repair Knights</strong> (appliancerepairknights.ca) is for general information and service booking purposes only.
        </p>

        <h2 class="text-lg font-heading font-bold text-brandDarkBlue">1. Out-of-Warranty Repair Notice</h2>
        <p class="bg-amber-50 border-l-4 border-amber-500 p-4 rounded-r-lg text-amber-900 font-medium">
          <strong>Note:</strong> Appliance Repair Knights specializes in professional repair and maintenance services for out-of-warranty residential appliances across Toronto &amp; GTA.
        </p>

        <h2 class="text-lg font-heading font-bold text-brandDarkBlue">2. Brand Names &amp; Trademarks</h2>
        <p>
          All manufacturer brand names, logos, product models, and trademarks mentioned on this website (such as Samsung, LG, Whirlpool, GE, Maytag, Bosch, KitchenAid, Frigidaire, Kenmore, etc.) are the property of their respective owners. Mention of these brands is solely for descriptive purposes to identify appliance compatibility and service capabilities.
        </p>

        <h2 class="text-lg font-heading font-bold text-brandDarkBlue">3. Accuracy &amp; Availability</h2>
        <p>
          While we strive to ensure that all information on this site is accurate, service response times and technician arrival windows may vary depending on weather, traffic, and high-volume emergency periods across Southern Ontario.
        </p>
      </div>

    </div>
  </main>

<?php include 'footer.php'; ?>
