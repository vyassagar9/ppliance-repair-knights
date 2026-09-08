<?php
/**
 * Dynamic Master Blog Post Template
 * Appliance Repair Knights Ltd.
 * 100% Unified with Services & Locations Brand Design System.
 */

require_once __DIR__ . '/../config.php';

// Load master blog dataset
$all_posts = require __DIR__ . '/blog-data.php';

// Get and sanitize requested slug
$raw_slug = isset($_GET['slug']) ? strtolower(trim($_GET['slug'])) : '';
$slug = preg_replace('/\.php$/', '', $raw_slug);

if (empty($slug) || !isset($all_posts[$slug])) {
    http_response_code(404);
    $base_url = '../';
    include __DIR__ . '/../404.php';
    exit;
}

$post = $all_posts[$slug];

// Extract Table of Contents Headings globally for Desktop Sidebar & Mobile Bottom Sheet Drawer
preg_match_all('/<section id="([^"]+)"[^>]*>.*?<h2[^>]*>(.*?)<\/h2>/is', $post['content_html'], $toc_matches, PREG_SET_ORDER);

// Define Page Variables for head.php
$base_url = '../';
$current_page = 'blog';
$page_title = $post['meta_title'] . ' | Appliance Repair Knights';
$page_description = $post['meta_description'];
$page_keywords = $post['primary_keyword'] . ', ' . $post['related_keywords'];
$canonical_url = 'https://www.appliancerepairknights.com/blog/' . $slug;
$og_image = 'https://www.appliancerepairknights.com/' . $post['featured_image'];
$og_type = 'article';
$disable_global_schema = true;

$gmb_rating = defined('GMB_RATING_VALUE') ? GMB_RATING_VALUE : '5.0';
$gmb_reviews = defined('GMB_REVIEW_COUNT') ? GMB_REVIEW_COUNT : '12';

// Build FAQ Schema Entities
$faq_schema_items = [];
if (!empty($post['faqs'])) {
    foreach ($post['faqs'] as $faq) {
        $faq_schema_items[] = [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a']
            ]
        ];
    }
}

// Build Unified JSON-LD Schema (@graph: LocalBusiness + BlogPosting + BreadcrumbList + FAQPage)
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
            '@type' => 'BlogPosting',
            '@id' => $canonical_url . '#article',
            'isPartOf' => [
                '@type' => 'Blog',
                '@id' => 'https://www.appliancerepairknights.com/blog#blog',
                'name' => 'Appliance Repair Knights Blog & Guides',
                'publisher' => [
                    '@id' => 'https://www.appliancerepairknights.com/#organization'
                ]
            ],
            'headline' => $post['title'],
            'description' => $post['meta_description'],
            'image' => $og_image,
            'datePublished' => $post['date_published'] . 'T08:00:00-04:00',
            'dateModified' => $post['date_modified'] . 'T08:00:00-04:00',
            'mainEntityOfPage' => $canonical_url,
            'author' => [
                '@type' => 'Organization',
                'name' => $post['author'],
                'url' => 'https://www.appliancerepairknights.com/about'
            ],
            'publisher' => [
                '@id' => 'https://www.appliancerepairknights.com/#organization'
            ],
            'articleSection' => $post['category'],
            'keywords' => $post['primary_keyword'] . ', ' . $post['related_keywords']
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
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => $post['title'],
                    'item' => $canonical_url
                ]
            ]
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => $faq_schema_items
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n</script>\n";

require_once __DIR__ . '/../head.php';
?>

