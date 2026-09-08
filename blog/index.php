<?php
/**
 * Appliance Repair Knights Ltd. - Master Blog Hub (blog/index.php)
 * Clean, modern, category-filtered articles directory with E-E-A-T and rich snippets.
 * Design 100% unified with Services & Locations design system.
 */

require_once __DIR__ . '/../config.php';

$all_posts = require __DIR__ . '/blog-data.php';

// Category filter
$selected_cat = isset($_GET['category']) ? strtolower(trim($_GET['category'])) : 'all';

$filtered_posts = [];
foreach ($all_posts as $slug => $p) {
    if ($selected_cat === 'all' || (isset($p['category_slug']) && $p['category_slug'] === $selected_cat)) {
        $filtered_posts[$slug] = $p;
    }
}

// Meta configuration
$base_url = '../';
$current_page = 'blog';
$page_title = 'Appliance Repair Guides, Tips & Cost Insights | Appliance Repair Knights';
$page_description = 'Expert appliance repair guides, troubleshooting checklists, and transparent repair vs replace advice from certified technicians across Toronto & the GTA.';
$page_keywords = 'appliance repair blog, fridge repair cost Toronto, washing machine troubleshooting GTA, appliance repair advice Ontario';
$canonical_url = 'https://www.appliancerepairknights.com/blog';
$og_image = 'https://www.appliancerepairknights.com/img/appliance-repair-banner.webp';
$og_type = 'website';
$disable_global_schema = true;

$gmb_rating = defined('GMB_RATING_VALUE') ? GMB_RATING_VALUE : '5.0';
$gmb_reviews = defined('GMB_REVIEW_COUNT') ? GMB_REVIEW_COUNT : '12';

