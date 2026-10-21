<?php
define('APP_INIT', true);
require_once __DIR__ . '/../config.php';

$pageTitle = "How to Find a Trusted Local Gaming Console & Hi-Fi Audio Specialist";
$pageDescription = "Everything you need to verify before handing over your PlayStation 5, Xbox Series X, Nintendo Switch, or AV home theater amplifier.";

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
      <span class="text-slate-900 font-semibold uppercase">
        GAMING CONSOLE & AUDIO GEAR GUIDE
      </span>
    </div>

    <!-- ================= HERO SECTION ================= -->
    <section class="max-w-7xl mx-auto px-6 py-6">
      <div class="bg-white rounded-2xl border border-slate-200 p-8 md:p-10 shadow-sm grid lg:grid-cols-12 gap-8 items-start">
        <!-- Main Hero Info -->
        <div class="lg:col-span-7 space-y-4">
          <span class="text-[11px] font-bold text-emerald-600 bg-emerald-50 px-3 py-1 rounded-md uppercase tracking-wider inline-block">
            CONSUMER PLAYBOOK #06
          </span>
          <h1 class="text-3xl md:text-5xl font-black text-slate-900 leading-tight">
            How to Find a Trusted Local Gaming Console & Hi-Fi Audio Specialist
          </h1>
          <p class="text-slate-600 text-sm md:text-base leading-relaxed">
            Everything you need to verify before handing over your PlayStation 5, Xbox Series X, Nintendo Switch, or AV home theater amplifier: liquid metal resealing, authentic HDMI 2.1 port micro-soldering, and capacitor replacement standards.
          </p>

          <div class="flex flex-wrap items-center gap-6 pt-4 text-xs font-semibold text-slate-500 border-t border-slate-100">
            <div class="flex items-center gap-1.5">
              <i data-lucide="clock" class="text-emerald-600 size-4"></i>
              <span>7 min technical read</span>
            </div>
            <div class="flex items-center gap-1.5">
              <i data-lucide="wrench" class="text-emerald-600 size-4"></i>
              <span>Micro-Soldering Standard</span>
            </div>
          </div>
        </div>

        <!-- Hero Image & Rule Box -->
        <div class="lg:col-span-5 space-y-3">
          <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-slate-100 border border-slate-200">
            <img
              src="<?= asset('gameguide.jpg') ?>"
              alt="Gaming Console & Audio Gear Repair"
              class="w-full h-full object-cover"
              onerror="this.src='https://images.unsplash.com/photo-1597733336794-12d05021d510?auto=format&fit=crop&w=800&q=80'"
            />
          </div>
          <div class="bg-emerald-50/80 border border-emerald-200 rounded-xl p-3.5 text-xs text-emerald-950 leading-relaxed flex items-start gap-2.5">
            <i data-lucide="wrench" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
            <div>
              <strong class="font-bold text-emerald-950">Micro-Soldering Rule:</strong> Console HDMI ports require hot-air microscope soldering. Never accept cold-soldering hacks that tear PCB traces.
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
              HDMI 2.1 Port Replacement Standards (PS5 / Xbox)
            </h2>
          </div>

          <p class="text-sm text-slate-600 leading-relaxed">
            Broken HDMI sockets are the #1 physical failure on modern game consoles due to heavy cables or accidental tugs. Repairing an HDMI port involves desoldering 19 to 21 microscopic surface-mount pins without lifting the delicate motherboard traces.
          </p>

          <div class="grid md:grid-cols-2 gap-4 pt-2">
            <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-5 space-y-2 shadow-sm">
              <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider block flex items-center gap-1.5">
                <i data-lucide="check-circle-2" class="size-3"></i> AUTHENTIC PORT VERIFICATION
              </span>
              <p class="text-xs text-emerald-950 leading-relaxed">
                Insist that the replacement port is rated for full HDMI 2.1 throughput (4K@120Hz & HDR support), not an older 1080p-restricted cheap clone.
              </p>
            </div>

            <div class="bg-rose-50 border border-rose-200 rounded-xl p-5 space-y-2 shadow-sm">
              <span class="text-[10px] font-bold text-rose-700 uppercase tracking-wider block flex items-center gap-1.5">
                <i data-lucide="alert-triangle" class="size-3"></i> REPAIRMAN RED FLAG
              </span>
              <p class="text-xs text-rose-950 leading-relaxed">
                The shop claims they can replace the port using a basic handheld soldering iron without an optical microscope or hot air station.
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
              PS5 Liquid Metal vs Xbox Thermal Paste Protocol
            </h2>
          </div>

          <p class="text-sm text-slate-600 leading-relaxed">
            When consoles overheat, shut down mid-game, or produce loud fan noise, the thermal interface layer requires servicing. PlayStation 5 uses conductive liquid metal over the APU, whereas Xbox Series X uses high-viscosity phase-change thermal paste.
          </p>

          <ul class="space-y-3 pt-2">
            <li class="flex items-start gap-3 text-xs md:text-sm text-slate-600 leading-relaxed">
              <i data-lucide="check-circle-2" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
              <span>
                <strong class="text-slate-900">Liquid Metal Re-Sealing (PS5):</strong> The foam barrier surrounding the APU must be 100% intact. Spilled liquid metal causes immediate catastrophic short circuits.
              </span>
            </li>
            <li class="flex items-start gap-3 text-xs md:text-sm text-slate-600 leading-relaxed">
              <i data-lucide="check-circle-2" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
              <span>
                <strong class="text-slate-900">Dry Spot Oxidation Removal:</strong> Technicians must gently polish oxidized bare copper heatsink spots before spreading fresh liquid metal compound.
              </span>
            </li>
            <li class="flex items-start gap-3 text-xs md:text-sm text-slate-600 leading-relaxed">
              <i data-lucide="check-circle-2" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
              <span>
                <strong class="text-slate-900">Heatsink Deep Clean:</strong> Power supply ventilation channels must be completely cleared of compacted lint and dust blankets.
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
              Home Theater & AV Receiver Amplifier Diagnostics
            </h2>
          </div>

          <div class="space-y-3 pt-2">
            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm space-y-1">
              <h4 class="font-bold text-slate-900 text-sm">
                Protect Mode Tripping (Denon, Marantz, Yamaha, Sony):
              </h4>
              <p class="text-xs text-slate-500">
                If the amplifier turns off and blinks a red protection LED, a shorted output transistor or bulging power supply filter capacitor is typically responsible. Do not let technicians quote an entire mainboard replacement.
              </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm space-y-1">
              <h4 class="font-bold text-slate-900 text-sm">
                Capacitor Bank Quality:
              </h4>
              <p class="text-xs text-slate-500">
                For audiophile receivers, demand 105°C rated low-ESR audio-grade electrolytic capacitors (Nichicon, Nippon Chemi-Con, Rubycon) instead of generic industrial parts.
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
              Shop Counter Acceptance Checklist
            </h2>
          </div>

          <div class="bg-slate-900 text-white rounded-2xl p-6 md:p-8 space-y-4 shadow-sm">
            <span class="text-[10px] font-bold uppercase tracking-widest text-emerald-400 block">
              SHOP COLLECTION TESTING PROTOCOL
            </span>
            <ul class="space-y-3 text-xs md:text-sm text-slate-300">
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">—</span>
                <span>Plug console into a 4K TV and test both 60Hz and 120Hz display modes without screen flickering.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">—</span>
                <span>Run a graphically intense game (e.g. Spider-Man 2, Cyberpunk 2077) for at least 10 minutes to ensure whisper-quiet fan speeds.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">—</span>
                <span>Test both disc drive ingestion and controller Bluetooth sync before leaving the shop.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">—</span>
                <span>Obtain a written invoice clearly stating the 60-day to 90-day warranty on soldered components.</span>
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
            ALL DEVICE PLAYBOOKS
          </span>
          <div class="space-y-2 text-xs font-semibold text-slate-700">
            <a href="<?= url('repair-guides/pc-laptop.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group">
              <span>PC & Laptop Guide</span>
              <i data-lucide="arrow-right" class="size-3 text-slate-400 group-hover:text-emerald-600 transition"></i>
            </a>
            <a href="<?= url('repair-guides/smart-home.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group border-t border-slate-100">
              <span>Smart Home & WiFi Guide</span>
              <i data-lucide="arrow-right" class="size-3 text-slate-400 group-hover:text-emerald-600 transition"></i>
            </a>
            <a href="<?= url('repair-guides/smart-tv.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group border-t border-slate-100">
              <span>Smart TV & Display Guide</span>
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

        <!-- Independent Advice Widget -->
        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm space-y-3">
          <span class="text-[10px] font-bold text-emerald-600 uppercase tracking-widest block">
            INDEPENDENT ADVICE
          </span>
          <h3 class="font-bold text-slate-900 text-base">Zero Sponsored Vendor Deals</h3>
          <p class="text-xs text-slate-500 leading-relaxed">
            Our platform does not take commissions from warranty companies or console brands. All advice is designed purely to protect consumers from overcharging and improper soldering.
          </p>
          <a href="<?= url('#choose') ?>" class="text-xs font-bold text-emerald-600 hover:text-emerald-700 transition inline-flex items-center gap-1 pt-1">
            <span>READ 4-STEP RULES</span>
            <i data-lucide="arrow-right" class="size-3"></i>
          </a>
        </div>
      </div>
    </section>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
