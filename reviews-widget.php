<?php
/**
 * Unified 3-Box Reviews Slider Component
 * Appliance Repair Knights Ltd.
 * Displays 3 compact review cards per view with Google Logo Icon, Left/Right navigation, and scoped responsive CSS.
 */

if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/config.php';
}

$all_master_reviews = require __DIR__ . '/reviews-data.php';
$total_review_count = count($all_master_reviews);
$widget_base_url = isset($base_url) ? $base_url : './';
?>

<!-- Scoped CSS for Guaranteed 3-Box Slider Widths across all screen sizes -->
<style>
  .rev-slide-item {
    flex: 0 0 100%;
    width: 100%;
  }
  @media (min-width: 640px) {
    .rev-slide-item {
      flex: 0 0 calc(50% - 12px);
      width: calc(50% - 12px);
    }
  }
  @media (min-width: 1024px) {
    .rev-slide-item {
      flex: 0 0 calc(33.333% - 16px);
      width: calc(33.333% - 16px);
    }
  }
</style>

<!-- 3-BOX REVIEWS SLIDER SECTION -->
<section class="py-12 md:py-16 bg-slate-50/70 border-y border-slate-200" id="verified-reviews">
  <div class="max-w-7xl mx-auto px-4">
    
    <!-- Section Heading -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
      <div class="space-y-1.5">
        <div class="inline-flex items-center gap-1.5 bg-brandOrange/10 text-brandOrange font-bold text-[11px] uppercase tracking-wider px-3 py-1 rounded-full border border-brandOrange/20">
          <svg class="w-3.5 h-3.5 text-amber-500 fill-current" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <span><?php echo GMB_RATING_VALUE; ?> / 5.0 Google Reviews</span>
        </div>

        <h2 class="text-2xl sm:text-3xl font-heading font-black text-brandDarkBlue tracking-tight">
          What Our Clients Say
        </h2>
        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
          Real customer reviews from homeowners across Toronto, Mississauga, Brampton &amp; GTA.
        </p>
      </div>

      <!-- Top Google Trust & Left/Right Arrows -->
      <div class="flex items-center gap-3 self-start sm:self-auto flex-shrink-0">
        <!-- Left / Right Navigation Buttons -->
        <div class="flex items-center gap-2">
          <button id="rev-slider-prev" aria-label="Previous Reviews" class="w-10 h-10 rounded-xl bg-white border border-slate-300 hover:border-brandOrange text-slate-700 hover:text-brandOrange shadow-xs flex items-center justify-center transition-all duration-200 cursor-pointer active:scale-95 focus:outline-none disabled:opacity-40 disabled:cursor-not-allowed">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
          </button>
          <button id="rev-slider-next" aria-label="Next Reviews" class="w-10 h-10 rounded-xl bg-brandOrange hover:bg-orange-600 text-white shadow-xs flex items-center justify-center transition-all duration-200 cursor-pointer active:scale-95 focus:outline-none disabled:opacity-40 disabled:cursor-not-allowed">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
          </button>
        </div>
      </div>
    </div>

    <!-- 3-Box Carousel Viewport -->
    <div class="relative overflow-hidden" id="rev-carousel-viewport">
      <div id="rev-track" class="flex transition-transform duration-500 ease-out gap-6 cursor-grab active:cursor-grabbing select-none py-1">
        
        <?php foreach ($all_master_reviews as $index => $rev): ?>
          <div class="rev-slide-item flex-shrink-0">
            <div class="h-full bg-white rounded-2xl border border-slate-200 p-5 md:p-6 flex flex-col justify-between hover:shadow-md hover:border-brandOrange/50 transition-all duration-200">
              
              <div>
                <!-- Google Logo & Star Rating Header -->
                <div class="flex items-center justify-between mb-3.5">
                  <div class="flex items-center gap-2">
                    <!-- Google Multi-Color G Icon -->
                    <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 24 24">
                      <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                      <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                      <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                      <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                    </svg>

                    <!-- 5 Stars -->
                    <div class="flex text-amber-400 text-xs tracking-wider">
                      <?php for ($i = 0; $i < ($rev['rating'] ?? 5); $i++): ?>★<?php endfor; ?>
                    </div>
                  </div>
                  
                  <!-- Verified Badge -->
                  <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-200">
                    <svg class="w-2.5 h-2.5 fill-current text-emerald-600" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Verified
                  </span>
                </div>

                <!-- Review Text -->
                <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed mb-5">
                  "<?php echo htmlspecialchars($rev['text']); ?>"
                </p>
              </div>

              <!-- Author Info & Service Tag -->
              <div class="border-t border-slate-100 pt-3 flex items-center justify-between text-xs">
                <div>
                  <h3 class="font-heading font-bold text-brandDarkBlue text-xs sm:text-sm"><?php echo htmlspecialchars($rev['author']); ?></h3>
                  <p class="text-[11px] text-slate-500 mt-0.5">
                    📍 <?php echo htmlspecialchars($rev['location']); ?> • <span class="text-brandOrange font-semibold"><?php echo htmlspecialchars($rev['service']); ?></span>
                  </p>
                </div>
                <span class="text-[10px] text-slate-400 font-medium">Google Review</span>
              </div>

            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>

    <!-- Bottom Indicator Dots & Maps Link -->
    <div class="flex flex-col sm:flex-row items-center justify-between gap-3 mt-6 pt-4 border-t border-slate-200">
      <div id="rev-dots-container" class="flex items-center gap-1.5"></div>

      <a href="<?php echo BUSINESS_MAPS_URL; ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-brandBlue hover:text-brandOrange transition-colors">
        <span>View all <?php echo $total_review_count; ?>+ verified reviews on Google Maps</span>
        <svg class="w-4 h-4 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
      </a>
    </div>

  </div>
