<?php
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../config.php';
}

$pageTitle = isset($pageTitle) ? $pageTitle . " | " . $siteName : $siteName . " | " . $siteTagline;
$pageDescription = isset($pageDescription) ? $pageDescription : $siteDescription;
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;0,6..72,600;0,6..72,700;1,6..72,400&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#173b36',
                            darker: '#0f2924',
                            deep: '#1d4640',
                            lime: '#d7f27c',
                            olive: '#8aa231',
                            bg: '#f7f7f3'
                        }
                    },
                    fontFamily: {
                        sans: ['"Inter"', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', 'sans-serif'],
                        serif: ['"Newsreader"', '"Playfair Display"', 'Georgia', 'Cambria', '"Times New Roman"', 'serif'],
                        mono: ['"JetBrains Mono"', 'monospace']
                    }
                }
            }
        }
    </script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* Open letter spacing & natural kerning so text never looks squeezed */
        body {
            letter-spacing: 0.01em;
        }

        .font-serif {
            letter-spacing: 0.015em;
            font-feature-settings: "kern" 1, "liga" 1;
        }

        h1, h2, h3, h4, h5, h6 {
            letter-spacing: 0.01em;
        }

        /* Smooth mega-menu transition */
        .mega-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .mega-menu-trigger:hover .mega-menu,
        .mega-menu-trigger:focus-within .mega-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-[#f7f7f3] text-[#173b36] font-sans antialiased min-h-screen flex flex-col selection:bg-[#d7f27c] selection:text-[#173b36]">

    <!-- Header Navigation -->
    <header class="relative z-50 bg-[#173b36] px-5 py-4 text-white lg:px-8 border-b border-white/10">
      <div class="mx-auto flex max-w-7xl items-center justify-between">
        
        <!-- Brand Logo -->
        <a href="<?= url() ?>" class="flex items-center gap-2 group">
          <div class="flex items-center gap-2 rounded-xl bg-white px-3 py-1.5 text-[#173b36] shadow-sm transition-transform group-hover:scale-[1.02]">
            <div class="flex size-6 items-center justify-center rounded-lg bg-[#173b36] text-[#d7f27c]">
              <span class="font-mono text-sm font-bold">🔧</span>
            </div>
            <span class="font-serif text-lg font-bold tracking-normal text-[#173b36]">
              For<span class="font-normal text-[#8aa231]">Best</span>Guide
            </span>
          </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden items-center gap-6 text-xs font-semibold text-slate-200 lg:flex">
          <a
            href="<?= url('#choose') ?>"
            class="flex items-center gap-1.5 transition-colors hover:text-[#d7f27c]"
          >
            <i data-lucide="check-circle-2" class="size-4 text-[#d7f27c]"></i>
            <span>How to Choose</span>
          </a>

          <!-- MEGA DROPDOWN: REPAIR GUIDES -->
          <div class="mega-menu-trigger relative flex items-center gap-1.5 py-2 transition-colors hover:text-[#d7f27c]">
            <a
              href="<?= url('repair-guides.php') ?>"
              class="flex items-center gap-1.5 rounded-full px-3 py-1.5 transition-colors hover:bg-white/10"
            >
              <i data-lucide="layout-grid" class="size-4 text-[#d7f27c]"></i>
              <span>Repair Guides</span>
              <i data-lucide="chevron-down" class="size-3.5 transition-transform duration-200"></i>
            </a>

            <!-- Mega Menu Dropdown Container -->
            <div class="mega-menu absolute top-full left-1/2 -translate-x-1/2 pt-2 w-[720px]">
              <div class="rounded-3xl border border-slate-100 bg-white p-6 text-slate-800 shadow-2xl">
                
                <!-- Header Row -->
                <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                  <div>
                    <p class="text-[10px] font-bold uppercase tracking-wider text-[#8aa231]">
                      EXPLORE REPAIR GUIDES
                    </p>
                    <p class="mt-0.5 text-xs text-slate-500">
                      Select a device category to diagnose problems and check estimated repair costs
                    </p>
                  </div>
                  <a
                    href="<?= url('repair-guides.php') ?>"
                    class="flex items-center gap-1 text-xs font-bold text-[#8aa231] hover:underline"
                  >
                    All Categories <i data-lucide="arrow-right" class="size-3"></i>
                  </a>
                </div>

                <!-- Main Content Grid -->
                <div class="mt-6 grid grid-cols-[1.6fr_1fr] gap-6">
                  
                  <!-- Category Grid (6 Items) -->
                  <div class="grid grid-cols-2 gap-3">
                    
                    <!-- Refrigerator -->
                    <a
                      href="<?= url('repair-guides/refrigerator.php') ?>"
                      class="flex items-start gap-3 rounded-2xl p-2.5 transition-colors hover:bg-slate-50 group/item"
                    >
                      <div class="flex size-9 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover/item:scale-105 transition-transform">
                        <i data-lucide="refrigerator" class="size-4"></i>
                      </div>
                      <div>
                        <p class="text-xs font-bold text-[#173b36]">Refrigerator</p>
                        <p class="text-[10px] text-slate-400">Cooling, compressor & leakage</p>
                      </div>
                    </a>

                    <!-- Washing Machine -->
                    <a
                      href="<?= url('repair-guides/washing-machine.php') ?>"
                      class="flex items-start gap-3 rounded-2xl p-2.5 transition-colors hover:bg-slate-50 group/item"
                    >
                      <div class="flex size-9 shrink-0 items-center justify-center rounded-xl bg-purple-50 text-purple-600 group-hover/item:scale-105 transition-transform">
                        <i data-lucide="zap" class="size-4"></i>
                      </div>
                      <div>
                        <p class="text-xs font-bold text-[#173b36]">Washing Machine</p>
                        <p class="text-[10px] text-slate-400">Motor, spin & drainage</p>
                      </div>
                    </a>

                    <!-- Smart TV & Display -->
                    <a
                      href="<?= url('repair-guides/smart-tv.php') ?>"
                      class="flex items-start gap-3 rounded-2xl p-2.5 transition-colors hover:bg-slate-50 group/item"
                    >
                      <div class="flex size-9 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-600 group-hover/item:scale-105 transition-transform">
                        <i data-lucide="tv" class="size-4"></i>
                      </div>
                      <div>
                        <p class="text-xs font-bold text-[#173b36]">Smart TV & Display</p>
                        <p class="text-[10px] text-slate-400">Screen, panel & power board</p>
                      </div>
                    </a>

                    <!-- Computer & Laptop -->
                    <a
                      href="<?= url('repair-guides/pc-laptop.php') ?>"
                      class="flex items-start gap-3 rounded-2xl p-2.5 transition-colors hover:bg-slate-50 group/item"
                    >
                      <div class="flex size-9 shrink-0 items-center justify-center rounded-xl bg-[#dcecc1] text-[#173b36] group-hover/item:scale-105 transition-transform">
                        <i data-lucide="laptop" class="size-4"></i>
                      </div>
                      <div>
                        <p class="text-xs font-bold text-[#173b36]">Computer & Laptop</p>
                        <p class="text-[10px] text-slate-400">Hardware, boot & upgrades</p>
                      </div>
                    </a>

                    <!-- Gaming & Audio -->
                    <a
                      href="<?= url('repair-guides/gaming-audio.php') ?>"
                      class="flex items-start gap-3 rounded-2xl p-2.5 transition-colors hover:bg-slate-50 group/item"
                    >
                      <div class="flex size-9 shrink-0 items-center justify-center rounded-xl bg-pink-50 text-pink-600 group-hover/item:scale-105 transition-transform">
                        <i data-lucide="gamepad-2" class="size-4"></i>
                      </div>
                      <div>
                        <p class="text-xs font-bold text-[#173b36]">Gaming & Audio</p>
                        <p class="text-[10px] text-slate-400">Consoles, soundbars & gear</p>
                      </div>
                    </a>

                    <!-- Smart Home & IoT -->
                    <a
                      href="<?= url('repair-guides/smart-home.php') ?>"
                      class="flex items-start gap-3 rounded-2xl p-2.5 transition-colors hover:bg-slate-50 group/item"
                    >
                      <div class="flex size-9 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 group-hover/item:scale-105 transition-transform">
                        <i data-lucide="home" class="size-4"></i>
                      </div>
                      <div>
                        <p class="text-xs font-bold text-[#173b36]">Smart Home & IoT</p>
                        <p class="text-[10px] text-slate-400">Hubs, cameras & switches</p>
                      </div>
                    </a>
                  </div>

                  <!-- Featured Blue Tool Card -->
                  <div class="flex flex-col justify-between rounded-2xl bg-slate-50 p-5 border border-slate-100">
                    <div>
                      <span class="inline-flex items-center gap-1 rounded-md bg-blue-600 px-2 py-0.5 text-[9px] font-bold uppercase tracking-wider text-white">
                        <i data-lucide="sparkles" class="size-2.5"></i> FEATURE
                      </span>
                      <h4 class="mt-3 font-serif text-base font-bold text-[#173b36]">
                        Repair vs Replace Calculator
                      </h4>
                      <p class="mt-2 text-[11px] leading-relaxed text-slate-500">
                        Calculate whether fixing your old machine is worth the cost or if upgrading is smarter.
                      </p>
                    </div>

                    <a
                      href="<?= url('#repair-vs-buy') ?>"
                      class="mt-4 flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-center text-xs font-semibold text-white transition-colors hover:bg-blue-700"
                    >
                      <span>Open Decision Tool</span>
                      <i data-lucide="arrow-right" class="size-3"></i>
                    </a>
                  </div>

                </div> 
              </div>
            </div>
          </div>

          <a
            href="<?= url('#repair-vs-buy') ?>"
            class="flex items-center gap-1.5 transition-colors hover:text-[#d7f27c]"
          >
            <i data-lucide="scale" class="size-4 text-[#d7f27c]"></i>
            <span>Repair vs Buy</span>
          </a>

          <a
            href="<?= url('#quote-verification') ?>"
            class="flex items-center gap-1.5 transition-colors hover:text-[#d7f27c]"
          >
            <i data-lucide="file-check" class="size-4 text-[#d7f27c]"></i>
            <span>Quote Verification</span>
          </a>

          <a
            href="<?= url('#safety-tips') ?>"
            class="flex items-center gap-1.5 transition-colors hover:text-[#d7f27c]"
          >
            <i data-lucide="shield-alert" class="size-4 text-[#d7f27c]"></i>
            <span>Safety Tips</span>
          </a>

          <!-- MORE DROPDOWN -->
          <div class="mega-menu-trigger relative flex items-center gap-1 cursor-pointer py-2 transition-colors hover:text-[#d7f27c]">
            <div class="flex items-center gap-1 rounded-full px-3 py-1.5 transition-colors hover:bg-white/10">
              <span>More</span>
              <i data-lucide="chevron-down" class="size-3.5"></i>
            </div>

            <div class="mega-menu absolute top-full right-0 pt-2 w-60">
              <div class="rounded-2xl border border-slate-100 bg-white p-2 text-slate-800 shadow-xl">
                <a
                  href="<?= url('#faq') ?>"
                  class="flex items-start gap-3 rounded-xl p-3 transition-colors hover:bg-slate-50"
                >
                  <i data-lucide="help-circle" class="size-4 text-slate-400 shrink-0 mt-0.5"></i>
                  <div>
                    <p class="text-xs font-bold text-[#173b36]">Frequently Asked Questions</p>
                  </div>
                </a>

                <a
                  href="<?= url('about.php') ?>"
                  class="flex items-start gap-3 rounded-xl p-3 transition-colors hover:bg-slate-50"
                >
                  <i data-lucide="info" class="size-4 text-slate-400 shrink-0 mt-0.5"></i>
                  <div>
                    <p class="text-xs font-bold text-[#173b36]">About Our Project</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </nav>

        <!-- Right Action Button -->
        <div class="hidden items-center lg:flex">
          <a
            href="<?= url('repair-guides.php') ?>"
            class="flex items-center gap-2 rounded-full bg-white px-5 py-2.5 text-xs font-semibold text-[#173b36] transition-colors hover:bg-[#d7f27c] shadow-sm"
          >
            <span>Browse Guides</span>
            <i data-lucide="arrow-right" class="size-3.5"></i>
          </a>
        </div>

        <!-- Mobile Toggle Button -->
        <button
          id="mobile-menu-btn"
          type="button"
          class="p-2 text-white lg:hidden rounded-lg hover:bg-white/10 transition-colors focus:outline-none"
          aria-label="Toggle Navigation Menu"
        >
          <i data-lucide="menu" id="menu-icon" class="size-6"></i>
        </button>
      </div>

      <!-- Mobile Menu Drawer -->
      <div id="mobile-menu" class="hidden mt-4 flex-col gap-4 border-t border-white/10 pt-4 lg:hidden">
        <a href="<?= url('#choose') ?>" class="flex items-center gap-2 text-xs font-semibold text-slate-200 py-1 hover:text-[#d7f27c]">
          <i data-lucide="check-circle-2" class="size-4 text-[#d7f27c]"></i> How to Choose
        </a>
        <a href="<?= url('repair-guides.php') ?>" class="flex items-center gap-2 text-xs font-semibold text-slate-200 py-1 hover:text-[#d7f27c]">
          <i data-lucide="layout-grid" class="size-4 text-[#d7f27c]"></i> Repair Guides
        </a>
        <a href="<?= url('#repair-vs-buy') ?>" class="flex items-center gap-2 text-xs font-semibold text-slate-200 py-1 hover:text-[#d7f27c]">
          <i data-lucide="scale" class="size-4 text-[#d7f27c]"></i> Repair vs Buy
        </a>
        <a href="<?= url('#quote-verification') ?>" class="flex items-center gap-2 text-xs font-semibold text-slate-200 py-1 hover:text-[#d7f27c]">
          <i data-lucide="file-check" class="size-4 text-[#d7f27c]"></i> Quote Verification
        </a>
        <a href="<?= url('#safety-tips') ?>" class="flex items-center gap-2 text-xs font-semibold text-slate-200 py-1 hover:text-[#d7f27c]">
          <i data-lucide="shield-alert" class="size-4 text-[#d7f27c]"></i> Safety Tips
        </a>
        <a href="<?= url('#faq') ?>" class="flex items-center gap-2 text-xs font-semibold text-slate-200 py-1 hover:text-[#d7f27c]">
          <i data-lucide="help-circle" class="size-4 text-[#d7f27c]"></i> FAQ
        </a>
        <a href="<?= url('about.php') ?>" class="flex items-center gap-2 text-xs font-semibold text-slate-200 py-1 hover:text-[#d7f27c]">
          <i data-lucide="info" class="size-4 text-[#d7f27c]"></i> About Our Project
        </a>

        <a
          href="<?= url('repair-guides.php') ?>"
          class="mt-2 inline-flex items-center justify-center gap-2 rounded-full bg-white px-5 py-2.5 text-xs font-semibold text-[#173b36]"
        >
          <span>Browse All Guides</span>
          <i data-lucide="arrow-right" class="size-3.5"></i>
        </a>
      </div>
    </header>
