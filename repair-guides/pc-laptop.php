<?php
define('APP_INIT', true);
require_once __DIR__ . '/../config.php';

$pageTitle = "How to Find a Reliable Local PC & Laptop Repair Technician";
$pageDescription = "Everything you need to evaluate before leaving your laptop or desktop with a local computer shop: data security, chip-level troubleshooting, and fair price benchmarks.";

include __DIR__ . '/../includes/header.php';
?>

<div class="min-h-screen bg-slate-50 text-slate-800 font-sans antialiased">
    <!-- ================= BREADCRUMB ================= -->
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center gap-2 text-xs text-slate-500 font-medium">
      <a href="<?= url() ?>" class="hover:text-emerald-600 transition flex items-center gap-1">
        <i data-lucide="home" class="size-3"></i> HOME
      </a>
      <span>/</span>
      <a href="<?= url('repair-guides.php') ?>" class="hover:text-emerald-600 transition">
        GUIDES
      </a>
      <span>/</span>
      <span class="text-slate-900 font-semibold uppercase">PC & LAPTOP REPAIR</span>
    </div>

    <!-- ================= HERO SECTION ================= -->
    <section class="max-w-7xl mx-auto px-6 py-6">
      <div class="bg-white rounded-2xl border border-slate-200 p-8 md:p-10 shadow-sm grid lg:grid-cols-12 gap-8 items-start">
        <!-- Main Hero Info -->
        <div class="lg:col-span-7 space-y-4">
          <span class="text-[11px] font-bold text-emerald-600 bg-emerald-50 px-3 py-1 rounded-md uppercase tracking-wider inline-block">
            CONSUMER DECISION GUIDE #01
          </span>
          <h1 class="text-3xl md:text-5xl font-black text-slate-900 leading-tight">
            How to Find a Reliable Local PC & Laptop Repair Technician
          </h1>
          <p class="text-slate-600 text-sm md:text-base leading-relaxed">
            Everything you need to evaluate before leaving your laptop or desktop with a local computer shop: data security protocols, chip-level troubleshooting, realistic diagnostic fees, and fair price benchmarks.
          </p>

          <div class="flex flex-wrap items-center gap-6 pt-4 text-xs font-semibold text-slate-500 border-t border-slate-100">
            <div class="flex items-center gap-1.5">
              <i data-lucide="clock" class="text-emerald-600 size-4"></i>
              <span>7 min comprehensive read</span>
            </div>
            <div class="flex items-center gap-1.5">
              <i data-lucide="laptop" class="text-emerald-600 size-4"></i>
              <span>Verified Consumer Standard</span>
            </div>
          </div>
        </div>

        <!-- Hero Image & Key Takeaway Box -->
        <div class="lg:col-span-5 space-y-3">
          <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-slate-100 border border-slate-200">
            <img
              src="<?= asset('laptopguide.jpg') ?>"
              alt="PC & Laptop Repair"
              class="w-full h-full object-cover"
              onerror="this.src='https://images.unsplash.com/photo-1588508065123-287b28e013da?auto=format&fit=crop&w=800&q=80'"
            />
          </div>
          <div class="bg-emerald-50/80 border border-emerald-200 rounded-xl p-3.5 text-xs text-emerald-950 leading-relaxed flex items-start gap-2.5">
            <i data-lucide="lock" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
            <div>
              <strong class="font-bold text-emerald-950">Key takeaway:</strong> Never share OS passwords for simple physical hardware or screen replacements.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= MAIN CONTENT + SIDEBAR ================= -->
    <section class="max-w-7xl mx-auto px-6 py-8 grid lg:grid-cols-12 gap-8 items-start">
      <!-- Left Column: Detailed Steps -->
      <div class="lg:col-span-8 space-y-12">
        
        <!-- STEP 1 -->
        <div class="space-y-4">
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 bg-emerald-600 text-white rounded-md flex items-center justify-center font-black text-sm shrink-0">
              1
            </span>
            <h2 class="text-xl md:text-2xl font-black text-slate-900">
              Evaluating Local PC Repair Capabilities
            </h2>
          </div>

          <p class="text-sm text-slate-600 leading-relaxed">
            Not every computer shop has the equipment or training for intricate electronics. Most neighborhood shops fall into two categories: <em>Parts Assemblers</em> (who replace entire components) and <em>Chip-Level Technicians</em> (who can diagnose circuit boards and micro-solder).
          </p>

          <div class="grid md:grid-cols-2 gap-4 pt-2">
            <div class="bg-white border border-slate-200 rounded-xl p-5 space-y-2 shadow-sm">
              <span class="text-[10px] font-bold text-emerald-600 uppercase tracking-wider block">
                STANDARD PARTS SWAPPERS
              </span>
              <p class="text-xs text-slate-500 leading-relaxed">
                Suitable for simple RAM upgrades, SSD installations, screen replacements, and standard OS reinstalls. If a motherboard is dead, they will simply quote buying a new motherboard.
              </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 space-y-2 shadow-sm">
              <span class="text-[10px] font-bold text-emerald-600 uppercase tracking-wider block">
                CHIP-LEVEL REPAIR LABS
              </span>
              <p class="text-xs text-slate-500 leading-relaxed">
                Equipped with thermal cameras, DC power supplies, oscilloscopes, and BGA rework stations. They can replace a single burnt capacitor or charging MOSFET for a fraction of motherboard replacement costs.
              </p>
            </div>
          </div>
        </div>

        <!-- STEP 2 -->
        <div class="space-y-4 pt-4 border-t border-slate-200">
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 bg-emerald-600 text-white rounded-md flex items-center justify-center font-black text-sm shrink-0">
              2
            </span>
            <h2 class="text-xl md:text-2xl font-black text-slate-900">
              Data Confidentiality & Privacy Rules
            </h2>
          </div>

          <p class="text-sm text-slate-600 leading-relaxed">
            Your personal files, browser sessions, and stored passwords are on your storage drive. Follow these precautions before handing over your machine:
          </p>

          <ul class="space-y-3 pt-2">
            <li class="flex items-start gap-3 text-xs md:text-sm text-slate-600 leading-relaxed">
              <i data-lucide="check-circle-2" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
              <span>
                <strong class="text-slate-900">Remove the SSD/HDD if feasible:</strong> For pure power issues, screen replacements, or fan cleaning, the technician does not need your boot drive.
              </span>
            </li>
            <li class="flex items-start gap-3 text-xs md:text-sm text-slate-600 leading-relaxed">
              <i data-lucide="check-circle-2" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
              <span>
                <strong class="text-slate-900">Create a Guest / Local User Account:</strong> If OS testing is required, set up a temporary local account and sign out of all cloud accounts and browsers.
              </span>
            </li>
            <li class="flex items-start gap-3 text-xs md:text-sm text-slate-600 leading-relaxed">
              <i data-lucide="check-circle-2" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
              <span>
                <strong class="text-slate-900">Full Backup First:</strong> If the computer still boots, back up vital documents to an external drive or cloud storage before handing it in.
              </span>
            </li>
          </ul>
        </div>

        <!-- STEP 3 -->
        <div class="space-y-4 pt-4 border-t border-slate-200">
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 bg-emerald-600 text-white rounded-md flex items-center justify-center font-black text-sm shrink-0">
              3
            </span>
            <h2 class="text-xl md:text-2xl font-black text-slate-900">
              The 5 Essential Phone Questions to Ask
            </h2>
          </div>

          <p class="text-sm text-slate-600 leading-relaxed">
            Call 2 or 3 local shops and ask these specific qualifying questions:
          </p>

          <div class="space-y-3 pt-2">
            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm space-y-1">
              <h4 class="font-bold text-slate-900 text-sm">
                Q1: &ldquo;What is your bench fee if you inspect the laptop and conclude it is unrepairable?&rdquo;
              </h4>
              <p class="text-xs text-slate-500">
                A transparent shop will have a fixed diagnostic rate that is waived if you approve the repair.
              </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm space-y-1">
              <h4 class="font-bold text-slate-900 text-sm">
                Q2: &ldquo;Do you repair motherboards in-house or send them to a third-party hub?&rdquo;
              </h4>
              <p class="text-xs text-slate-500">
                In-house repairs ensure faster turnarounds and eliminate middleman markups.
              </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm space-y-1">
              <h4 class="font-bold text-slate-900 text-sm">
                Q3: &ldquo;Do you provide a written warranty on replacement screens, batteries, or board components?&rdquo;
              </h4>
              <p class="text-xs text-slate-500">
                Insist on at least 30 to 90 days replacement warranty on new parts.
              </p>
            </div>
          </div>
        </div>

        <!-- STEP 4 -->
        <div class="space-y-4 pt-4 border-t border-slate-200">
          <div class="flex items-center gap-3">
            <span class="w-7 h-7 bg-emerald-600 text-white rounded-md flex items-center justify-center font-black text-sm shrink-0">
              4
            </span>
            <h2 class="text-xl md:text-2xl font-black text-slate-900">
              Pre-Payment Acceptance Checklist
            </h2>
          </div>

          <div class="bg-slate-900 text-white rounded-2xl p-6 md:p-8 space-y-4 shadow-sm">
            <span class="text-[10px] font-bold uppercase tracking-widest text-emerald-400 block">
              VERIFICATION STEPS IN SHOP
            </span>
            <ul class="space-y-3 text-xs md:text-sm text-slate-300">
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">•</span>
                <span>Test keyboard keys, touchpad, WiFi connection, and speakers in front of the counter.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">•</span>
                <span>Verify battery charging percentage increases steadily while plugged in.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">•</span>
                <span>Collect the old defective hardware part that was swapped out.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">•</span>
                <span>Obtain a printed or digital itemized receipt specifying part warranty period.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>

      <!-- Right Sidebar -->
      <div class="lg:col-span-4 space-y-6 lg:sticky lg:top-8">
        <!-- Navigation Widget -->
        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm space-y-4">
          <span class="text-[10px] font-bold text-emerald-600 uppercase tracking-widest block">
            OTHER APPLIANCE GUIDES
          </span>
          <div class="space-y-2 text-xs font-semibold text-slate-700">
            <a href="<?= url('repair-guides/washing-machine.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group">
              <span>Washing Machine Guide</span>
              <i data-lucide="arrow-right" class="size-3 text-slate-400 group-hover:text-emerald-600 transition"></i>
            </a>
            <a href="<?= url('repair-guides/refrigerator.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group border-t border-slate-100">
              <span>Refrigerator Guide</span>
              <i data-lucide="arrow-right" class="size-3 text-slate-400 group-hover:text-emerald-600 transition"></i>
            </a>
            <a href="<?= url('repair-guides/smart-tv.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group border-t border-slate-100">
              <span>TV & Screen Guide</span>
              <i data-lucide="arrow-right" class="size-3 text-slate-400 group-hover:text-emerald-600 transition"></i>
            </a>
          </div>
        </div>

        <!-- General Advice Widget -->
        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm space-y-3">
          <span class="text-[10px] font-bold text-emerald-600 uppercase tracking-widest block">
            NEED GENERAL ADVICE?
          </span>
          <h3 class="font-bold text-slate-900 text-base">Universal 4-Step Standard</h3>
          <p class="text-xs text-slate-500 leading-relaxed">
            Learn the general rules of diagnostic fee adjustments, OEM authentication, and warranty verification.
          </p>
          <a href="<?= url('#quote-verification') ?>" class="text-xs font-bold text-emerald-600 hover:text-emerald-700 transition inline-flex items-center gap-1 pt-1">
            <span>VIEW UNIVERSAL FRAMEWORK</span>
            <i data-lucide="arrow-right" class="size-3"></i>
          </a>
        </div>
      </div>
    </section>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