</section>

<!-- 3-Box Slider Engine Script -->
<script>
(function() {
  const track = document.getElementById('rev-track');
  const prevBtn = document.getElementById('rev-slider-prev');
  const nextBtn = document.getElementById('rev-slider-next');
  const dotsContainer = document.getElementById('rev-dots-container');
  const viewport = document.getElementById('rev-carousel-viewport');

  if (!track || !prevBtn || !nextBtn) return;

  const slides = track.querySelectorAll('.rev-slide-item');
  const totalSlides = slides.length;
  let currentIndex = 0;
  let autoTimer = null;

  function getCardsPerView() {
    if (window.innerWidth >= 1024) return 3;
    if (window.innerWidth >= 640) return 2;
    return 1;
  }

  function getMaxIndex() {
    return Math.max(0, totalSlides - getCardsPerView());
  }

  function updateSlider(animate = true) {
    const maxIndex = getMaxIndex();
    if (currentIndex > maxIndex) currentIndex = maxIndex;
    if (currentIndex < 0) currentIndex = 0;

    const slideWidth = slides[0].offsetWidth;
    const gap = 24; // gap-6 = 24px
    const offset = currentIndex * (slideWidth + gap);

    track.style.transition = animate ? 'transform 450ms cubic-bezier(0.25, 1, 0.5, 1)' : 'none';
    track.style.transform = `translateX(-${offset}px)`;

    updateDots();

    prevBtn.disabled = (currentIndex === 0);
    nextBtn.disabled = (currentIndex >= maxIndex);
  }

  function createDots() {
    if (!dotsContainer) return;
    dotsContainer.innerHTML = '';
    const maxIndex = getMaxIndex();

    for (let i = 0; i <= maxIndex; i++) {
      const dot = document.createElement('button');
      dot.className = `h-1.5 rounded-full transition-all duration-200 cursor-pointer focus:outline-none ${i === currentIndex ? 'w-5 bg-brandDarkBlue' : 'w-1.5 bg-slate-300 hover:bg-slate-400'}`;
      dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
      dot.addEventListener('click', () => {
        currentIndex = i;
        updateSlider();
        restartAutoPlay();
      });
      dotsContainer.appendChild(dot);
    }
  }

  function updateDots() {
    if (!dotsContainer) return;
    const dots = dotsContainer.querySelectorAll('button');
    dots.forEach((dot, idx) => {
      dot.className = `h-1.5 rounded-full transition-all duration-200 cursor-pointer focus:outline-none ${idx === currentIndex ? 'w-5 bg-brandDarkBlue' : 'w-1.5 bg-slate-300 hover:bg-slate-400'}`;
    });
  }

  nextBtn.addEventListener('click', () => {
    const max = getMaxIndex();
    currentIndex = (currentIndex < max) ? currentIndex + 1 : 0;
    updateSlider();
    restartAutoPlay();
  });

  prevBtn.addEventListener('click', () => {
    const max = getMaxIndex();
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : max;
    updateSlider();
    restartAutoPlay();
  });

  // Mobile Touch Swipe Support
  let startX = 0;
  let currentX = 0;
  let isDragging = false;

  track.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
    isDragging = true;
    clearInterval(autoTimer);
  }, { passive: true });

  track.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    currentX = e.touches[0].clientX;
  }, { passive: true });

  track.addEventListener('touchend', () => {
    if (!isDragging) return;
    isDragging = false;
    const diff = startX - currentX;
    if (Math.abs(diff) > 40) {
      if (diff > 0 && currentIndex < getMaxIndex()) {
        currentIndex++;
      } else if (diff < 0 && currentIndex > 0) {
        currentIndex--;
      }
      updateSlider();
    }
    restartAutoPlay();
  });

  function startAutoPlay() {
    clearInterval(autoTimer);
    autoTimer = setInterval(() => {
      const max = getMaxIndex();
      currentIndex = (currentIndex < max) ? currentIndex + 1 : 0;
      updateSlider();
    }, 4500);
  }

  function restartAutoPlay() {
    clearInterval(autoTimer);
    startAutoPlay();
  }

  if (viewport) {
    viewport.addEventListener('mouseenter', () => clearInterval(autoTimer));
    viewport.addEventListener('mouseleave', () => startAutoPlay());
  }

  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      createDots();
      updateSlider(false);
    }, 100);
  });

  createDots();
  updateSlider(false);
  startAutoPlay();
})();
</script>
