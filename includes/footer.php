    <!-- Footer Component -->
    <footer class="mt-auto bg-[#0f2924] text-white">
      <!-- Top Value Banner -->
      <div class="border-b border-white/10 px-5 py-8 lg:px-8">
        <div class="mx-auto flex max-w-7xl flex-col justify-between gap-6 lg:flex-row lg:items-center">
          <div class="flex items-start gap-4">
            <i data-lucide="shield-check" class="text-[#d7f27c] shrink-0 mt-1 size-6"></i>
            <div>
              <p class="text-[10px] font-bold uppercase tracking-wider text-[#d7f27c]">
                INDEPENDENT CONSUMER EDUCATION
              </p>
              <p class="mt-1 text-xs text-slate-300 max-w-xl leading-relaxed">
                Practical guides to help you compare repair options, understand quotes, and know what to check before hiring a local service provider.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap items-center gap-6 text-xs text-slate-300 font-medium">
            <span class="flex items-center gap-1.5"><i data-lucide="check" class="size-3.5 text-[#d7f27c]"></i> Independent Guides</span>
            <span class="flex items-center gap-1.5"><i data-lucide="check" class="size-3.5 text-[#d7f27c]"></i> No Sponsored Rankings</span>
            <span class="flex items-center gap-1.5"><i data-lucide="check" class="size-3.5 text-[#d7f27c]"></i> Consumer-Focused</span>
          </div>
        </div>
      </div>

      <!-- Main Footer Links Container -->
      <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[1.5fr_1fr_1fr_1.2fr]">
          <!-- Column 1: Brand Info -->
          <div>
            <div class="flex items-center gap-2">
              <span class="font-serif text-xl font-bold tracking-normal text-white">
                For Best Guide
              </span>
            </div>
            <p class="mt-4 text-xs text-slate-400 leading-relaxed max-w-sm">
              A consumer learning resource for understanding repair quotes, checking service details, and making more informed decisions before local repair work begins.
            </p>
            <div class="mt-6">
              <a
                href="<?= url('about.php') ?>"
                class="inline-flex items-center gap-2 text-xs font-semibold text-white hover:text-[#d7f27c] transition-colors"
              >
                <span>About Our Guides</span>
                <i data-lucide="arrow-right" class="size-3.5"></i>
              </a>
            </div>
          </div>

          <!-- Column 2: Repair Guides -->
          <div>
            <p class="text-[10px] font-bold uppercase tracking-widest text-[#d7f27c]">
              REPAIR GUIDES
            </p>
            <ul class="mt-4 space-y-3 text-xs text-slate-300">
              <li>
                <a href="<?= url('repair-guides/pc-laptop.php') ?>" class="hover:text-white transition-colors">
                  PC & Laptop
                </a>
              </li>
              <li>
                <a href="<?= url('repair-guides/washing-machine.php') ?>" class="hover:text-white transition-colors">
                  Washing Machine
                </a>
              </li>
              <li>
                <a href="<?= url('repair-guides/refrigerator.php') ?>" class="hover:text-white transition-colors">
                  Refrigerator
                </a>
              </li>
              <li>
                <a href="<?= url('repair-guides/smart-tv.php') ?>" class="hover:text-white transition-colors">
                  Smart TV & Display
                </a>
              </li>
              <li>
                <a href="<?= url('repair-guides/smart-home.php') ?>" class="hover:text-white transition-colors">
                  Smart Home & WiFi
                </a>
              </li>
              <li>
                <a href="<?= url('repair-guides/gaming-audio.php') ?>" class="hover:text-white transition-colors">
                  Gaming & Audio
                </a>
              </li>
            </ul>
          </div>

          <!-- Column 3: Learn -->
          <div>
            <p class="text-[10px] font-bold uppercase tracking-widest text-[#d7f27c]">
              LEARN
            </p>
            <ul class="mt-4 space-y-3 text-xs text-slate-300">
              <li>
                <a href="<?= url('#choose') ?>" class="hover:text-white transition-colors">
                  How to Choose
                </a>
              </li>
              <li>
                <a href="<?= url('#repair-vs-buy') ?>" class="hover:text-white transition-colors">
                  Repair or Replace
                </a>
              </li>
              <li>
                <a href="<?= url('#quote-verification') ?>" class="hover:text-white transition-colors">
                  Quote Checklist
                </a>
              </li>
              <li>
                <a href="<?= url('#safety-tips') ?>" class="hover:text-white transition-colors">
                  Safety Tips
                </a>
              </li>
              <li>
                <a href="<?= url('#faq') ?>" class="hover:text-white transition-colors">
                  FAQ
                </a>
              </li>
            </ul>
          </div>

          <!-- Column 4: Before You Pay -->
          <div>
            <p class="text-[10px] font-bold uppercase tracking-widest text-[#d7f27c]">
              BEFORE YOU PAY
            </p>
            <ul class="mt-4 space-y-4 text-xs text-slate-300">
              <li class="flex gap-3">
                <span class="font-mono text-[#d7f27c] font-bold">01</span>
                <span>Review the final itemized bill.</span>
              </li>
              <li class="flex gap-3">
                <span class="font-mono text-[#d7f27c] font-bold">02</span>
                <span>Confirm replaced parts and work performed.</span>
              </li>
              <li class="flex gap-3">
                <span class="font-mono text-[#d7f27c] font-bold">03</span>
                <span>Test the repaired function before sign-off.</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Bottom Copyright & Legal Links -->
        <div class="mt-16 flex flex-col justify-between gap-4 border-t border-white/10 pt-8 text-[11px] text-slate-400 md:flex-row md:items-center">
          <p>© <?= date('Y') ?> ForBestGuide.com — Independent Education Resource.</p>
          <div class="flex items-center gap-6">
            <a href="#" class="hover:text-white transition-colors">Privacy</a>
            <a href="#" class="hover:text-white transition-colors">Terms</a>
            <a href="#" class="hover:text-white transition-colors">Disclaimer</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Interactive Scripts -->
    <script>
      // Initialize Lucide Icons
      document.addEventListener('DOMContentLoaded', function() {
        if (window.lucide) {
          window.lucide.createIcons();
        }

        // Mobile menu toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if (menuBtn && mobileMenu) {
          menuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
          });

          // Auto-close menu when any link inside it is clicked
          mobileMenu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
              mobileMenu.classList.add('hidden');
              mobileMenu.classList.remove('flex');
            });
          });
        }
      });
    </script>
</body>
</html>
