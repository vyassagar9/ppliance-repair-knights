<?php
header("HTTP/1.1 404 Not Found");
$base_url = '/';
$page_title = '404 - Page Not Found | Appliance Repair Knights';
$page_description = 'The page you are looking for does not exist or has been moved. Explore our appliance repair services or contact Appliance Repair Knights.';
$page_keywords = 'appliance repair 404, page not found';
$canonical_url = 'https://www.appliancerepairknights.com/404';
include 'head.php';
?>
</head>
<body class="bg-lightbg text-secondary font-sans antialiased min-h-screen flex flex-col selection:bg-brandOrange selection:text-white">

<?php 
$base_url = '/';
$current_page = '404';
include 'header.php'; 
?>

<main class="flex-grow flex items-center justify-center py-16 md:py-24 px-4">
  <div class="max-w-3xl mx-auto text-center space-y-8">
    
    <!-- 404 Badge -->
    <div class="inline-flex items-center gap-2 bg-brandOrange/10 border border-brandOrange/30 text-brandOrange font-extrabold text-xs uppercase tracking-widest px-4 py-1.5 rounded-full">
      Error 404 — Page Not Found
    </div>

    <!-- Main Title -->
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-heading font-extrabold text-primary tracking-tight">
      Oops! Page Not Found
    </h1>

    <p class="text-slate-600 text-base md:text-lg max-w-xl mx-auto leading-relaxed">
      The page you are looking for might have been moved, renamed, or is temporarily unavailable. Let us help you find what you need.
    </p>

    <!-- Quick Action Buttons -->
    <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
      <a href="/index.php" class="bg-primary hover:bg-brandDarkBlue text-white font-bold px-8 py-3.5 rounded-xl transition-all shadow-md flex items-center gap-2 text-sm uppercase tracking-wider">
        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        Return Home
      </a>
      <a href="tel:9057178905" class="gtm-web-call bg-accent hover:bg-accent-hover text-white font-bold px-8 py-3.5 rounded-xl transition-all shadow-md flex items-center gap-2 text-sm uppercase tracking-wider">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
        Call 905-717-8905
      </a>
    </div>

    <!-- Quick Navigation Services Grid -->
    <div class="pt-10 border-t border-slate-200/80 text-left">
      <h2 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-6 text-center">Popular Services & Pages</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 text-xs font-semibold">
        <a href="/services/fridge-repair.php" class="p-3 bg-white border border-slate-200 rounded-xl text-primary hover:text-accent hover:border-accent transition-colors text-center shadow-sm">
          Fridge Repair
        </a>
        <a href="/services/washer-repair.php" class="p-3 bg-white border border-slate-200 rounded-xl text-primary hover:text-accent hover:border-accent transition-colors text-center shadow-sm">
          Washer Repair
        </a>
        <a href="/services/dryer-repair.php" class="p-3 bg-white border border-slate-200 rounded-xl text-primary hover:text-accent hover:border-accent transition-colors text-center shadow-sm">
          Dryer Repair
        </a>
        <a href="/services/dishwasher-repair.php" class="p-3 bg-white border border-slate-200 rounded-xl text-primary hover:text-accent hover:border-accent transition-colors text-center shadow-sm">
          Dishwasher Repair
        </a>
        <a href="/services/stove-repair.php" class="p-3 bg-white border border-slate-200 rounded-xl text-primary hover:text-accent hover:border-accent transition-colors text-center shadow-sm">
          Stove & Oven Repair
        </a>
        <a href="/services/microwave-repair.php" class="p-3 bg-white border border-slate-200 rounded-xl text-primary hover:text-accent hover:border-accent transition-colors text-center shadow-sm">
          Microwave Repair
        </a>
        <a href="/locations/pickering-appliance-repair.php" class="p-3 bg-white border border-slate-200 rounded-xl text-primary hover:text-accent hover:border-accent transition-colors text-center shadow-sm">
          Pickering Location
        </a>
        <a href="/schedule.php" class="p-3 bg-white border border-slate-200 rounded-xl text-primary hover:text-accent hover:border-accent transition-colors text-center shadow-sm">
          Book Appointment
        </a>
      </div>
    </div>

  </div>
</main>

<?php include 'footer.php'; ?>