<body class="bg-lightbg text-secondary font-sans antialiased min-h-screen flex flex-col selection:bg-brandOrange selection:text-white overflow-x-clip w-full max-w-full">
  <?php require_once __DIR__ . '/../header.php'; ?>

  <!-- BREADCRUMBS NAVIGATION (100% Unified with Site Standard) -->
  <nav class="bg-white border-b border-bordercolor" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 text-xs font-semibold flex items-center gap-2 flex-wrap">
      <a href="<?php echo $base_url ? $base_url : './'; ?>" class="text-secondary hover:text-accent transition-colors">Home</a>
      <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <a href="<?php echo $base_url; ?>blog" class="text-secondary hover:text-accent transition-colors">Blog &amp; Guides</a>
      <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      <span class="text-primary font-bold truncate max-w-[200px] sm:max-w-sm md:max-w-lg"><?php echo htmlspecialchars($post['title']); ?></span>
    </div>
  </nav>

  <!-- EDITORIAL ARTICLE WRAPPER -->
  <main class="flex-grow py-6 sm:py-10 w-full max-w-full overflow-x-clip">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full max-w-full">

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start blog-main-grid w-full min-w-0 max-w-full">

        <!-- ARTICLE CONTENT (Left on Desktop, 8 Columns; First on Mobile) -->
        <article class="lg:col-span-8 space-y-8 blog-article-col w-full min-w-0 max-w-full">

          <!-- Minimalist Editorial Header -->
          <header class="space-y-4">
            <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-brandBlue bg-brandBlue/10 px-3 py-1 rounded-full">
              <?php echo htmlspecialchars($post['category']); ?>
            </span>

            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-[2.6rem] font-heading font-extrabold text-slate-900 tracking-tight leading-[1.2]">
              <?php echo htmlspecialchars($post['title']); ?>
            </h1>

            <!-- Minimalist Byline & Share Bar -->
            <div class="flex flex-wrap items-center justify-between gap-4 text-xs sm:text-sm text-slate-500 pt-2 border-b border-slate-100 pb-4">
              <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                <div class="flex items-center gap-2 text-slate-900 font-semibold">
                  <span class="w-6 h-6 rounded-full bg-brandBlue text-white text-[10px] font-bold flex items-center justify-center">ARK</span>
                  <span><?php echo htmlspecialchars($post['author']); ?></span>
                </div>
                <span class="text-slate-300">•</span>
                <span>Updated: <?php echo date('M j, Y', strtotime($post['date_published'])); ?></span>
                <span class="text-slate-300">•</span>
                <span>⏱️ <?php echo htmlspecialchars($post['read_time']); ?></span>
                <span class="text-slate-300">•</span>
                <span class="inline-flex items-center gap-1 text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded text-xs font-medium">
                  <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                  Verified Field Guide
                </span>
              </div>

              <!-- SHARE BUTTON & DROPDOWN -->
              <div class="relative ml-auto" id="share-menu-container">
                <button type="button" 
                        onclick="toggleShareMenu(event)" 
                        id="share-menu-button" 
                        class="inline-flex items-center gap-2 text-slate-800 hover:text-brandBlue font-bold text-sm transition-colors px-3 py-1.5 rounded-full hover:bg-slate-100/90 border border-slate-200 shadow-sm"
                        aria-expanded="false" 
                        aria-haspopup="true">
                  <svg class="w-4 h-4 text-slate-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                  </svg>
                  <span>Share</span>
                </button>

                <!-- Desktop Share Dropdown Card (Screens >= 768px) -->
                <div id="share-dropdown-card" 
                     class="hidden max-md:!hidden absolute right-0 top-full mt-2 w-52 bg-white rounded-2xl p-2 shadow-xl border border-slate-200/90 z-50 flex-col gap-1 transition-all">
                  
                  <!-- WhatsApp -->
                  <button type="button" onclick="shareToSocial('whatsapp')" class="w-full hover:bg-slate-50 transition-colors rounded-xl py-2 px-3 flex items-center gap-3 text-slate-800 font-semibold text-xs text-left">
                    <svg class="w-4 h-4 fill-[#25D366] flex-shrink-0" viewBox="0 0 24 24">
                      <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    <span>WhatsApp</span>
                  </button>

                  <!-- Facebook -->
                  <button type="button" onclick="shareToSocial('facebook')" class="w-full hover:bg-slate-50 transition-colors rounded-xl py-2 px-3 flex items-center gap-3 text-slate-800 font-semibold text-xs text-left">
                    <svg class="w-4 h-4 flex-shrink-0 fill-[#1877F2]" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
                    </svg>
                    <span>Facebook</span>
                  </button>

                  <!-- x.com -->
                  <button type="button" onclick="shareToSocial('x')" class="w-full hover:bg-slate-50 transition-colors rounded-xl py-2 px-3 flex items-center gap-3 text-slate-800 font-semibold text-xs text-left">
                    <svg class="w-4 h-4 flex-shrink-0 text-slate-900" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                    <span>x.com</span>
                  </button>

                  <!-- Linkedin -->
                  <button type="button" onclick="shareToSocial('linkedin')" class="w-full hover:bg-slate-50 transition-colors rounded-xl py-2 px-3 flex items-center gap-3 text-slate-800 font-semibold text-xs text-left">
                    <svg class="w-4 h-4 flex-shrink-0 fill-[#0A66C2]" viewBox="0 0 24 24">
                      <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.2a1.66 1.66 0 0 0-1.67 1.66 1.67 1.67 0 0 0 1.67 1.66 1.67 1.67 0 0 0 1.67-1.66A1.66 1.66 0 0 0 7.83 6.2z"/>
                    </svg>
                    <span>Linkedin</span>
                  </button>

                  <!-- Mail -->
                  <button type="button" onclick="shareToSocial('mail')" class="w-full hover:bg-slate-50 transition-colors rounded-xl py-2 px-3 flex items-center gap-3 text-slate-800 font-semibold text-xs text-left">
                    <svg class="w-4 h-4 flex-shrink-0 text-slate-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                      <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg>
                    <span>Email</span>
                  </button>

                  <!-- Copy link -->
                  <button type="button" onclick="copyBlogLink(this)" class="w-full hover:bg-slate-50 transition-colors rounded-xl py-2 px-3 flex items-center gap-3 text-slate-800 font-semibold text-xs text-left border-t border-slate-100 mt-0.5 pt-2">
                    <svg class="w-4 h-4 flex-shrink-0 text-slate-800 copy-link-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                    </svg>
                    <span class="copy-link-label">Copy link</span>
                  </button>
                </div>
              </div>
            </div>
          </header>

          <!-- QUICK ANSWER BOX (Targeting Google Featured Snippet #0) -->
          <div class="bg-slate-50/90 border-l-4 border-brandBlue rounded-r-2xl p-5 sm:p-6 shadow-[0_1px_3px_rgba(0,0,0,0.04)]">
            <div class="flex items-center gap-2 mb-2 text-slate-900 font-heading font-bold text-sm sm:text-base">
              <span>⚡</span>
              <span>Quick Answer &amp; Expert Recommendation</span>
            </div>
            <p class="text-slate-700 text-sm sm:text-base leading-relaxed">
              <?php echo htmlspecialchars($post['quick_answer']); ?>
            </p>
          </div>

          <!-- Featured Image (SEO Optimized with Primary Keyword) -->
          <?php if (!empty($post['featured_image'])): ?>
          <div class="rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm bg-slate-100">
            <img src="<?php echo $base_url . htmlspecialchars($post['featured_image']); ?>" 
                 alt="<?php echo htmlspecialchars($post['primary_keyword']); ?>" 
                 title="<?php echo htmlspecialchars($post['primary_keyword']); ?>" 
                 width="1200" 
                 height="675" 
                 fetchpriority="high"
                 class="w-full h-auto object-cover max-h-[460px]">
          </div>
          <?php endif; ?>

          <!-- Semantic Body Content -->
          <div class="article-body">
            <?php echo $post['content_html']; ?>
          </div>

          <!-- FAQ ACCORDION (Minimalist design) -->
          <?php if (!empty($post['faqs'])): ?>
          <section class="mt-12 pt-8 border-t border-slate-200 scroll-mt-24 space-y-6" id="faqs">
            <div>
              <span class="text-xs font-bold uppercase tracking-wider text-brandBlue">Knowledge Base</span>
              <h3 class="text-2xl sm:text-3xl font-heading font-bold text-slate-900 mt-1">
                Frequently Asked Questions
              </h3>
            </div>

            <div class="divide-y divide-slate-200 border-y border-slate-200">
              <?php foreach ($post['faqs'] as $idx => $faq): ?>
              <div class="py-4">
                <button type="button" 
                        onclick="toggleFaq('faq-<?php echo $idx; ?>')" 
                        class="w-full text-left flex items-center justify-between gap-4 font-heading font-bold text-slate-900 text-base sm:text-lg hover:text-brandBlue transition-colors focus:outline-none"
                        aria-expanded="false" 
                        aria-controls="faq-<?php echo $idx; ?>">
                  <span><?php echo htmlspecialchars($faq['q']); ?></span>
                  <svg id="icon-faq-<?php echo $idx; ?>" class="w-5 h-5 text-slate-400 flex-shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <div id="faq-<?php echo $idx; ?>" class="hidden pt-3 text-sm sm:text-base text-slate-600 leading-relaxed">
                  <?php echo htmlspecialchars($faq['a']); ?>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </section>
          <?php endif; ?>

          <!-- E-E-A-T AUTHOR CREDENTIALS SIGN-OFF -->
          <div class="bg-slate-50 border border-slate-200/90 rounded-2xl p-6 sm:p-8 shadow-sm flex flex-col sm:flex-row items-center sm:items-start gap-6 sm:gap-8 my-8">
            <div class="author-box-logo-badge">
              <img src="<?php echo $base_url; ?>img/logo.webp" alt="Appliance Repair Knights Team" class="h-11 w-auto object-contain">
            </div>
            <div class="space-y-2 flex-grow text-center sm:text-left">
              <div class="flex items-center justify-center sm:justify-start gap-2.5 flex-wrap">
                <h4 class="font-heading font-bold text-slate-900 text-base sm:text-lg">Written &amp; Reviewed by Certified Field Technicians</h4>
                <span class="px-2.5 py-0.5 bg-emerald-100 text-emerald-800 text-[11px] font-bold rounded-full uppercase tracking-wide">Licensed &amp; Insured</span>
              </div>
              <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                Appliance Repair Knights Ltd. provides professional appliance diagnostics and repair across Toronto and the GTA. Every article is written and fact-checked by our active field technicians who repair hundreds of refrigerators, washers, and dryers each month.
              </p>
            </div>
          </div>

          <!-- RELATED SERVICE CALLOUT (Dynamic category matching) -->
          <?php 
          $cat_service_map = [
            'Refrigerator' => ['name' => 'Refrigerator Repair', 'url' => 'services/fridge-repair', 'desc' => 'Need emergency refrigerator or freezer repair? Our licensed GTA technicians carry OEM compressors, thermostats, and coils.'],
            'Washing Machine' => ['name' => 'Washing Machine Repair', 'url' => 'services/washer-repair', 'desc' => 'Washing machine leaking or not draining? Certified technicians ready with drain pumps, belts, and bearings across Toronto.'],
            'Dryer' => ['name' => 'Dryer Repair & Venting', 'url' => 'services/dryer-repair', 'desc' => 'Dryer not heating or taking multiple cycles? We repair heating elements, thermal fuses, and clean blocked vents.'],
            'Dishwasher' => ['name' => 'Dishwasher Repair', 'url' => 'services/dishwasher-repair', 'desc' => 'Dishwasher leaving cloudy dishes or not draining? Professional circulation pump and spray arm restoration in Toronto.'],
          ];
          $target_srv = isset($cat_service_map[$post['category']]) ? $cat_service_map[$post['category']] : $cat_service_map['Refrigerator'];
          ?>
          <div class="p-6 bg-slate-50 border border-slate-200/90 rounded-2xl flex flex-col sm:flex-row items-center justify-between gap-4">
            <div>
              <span class="text-xs font-bold text-brandBlue uppercase tracking-wider">Professional Repair Service</span>
              <h4 class="text-lg font-heading font-bold text-slate-900 mt-0.5">Need <?php echo htmlspecialchars($target_srv['name']); ?> in Toronto &amp; GTA?</h4>
              <p class="text-xs text-slate-600 mt-0.5"><?php echo htmlspecialchars($target_srv['desc']); ?></p>
            </div>
            <a href="<?php echo $base_url . $target_srv['url']; ?>" class="flex-shrink-0 px-5 py-2.5 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-xl text-xs uppercase tracking-wider transition-all shadow-sm">
              View Service &rarr;
            </a>
          </div>

          <!-- MORE RECENT GUIDES & BLOG (Bottom of article) -->
          <?php 
          $other_grid_posts = array_filter(array_keys($all_posts), function($k) use ($slug) { return $k !== $slug; });
          if (!empty($other_grid_posts)): 
          ?>
          <section class="mt-12 pt-8 border-t border-slate-200 space-y-6">
            <div class="flex items-center justify-between">
              <div>
                <span class="text-xs font-bold uppercase tracking-wider text-brandBlue">More Articles</span>
                <h3 class="text-xl sm:text-2xl font-heading font-bold text-slate-900 mt-1">
                  Recent Appliance Repair Guides
                </h3>
              </div>
              <a href="<?php echo $base_url; ?>blog" class="text-xs font-bold text-brandOrange hover:underline flex items-center gap-1">
                <span>View All</span> &rarr;
              </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <?php 
              $recent_grid_count = 0;
              foreach ($all_posts as $g_slug => $g_post): 
                if ($g_slug === $slug) continue;
                if ($recent_grid_count >= 2) break;
                $recent_grid_count++;
              ?>
              <a href="<?php echo $base_url; ?>blog/<?php echo htmlspecialchars($g_slug); ?>" class="group bg-white border border-slate-200/90 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col">
                <div class="aspect-[16/9] overflow-hidden bg-slate-100">
                  <img src="<?php echo $base_url . htmlspecialchars($g_post['featured_image']); ?>" 
                       alt="<?php echo htmlspecialchars($g_post['primary_keyword']); ?>" 
                       title="<?php echo htmlspecialchars($g_post['primary_keyword']); ?>" 
                       class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-5 flex flex-col flex-grow">
                  <span class="text-[10px] font-bold text-brandOrange uppercase tracking-wide">
                    <?php echo htmlspecialchars($g_post['category']); ?>
                  </span>
                  <h4 class="text-sm font-heading font-bold text-slate-900 group-hover:text-brandBlue transition-colors leading-snug mt-1">
                    <?php echo htmlspecialchars($g_post['title']); ?>
                  </h4>
                  <p class="text-xs text-slate-500 mt-2 line-clamp-2 leading-relaxed flex-grow">
                    <?php echo htmlspecialchars(mb_strimwidth($g_post['summary'], 0, 120, '...')); ?>
                  </p>
                  <span class="text-[11px] text-slate-400 block mt-3 pt-2.5 border-t border-slate-100">
                    <?php echo date('M j, Y', strtotime($g_post['date_published'])); ?> • ⏱️ <?php echo htmlspecialchars($g_post['read_time']); ?>
                  </span>
                </div>
              </a>
              <?php endforeach; ?>
            </div>
          </section>
          <?php endif; ?>

        </article>

        <!-- STREAMLINED SIDEBAR (Right on Desktop, 4 Columns; Second on Mobile) -->
        <aside class="lg:col-span-4 space-y-6 lg:sticky lg:top-24 blog-sidebar-col w-full min-w-0 max-w-full">

          <!-- 1. TABLE OF CONTENTS (In This Guide) -->
          <div class="bg-slate-50/90 border border-slate-200/90 rounded-2xl p-4 sm:p-4.5 shadow-[0_1px_3px_rgba(0,0,0,0.02)]">
            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 font-heading mb-2.5 pb-2 border-b border-slate-200/60 flex items-center justify-between">
              <span class="flex items-center gap-2">
                <svg class="w-4 h-4 text-brandBlue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                <span>In This Guide</span>
              </span>
              <span class="text-[10px] font-semibold text-slate-500 font-sans tracking-normal bg-white px-2 py-0.5 rounded border border-slate-200/70">
                <?php echo (!empty($toc_matches) ? count($toc_matches) : 0) + (!empty($post['faqs']) ? 1 : 0); ?> topics
              </span>
            </h3>
            <nav class="border-l-2 border-slate-200/80 space-y-0.5" id="sidebar-toc-nav">
              <?php if (!empty($toc_matches)): ?>
                <?php foreach ($toc_matches as $t_idx => $t_match): 
                  $sec_id = $t_match[1];
                  $sec_title = trim(preg_replace('/\s+/', ' ', strip_tags($t_match[2])));
                ?>
                <a href="#<?php echo htmlspecialchars($sec_id); ?>" 
                   onclick="smoothScrollTo(event, '<?php echo htmlspecialchars($sec_id); ?>')"
                   data-toc-target="<?php echo htmlspecialchars($sec_id); ?>"
                   class="toc-sidebar-link">
                  <?php echo ($t_idx + 1) . '. ' . htmlspecialchars($sec_title); ?>
                </a>
                <?php endforeach; ?>
              <?php endif; ?>
              <?php if (!empty($post['faqs'])): ?>
              <a href="#faqs" 
                 onclick="smoothScrollTo(event, 'faqs')"
                 data-toc-target="faqs"
                 class="toc-sidebar-link">
                <?php echo (!empty($toc_matches) ? count($toc_matches) + 1 : 1) . '. Frequently Asked Questions'; ?>
              </a>
              <?php endif; ?>
            </nav>
          </div>

          <!-- 2. RECENT BLOGS WIDGET -->
          <?php 
          $other_sidebar_posts = array_filter(array_keys($all_posts), function($k) use ($slug) { return $k !== $slug; });
          if (!empty($other_sidebar_posts)): 
          ?>
          <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-sm space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
              <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 font-heading flex items-center gap-2">
                <svg class="w-4 h-4 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                <span>Recent Guides &amp; Blog</span>
              </h3>
              <a href="<?php echo $base_url; ?>blog" class="text-[11px] font-bold text-brandBlue hover:text-brandOrange transition-colors">
                View All &rarr;
              </a>
            </div>

            <div class="space-y-3 divide-y divide-slate-100">
              <?php 
              $sidebar_recent_count = 0;
              foreach ($all_posts as $sb_slug => $sb_post): 
                if ($sb_slug === $slug) continue;
                if ($sidebar_recent_count >= 3) break;
                $sidebar_recent_count++;
              ?>
              <a href="<?php echo $base_url; ?>blog/<?php echo htmlspecialchars($sb_slug); ?>" class="group flex items-start gap-3 pt-3 first:pt-0">
                <div class="w-16 h-16 rounded-xl overflow-hidden bg-slate-100 flex-shrink-0 border border-slate-200/60 shadow-sm">
                  <img src="<?php echo $base_url . htmlspecialchars($sb_post['featured_image']); ?>" 
                       alt="<?php echo htmlspecialchars($sb_post['primary_keyword']); ?>" 
                       title="<?php echo htmlspecialchars($sb_post['primary_keyword']); ?>" 
                       class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="flex-grow min-w-0">
                  <span class="text-[10px] font-bold text-brandOrange uppercase tracking-wide block truncate">
                    <?php echo htmlspecialchars($sb_post['category']); ?>
                  </span>
                  <h4 class="text-xs font-bold text-slate-800 group-hover:text-brandBlue transition-colors leading-snug line-clamp-2 mt-0.5">
                    <?php echo htmlspecialchars($sb_post['title']); ?>
                  </h4>
                  <span class="text-[11px] text-slate-400 block mt-1">
                    <?php echo date('M j, Y', strtotime($sb_post['date_published'])); ?> • ⏱️ <?php echo htmlspecialchars($sb_post['read_time']); ?>
                  </span>
                </div>
              </a>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>

          <!-- 3. ACTION CARD ($0 Service Call Fee with Repair) -->
          <div class="bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-4">
            <div class="inline-flex items-center gap-1.5 bg-brandOrange/10 text-brandOrange text-xs font-bold uppercase tracking-wider px-2.5 py-1 rounded-full">
              <span>⚡</span> Same-Day Priority Dispatch
            </div>

            <div>
              <h4 class="text-lg font-heading font-bold text-slate-900 leading-snug">
                Need Your Appliance Fixed Today?
              </h4>
              <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">
                Certified GTA technicians equipped with mobile OEM factory parts ready to inspect your unit.
              </p>
            </div>

            <!-- Client's Rule: Highlight $0 Service Call Fee with Repair -->
            <div class="p-3.5 bg-slate-50 border border-slate-200/80 rounded-xl text-center">
              <span class="text-[11px] text-slate-500 uppercase tracking-wider font-semibold block">Transparent Policy</span>
              <strong class="text-base font-heading font-extrabold text-brandBlue block mt-0.5">
                $0 Service Call Fee with Repair
              </strong>
              <span class="text-[11px] text-slate-500 block mt-0.5">Diagnostic charge waived upon repair approval</span>
            </div>

            <div class="space-y-2.5 pt-1">
              <a href="tel:9057178905" class="gtm-web-call block w-full bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold py-3 px-4 rounded-xl text-center text-sm shadow-md transition-all flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                <span>Call: 905-717-8905</span>
              </a>

              <a href="<?php echo $base_url; ?>schedule" class="block w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-2.5 px-4 rounded-xl text-center text-xs transition-all">
                Book Diagnostic Online &rarr;
              </a>
            </div>

            <div class="pt-3 border-t border-slate-100 grid grid-cols-3 gap-1 text-[11px] text-slate-500 font-medium text-center">
              <div>✓ 90-Day Parts</div>
              <div>✓ Licensed</div>
              <div>✓ 5.0★ Google</div>
            </div>
          </div>

          <!-- 4. RELATED REPAIR SERVICES (All 6 Services) -->
          <div class="bg-slate-50/60 border border-slate-200/80 rounded-2xl p-5 space-y-3">
            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-500 font-heading">
              Other Repair Services
            </h4>
            <div class="space-y-1.5 text-xs">
              <a href="<?php echo $base_url; ?>services/fridge-repair" class="p-2 rounded-lg hover:bg-white text-slate-700 hover:text-brandBlue flex items-center justify-between transition-colors">
                <span>Refrigerator Repair</span>
                <span class="text-slate-400">&rarr;</span>
              </a>
              <a href="<?php echo $base_url; ?>services/washer-repair" class="p-2 rounded-lg hover:bg-white text-slate-700 hover:text-brandBlue flex items-center justify-between transition-colors">
                <span>Washing Machine Repair</span>
                <span class="text-slate-400">&rarr;</span>
              </a>
              <a href="<?php echo $base_url; ?>services/dryer-repair" class="p-2 rounded-lg hover:bg-white text-slate-700 hover:text-brandBlue flex items-center justify-between transition-colors">
                <span>Dryer Repair &amp; Venting</span>
                <span class="text-slate-400">&rarr;</span>
              </a>
              <a href="<?php echo $base_url; ?>services/dishwasher-repair" class="p-2 rounded-lg hover:bg-white text-slate-700 hover:text-brandBlue flex items-center justify-between transition-colors">
                <span>Dishwasher Repair</span>
                <span class="text-slate-400">&rarr;</span>
              </a>
              <a href="<?php echo $base_url; ?>services/stove-repair" class="p-2 rounded-lg hover:bg-white text-slate-700 hover:text-brandBlue flex items-center justify-between transition-colors">
                <span>Oven &amp; Stove Repair</span>
                <span class="text-slate-400">&rarr;</span>
              </a>
              <a href="<?php echo $base_url; ?>services/microwave-repair" class="p-2 rounded-lg hover:bg-white text-slate-700 hover:text-brandBlue flex items-center justify-between transition-colors">
                <span>Microwave Repair</span>
                <span class="text-slate-400">&rarr;</span>
              </a>
            </div>
          </div>

        </aside>

      </div>

    </div>
  </main>

  <!-- MOBILE FLOATING ACTION BAR (< 1024px) -->
  <div class="fixed bottom-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md border-t border-slate-200/90 py-2 px-3 lg:hidden flex items-center justify-between gap-2.5 shadow-[0_-4px_20px_rgba(0,0,0,0.08)]">
    
    <!-- Table of Contents Trigger (Matches user reference screenshot) -->
    <button type="button" 
            onclick="openMobileToc()" 
            class="flex-1 flex items-center justify-center gap-2 py-2.5 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 active:bg-slate-300 text-slate-800 font-bold text-xs sm:text-sm transition-colors border border-slate-200/90 shadow-sm"
            aria-label="Open Table of Contents">
      <svg class="w-4 h-4 text-slate-700 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
      </svg>
      <span>Table of contents</span>
      <span class="px-1.5 py-0.2 bg-brandBlue/10 text-brandBlue text-[10px] font-extrabold rounded-full"><?php echo count($toc_matches) + (!empty($post['faqs']) ? 1 : 0); ?></span>
    </button>

    <!-- Emergency Priority Call Button (Conversion driver) -->
    <a href="tel:9057178905" 
       class="gtm-web-call flex-1 flex items-center justify-center gap-1.5 bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold py-2.5 px-3 rounded-xl text-xs sm:text-sm shadow-md transition-all">
      <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
      </svg>
      <span>Call: 905-717-8905</span>
    </a>
  </div>

  <style>
  /* Standalone Bulletproof Mobile TOC Drawer Styles (Zero Cache Risk) */
  #mobile-toc-drawer { position: fixed !important; inset: 0 !important; z-index: 99999 !important; display: none; }
  #mobile-toc-drawer.open { display: block !important; }
  #mobile-toc-overlay { position: fixed !important; inset: 0 !important; background: rgba(15, 23, 42, 0.65) !important; -webkit-backdrop-filter: blur(4px) !important; backdrop-filter: blur(4px) !important; opacity: 0; transition: opacity 0.25s ease-out !important; }
  #mobile-toc-drawer.open #mobile-toc-overlay { opacity: 1 !important; }
  #mobile-toc-sheet { position: fixed !important; bottom: 0 !important; left: 0 !important; right: 0 !important; background: #ffffff !important; border-top-left-radius: 1.5rem !important; border-top-right-radius: 1.5rem !important; box-shadow: 0 -10px 35px rgba(0,0,0,0.22) !important; padding: 1.25rem 1.25rem 1.75rem 1.25rem !important; max-height: 82vh !important; display: flex !important; flex-direction: column !important; transform: translateY(100%) !important; transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1) !important; z-index: 100000 !important; }
  #mobile-toc-drawer.open #mobile-toc-sheet { transform: translateY(0) !important; }
  
  /* Compact In This Guide Sidebar Styling & Highlight */
  .toc-sidebar-link { display: block !important; font-size: 0.8125rem !important; line-height: 1.35 !important; padding: 0.28rem 0.6rem 0.28rem 0.75rem !important; margin-left: -2px !important; border-left: 2px solid transparent !important; color: #475569 !important; border-radius: 0 0.375rem 0.375rem 0 !important; transition: all 0.15s ease-in-out !important; }
  .toc-sidebar-link:hover { color: #0F4C81 !important; border-left-color: #0F4C81 !important; background-color: rgba(15, 76, 129, 0.05) !important; }
  .toc-sidebar-link.active-toc { color: #0F4C81 !important; border-left-color: #0F4C81 !important; background-color: rgba(15, 76, 129, 0.08) !important; font-weight: 600 !important; }

  /* In-Article Contextual Links: Text links only (Strictly exclude CTA buttons and action cards) */
  .article-body a:not([class*="bg-"]):not([class*="btn"]):not(.gtm-web-call) { 
    color: #0F4C81 !important; 
    font-weight: 600 !important; 
    text-decoration: underline !important; 
    text-decoration-thickness: 1.5px !important; 
    text-underline-offset: 3px !important; 
    text-decoration-color: rgba(15, 76, 129, 0.45) !important; 
    transition: all 0.2s ease-in-out !important; 
  }
  .article-body a:not([class*="bg-"]):not([class*="btn"]):not(.gtm-web-call):hover { 
    color: #FF6B00 !important; 
    text-decoration-color: #FF6B00 !important; 
  }

  /* Force all CTA Buttons and Action Links in article-body to have pure white text, no underline, and white icon */
  .article-body a[class*="bg-brandOrange"],
  .article-body a[class*="bg-brandBlue"],
  .article-body a[class*="bg-primary"],
  .article-body a.gtm-web-call {
    color: #ffffff !important;
    text-decoration: none !important;
  }
  .article-body a[class*="bg-brandOrange"] *,
  .article-body a[class*="bg-brandBlue"] *,
  .article-body a[class*="bg-primary"] *,
  .article-body a.gtm-web-call * {
    color: #ffffff !important;
    fill: currentColor !important;
    text-decoration: none !important;
  }

  /* Compact Cards & Box Headings: Prevent excessive padding/margins inside cards */
  .article-body [class*="rounded-"] h3, 
  .article-body [class*="rounded-"] h4, 
  .article-body div > h3:first-child, 
  .article-body div > h4:first-child { margin-top: 0 !important; margin-bottom: 0.25rem !important; }

  /* Universal Responsive Shield: Zero Horizontal Scroll while preserving Sticky Header */
  html {
    overflow-x: clip;
    max-width: 100vw;
  }
  body {
    overflow-x: clip;
    max-width: 100%;
  }
  .blog-main-grid,
  .blog-article-col,
  .blog-sidebar-col,
  .article-body {
    min-width: 0 !important;
    max-width: 100% !important;
  }
  .article-body {
    overflow-wrap: break-word !important;
    word-break: break-word !important;
  }
  /* Ensure any internal table scroll container stays strictly within bounds */
  .article-body .table-responsive,
  .article-body div:has(> table),
  .article-body [class*="overflow-x-"] {
    max-width: 100% !important;
    min-width: 0 !important;
    -webkit-overflow-scrolling: touch !important;
  }
  </style>

  <!-- MOBILE TABLE OF CONTENTS BOTTOM SHEET DRAWER -->
  <div id="mobile-toc-drawer" class="mobile-toc-drawer lg:hidden">
    <!-- Backdrop Overlay -->
    <div id="mobile-toc-overlay" 
         onclick="closeMobileToc()" 
         class="mobile-toc-overlay"></div>

    <!-- Slide-Up Sheet -->
    <div id="mobile-toc-sheet" 
         class="mobile-toc-sheet">
      
      <!-- Top Drag Indicator Handle -->
      <div class="w-12 h-1.5 bg-slate-300 rounded-full mx-auto mb-3 cursor-pointer" onclick="closeMobileToc()"></div>

      <!-- Sheet Header -->
      <div class="flex items-center justify-between pb-3 border-b border-slate-100">
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-brandBlue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
          </svg>
          <h3 class="text-sm font-bold uppercase tracking-wider text-slate-900 font-heading">
            In This Guide
          </h3>
          <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-xs font-bold rounded-full">
            <?php echo count($toc_matches) + (!empty($post['faqs']) ? 1 : 0); ?> topics
          </span>
        </div>
        <button type="button" 
                onclick="closeMobileToc()" 
                class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-800 flex items-center justify-center transition-colors"
                aria-label="Close Table of Contents">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

      <!-- Scrollable Topics List -->
      <nav class="overflow-y-auto py-2 space-y-1.5 flex-grow text-xs sm:text-sm">
        <?php if (!empty($toc_matches)): ?>
          <?php foreach ($toc_matches as $t_idx => $t_match): 
            $sec_id = $t_match[1];
            $sec_title = trim(preg_replace('/\s+/', ' ', strip_tags($t_match[2])));
          ?>
          <a href="#<?php echo htmlspecialchars($sec_id); ?>" 
             onclick="handleMobileTocClick(event, '<?php echo htmlspecialchars($sec_id); ?>')" 
             class="flex items-start gap-2.5 p-2 rounded-xl hover:bg-slate-50 active:bg-slate-100 text-slate-700 hover:text-brandBlue font-medium transition-colors border border-transparent hover:border-slate-200">
            <span class="w-5 h-5 rounded-lg bg-slate-100 text-slate-600 font-bold text-[11px] flex items-center justify-center flex-shrink-0 mt-0.5">
              <?php echo ($t_idx + 1); ?>
            </span>
            <span class="leading-snug"><?php echo htmlspecialchars($sec_title); ?></span>
          </a>
          <?php endforeach; ?>
        <?php endif; ?>

        <?php if (!empty($post['faqs'])): ?>
        <a href="#faqs" 
           onclick="handleMobileTocClick(event, 'faqs')" 
           class="flex items-start gap-2.5 p-2 rounded-xl hover:bg-slate-50 active:bg-slate-100 text-slate-700 hover:text-brandBlue font-medium transition-colors border border-transparent hover:border-slate-200">
          <span class="w-5 h-5 rounded-lg bg-emerald-100 text-emerald-800 font-bold text-[11px] flex items-center justify-center flex-shrink-0 mt-0.5">
            <?php echo (!empty($toc_matches) ? count($toc_matches) + 1 : 1); ?>
          </span>
          <span class="leading-snug">Frequently Asked Questions</span>
        </a>
        <?php endif; ?>
      </nav>

      <!-- Sheet Footer: Urgent Booking / Call Link -->
      <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
        <div class="text-slate-500">
          <strong class="text-slate-900 block">$0 Service Fee w/ Repair</strong>
          <span>Same-Day GTA Diagnostics</span>
        </div>
        <a href="tel:9057178905" class="gtm-web-call px-4 py-2 bg-brandOrange text-white font-bold rounded-xl shadow-sm">
          Call 905-717-8905 &rarr;
        </a>
      </div>

    </div>
  </div>

  <!-- MOBILE SHARE BOTTOM SHEET DRAWER -->
  <div id="mobile-share-drawer" class="mobile-share-drawer md:hidden">
    <!-- Backdrop Overlay -->
    <div id="mobile-share-overlay" 
         onclick="closeMobileShare()" 
         class="mobile-share-overlay"></div>

    <!-- Slide-Up Sheet -->
    <div id="mobile-share-sheet" 
         class="mobile-share-sheet">
      
      <!-- Top Drag Indicator Handle -->
      <div class="w-12 h-1.5 bg-slate-300 rounded-full mx-auto mb-3 cursor-pointer" onclick="closeMobileShare()"></div>

      <!-- Sheet Header -->
      <div class="flex items-center justify-between pb-3 border-b border-slate-100">
        <div class="flex items-center gap-2.5">
          <div class="w-8 h-8 rounded-full bg-brandBlue/10 text-brandBlue flex items-center justify-center flex-shrink-0">
            <svg class="w-4 h-4 text-brandBlue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-sm font-bold text-slate-900 font-heading leading-tight">
              Share this Guide
            </h3>
            <p class="text-[11px] text-slate-500 line-clamp-1 max-w-[210px]">
              <?php echo htmlspecialchars($post['title']); ?>
            </p>
          </div>
        </div>
        <button type="button" 
                onclick="closeMobileShare()" 
                class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-800 flex items-center justify-center transition-colors"
                aria-label="Close Share Menu">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

      <!-- Social Grid (Touch-friendly 48px+ targets) -->
      <div class="grid grid-cols-4 gap-2 py-4 text-center">
        <!-- WhatsApp -->
        <button type="button" onclick="shareToSocial('whatsapp')" class="flex flex-col items-center gap-1.5 p-2 rounded-2xl hover:bg-slate-50 active:bg-slate-100 transition-colors">
          <div class="w-12 h-12 rounded-2xl bg-[#25D366]/10 text-[#25D366] flex items-center justify-center shadow-xs">
            <svg class="w-6 h-6 fill-[#25D366]" viewBox="0 0 24 24">
              <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
            </svg>
          </div>
          <span class="text-xs font-semibold text-slate-700">WhatsApp</span>
        </button>

        <!-- Facebook -->
        <button type="button" onclick="shareToSocial('facebook')" class="flex flex-col items-center gap-1.5 p-2 rounded-2xl hover:bg-slate-50 active:bg-slate-100 transition-colors">
          <div class="w-12 h-12 rounded-2xl bg-[#1877F2]/10 text-[#1877F2] flex items-center justify-center shadow-xs">
            <svg class="w-6 h-6 fill-[#1877F2]" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
            </svg>
          </div>
          <span class="text-xs font-semibold text-slate-700">Facebook</span>
        </button>

        <!-- X (Twitter) -->
        <button type="button" onclick="shareToSocial('x')" class="flex flex-col items-center gap-1.5 p-2 rounded-2xl hover:bg-slate-50 active:bg-slate-100 transition-colors">
          <div class="w-12 h-12 rounded-2xl bg-slate-900/10 text-slate-900 flex items-center justify-center shadow-xs">
            <svg class="w-5 h-5 fill-slate-900" viewBox="0 0 24 24">
              <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
            </svg>
          </div>
          <span class="text-xs font-semibold text-slate-700">X / Twitter</span>
        </button>

        <!-- LinkedIn -->
        <button type="button" onclick="shareToSocial('linkedin')" class="flex flex-col items-center gap-1.5 p-2 rounded-2xl hover:bg-slate-50 active:bg-slate-100 transition-colors">
          <div class="w-12 h-12 rounded-2xl bg-[#0A66C2]/10 text-[#0A66C2] flex items-center justify-center shadow-xs">
            <svg class="w-5 h-5 fill-[#0A66C2]" viewBox="0 0 24 24">
              <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.2a1.66 1.66 0 0 0-1.67 1.66 1.67 1.67 0 0 0 1.67 1.66 1.67 1.67 0 0 0 1.67-1.66A1.66 1.66 0 0 0 7.83 6.2z"/>
            </svg>
          </div>
          <span class="text-xs font-semibold text-slate-700">LinkedIn</span>
        </button>
      </div>

      <!-- Quick Copy Link Bar -->
      <div class="flex items-center gap-2 p-2 bg-slate-50 border border-slate-200 rounded-xl mb-3">
        <input type="text" readonly value="<?php echo htmlspecialchars($canonical_url); ?>" class="bg-transparent border-none text-xs text-slate-600 flex-grow px-2 py-1 outline-none select-all truncate" id="mobile-share-link-input">
        <button type="button" onclick="copyBlogLink(this)" class="px-3 py-1.5 bg-brandBlue text-white font-bold text-xs rounded-lg hover:bg-brandBlue/90 active:scale-95 transition-all flex items-center gap-1.5 flex-shrink-0">
          <svg class="w-3.5 h-3.5 copy-link-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
          </svg>
          <span class="copy-link-label">Copy</span>
        </button>
      </div>

      <!-- Native Share Button & Email Option -->
      <div class="flex items-center gap-2 text-xs">
        <button type="button" onclick="shareToSocial('mail')" class="flex-1 py-2.5 px-3 bg-white border border-slate-200 rounded-xl font-semibold text-slate-700 hover:bg-slate-50 flex items-center justify-center gap-2">
          <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
          </svg>
          <span>Email</span>
        </button>
        <button type="button" onclick="triggerNativeShare()" class="flex-1 py-2.5 px-3 bg-slate-900 text-white rounded-xl font-semibold hover:bg-slate-800 flex items-center justify-center gap-2">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
          </svg>
          <span>More Apps...</span>
        </button>
      </div>

    </div>
  </div>

  <script>
  function toggleFaq(id) {
    var el = document.getElementById(id);
    var icon = document.getElementById('icon-' + id);
    if (!el) return;
    var isHidden = el.classList.contains('hidden');
    if (isHidden) {
      el.classList.remove('hidden');
      if (icon) icon.classList.add('rotate-180');
    } else {
      el.classList.add('hidden');
      if (icon) icon.classList.remove('rotate-180');
    }
  }

  function toggleShareMenu(e) {
    if (e) {
      e.preventDefault();
      e.stopPropagation();
    }
    // On mobile screens (< 768px), open bottom drawer
    if (window.innerWidth < 768) {
      openMobileShare();
      return;
    }
    var dropdown = document.getElementById('share-dropdown-card');
    var btn = document.getElementById('share-menu-button');
    if (!dropdown) return;
    var isClosed = dropdown.classList.contains('hidden') || dropdown.style.display === 'none';
    if (isClosed) {
      dropdown.classList.remove('hidden');
      dropdown.style.display = 'flex';
      if (btn) btn.setAttribute('aria-expanded', 'true');
    } else {
      dropdown.classList.add('hidden');
      dropdown.style.display = 'none';
      if (btn) btn.setAttribute('aria-expanded', 'false');
    }
  }

  /* Mobile Share Bottom Sheet Controls */
  function openMobileShare() {
    var drawer = document.getElementById('mobile-share-drawer');
    var overlay = document.getElementById('mobile-share-overlay');
    var sheet = document.getElementById('mobile-share-sheet');
    if (!drawer) return;
    drawer.style.display = 'block';
    document.body.style.overflow = 'hidden';
    setTimeout(function() {
      drawer.classList.add('open');
      if (overlay) overlay.style.opacity = '1';
      if (sheet) sheet.style.transform = 'translateY(0)';
    }, 15);
  }

  function closeMobileShare() {
    var drawer = document.getElementById('mobile-share-drawer');
    var overlay = document.getElementById('mobile-share-overlay');
    var sheet = document.getElementById('mobile-share-sheet');
    if (!drawer) return;
    drawer.classList.remove('open');
    if (overlay) overlay.style.opacity = '0';
    if (sheet) sheet.style.transform = 'translateY(100%)';
    document.body.style.overflow = '';
    setTimeout(function() {
      drawer.style.display = 'none';
    }, 280);
  }

  function triggerNativeShare() {
    if (navigator.share) {
      navigator.share({
        title: document.title,
        url: window.location.href
      }).catch(function(err) {
        if (err.name !== 'AbortError') console.log('Share error:', err);
      });
    } else {
      if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(window.location.href);
      }
      alert('Link copied to clipboard!');
    }
  }

  /* Mobile Table of Contents Bottom Sheet Controls */
  function openMobileToc() {
    var drawer = document.getElementById('mobile-toc-drawer');
    var overlay = document.getElementById('mobile-toc-overlay');
    var sheet = document.getElementById('mobile-toc-sheet');
    if (!drawer) return;
    drawer.style.display = 'block';
    document.body.style.overflow = 'hidden';
    setTimeout(function() {
      drawer.classList.add('open');
      if (overlay) overlay.style.opacity = '1';
      if (sheet) sheet.style.transform = 'translateY(0)';
    }, 15);
  }

  function closeMobileToc() {
    var drawer = document.getElementById('mobile-toc-drawer');
    var overlay = document.getElementById('mobile-toc-overlay');
    var sheet = document.getElementById('mobile-toc-sheet');
    if (!drawer) return;
    drawer.classList.remove('open');
    if (overlay) overlay.style.opacity = '0';
    if (sheet) sheet.style.transform = 'translateY(100%)';
    document.body.style.overflow = '';
    setTimeout(function() {
      drawer.style.display = 'none';
    }, 280);
  }

  function handleMobileTocClick(e, targetId) {
    if (e) e.preventDefault();
    closeMobileToc();
    var el = document.getElementById(targetId);
    if (el) {
      setTimeout(function() {
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        try { history.pushState(null, null, '#' + targetId); } catch(err) { location.hash = '#' + targetId; }
      }, 280);
    }
  }

  function smoothScrollTo(e, targetId) {
    if (e) e.preventDefault();
    var el = document.getElementById(targetId);
    if (el) {
      el.scrollIntoView({ behavior: 'smooth', block: 'start' });
      try { history.pushState(null, null, '#' + targetId); } catch(err) { location.hash = '#' + targetId; }
    }
  }

  // Active ScrollSpy for In This Guide sidebar highlight
  (function initTocScrollSpy() {
    var tocLinks = document.querySelectorAll('.toc-sidebar-link');
    if (!tocLinks.length) return;

    function updateActiveToc() {
      var scrollPos = window.scrollY + 140;
      var activeId = '';
      tocLinks.forEach(function(link) {
        var id = link.getAttribute('data-toc-target');
        var section = document.getElementById(id);
        if (section && section.offsetTop <= scrollPos) {
          activeId = id;
        }
      });
      if (activeId) {
        tocLinks.forEach(function(link) {
          if (link.getAttribute('data-toc-target') === activeId) {
            link.classList.add('active-toc');
          } else {
            link.classList.remove('active-toc');
          }
        });
      }
    }

    window.addEventListener('scroll', updateActiveToc, { passive: true });
    setTimeout(updateActiveToc, 100);
  })();

  document.addEventListener('click', function(e) {
    var container = document.getElementById('share-menu-container');
    var dropdown = document.getElementById('share-dropdown-card');
    if (container && !container.contains(e.target) && dropdown && !dropdown.classList.contains('hidden')) {
      dropdown.classList.add('hidden');
      dropdown.style.display = 'none';
      var btn = document.getElementById('share-menu-button');
      if (btn) btn.setAttribute('aria-expanded', 'false');
    }
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      var dropdown = document.getElementById('share-dropdown-card');
      if (dropdown && !dropdown.classList.contains('hidden')) {
        dropdown.classList.add('hidden');
        dropdown.style.display = 'none';
        var btn = document.getElementById('share-menu-button');
        if (btn) btn.setAttribute('aria-expanded', 'false');
      }
      closeMobileToc();
      closeMobileShare();
    }
  });

  function shareToSocial(platform) {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent(document.title);
    let shareUrl = '';

    if (platform === 'whatsapp') {
      shareUrl = 'https://api.whatsapp.com/send?text=' + title + '%20' + url;
    } else if (platform === 'x') {
      shareUrl = 'https://twitter.com/intent/tweet?url=' + url + '&text=' + title;
    } else if (platform === 'facebook') {
      shareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + url;
    } else if (platform === 'linkedin') {
      shareUrl = 'https://www.linkedin.com/sharing/share-offsite/?url=' + url;
    } else if (platform === 'mail') {
      shareUrl = 'mailto:?subject=' + title + '&body=' + url;
    }

    if (shareUrl) {
      if (platform === 'mail') {
        window.location.href = shareUrl;
      } else {
        window.open(shareUrl, '_blank', 'width=620,height=580,noopener,noreferrer');
      }
    }

    closeMobileShare();
    var dropdown = document.getElementById('share-dropdown-card');
    if (dropdown) {
      dropdown.classList.add('hidden');
      dropdown.style.display = 'none';
      var btn = document.getElementById('share-menu-button');
      if (btn) btn.setAttribute('aria-expanded', 'false');
    }
  }

  function copyBlogLink(btn) {
    const label = btn.querySelector('.copy-link-label');
    const originalText = label ? label.textContent : 'Copy link';

    const onSuccess = function() {
      if (label) {
        label.textContent = 'Copied!';
        label.classList.add('text-emerald-600', 'font-bold');
      }
      setTimeout(function() {
        if (label) {
          label.textContent = originalText;
          label.classList.remove('text-emerald-600', 'font-bold');
        }
      }, 2000);
    };

    if (navigator.clipboard && window.isSecureContext) {
      navigator.clipboard.writeText(window.location.href).then(onSuccess).catch(function() { fallbackCopy(onSuccess); });
    } else {
      fallbackCopy(onSuccess);
    }
  }

  function fallbackCopy(callback) {
    const textArea = document.createElement('textarea');
    textArea.value = window.location.href;
    textArea.style.position = 'fixed';
    textArea.style.left = '-9999px';
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();
    try {
      document.execCommand('copy');
      if (callback) callback();
    } catch (err) {
      console.error('Copy fallback failed', err);
    }
    document.body.removeChild(textArea);
  }
  </script>

  <?php require_once __DIR__ . '/../footer.php'; ?>
</body>
</html>
