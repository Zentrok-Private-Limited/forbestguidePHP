<?php
define('APP_INIT', true);
require_once __DIR__ . '/../config.php';

$pageTitle = "How to Hire a Trusted Local Smart Home & Mesh WiFi Technician";
$pageDescription = "Everything you must verify before letting an independent networking technician configure your home router, security cameras, smart doorbells, or mesh WiFi system.";

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
        SMART HOME & WIFI NETWORK GUIDE
      </span>
    </div>

    <!-- ================= HERO SECTION ================= -->
    <section class="max-w-7xl mx-auto px-6 py-6">
      <div class="bg-white rounded-2xl border border-slate-200 p-8 md:p-10 shadow-sm grid lg:grid-cols-12 gap-8 items-start">
        <!-- Main Hero Info -->
        <div class="lg:col-span-7 space-y-4">
          <span class="text-[11px] font-bold text-emerald-600 bg-emerald-50 px-3 py-1 rounded-md uppercase tracking-wider inline-block">
            CONSUMER PLAYBOOK #05
          </span>
          <h1 class="text-3xl md:text-5xl font-black text-slate-900 leading-tight">
            How to Hire a Trusted Local Smart Home & Mesh WiFi Technician
          </h1>
          <p class="text-slate-600 text-sm md:text-base leading-relaxed">
            Everything you must verify before letting an independent networking technician configure your home router, security cameras, smart doorbells, or mesh WiFi system: master credentials ownership, channel interference tuning, and IoT network isolation.
          </p>

          <div class="flex flex-wrap items-center gap-6 pt-4 text-xs font-semibold text-slate-500 border-t border-slate-100">
            <div class="flex items-center gap-1.5">
              <i data-lucide="clock" class="text-emerald-600 size-4"></i>
              <span>8 min technical read</span>
            </div>
            <div class="flex items-center gap-1.5">
              <i data-lucide="shield-check" class="text-emerald-600 size-4"></i>
              <span>Network Privacy Standard</span>
            </div>
          </div>
        </div>

        <!-- Hero Image & Rule Box -->
        <div class="lg:col-span-5 space-y-3">
          <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-slate-100 border border-slate-200">
            <img
              src="<?= asset('homeiotguide.jpg') ?>"
              alt="Smart Home & Mesh WiFi Network Repair"
              class="w-full h-full object-contain"
              onerror="this.src='https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=800&q=80'"
            />
          </div>
          <div class="bg-emerald-50/80 border border-emerald-200 rounded-xl p-3.5 text-xs text-emerald-950 leading-relaxed flex items-start gap-2.5">
            <i data-lucide="shield-check" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
            <div>
              <strong class="font-bold text-emerald-950">Master Security Rule:</strong> Never allow technicians to register smart devices or cameras under contractor email accounts.
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
              Network Privacy & Admin Account Ownership
            </h2>
          </div>

          <p class="text-sm text-slate-600 leading-relaxed">
            The single most critical vulnerability when hiring a third-party IT or smart home installer is unauthorized retention of administrative access. Dishonest contractors often set up mesh routers, DVR security cameras, and smart door locks using their own agency portal logins, leaving homeowners locked out of their own hardware.
          </p>

          <div class="grid md:grid-cols-2 gap-4 pt-2">
            <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-5 space-y-2 shadow-sm">
              <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider block flex items-center gap-1.5">
                <i data-lucide="check-circle-2" class="size-3"></i> WHAT YOU MUST DEMAND
              </span>
              <p class="text-xs text-emerald-950 leading-relaxed">
                Create the primary account using your personal email on your smartphone before handing the device to the technician for configuration.
              </p>
            </div>

            <div class="bg-rose-50 border border-rose-200 rounded-xl p-5 space-y-2 shadow-sm">
              <span class="text-[10px] font-bold text-rose-700 uppercase tracking-wider block flex items-center gap-1.5">
                <i data-lucide="alert-triangle" class="size-3"></i> CRITICAL RED FLAG
              </span>
              <p class="text-xs text-rose-950 leading-relaxed">
                The technician refuses to give you the local router web admin password (192.168.1.1) claiming &ldquo;it will void maintenance support.&rdquo;
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
              IoT Network Isolation & Guest SSID Protocol
            </h2>
          </div>

          <p class="text-sm text-slate-600 leading-relaxed">
            Smart home gadgets (cheap smart plugs, smart bulbs, robo-vacuums) have notoriously weak firmware security. A competent network professional should always separate smart devices from your personal computers and mobile banking devices using a dedicated IoT Virtual LAN (VLAN) or secondary 2.4GHz Guest Network.
          </p>

          <ul class="space-y-3 pt-2">
            <li class="flex items-start gap-3 text-xs md:text-sm text-slate-600 leading-relaxed">
              <i data-lucide="check-circle-2" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
              <span>
                <strong class="text-slate-900">Primary 5GHz / 6GHz Network:</strong> Strictly for laptops, smartphones, tablets, and NAS backup storage.
              </span>
            </li>
            <li class="flex items-start gap-3 text-xs md:text-sm text-slate-600 leading-relaxed">
              <i data-lucide="check-circle-2" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
              <span>
                <strong class="text-slate-900">Isolated 2.4GHz IoT Network:</strong> For smart TVs, smart switches, robot cleaners, and ambient lighting.
              </span>
            </li>
            <li class="flex items-start gap-3 text-xs md:text-sm text-slate-600 leading-relaxed">
              <i data-lucide="check-circle-2" class="text-emerald-600 shrink-0 mt-0.5 size-4"></i>
              <span>
                <strong class="text-slate-900">CCTV Dedicated VLAN:</strong> Security cameras routed to local NVR storage without open UPnP internet ports.
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
              Mesh WiFi Node Placement & Spectrum Tuning
            </h2>
          </div>

          <div class="space-y-3 pt-2">
            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm space-y-1">
              <h4 class="font-bold text-slate-900 text-sm">
                Signal Level Verification (RSSI Benchmark):
              </h4>
              <p class="text-xs text-slate-500">
                Node-to-node signal strength must measure between -50 dBm to -65 dBm. Any node exceeding -75 dBm will cause intermittent buffering and dropped Zoom calls.
              </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm space-y-1">
              <h4 class="font-bold text-slate-900 text-sm">
                Ethernet Backhaul Priority:
              </h4>
              <p class="text-xs text-slate-500">
                If your home has Cat6 wall ports, demand wired Ethernet backhaul rather than wireless daisy-chaining for 100% full gigabit speeds.
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
              Verification Checklist Before Technician Leaves
            </h2>
          </div>

          <div class="bg-slate-900 text-white rounded-2xl p-6 md:p-8 space-y-4 shadow-sm">
            <span class="text-[10px] font-bold uppercase tracking-widest text-emerald-400 block">
              POST-INSTALLATION VERIFICATION PROTOCOL
            </span>
            <ul class="space-y-3 text-xs md:text-sm text-slate-300">
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">—</span>
                <span>Verify router admin login opens only with your personal credentials.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">—</span>
                <span>Conduct internet speed tests in the farthest bedroom and balcony with doors closed.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">—</span>
                <span>Ensure CCTV streams load directly on your phone when switched from WiFi to Mobile Data (4G/5G).</span>
              </li>
              <li class="flex items-start gap-2.5">
                <span class="text-emerald-400 font-bold">—</span>
                <span>Confirm WPS (WiFi Protected Setup) is turned OFF in router settings to prevent PIN-cracking attacks.</span>
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
            <a href="<?= url('repair-guides/washing-machine.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group border-t border-slate-100">
              <span>Washing Machine Guide</span>
              <i data-lucide="arrow-right" class="size-3 text-slate-400 group-hover:text-emerald-600 transition"></i>
            </a>
            <a href="<?= url('repair-guides/refrigerator.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group border-t border-slate-100">
              <span>Refrigerator Guide</span>
              <i data-lucide="arrow-right" class="size-3 text-slate-400 group-hover:text-emerald-600 transition"></i>
            </a>
            <a href="<?= url('repair-guides/smart-tv.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group border-t border-slate-100">
              <span>Smart TV & Display Guide</span>
              <i data-lucide="arrow-right" class="size-3 text-slate-400 group-hover:text-emerald-600 transition"></i>
            </a>
            <a href="<?= url('repair-guides/gaming-audio.php') ?>" class="flex items-center justify-between p-2.5 hover:bg-slate-50 rounded-lg transition group border-t border-slate-100">
              <span>Gaming Console & Audio Guide</span>
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
            Our platform does not take commissions from internet service providers (ISPs) or camera brands. All advice is designed purely to protect consumer home network security.
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
