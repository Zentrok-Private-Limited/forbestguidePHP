<?php
define('APP_INIT', true);
require_once __DIR__ . '/../config.php';

$pageTitle = "How to Find a Local TV & Flat Screen Specialist";
$pageDescription = "Demystifying LED backlight failures versus damaged display panels, board-level micro repairs (Power Board & T-Con), and safe padded transit procedures.";

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
      <span class="text-slate-900 font-semibold uppercase">TV & DISPLAY REPAIR</span>
    </div>

    <!-- ================= HERO SECTION ================= -->
    <section class="max-w-7xl mx-auto px-6 py-6">
      <div class="bg-white rounded-2xl border border-slate-200 p-8 md:p-10 shadow-sm grid lg:grid-cols-12 gap-8 items-start">
        <!-- Main Hero Info -->
        <div class="lg:col-span-7 space-y-4">
          <span class="text-[11px] font-bold text-emerald-600 bg-emerald-50 px-3 py-1 rounded-md uppercase tracking-wider inline-block">
            CONSUMER DECISION GUIDE #04
          </span>
          <h1 class="text-3xl md:text-5xl font-black text-slate-900 leading-tight">
            How to Find a Local TV & Flat Screen Specialist
          </h1>
          <p class="text-slate-600 text-sm md:text-base leading-relaxed">
            Demystifying LED backlight failures versus damaged display panels, board-level micro repairs (Power Board & T-Con), and safe padded transit procedures.
          </p>

          <div class="flex flex-wrap items-center gap-6 pt-4 text-xs font-semibold text-slate-500 border-t border-slate-100">
            <div class="flex items-center gap-1.5">
              <i data-lucide="clock" class="text-emerald-600 size-4"></i>
              <span>6 min comprehensive read</span>
            </div>
            <div class="flex items-center gap-1.5">
              <i data-lucide="tv" class="text-emerald-600 size-4"></i>
              <span>LED, OLED & 4K Displays</span>
            </div>
          </div>
        </div>

        <!-- Hero Image & Torch Test Tip Box -->
        <div class="lg:col-span-5 space-y-3">
          <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-slate-100 border border-slate-200">
            <img
              src="<?= asset('tvguide.jpg') ?>"
              alt="TV & Display Repair"
              class="w-full h-full object-cover"
              onerror="this.src='https://images.unsplash.com/photo-1593784991095-a205069470b6?auto=format&fit=crop&w=800&q=80'"
            />
          </div>
          <div class="bg-emerald-50/80 border border-emerald-200 rounded-xl p-3.5 text-xs text-emerald-950 leading-relaxed flex items-start gap-2.5">
            <i data-lucide="lightbulb" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
            <div>
              <strong class="font-bold text-emerald-950">Torch Test tip:</strong> If the screen is dark but sound works, shine a flashlight directly at the display. If you see faint images, only the LED backlights need replacement!
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
              Backlight Strip vs Panel Damage
            </h2>
          </div>

          <p class="text-sm text-slate-600 leading-relaxed">
            The number one overcharge scam in television repairs is telling consumers their &ldquo;screen/panel is permanently damaged and needs full replacement&rdquo; when in reality a single LED backlight strip burned out.
          </p>

          <div class="grid md:grid-cols-2 gap-4 pt-2">
            <div class="bg-white border border-slate-200 rounded-xl p-5 space-y-2 shadow-sm">
              <span class="text-[10px] font-bold text-emerald-600 uppercase tracking-wider block">
                LED BACKLIGHT BURNOUT
              </span>
              <p class="text-xs text-slate-500 leading-relaxed">
                Symptoms: Audio plays fine, remote changes channels, but picture is pitch black. This is an economical repair requiring a new set of LED array bars.
              </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 space-y-2 shadow-sm">
              <span class="text-[10px] font-bold text-emerald-600 uppercase tracking-wider block">
                TRUE PANEL / GLASS FRACTURE
              </span>
              <p class="text-xs text-slate-500 leading-relaxed">
                Symptoms: Spider-web cracks, colored vertical/horizontal lines, or bleeding ink patches. Replacing the actual glass panel is rarely cost-effective compared to buying a new TV.
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
              Board-Level Repair vs Modular Swapping
            </h2>
          </div>

          <p class="text-sm text-slate-600 leading-relaxed">
            Inside every LED TV are three core boards: the Power Supply Board (SMPS), the Motherboard (Main Logic), and the Timing Controller (T-Con).
          </p>

          <ul class="space-y-3 pt-2">
            <li class="flex items-start gap-3 text-xs md:text-sm text-slate-600 leading-relaxed">
              <i data-lucide="check-circle-2" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
              <span>
                <strong class="text-slate-900">Power Board Capacitor Repairs:</strong> If your TV has no standby red light, a technician can replace swollen electrolytic capacitors for minimal labor fees.
              </span>
            </li>
            <li class="flex items-start gap-3 text-xs md:text-sm text-slate-600 leading-relaxed">
              <i data-lucide="check-circle-2" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
              <span>
                <strong class="text-slate-900">T-Con Board Diagnosis:</strong> Double images, solarization, or white screen are often fixed by replacing the tiny T-Con board rather than declaring the panel dead.
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
              Screen Transport & Safety Standards
            </h2>
          </div>

          <p class="text-sm text-slate-600 leading-relaxed">
            If the TV must be transported to a workshop for backlight replacement:
          </p>

          <div class="space-y-3 pt-2">
            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm space-y-1">
              <h4 class="font-bold text-slate-900 text-sm">
                Padded Flight / Transit Cases
              </h4>
              <p class="text-xs text-slate-500">
                Ensure the service provider transports the unit upright in padded blankets or hard-shell flight cases. Transporting flat on a bike will crack the matrix.
              </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm space-y-1">
              <h4 class="font-bold text-slate-900 text-sm">
                Photograph Screen Glass Prior to Handover
              </h4>
              <p class="text-xs text-slate-500">
                Take timestamped photos of the display glass to prevent disputes regarding transit scratches.
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
              Acceptance Checklist Before Settling Payment
            </h2>
          </div>

          <div class="bg-slate-900 text-white rounded-2xl p-6 md:p-8 space-y-4 shadow-sm">
            <span class="text-[10px] font-bold uppercase tracking-widest text-emerald-400 block">
              VERIFICATION PROTOCOL
            </span>
            <ul class="space-y-3 text-xs md:text-sm text-slate-300">
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">•</span>
                <span>Test white / solid color backgrounds for even brightness without dark spots or light bleeding.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">•</span>
                <span>Verify HDMI 1, HDMI 2, ARC, and optical audio output functionality.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">•</span>
                <span>Ensure full set of LED strips was replaced (not just 1 single bulb) for longevity.</span>
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
            <a href="<?= url('repair-guides/pc-laptop.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group">
              <span>PC & Laptop Guide</span>
              <i data-lucide="arrow-right" class="size-3 text-slate-400 group-hover:text-emerald-600 transition"></i>
            </a>
            <a href="<?= url('repair-guides/washing-machine.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group border-t border-slate-100">
              <span>Washing Machine Guide</span>
              <i data-lucide="arrow-right" class="size-3 text-slate-400 group-hover:text-emerald-600 transition"></i>
            </a>
            <a href="<?= url('repair-guides/refrigerator.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group border-t border-slate-100">
              <span>Refrigerator Guide</span>
              <i data-lucide="arrow-right" class="size-3 text-slate-400 group-hover:text-emerald-600 transition"></i>
            </a>
          </div>
        </div>

        <!-- Fair Price Advice Widget -->
        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm space-y-3">
          <span class="text-[10px] font-bold text-emerald-600 uppercase tracking-widest block">
            FAIR PRICE ADVICE
          </span>
          <h3 class="font-bold text-slate-900 text-base">Backlight Array Replacement</h3>
          <p class="text-xs text-slate-500 leading-relaxed">
            Replacing the full array of backlight strips generally costs 15% to 25% of the television's original price and gives the TV 3-5 additional years of life.
          </p>
          <a href="<?= url('#quote-verification') ?>" class="text-xs font-bold text-emerald-600 hover:text-emerald-700 transition inline-flex items-center gap-1 pt-1">
            <span>VIEW HIRING CHECKLIST</span>
            <i data-lucide="arrow-right" class="size-3"></i>
          </a>
        </div>
      </div>
    </section>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
