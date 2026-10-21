<?php
define('APP_INIT', true);
require_once __DIR__ . '/config.php';

$pageTitle = "For Best Guide | Pre-Service Guidelines Before You Hire";
$pageDescription = "100% Free unbiased consumer checklists and repair guides before hiring a local technician.";

include __DIR__ . '/includes/header.php';
?>

<main class="bg-[#f7f7f3] text-[#173b36] w-full h-full">
    
    <!-- ==========================================
        HERO SECTION
    ========================================== -->
    <section class="relative overflow-hidden bg-[#173b36] px-5 pb-20 pt-16 text-white lg:px-8 lg:pb-28 lg:pt-20">
      <!-- Decorative Glow -->
      <div class="pointer-events-none absolute -right-24 -top-20 size-96 rounded-full bg-[#d7f27c]/20 blur-3xl"></div>

      <div class="mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-[1.1fr_.9fr]">
        <div>
          <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.22em] text-[#d7f27c]">
            <span class="h-px w-8 bg-[#d7f27c]"></span>
            CONSUMER SAFETY PLAYBOOK
          </p>

          <h1 class="mt-6 max-w-3xl font-serif text-5xl leading-[1.05] tracking-[-.03em] text-white md:text-7xl">
            Check Pre-Service Guidelines <span class="font-normal text-[#d7f27c]">Before You Hire</span>
          </h1>

          <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-200">
            100% Free Unbiased Consumer Checklists
          </p>

          <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center">
            <a
              href="<?= url('repair-guides.php') ?>"
              class="inline-flex items-center justify-center rounded-full bg-[#d7f27c] px-7 py-3.5 text-center text-sm font-semibold text-[#173b36] transition-colors hover:bg-white shadow-lg shadow-black/10"
            >
              <span>Explore All Guides</span>
              <i data-lucide="arrow-right" class="ml-2 size-4"></i>
            </a>
          </div>

          <!-- Trust Badges -->
          <div class="mt-12 flex flex-wrap items-center gap-8 border-t border-white/15 pt-8 text-xs font-semibold uppercase tracking-wider text-slate-300">
            <div class="flex items-center gap-3">
              <i data-lucide="shield-check" class="text-[#d7f27c] size-5"></i>
              <span>100% Unbiased Consumer Guide</span>
            </div>
            <div class="flex items-center gap-3">
              <i data-lucide="user-check" class="text-[#d7f27c] size-5"></i>
              <span>Zero Sponsored Technician Listings</span>
            </div>
          </div>
        </div>

        <!-- Hero Image Container -->
        <div class="relative overflow-hidden rounded-[2.5rem] bg-[#1d4640] p-2 shadow-2xl">
          <img
            src="<?= asset('hero.jpg') ?>"
            alt="Consumer reviewing guidelines on laptop"
            class="h-[420px] w-full rounded-[2.2rem] object-cover"
            onerror="this.src='https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1200&q=80'"
          />
        </div>
      </div>
    </section>


    <!-- ==========================================
        CONSUMER CHECKLIST SECTION
    ========================================== -->
    <section class="bg-white px-5 py-20 lg:px-8">
      <div class="mx-auto max-w-7xl">
        <div class="grid gap-12 lg:grid-cols-[1fr_1.2fr]">
          <!-- Left Column -->
          <div>
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#8aa231]">
              ■ CONSUMER CHECKLIST
            </p>
            <h2 class="mt-3 font-serif text-4xl text-[#173b36] md:text-5xl">
              A Few Checks <br />
              <span class="text-slate-400">Before You Say Yes</span>
            </h2>
            <p class="mt-6 text-sm text-slate-600 max-w-md leading-relaxed">
              Before approving repair work, review these basic points to better understand the diagnosis, quote and service terms.
            </p>

            <!-- Left Image Box -->
            <div class="relative mt-8 overflow-hidden rounded-2xl bg-slate-100 shadow-sm">
              <img
                src="<?= asset('checks.jpg') ?>"
                alt="Technician talking to customer"
                class="h-64 w-full object-cover"
              />
              <div class="absolute bottom-3 left-3 rounded-full bg-slate-900/80 px-3 py-1.5 text-xs font-medium text-white backdrop-blur-md">
                PRE-SERVICE CONSUMER CHECKLIST
              </div>
              <div class="absolute bottom-3 right-3 text-xs text-white">
                100% Free Advice
              </div>
            </div>

            <div class="mt-8">
              <a
                href="<?= url('repair-guides.php') ?>"
                class="inline-flex items-center gap-2 rounded-lg border border-slate-300 px-5 py-3 text-xs font-semibold uppercase tracking-wider text-[#173b36] hover:bg-slate-50 transition-colors"
              >
                <span>Browse Complete Guides</span>
                <i data-lucide="arrow-right" class="size-3.5"></i>
              </a>
            </div>
          </div>

          <!-- Right Column Steps -->
          <div class="divide-y divide-slate-200">
            <!-- Step 01 -->
            <div class="py-6 first:pt-0">
              <span class="text-xs text-slate-400 font-mono">Step 01</span>
              <div class="mt-2 flex items-start justify-between gap-4">
                <div class="flex gap-4">
                  <span class="text-xs font-bold text-[#8aa231] font-mono">01</span>
                  <div>
                    <h3 class="text-lg font-serif font-semibold text-[#173b36]">
                      Ask What Was Actually Checked
                    </h3>
                    <p class="mt-1 text-xs text-slate-500">
                      Get a clear explanation of the diagnosis before approving work.
                    </p>
                  </div>
                </div>
                <i data-lucide="file-text" class="text-slate-400 shrink-0 size-4 mt-1"></i>
              </div>
            </div>

            <!-- Step 02 -->
            <div class="py-6">
              <span class="text-xs text-slate-400 font-mono">Step 02</span>
              <div class="mt-2 flex items-start justify-between gap-4">
                <div class="flex gap-4">
                  <span class="text-xs font-bold text-[#8aa231] font-mono">02</span>
                  <div>
                    <h3 class="text-lg font-serif font-semibold text-[#173b36]">
                      Understand the Parts Being Replaced
                    </h3>
                    <p class="mt-1 text-xs text-slate-500">
                      Confirm which part is faulty and why replacement is required.
                    </p>
                  </div>
                </div>
                <i data-lucide="package" class="text-slate-400 shrink-0 size-4 mt-1"></i>
              </div>
            </div>

            <!-- Step 03 -->
            <div class="py-6">
              <span class="text-xs text-slate-400 font-mono">Step 03</span>
              <div class="mt-2 flex items-start justify-between gap-4">
                <div class="flex gap-4">
                  <span class="text-xs font-bold text-[#8aa231] font-mono">03</span>
                  <div>
                    <h3 class="text-lg font-serif font-semibold text-[#173b36]">
                      Confirm the Total Price
                    </h3>
                    <p class="mt-1 text-xs text-slate-500">
                      Review Inspection, labor and replacement-part charges separately.
                    </p>
                  </div>
                </div>
                <i data-lucide="banknote" class="text-slate-400 shrink-0 size-4 mt-1"></i>
              </div>
            </div>

            <!-- Step 04 -->
            <div class="py-6">
              <span class="text-xs text-slate-400 font-mono">Step 04</span>
              <div class="mt-2 flex items-start justify-between gap-4">
                <div class="flex gap-4">
                  <span class="text-xs font-bold text-[#8aa231] font-mono">04</span>
                  <div>
                    <h3 class="text-lg font-serif font-semibold text-[#173b36]">
                      Keep Written Service Details
                    </h3>
                    <p class="mt-1 text-xs text-slate-500">
                      Ask for a receipt and clearly stated service or part warranty.
                    </p>
                  </div>
                </div>
                <i data-lucide="file-check" class="text-slate-400 shrink-0 size-4 mt-1"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ==========================================
        EXPLORE CONSUMER GUIDES
    ========================================== -->
    <section id="choose" class="bg-[#f7f7f3] px-5 py-20 lg:px-8 scroll-mt-10">
      <div class="mx-auto max-w-7xl">
        
        <!-- Section Header -->
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#8aa231]">
            — EXPLORE CONSUMER GUIDES
          </p>
          <div class="mt-3 flex flex-col justify-between gap-6 md:flex-row md:items-end">
            <h2 class="font-serif text-4xl text-[#173b36] md:text-5xl max-w-xl">
              Choose What You're <br />
              <span class="text-slate-400">Planning to Get Repaired</span>
            </h2>
            <p class="text-xs text-slate-600 max-w-sm leading-relaxed">
              Select a category to see what to check before hiring a local repairman, what questions to ask, and what details to confirm before approving work.
            </p>
          </div>
        </div>

        <!-- Category Navigation Bar / Tabs -->
        <div class="mt-10 grid grid-cols-2 md:grid-cols-6 border-y border-slate-200 bg-white shadow-sm">
          <?php foreach ($guidesList as $guide): ?>
            <a
              href="#guide-<?= $guide['slug'] ?>"
              class="flex items-center justify-between p-4 text-xs font-medium text-slate-600 border-r border-slate-200 transition-colors hover:bg-slate-50 hover:text-[#173b36]"
            >
              <span><?= htmlspecialchars($guide['name']) ?></span>
              <span class="text-[10px] text-slate-400 font-mono"><?= $guide['id'] ?></span>
            </a>
          <?php endforeach; ?>
        </div>

        <!-- All Guide Cards List -->
        <div class="mt-12 space-y-12">
          
          <!-- Guide 01: PC & Laptop -->
          <div
            id="guide-pc-laptop"
            class="grid gap-8 rounded-3xl bg-white p-8 border border-slate-200 lg:grid-cols-2 lg:items-center scroll-mt-16 shadow-sm hover:shadow-md transition-shadow"
          >
            <div class="relative overflow-hidden rounded-2xl bg-slate-100">
              <img
                src="<?= asset('laptoppc.webp') ?>"
                alt="Computers and Laptops repair"
                class="h-80 w-full object-cover"
                onerror="this.src='https://images.unsplash.com/photo-1588508065123-287b28e013da?auto=format&fit=crop&w=1200&q=80'"
              />
              <div class="absolute bottom-4 left-4 rounded-full bg-slate-900/80 px-3 py-1 text-[11px] text-white backdrop-blur-sm flex items-center gap-1.5">
                <i data-lucide="shield-check" class="size-3.5 text-[#d7f27c]"></i>
                Protect your device & personal data
              </div>
            </div>

            <div>
              <p class="text-[10px] font-bold uppercase tracking-wider text-[#8aa231] flex items-center gap-1.5">
                <i data-lucide="laptop" class="size-3.5"></i> COMPUTERS & LAPTOPS
              </p>
              <h3 class="mt-2 font-serif text-3xl text-[#173b36]">
                How to Choose a Local PC & Laptop Technician
              </h3>
              <p class="mt-4 text-xs leading-relaxed text-slate-600">
                Review hardware intake, data protection, diagnosis details and replacement claims before leaving your device with a local technician.
              </p>

              <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Record RAM, storage and device condition before handover.</span>
                </div>
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Ask what was tested before approving major replacement.</span>
                </div>
              </div>

              <div class="mt-8 flex items-center justify-between border-t border-slate-100 pt-6">
                <a
                  href="<?= url('repair-guides/pc-laptop.php') ?>"
                  class="text-xs font-bold text-[#173b36] hover:underline flex items-center gap-1"
                >
                  Read PC & Laptop Guide
                </a>
                <a
                  href="<?= url('repair-guides/pc-laptop.php') ?>"
                  class="flex size-8 items-center justify-center rounded-full border border-slate-200 hover:bg-slate-50 transition-colors"
                >
                  <i data-lucide="arrow-right" class="size-3.5"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Guide 02: Washing Machine -->
          <div
            id="guide-washing-machine"
            class="grid gap-8 rounded-3xl bg-white p-8 border border-slate-200 lg:grid-cols-2 lg:items-center scroll-mt-16 shadow-sm hover:shadow-md transition-shadow"
          >
            <div>
              <p class="text-[10px] font-bold uppercase tracking-wider text-[#8aa231] flex items-center gap-1.5">
                <i data-lucide="zap" class="size-3.5"></i> WASHING MACHINE
              </p>
              <h3 class="mt-2 font-serif text-3xl text-[#173b36]">
                How to Find a Washing Machine Repairman
              </h3>
              <p class="mt-4 text-xs leading-relaxed text-slate-600">
                Check whether the issue can be inspected at home and understand the diagnosis before agreeing to motor, pump, PCB or other replacement work.
              </p>

              <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Ask for doorstep inspection before workshop removal.</span>
                </div>
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Confirm replacement parts and written service terms.</span>
                </div>
              </div>

              <div class="mt-8 flex items-center justify-between border-t border-slate-100 pt-6">
                <a
                  href="<?= url('repair-guides/washing-machine.php') ?>"
                  class="text-xs font-bold text-[#173b36] hover:underline"
                >
                  Read Washing Machine Guide
                </a>
                <a
                  href="<?= url('repair-guides/washing-machine.php') ?>"
                  class="flex size-8 items-center justify-center rounded-full border border-slate-200 hover:bg-slate-50 transition-colors"
                >
                  <i data-lucide="arrow-right" class="size-3.5"></i>
                </a>
              </div>
            </div>

            <div class="relative overflow-hidden rounded-2xl bg-slate-100 lg:order-last">
              <img
                src="<?= asset('WM.jpg') ?>"
                alt="Washing machine repair diagnosis"
                class="h-80 w-full object-cover"
                onerror="this.src='https://images.unsplash.com/photo-1626806787461-102c1bfaaea1?auto=format&fit=crop&w=1200&q=80'"
              />
              <div class="absolute bottom-4 left-4 rounded-full bg-slate-900/80 px-3 py-1 text-[11px] text-white backdrop-blur-sm flex items-center gap-1.5">
                <i data-lucide="home" class="size-3.5 text-[#d7f27c]"></i>
                Start with an on-site diagnosis
              </div>
            </div>
          </div>

          <!-- Guide 03: Refrigerator -->
          <div
            id="guide-refrigerator"
            class="grid gap-8 rounded-3xl bg-white p-8 border border-slate-200 lg:grid-cols-2 lg:items-center scroll-mt-16 shadow-sm hover:shadow-md transition-shadow"
          >
            <div class="relative overflow-hidden rounded-2xl bg-slate-100">
              <img
                src="<?= asset('fridge.jpg') ?>"
                alt="Refrigerator repair service"
                class="h-80 w-full object-cover"
                onerror="this.src='https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=1200&q=80'"
              />
              <div class="absolute bottom-4 left-4 rounded-full bg-slate-900/80 px-3 py-1 text-[11px] text-white backdrop-blur-sm flex items-center gap-1.5">
                <i data-lucide="zap" class="size-3.5 text-[#d7f27c]"></i>
                Verify cooling and gas-related claims
              </div>
            </div>

            <div>
              <p class="text-[10px] font-bold uppercase tracking-wider text-[#8aa231] flex items-center gap-1.5">
                <i data-lucide="refrigerator" class="size-3.5"></i> REFRIGERATOR
              </p>
              <h3 class="mt-2 font-serif text-3xl text-[#173b36]">
                When You Need a Refrigerator Repair Mechanic
              </h3>
              <p class="mt-4 text-xs leading-relaxed text-slate-600">
                Learn which checks to ask for before accepting compressor, relay, cooling-system or refrigerant-related repair recommendations.
              </p>

              <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Ask how the cooling issue was verified.</span>
                </div>
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Get gas work and warranty terms in writing.</span>
                </div>
              </div>

              <div class="mt-8 flex items-center justify-between border-t border-slate-100 pt-6">
                <a
                  href="<?= url('repair-guides/refrigerator.php') ?>"
                  class="text-xs font-bold text-[#173b36] hover:underline"
                >
                  Read Refrigerator Guide
                </a>
                <a
                  href="<?= url('repair-guides/refrigerator.php') ?>"
                  class="flex size-8 items-center justify-center rounded-full border border-slate-200 hover:bg-slate-50 transition-colors"
                >
                  <i data-lucide="arrow-right" class="size-3.5"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Guide 04: Smart TV & Display -->
          <div
            id="guide-smart-tv"
            class="grid gap-8 rounded-3xl bg-white p-8 border border-slate-200 lg:grid-cols-2 lg:items-center scroll-mt-16 shadow-sm hover:shadow-md transition-shadow"
          >
            <div>
              <p class="text-[10px] font-bold uppercase tracking-wider text-[#8aa231] flex items-center gap-1.5">
                <i data-lucide="tv" class="size-3.5"></i> SMART TV & DISPLAY
              </p>
              <h3 class="mt-2 font-serif text-3xl text-[#173b36]">
                What to Check Before Hiring a TV Mechanic
              </h3>
              <p class="mt-4 text-xs leading-relaxed text-slate-600">
                Understand basic display and backlight checks before agreeing to expensive panel or internal board replacement.
              </p>

              <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Confirm whether the fault is panel, backlight or board-related.</span>
                </div>
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Ask for parts and labor to be listed separately.</span>
                </div>
              </div>

              <div class="mt-8 flex items-center justify-between border-t border-slate-100 pt-6">
                <a
                  href="<?= url('repair-guides/smart-tv.php') ?>"
                  class="text-xs font-bold text-[#173b36] hover:underline"
                >
                  Read Smart TV Guide
                </a>
                <a
                  href="<?= url('repair-guides/smart-tv.php') ?>"
                  class="flex size-8 items-center justify-center rounded-full border border-slate-200 hover:bg-slate-50 transition-colors"
                >
                  <i data-lucide="arrow-right" class="size-3.5"></i>
                </a>
              </div>
            </div>

            <div class="relative overflow-hidden rounded-2xl bg-slate-100 lg:order-last">
              <img
                src="<?= asset('tv.jpg') ?>"
                alt="TV repair backlight check"
                class="h-80 w-full object-cover"
                onerror="this.src='https://images.unsplash.com/photo-1593784991095-a205069470b6?auto=format&fit=crop&w=1200&q=80'"
              />
              <div class="absolute bottom-4 left-4 rounded-full bg-slate-900/80 px-3 py-1 text-[11px] text-white backdrop-blur-sm flex items-center gap-1.5">
                <i data-lucide="tv" class="size-3.5 text-[#d7f27c]"></i>
                Check display claims before replacement
              </div>
            </div>
          </div>

          <!-- Guide 05: Smart Home & WiFi -->
          <div
            id="guide-smart-home"
            class="grid gap-8 rounded-3xl bg-white p-8 border border-slate-200 lg:grid-cols-2 lg:items-center scroll-mt-16 shadow-sm hover:shadow-md transition-shadow"
          >
            <div class="relative overflow-hidden rounded-2xl bg-slate-100">
              <img
                src="<?= asset('wifi.jpg') ?>"
                alt="Smart Home configuration service"
                class="h-80 w-full object-cover"
                onerror="this.src='https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=1200&q=80'"
              />
              <div class="absolute bottom-4 left-4 rounded-full bg-slate-900/80 px-3 py-1 text-[11px] text-white backdrop-blur-sm flex items-center gap-1.5">
                <i data-lucide="home" class="size-3.5 text-[#d7f27c]"></i>
                Keep account and network access under your control
              </div>
            </div>

            <div>
              <p class="text-[10px] font-bold uppercase tracking-wider text-[#8aa231] flex items-center gap-1.5">
                <i data-lucide="home" class="size-3.5"></i> SMART HOME & WIFI
              </p>
              <h3 class="mt-2 font-serif text-3xl text-[#173b36]">
                Hiring Local Smart Home & WiFi Service Providers
              </h3>
              <p class="mt-4 text-xs leading-relaxed text-slate-600">
                Review account ownership, access permissions and final handover details before allowing someone to configure connected home devices.
              </p>

              <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Keep admin accounts registered to your own email.</span>
                </div>
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Change access details after service completion.</span>
                </div>
              </div>

              <div class="mt-8 flex items-center justify-between border-t border-slate-100 pt-6">
                <a
                  href="<?= url('repair-guides/smart-home.php') ?>"
                  class="text-xs font-bold text-[#173b36] hover:underline"
                >
                  Read Smart Home Guide
                </a>
                <a
                  href="<?= url('repair-guides/smart-home.php') ?>"
                  class="flex size-8 items-center justify-center rounded-full border border-slate-200 hover:bg-slate-50 transition-colors"
                >
                  <i data-lucide="arrow-right" class="size-3.5"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Guide 06: Gaming & Audio -->
          <div
            id="guide-gaming-audio"
            class="grid gap-8 rounded-3xl bg-white p-8 border border-slate-200 lg:grid-cols-2 lg:items-center scroll-mt-16 shadow-sm hover:shadow-md transition-shadow"
          >
            <div>
              <p class="text-[10px] font-bold uppercase tracking-wider text-[#8aa231] flex items-center gap-1.5">
                <i data-lucide="gamepad-2" class="size-3.5"></i> GAMING & AUDIO
              </p>
              <h3 class="mt-2 font-serif text-3xl text-[#173b36]">
                Finding Gaming Console & Audio Repair Specialists
              </h3>
              <p class="mt-4 text-xs leading-relaxed text-slate-600">
                Check specialist experience, diagnosis methods, replacement parts and testing procedures before handing over gaming or audio equipment.
              </p>

              <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Ask what testing will be done before repair approval.</span>
                </div>
                <div class="flex items-start gap-2 text-xs text-slate-700">
                  <i data-lucide="check-circle-2" class="text-[#8aa231] shrink-0 size-4 mt-0.5"></i>
                  <span>Confirm final functionality testing before collection.</span>
                </div>
              </div>

              <div class="mt-8 flex items-center justify-between border-t border-slate-100 pt-6">
                <a
                  href="<?= url('repair-guides/gaming-audio.php') ?>"
                  class="text-xs font-bold text-[#173b36] hover:underline"
                >
                  Read Gaming & Audio Guide
                </a>
                <a
                  href="<?= url('repair-guides/gaming-audio.php') ?>"
                  class="flex size-8 items-center justify-center rounded-full border border-slate-200 hover:bg-slate-50 transition-colors"
                >
                  <i data-lucide="arrow-right" class="size-3.5"></i>
                </a>
              </div>
            </div>

            <div class="relative overflow-hidden rounded-2xl bg-slate-100 lg:order-last">
              <img
                src="<?= asset('game.jpg') ?>"
                alt="Gaming console repair specialist testing"
                class="h-80 w-full object-cover"
                onerror="this.src='https://images.unsplash.com/photo-1597733336794-12d05021d510?auto=format&fit=crop&w=1200&q=80'"
              />
              <div class="absolute bottom-4 left-4 rounded-full bg-slate-900/80 px-3 py-1 text-[11px] text-white backdrop-blur-sm flex items-center gap-1.5">
                <i data-lucide="gamepad-2" class="size-3.5 text-[#d7f27c]"></i>
                Confirm specialist testing before handover
              </div>
            </div>
          </div>

        </div>

        <!-- Bottom Dark Banner -->
        <div class="mt-12 flex flex-col justify-between gap-4 rounded-2xl bg-[#0f2924] p-8 text-white md:flex-row md:items-center shadow-md">
          <div class="flex items-center gap-3">
            <i data-lucide="shield-check" class="text-[#d7f27c] shrink-0 size-6"></i>
            <div>
              <p class="text-xs font-bold uppercase tracking-widest text-[#d7f27c]">
                INDEPENDENT CONSUMER GUIDE
              </p>
              <p class="mt-1 text-xs text-slate-300 max-w-xl leading-relaxed">
                Our guides are designed to help consumers understand what to check, what to ask, and what to document before agreeing to local repair work.
              </p>
            </div>
          </div>
          <a
            href="<?= url('#quote-verification') ?>"
            class="inline-flex items-center gap-2 text-xs font-semibold text-white underline underline-offset-4 hover:text-[#d7f27c] shrink-0"
          >
            <span>View Hiring Checklist</span>
            <i data-lucide="arrow-right" class="size-3.5"></i>
          </a>
        </div>

      </div>
    </section>


    <!-- ==========================================
        REPAIR OR REPLACE? SECTION
    ========================================== -->
    <section id="repair-vs-buy" class="bg-white px-5 py-20 lg:px-8 scroll-mt-10">
      <div class="mx-auto max-w-7xl">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#8aa231]">
            — REPAIR OR REPLACE?
          </p>
          <div class="mt-3 flex flex-col justify-between gap-6 md:flex-row md:items-end">
            <h2 class="font-serif text-4xl text-[#173b36] md:text-5xl max-w-xl">
              Make the Decision <br />
              <span class="text-slate-400">Before You Spend More</span>
            </h2>
            <p class="text-xs text-slate-600 max-w-sm">
              Compare the repair quote, the age of the product, and the value you may get from continued use before approving a major repair.
            </p>
          </div>
        </div>

        <!-- 4 Block Metric Breakdown -->
        <div class="mt-12 grid border border-[#0f2924] bg-[#0f2924] text-white md:grid-cols-4 rounded-2xl overflow-hidden shadow-lg">
          <div class="p-8 border-b border-white/10 md:border-b-0 md:border-r">
            <p class="text-[10px] font-bold uppercase tracking-wider text-[#d7f27c] flex items-center gap-1">
              <i data-lucide="scale" class="size-3"></i> QUICK STARTING POINT
            </p>
            <span class="mt-4 block font-serif text-6xl text-[#d7f27c]">50%</span>
            <p class="mt-4 text-xs text-slate-300 leading-relaxed">
              If a repair quote is close to half the cost of buying a comparable replacement, it may be worth comparing both options carefully.
            </p>
          </div>

          <div class="p-8 border-b border-white/10 md:border-b-0 md:border-r">
            <span class="text-xs font-mono text-slate-400">01</span>
            <h3 class="mt-4 font-serif text-lg font-semibold">Compare the Quote</h3>
            <p class="mt-2 text-xs text-slate-300 leading-relaxed">
              Include labor, parts, inspection and other charges in the total repair cost.
            </p>
          </div>

          <div class="p-8 border-b border-white/10 md:border-b-0 md:border-r">
            <span class="text-xs font-mono text-slate-400">02</span>
            <h3 class="mt-4 font-serif text-lg font-semibold">Consider the Age</h3>
            <p class="mt-2 text-xs text-slate-300 leading-relaxed">
              Older equipment may be more likely to need additional maintenance later.
            </p>
          </div>

          <div class="p-8">
            <span class="text-xs font-mono text-slate-400">03</span>
            <h3 class="mt-4 font-serif text-lg font-semibold">Look at Future Value</h3>
            <p class="mt-2 text-xs text-slate-300 leading-relaxed">
              Compare expected usage, efficiency, warranty and replacement cost.
            </p>
          </div>
        </div>

        <!-- 3 Column Detailed Checks -->
        <div class="mt-8 grid gap-8 border-t border-slate-200 pt-8 md:grid-cols-3">
          <!-- Cost Check -->
          <div class="p-2">
            <div class="flex items-center justify-between">
              <span class="text-[10px] font-bold uppercase text-[#8aa231]">COST CHECK</span>
              <span class="text-xs font-bold text-slate-400 font-mono">%</span>
            </div>
            <h3 class="mt-4 font-serif text-xl text-[#173b36]">
              Compare Repair Cost With Replacement Cost
            </h3>
            <p class="mt-2 text-xs text-slate-500">
              Use the full quoted amount rather than looking only at the price of one part.
            </p>
            <div class="mt-6 space-y-3 text-xs border-t border-slate-100 pt-4">
              <div class="flex justify-between py-1">
                <span class="text-slate-600">Lower repair quote</span>
                <span class="font-semibold text-[#8aa231]">Consider Repair</span>
              </div>
              <div class="flex justify-between py-1 border-t border-slate-100">
                <span class="text-slate-600">High repair quote</span>
                <span class="font-semibold text-[#173b36]">Compare Replacement</span>
              </div>
            </div>
          </div>

          <!-- Age Check -->
          <div class="p-2 border-t border-slate-200 md:border-t-0 md:border-l md:pl-8">
            <div class="flex items-center justify-between">
              <span class="text-[10px] font-bold uppercase text-[#8aa231]">AGE CHECK</span>
              <i data-lucide="clock" class="size-3.5 text-slate-400"></i>
            </div>
            <h3 class="mt-4 font-serif text-xl text-[#173b36]">
              Check How Long You've Been Using It
            </h3>
            <p class="mt-2 text-xs text-slate-500">
              Age alone does not decide the answer, but it helps put a large repair bill into perspective.
            </p>
            <div class="mt-6 space-y-2 text-xs border-t border-slate-100 pt-4">
              <div class="flex justify-between py-1">
                <span class="text-slate-600">Computers</span>
                <span class="font-mono text-slate-700">4-6 yrs</span>
              </div>
              <div class="flex justify-between py-1 border-t border-slate-100">
                <span class="text-slate-600">Washing Machines</span>
                <span class="font-mono text-slate-700">8-10 yrs</span>
              </div>
              <div class="flex justify-between py-1 border-t border-slate-100">
                <span class="text-slate-600">Refrigerators</span>
                <span class="font-mono text-slate-700">10-12 yrs</span>
              </div>
              <div class="flex justify-between py-1 border-t border-slate-100">
                <span class="text-slate-600">Smart TVs</span>
                <span class="font-mono text-slate-700">6-8 yrs</span>
              </div>
            </div>
          </div>

          <!-- Value Check -->
          <div class="p-2 border-t border-slate-200 md:border-t-0 md:border-l md:pl-8">
            <div class="flex items-center justify-between">
              <span class="text-[10px] font-bold uppercase text-[#8aa231]">VALUE CHECK</span>
              <i data-lucide="shield" class="size-3.5 text-slate-400"></i>
            </div>
            <h3 class="mt-4 font-serif text-xl text-[#173b36]">
              Compare What You Get After the Repair
            </h3>
            <p class="mt-2 text-xs text-slate-500">
              Think beyond today's repair and compare warranty, expected use and ongoing running cost.
            </p>
            <div class="mt-6 space-y-3 text-xs border-t border-slate-100 pt-4">
              <div>
                <span class="font-semibold text-[#173b36]">Warranty</span>
                <p class="text-[11px] text-slate-500">Compare repair warranty with coverage on a replacement.</p>
              </div>
              <div>
                <span class="font-semibold text-[#173b36]">Condition</span>
                <p class="text-[11px] text-slate-500">Consider whether other parts already show signs of wear.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Bottom Callout -->
        <div class="mt-12 flex flex-col justify-between gap-4 rounded-xl border border-slate-200 bg-[#f7f7f3] p-6 md:flex-row md:items-center">
          <div>
            <p class="text-[10px] font-bold uppercase tracking-wider text-[#8aa231]">
              SIMPLE DECISION CHECK
            </p>
            <h4 class="mt-1 font-serif text-xl font-bold text-[#173b36]">
              Don't approve a major repair from one number alone.
            </h4>
            <p class="text-xs text-slate-500">
              Compare the full quote, product age and expected future use together before deciding.
            </p>
          </div>
          <a
            href="<?= url('repair-guides.php') ?>"
            class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-4 py-2 text-[11px] font-semibold text-[#173b36] hover:bg-slate-50 shadow-sm"
          >
            <span>Check Your Device Guide</span>
            <i data-lucide="arrow-right" class="size-3"></i>
          </a>
        </div>
      </div>
    </section>


    <!-- ==========================================
        QUOTE VERIFICATION SECTION
    ========================================== -->
    <section id="quote-verification" class="bg-[#f7f7f3] px-5 py-20 lg:px-8 scroll-mt-10">
      <div class="mx-auto max-w-7xl">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#8aa231]">
            — BEFORE YOU APPROVE THE QUOTE
          </p>
          <div class="mt-3 flex flex-col justify-between gap-6 md:flex-row md:items-end">
            <h2 class="font-serif text-4xl text-[#173b36] md:text-5xl max-w-xl">
              Know What You're Paying For <br />
              <span class="text-slate-400">Before Repair Work Begins</span>
            </h2>
            <p class="text-xs text-slate-600 max-w-sm">
              Ask for a clear breakdown of the diagnosis, parts and labor so you can understand the quote before agreeing to the work.
            </p>
          </div>
        </div>

        <!-- Banner Callout -->
        <div class="mt-8 flex flex-col justify-between gap-4 rounded-xl bg-[#0f2924] p-6 text-white md:flex-row md:items-center shadow-md">
          <div class="flex items-center gap-3">
            <i data-lucide="file-text" class="text-[#d7f27c] size-5 shrink-0"></i>
            <div>
              <p class="text-[10px] font-bold uppercase tracking-wider text-[#d7f27c]">
                SIMPLE CONSUMER RULE
              </p>
              <p class="text-xs font-medium">
                Ask for the quote to show the <span class="text-[#d7f27c] font-bold">part cost, inspection or visiting fee, and labor charge</span> separately.
              </p>
            </div>
          </div>
          <a href="#faq" class="text-xs text-slate-300 underline underline-offset-4 hover:text-white shrink-0">
            Get the estimate in writing
          </a>
        </div>

        <!-- Main Quote Checklist Layout -->
        <div class="mt-12 grid gap-12 lg:grid-cols-[1fr_2fr]">
          <div>
            <p class="text-[10px] font-bold uppercase tracking-wider text-[#8aa231]">
              QUOTE CHECKLIST
            </p>
            <h3 class="mt-2 font-serif text-3xl text-[#173b36]">
              Four things to confirm before saying yes.
            </h3>
            <p class="mt-4 text-xs text-slate-500 leading-relaxed">
              These checks help you understand what is being proposed and what the final amount is expected to include.
            </p>

            <div class="mt-8 space-y-4 border-t border-slate-200 pt-6 text-xs font-semibold text-slate-600">
              <div class="flex justify-between">
                <span>Diagnosis</span>
                <span class="font-mono text-slate-400">01</span>
              </div>
              <div class="flex justify-between border-t border-slate-200 pt-4">
                <span>Replacement Parts</span>
                <span class="font-mono text-slate-400">02</span>
              </div>
              <div class="flex justify-between border-t border-slate-200 pt-4">
                <span>Fees & Labor</span>
                <span class="font-mono text-slate-400">03</span>
              </div>
              <div class="flex justify-between border-t border-slate-200 pt-4">
                <span>Receipt & Warranty</span>
                <span class="font-mono text-slate-400">04</span>
              </div>
            </div>
          </div>

          <!-- 4 Steps Details -->
          <div class="divide-y divide-slate-200 rounded-3xl bg-white p-8 border border-slate-200 shadow-sm">
            <!-- 01 -->
            <div class="pb-8">
              <div class="flex justify-between text-xs text-slate-400 font-mono">
                <span class="text-[#8aa231] font-bold">01</span>
                <span class="uppercase tracking-wider">DIAGNOSIS</span>
              </div>
              <h4 class="mt-2 font-serif text-xl font-semibold text-[#173b36]">
                Ask What Was Checked
              </h4>
              <p class="mt-2 text-xs text-slate-500">
                Ask the repairman to explain what was inspected, what problem was found, and why the proposed work is needed.
              </p>
              <div class="mt-4 flex flex-wrap gap-4 text-xs text-slate-700">
                <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="size-3.5 text-[#8aa231]"></i> Clear problem explanation</span>
                <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="size-3.5 text-[#8aa231]"></i> Proposed work explained</span>
              </div>
            </div>

            <!-- 02 -->
            <div class="py-8">
              <div class="flex justify-between text-xs text-slate-400 font-mono">
                <span class="text-[#8aa231] font-bold">02</span>
                <span class="uppercase tracking-wider">REPLACEMENT PARTS</span>
              </div>
              <h4 class="mt-2 font-serif text-xl font-semibold text-[#173b36]">
                Confirm Which Part Is Being Replaced
              </h4>
              <p class="mt-2 text-xs text-slate-500">
                Ask for the part name, compatible part number where available, its price, and whether the old part can be shown after replacement.
              </p>
              <div class="mt-4 flex flex-wrap gap-4 text-xs text-slate-700">
                <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="size-3.5 text-[#8aa231]"></i> Part name & price</span>
                <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="size-3.5 text-[#8aa231]"></i> Replacement reason</span>
              </div>
            </div>

            <!-- 03 -->
            <div class="py-8">
              <div class="flex justify-between text-xs text-slate-400 font-mono">
                <span class="text-[#8aa231] font-bold">03</span>
                <span class="uppercase tracking-wider">FEES & LABOR</span>
              </div>
              <h4 class="mt-2 font-serif text-xl font-semibold text-[#173b36]">
                Confirm Charges Before Work Starts
              </h4>
              <p class="mt-2 text-xs text-slate-500">
                Check the visiting or inspection fee, labor charge and any other agreed costs before dismantling or replacement work begins.
              </p>
              <div class="mt-4 flex flex-wrap gap-4 text-xs text-slate-700">
                <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="size-3.5 text-[#8aa231]"></i> Visiting fee</span>
                <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="size-3.5 text-[#8aa231]"></i> Labor charge</span>
              </div>
            </div>

            <!-- 04 -->
            <div class="pt-8">
              <div class="flex justify-between text-xs text-slate-400 font-mono">
                <span class="text-[#8aa231] font-bold">04</span>
                <span class="uppercase tracking-wider">RECEIPT & WARRANTY</span>
              </div>
              <h4 class="mt-2 font-serif text-xl font-semibold text-[#173b36]">
                Keep the Final Details in Writing
              </h4>
              <p class="mt-2 text-xs text-slate-500">
                Keep the invoice or receipt showing the work performed, parts used, amount paid and any warranty terms offered for the service.
              </p>
              <div class="mt-4 flex flex-wrap gap-4 text-xs text-slate-700">
                <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="size-3.5 text-[#8aa231]"></i> Itemized receipt</span>
                <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="size-3.5 text-[#8aa231]"></i> Written warranty terms</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Questions to Ask by Device -->
        <div class="mt-16 border-t border-slate-200 pt-16">
          <div class="flex flex-col justify-between gap-4 md:flex-row md:items-end">
            <div>
              <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#8aa231]">
                QUICK REFERENCE
              </p>
              <h2 class="mt-1 font-serif text-3xl text-[#173b36]">
                Questions to Ask by Device
              </h2>
            </div>
            <p class="text-xs text-slate-500">
              Use these as starting questions when discussing a proposed repair.
            </p>
          </div>

          <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Washing Machine -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
              <div class="flex items-center justify-between text-slate-500">
                <div class="flex size-8 items-center justify-center rounded-lg bg-[#f7f7f3] text-[#8aa231]">
                  <i data-lucide="package" class="size-4"></i>
                </div>
                <span class="text-xs font-mono text-slate-400">01</span>
              </div>
              <h3 class="mt-4 font-serif text-lg font-semibold text-[#173b36]">
                Washing Machine
              </h3>
              <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                What was checked before recommending a motor, pump or control-board replacement?
              </p>
            </div>

            <!-- Refrigerator -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
              <div class="flex items-center justify-between text-slate-500">
                <div class="flex size-8 items-center justify-center rounded-lg bg-[#f7f7f3] text-[#8aa231]">
                  <i data-lucide="clock" class="size-4"></i>
                </div>
                <span class="text-xs font-mono text-slate-400">02</span>
              </div>
              <h3 class="mt-4 font-serif text-lg font-semibold text-[#173b36]">
                Refrigerator
              </h3>
              <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                How was the cooling problem checked before recommending compressor or gas work?
              </p>
            </div>

            <!-- PC & Laptop -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
              <div class="flex items-center justify-between text-slate-500">
                <div class="flex size-8 items-center justify-center rounded-lg bg-[#f7f7f3] text-[#8aa231]">
                  <i data-lucide="laptop" class="size-4"></i>
                </div>
                <span class="text-xs font-mono text-slate-400">03</span>
              </div>
              <h3 class="mt-4 font-serif text-lg font-semibold text-[#173b36]">
                PC & Laptop
              </h3>
              <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                Which component was tested before recommending a full motherboard replacement?
              </p>
            </div>

            <!-- Smart TV -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
              <div class="flex items-center justify-between text-slate-500">
                <div class="flex size-8 items-center justify-center rounded-lg bg-[#f7f7f3] text-[#8aa231]">
                  <i data-lucide="tv" class="size-4"></i>
                </div>
                <span class="text-xs font-mono text-slate-400">04</span>
              </div>
              <h3 class="mt-4 font-serif text-lg font-semibold text-[#173b36]">
                Smart TV
              </h3>
              <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                Was the backlight and related circuitry checked before suggesting display replacement?
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>


    <!-- ==========================================
        BEFORE FINAL PAYMENT / SAFETY TIPS
    ========================================== -->
    <section id="safety-tips" class="bg-[#f7f7f3] px-5 py-20 lg:px-8 scroll-mt-10">
      <div class="mx-auto max-w-7xl">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#8aa231]">
            — BEFORE FINAL PAYMENT
          </p>
          <div class="mt-3 flex flex-col justify-between gap-6 md:flex-row md:items-end">
            <h2 class="font-serif text-4xl text-[#173b36] md:text-5xl max-w-xl">
              Check the Work First <span class="text-slate-400">Then</span> <br />
              <span class="text-slate-400">Complete the Payment</span>
            </h2>
            <p class="text-xs text-slate-600 max-w-sm">
              Before making the final payment, review the completed work, confirm replaced parts and keep a written record of what was done.
            </p>
          </div>
        </div>

        <!-- Dark Top Callout Banner -->
        <div class="mt-12 grid border border-[#0f2924] bg-[#0f2924] text-white lg:grid-cols-[1fr_2fr] rounded-t-3xl overflow-hidden">
          <div class="p-8 border-b border-white/10 lg:border-b-0 lg:border-r">
            <p class="text-[10px] font-bold uppercase tracking-wider text-[#d7f27c] flex items-center gap-2">
              <i data-lucide="file-text" class="size-3.5"></i> PAYMENT CHECK
            </p>
            <h3 class="mt-3 font-serif text-2xl text-white">
              Don't rush the final payment.
            </h3>
          </div>
          <div class="p-8 flex flex-col justify-center">
            <p class="text-xs text-slate-300 leading-relaxed">
              Take a few minutes to test the repaired item, review the final bill, and confirm any service or part warranty before closing the job.
            </p>
            <div class="mt-4 flex items-center gap-2 text-xs font-semibold text-[#d7f27c]">
              <i data-lucide="check-circle-2" class="size-3.5"></i> Verify before you pay
            </div>
          </div>
        </div>

        <!-- 3 Steps Grid -->
        <div class="grid gap-8 border-t border-slate-200 bg-white p-8 lg:grid-cols-3 border-x border-b rounded-b-3xl shadow-sm">
          <!-- Rule 01 -->
          <div>
            <div class="flex items-center justify-between text-slate-400">
              <span class="text-[10px] font-bold text-[#8aa231] uppercase">RULE 01</span>
              <i data-lucide="file-text" class="size-4"></i>
            </div>
            <h4 class="mt-4 font-serif text-xl font-semibold text-[#173b36]">
              Compare a Large Quote Before Agreeing
            </h4>
            <p class="mt-2 text-xs text-slate-500 leading-relaxed">
              If the final amount is much higher than expected, ask for the reason and compare it with another local repair provider before approving additional work.
            </p>
            <div class="mt-6 border-t border-slate-100 pt-4 text-xs text-slate-700 flex items-start gap-2">
              <i data-lucide="check-circle-2" class="size-3.5 text-[#8aa231] shrink-0 mt-0.5"></i>
              <span>Compare the same type of repair and the same replacement part.</span>
            </div>
          </div>

          <!-- Rule 02 -->
          <div class="border-t border-slate-200 pt-6 lg:border-t-0 lg:border-l lg:pl-8 lg:pt-0">
            <div class="flex items-center justify-between text-slate-400">
              <span class="text-[10px] font-bold text-[#8aa231] uppercase">RULE 02</span>
              <i data-lucide="package" class="size-4"></i>
            </div>
            <h4 class="mt-4 font-serif text-xl font-semibold text-[#173b36]">
              Review the Parts That Were Replaced
            </h4>
            <p class="mt-2 text-xs text-slate-500 leading-relaxed">
              Ask to see the removed part and review the packaging or part details for the replacement where they are available.
            </p>
            <div class="mt-6 border-t border-slate-100 pt-4 text-xs text-slate-700 flex items-start gap-2">
              <i data-lucide="check-circle-2" class="size-3.5 text-[#8aa231] shrink-0 mt-0.5"></i>
              <span>Keep the old part when practical and note the replacement on the invoice.</span>
            </div>
          </div>

          <!-- Rule 03 -->
          <div class="border-t border-slate-200 pt-6 lg:border-t-0 lg:border-l lg:pl-8 lg:pt-0">
            <div class="flex items-center justify-between text-slate-400">
              <span class="text-[10px] font-bold text-[#8aa231] uppercase">RULE 03</span>
              <i data-lucide="clock" class="size-4"></i>
            </div>
            <h4 class="mt-4 font-serif text-xl font-semibold text-[#173b36]">
              Test the Device Before Final Payment
            </h4>
            <p class="mt-2 text-xs text-slate-500 leading-relaxed">
              Run a normal function check while the repair provider is still present so you can confirm that the original issue has been addressed.
            </p>
            <div class="mt-6 border-t border-slate-100 pt-4 text-xs text-slate-700 flex items-start gap-2">
              <i data-lucide="check-circle-2" class="size-3.5 text-[#8aa231] shrink-0 mt-0.5"></i>
              <span>Test the same function that originally caused the service request.</span>
            </div>
          </div>
        </div>

        <!-- Final Function Check Cards -->
        <div class="mt-16">
          <div class="flex flex-col justify-between gap-4 md:flex-row md:items-end">
            <div>
              <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#8aa231]">
                FINAL FUNCTION CHECK
              </p>
              <h3 class="mt-1 font-serif text-3xl text-[#173b36]">
                What to Test Before the Technician Leaves
              </h3>
            </div>
            <p class="text-xs text-slate-500">
              Use a simple real-world check based on the device that was repaired.
            </p>
          </div>

          <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
              <div class="flex items-center justify-between text-slate-500">
                <i data-lucide="package" class="size-4 text-[#8aa231]"></i>
                <span class="text-xs font-mono text-slate-400">01</span>
              </div>
              <h4 class="mt-4 font-serif text-lg font-semibold text-[#173b36]">Washing Machine</h4>
              <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                Run a short fill, drain and spin check and listen for unusual noise or leakage.
              </p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
              <div class="flex items-center justify-between text-slate-500">
                <i data-lucide="clock" class="size-4 text-[#8aa231]"></i>
                <span class="text-xs font-mono text-slate-400">02</span>
              </div>
              <h4 class="mt-4 font-serif text-lg font-semibold text-[#173b36]">Refrigerator</h4>
              <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                Check that the unit starts normally and ask what cooling behavior to expect after service.
              </p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
              <div class="flex items-center justify-between text-slate-500">
                <i data-lucide="laptop" class="size-4 text-[#8aa231]"></i>
                <span class="text-xs font-mono text-slate-400">03</span>
              </div>
              <h4 class="mt-4 font-serif text-lg font-semibold text-[#173b36]">PC & Laptop</h4>
              <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                Boot the device and test the specific function or hardware that was serviced.
              </p>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
              <div class="flex items-center justify-between text-slate-500">
                <i data-lucide="tv" class="size-4 text-[#8aa231]"></i>
                <span class="text-xs font-mono text-slate-400">04</span>
              </div>
              <h4 class="mt-4 font-serif text-lg font-semibold text-[#173b36]">Smart TV</h4>
              <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                Check picture, sound and the repaired input or display function before sign-off.
              </p>
            </div>
          </div>
        </div>

        <!-- Save Invoice Banner -->
        <div class="mt-12 flex flex-col justify-between gap-4 rounded-2xl border border-slate-200 bg-white p-6 md:flex-row md:items-center shadow-sm">
          <div>
            <p class="text-[10px] font-bold uppercase tracking-wider text-[#8aa231]">
              KEEP A RECORD
            </p>
            <h4 class="mt-1 font-serif text-xl font-bold text-[#173b36]">
              Save the invoice, payment proof and warranty details.
            </h4>
            <p class="text-xs text-slate-500 mt-1">
              Written records make it easier to understand what was serviced if the same issue returns later.
            </p>
          </div>
          <a
            href="<?= url('#quote-verification') ?>"
            class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-[#f7f7f3] px-4 py-2 text-[11px] font-semibold text-[#173b36] hover:bg-slate-100 transition-colors"
          >
            <span>Review Quote Checklist</span>
            <i data-lucide="arrow-right" class="size-3"></i>
          </a>
        </div>
      </div>
    </section>


    <!-- ==========================================
        COMMON QUESTIONS FAQ
    ========================================== -->
    <section id="faq" class="bg-white px-5 py-20 lg:px-8 border-t border-slate-200 scroll-mt-10">
      <div class="mx-auto max-w-7xl">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#8aa231]">
            — COMMON QUESTIONS
          </p>
          <div class="mt-3 flex flex-col justify-between gap-6 md:flex-row md:items-end">
            <h2 class="font-serif text-4xl text-[#173b36] md:text-5xl max-w-xl">
              Questions People Ask <span class="text-slate-400">Before</span> <br />
              <span class="text-slate-400">Hiring a Repairman</span>
            </h2>
            <p class="text-xs text-slate-600 max-w-sm">
              Straightforward answers about quotes, parts, visiting fees, handover, warranties and what to check during local repair work.
            </p>
          </div>
        </div>

        <div class="mt-12 grid gap-12 lg:grid-cols-[1fr_2fr]">
          <!-- Left Sticky Box -->
          <div class="rounded-3xl bg-[#0f2924] p-8 text-white h-fit shadow-md">
            <p class="text-[10px] font-bold uppercase tracking-wider text-[#d7f27c]">
              FAQ GUIDE
            </p>
            <h3 class="mt-3 font-serif text-3xl text-white">
              Quick answers for common repair decisions.
            </h3>
            <p class="mt-4 text-xs text-slate-300 leading-relaxed">
              Open any question to see a short consumer-focused explanation.
            </p>
            <div class="mt-12 border-t border-white/15 pt-6 flex items-center gap-2 text-xs text-slate-300">
              <i data-lucide="file-text" class="size-3.5 text-[#d7f27c]"></i>
              <span>8 practical questions</span>
            </div>
          </div>

          <!-- Right Accordion List -->
          <div class="divide-y divide-slate-200 rounded-3xl border border-slate-200 bg-white p-8 shadow-sm" id="faq-accordion">
            
            <?php
            $faqs = [
              [
                "num" => "01",
                "q" => "Is an older appliance always worth repairing?",
                "a" => "Not always. Compare the repair quote with the cost of a suitable replacement, then consider the product's age, condition and how long you plan to keep using it."
              ],
              [
                "num" => "02",
                "q" => "What should I do if the same problem returns after service?",
                "a" => "Keep the invoice and any written service warranty. Contact the repair provider with the original work details and ask what follow-up coverage applies."
              ],
              [
                "num" => "03",
                "q" => "What if a part needs to be taken to a workshop?",
                "a" => "Ask why off-site work is needed. Before handover, photograph the part or device, note visible identifiers where available, and get a written acknowledgment of what was taken."
              ],
              [
                "num" => "04",
                "q" => "How can I check a replacement part?",
                "a" => "Ask for the part name, compatible part number and price. Review packaging or labels when available and keep the old part when practical."
              ],
              [
                "num" => "05",
                "q" => "Should I pay a visiting or inspection fee?",
                "a" => "A provider may charge a visiting or inspection fee. Ask the amount before the visit and whether it will be adjusted if you proceed with the repair."
              ],
              [
                "num" => "06",
                "q" => "What if the quoted price changes after inspection?",
                "a" => "Ask what changed and request an updated itemized quote before authorizing additional work. If you are not comfortable with the change, you can compare another estimate before proceeding."
              ],
              [
                "num" => "07",
                "q" => "How should I evaluate a local repair provider?",
                "a" => "Compare clear business details, recent customer feedback, written estimates, service terms and how clearly the provider explains the proposed work."
              ],
              [
                "num" => "08",
                "q" => "Should every repair be completed at home?",
                "a" => "No. Some work may require workshop tools or testing. Ask why the item needs to leave your home, what exactly is being taken, and how the handover will be documented."
              ]
            ];
            ?>

            <?php foreach ($faqs as $index => $faq): ?>
              <div class="py-6 first:pt-0 last:pb-0 faq-item">
                <button
                  type="button"
                  class="flex w-full items-start justify-between gap-4 text-left font-serif text-lg font-semibold text-[#173b36] hover:text-[#8aa231] transition-colors focus:outline-none"
                  onclick="toggleFaq(this)"
                >
                  <div class="flex gap-4">
                    <span class="text-xs font-bold text-[#8aa231] font-mono mt-1"><?= $faq['num'] ?></span>
                    <span class="leading-snug"><?= htmlspecialchars($faq['q']) ?></span>
                  </div>
                  <span class="faq-icon text-slate-400 text-xs font-mono mt-1 shrink-0 transition-transform duration-200">
                    <i data-lucide="chevron-down" class="size-4"></i>
                  </span>
                </button>
                <div class="faq-content <?= $index === 0 ? '' : 'hidden' ?> mt-3 pl-8 text-xs text-slate-600 leading-relaxed">
                  <?= htmlspecialchars($faq['a']) ?>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </section>

</main>

<script>
function toggleFaq(btn) {
  const content = btn.nextElementSibling;
  const icon = btn.querySelector('.faq-icon');
  
  const isExpanded = !content.classList.contains('hidden');
  
  // Close all other items
  document.querySelectorAll('.faq-content').forEach(el => el.classList.add('hidden'));
  document.querySelectorAll('.faq-icon').forEach(el => el.style.transform = 'rotate(0deg)');
  
  if (!isExpanded) {
    content.classList.remove('hidden');
    if (icon) icon.style.transform = 'rotate(180deg)';
  }
}
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