// Structured CollectionPage & Blog Schema
$custom_head_schema = '<script type="application/ld+json">' . "\n" . json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'LocalBusiness',
            '@id' => 'https://www.appliancerepairknights.com/#organization',
            'name' => 'Appliance Repair Knights Ltd.',
            'url' => 'https://www.appliancerepairknights.com/',
            'logo' => 'https://www.appliancerepairknights.com/img/logo.webp',
            'image' => 'https://www.appliancerepairknights.com/img/appliance-repair-banner.webp',
            'telephone' => '905-717-8905',
            'email' => 'info@appliancerepairknights.com',
            'priceRange' => '$$',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '100 King St W',
                'addressLocality' => 'Toronto',
                'addressRegion' => 'ON',
                'postalCode' => 'M5X 1A9',
                'addressCountry' => 'CA'
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 43.6487,
                'longitude' => -79.3817
            ],
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => (string)$gmb_rating,
                'reviewCount' => (string)$gmb_reviews
            ]
        ],
        [
            '@type' => 'CollectionPage',
            '@id' => 'https://www.appliancerepairknights.com/blog#webpage',
            'url' => 'https://www.appliancerepairknights.com/blog',
            'name' => 'Appliance Repair Guides, Tips & Cost Insights',
            'description' => $page_description,
            'publisher' => [
                '@id' => 'https://www.appliancerepairknights.com/#organization'
            ]
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => 'https://www.appliancerepairknights.com/'
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Blog & Guides',
                    'item' => 'https://www.appliancerepairknights.com/blog'
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n</script>\n";

require_once __DIR__ . '/../head.php';
?>

<body class="bg-lightbg text-secondary font-sans antialiased min-h-screen flex flex-col selection:bg-brandOrange selection:text-white">
  <?php require_once __DIR__ . '/../header.php'; ?>

  <!-- BREADCRUMBS NAVIGATION (Unified with site standard) -->
  <nav class="bg-white border-b border-bordercolor" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 py-3 text-xs font-semibold flex items-center gap-2">
      <a href="<?php echo $base_url; ?>" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold">Appliance Guides &amp; Blog</span>
    </div>
  </nav>

  <!-- UNIFIED HERO SECTION (Exact dark navy style matching Services & Locations) -->
  <section class="bg-primary text-white py-12 md:py-16 overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <div class="inline-flex items-center gap-2 bg-brandOrange/20 border border-brandOrange/40 text-accent text-xs md:text-sm font-bold uppercase tracking-widest px-3.5 py-1 rounded-full mb-4">
        <span class="w-2 h-2 rounded-full bg-accent animate-ping"></span>
        APPLIANCE REPAIR KNOWLEDGE BASE
      </div>
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-heading font-extrabold text-white tracking-tight leading-tight max-w-3xl mx-auto">
        Appliance Repair Guides &amp; Homeowner Tips
      </h1>
      <p class="text-slate-300 text-base md:text-lg max-w-2xl mx-auto mt-4 leading-relaxed">
        Expert troubleshooting advice, repair vs. replace breakdowns, and transparent guidance directly from certified GTA service technicians.
      </p>

      <!-- Category Filter Pills (High-contrast on dark navy) -->
      <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mt-8">
        <a href="?category=all" class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all <?php echo ($selected_cat === 'all') ? 'bg-accent text-white shadow-lg' : 'bg-slate-800/90 hover:bg-slate-700 text-slate-200 border border-slate-700'; ?>">
          All Guides (<?php echo count($all_posts); ?>)
        </a>
        <a href="?category=fridge" class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all <?php echo ($selected_cat === 'fridge') ? 'bg-accent text-white shadow-lg' : 'bg-slate-800/90 hover:bg-slate-700 text-slate-200 border border-slate-700'; ?>">
          Refrigerator
        </a>
        <a href="?category=washer" class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all <?php echo ($selected_cat === 'washer') ? 'bg-accent text-white shadow-lg' : 'bg-slate-800/90 hover:bg-slate-700 text-slate-200 border border-slate-700'; ?>">
          Washer &amp; Dryer
        </a>
        <a href="?category=dishwasher" class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all <?php echo ($selected_cat === 'dishwasher') ? 'bg-accent text-white shadow-lg' : 'bg-slate-800/90 hover:bg-slate-700 text-slate-200 border border-slate-700'; ?>">
          Dishwasher
        </a>
        <a href="?category=stove" class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all <?php echo ($selected_cat === 'stove') ? 'bg-accent text-white shadow-lg' : 'bg-slate-800/90 hover:bg-slate-700 text-slate-200 border border-slate-700'; ?>">
          Oven &amp; Stove
        </a>
      </div>
    </div>
  </section>

  <!-- MAIN ARTICLES GRID -->
  <main class="flex-grow py-12 md:py-16 bg-lightbg">
    <div class="max-w-7xl mx-auto px-4">

      <?php if (empty($filtered_posts)): ?>
      <div class="text-center py-16 bg-white rounded-2xl border border-bordercolor p-8 shadow-sm">
        <p class="text-secondary text-lg">No articles found in this category right now.</p>
        <a href="?category=all" class="mt-4 inline-block px-6 py-2.5 bg-primary text-white font-bold rounded-xl text-sm hover:bg-slate-800 transition-colors">
          View All Guides
        </a>
      </div>
      <?php else: ?>

      <!-- 3-COLUMN CARDS GRID (Unified with brand design tokens) -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($filtered_posts as $post_slug => $item): ?>
        <article class="bg-white border border-bordercolor rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
          
          <!-- Image Banner -->
          <a href="<?php echo $base_url; ?>blog/<?php echo htmlspecialchars($post_slug); ?>" class="block relative aspect-[16/9] overflow-hidden bg-slate-100">
            <img src="<?php echo $base_url . htmlspecialchars($item['featured_image']); ?>" 
                 alt="<?php echo htmlspecialchars($item['primary_keyword']); ?>" 
                 title="<?php echo htmlspecialchars($item['primary_keyword']); ?>" 
                 width="400" 
                 height="225"
                 loading="lazy"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <span class="absolute top-3 left-3 bg-primary text-white text-[11px] font-extrabold uppercase px-2.5 py-1 rounded-md shadow">
              <?php echo htmlspecialchars($item['category']); ?>
            </span>
          </a>

          <!-- Article Details -->
          <div class="p-6 flex flex-col flex-grow">
            <div class="flex items-center justify-between text-xs text-slate-400 mb-3">
              <span><?php echo date('M j, Y', strtotime($item['date_published'])); ?></span>
              <span>⏱️ <?php echo htmlspecialchars($item['read_time']); ?></span>
            </div>

            <h2 class="text-lg sm:text-xl font-heading font-bold text-primary leading-snug group-hover:text-accent transition-colors mb-3">
              <a href="<?php echo $base_url; ?>blog/<?php echo htmlspecialchars($post_slug); ?>">
                <?php echo htmlspecialchars($item['title']); ?>
              </a>
            </h2>

            <p class="text-secondary text-xs sm:text-sm leading-relaxed mb-6 flex-grow">
              <?php echo htmlspecialchars(mb_strimwidth($item['summary'], 0, 150, '...')); ?>
            </p>

            <div class="pt-4 border-t border-bordercolor flex items-center justify-between">
              <span class="text-xs text-slate-500 font-medium">By <?php echo htmlspecialchars($item['author']); ?></span>
              <a href="<?php echo $base_url; ?>blog/<?php echo htmlspecialchars($post_slug); ?>" 
                 class="text-xs font-bold text-accent group-hover:text-accent-hover flex items-center gap-1 transition-colors">
                <span>Read Guide</span>
                <span>&rarr;</span>
              </a>
            </div>
          </div>

        </article>
        <?php endforeach; ?>
      </div>

      <?php endif; ?>

      <!-- EMERGENCY BANNER & BOTTOM TRUST (Exact high-contrast primary card) -->
      <section class="mt-16 bg-primary text-white rounded-3xl p-8 md:p-12 shadow-xl border border-slate-800 relative overflow-hidden">
        <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
          <div>
            <span class="inline-block px-3 py-1 bg-emerald-500 text-white text-xs font-extrabold uppercase rounded-full mb-3 shadow">
              $0 Service Call Fee with Repair
            </span>
            <h3 class="text-2xl sm:text-3xl md:text-4xl font-heading font-extrabold text-white">
              Need Appliance Repair Right Away?
            </h3>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-xl">
              Don't wait for breakdowns to get worse. Our certified technicians arrive fully equipped across Toronto, Mississauga, Brampton &amp; the GTA.
            </p>
          </div>
          <div class="flex flex-col sm:flex-row items-center gap-4 flex-shrink-0">
            <a href="tel:9057178905" class="gtm-web-call bg-accent hover:bg-accent-hover text-white font-black px-8 py-4 rounded-xl text-base shadow-lg transition-all flex items-center gap-2">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
              <span>Call 905-717-8905</span>
            </a>
            <a href="<?php echo $base_url; ?>schedule" class="bg-white hover:bg-slate-100 text-primary font-bold px-7 py-4 rounded-xl text-sm uppercase tracking-wider transition-all shadow">
              Book Online
            </a>
          </div>
        </div>
      </section>

    </div>
  </main>

  <!-- UNIFIED CUSTOMER REVIEWS (Matching All Service Pages) -->
  <?php include __DIR__ . '/../reviews-widget.php'; ?>

  <?php require_once __DIR__ . '/../footer.php'; ?>
</body>
</html>
