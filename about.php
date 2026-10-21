<?php
define('APP_INIT', true);
require_once __DIR__ . '/config.php';

$pageTitle = "About Us";
$pageDescription = "FairRepairGuide / ForBestGuide is an independent consumer learning resource helping people make smarter repair decisions.";

include __DIR__ . '/includes/header.php';
?>

<div class="min-h-screen bg-slate-50 text-slate-800 font-sans antialiased">
    <!-- ================= BREADCRUMB ================= -->
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center gap-2 text-xs text-slate-500 font-medium">
      <a href="<?= url() ?>" class="hover:text-emerald-600 transition flex items-center gap-1">
        <i data-lucide="home" class="size-3"></i> Home
      </a>
      <span>/</span>
      <span class="text-slate-900 font-semibold">About Us</span>
    </div>

    <!-- ================= SECTION 1: HERO ABOUT ================= -->
    <section class="max-w-7xl mx-auto px-6 py-8">
      <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm grid lg:grid-cols-2">
        <!-- Left Column: Text & Stats -->
        <div class="p-8 md:p-12 flex flex-col justify-between space-y-8">
          <div class="space-y-4">
            <div class="flex items-center gap-2">
              <span class="h-[2px] w-6 bg-emerald-600"></span>
              <span class="text-xs font-bold uppercase tracking-widest text-emerald-600">
                ABOUT FORBESTGUIDE
              </span>
            </div>
            <h1 class="text-3xl md:text-5xl font-black text-slate-900 leading-tight">
              Better Questions. <span class="text-slate-400">Better Repair Decisions.</span>
            </h1>
            <p class="text-slate-600 text-sm md:text-base leading-relaxed pt-2">
              ForBestGuide is an independent consumer learning resource that helps people understand what to ask, what to compare, and what to document before agreeing to local repair work.
            </p>
          </div>

          <!-- Stats Row -->
          <div class="grid grid-cols-3 gap-4 pt-8 border-t border-slate-100">
            <div>
              <span class="block text-3xl font-black text-slate-900">06</span>
              <span class="text-[11px] font-semibold text-slate-500 leading-snug block mt-1">
                Device Guide Categories
              </span>
            </div>
            <div>
              <span class="block text-3xl font-black text-emerald-600">100%</span>
              <span class="text-[11px] font-semibold text-slate-500 leading-snug block mt-1">
                Independent Education
              </span>
            </div>
            <div>
              <span class="block text-3xl font-black text-slate-900">0</span>
              <span class="text-[11px] font-semibold text-slate-500 leading-snug block mt-1">
                Sponsored Rankings
              </span>
            </div>
          </div>
        </div>

        <!-- Right Column: Image with Overlay Text -->
        <div class="relative min-h-[320px] lg:min-h-full bg-slate-100">
          <img
            src="<?= asset('checks.jpg') ?>"
            alt="Our Approach"
            class="w-full h-full object-cover"
            onerror="this.src='https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1000&q=80'"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent flex flex-col justify-end p-8">
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-1">
              OUR APPROACH
            </span>
            <p class="text-white font-bold text-lg md:text-xl max-w-md leading-snug">
              Clear, practical guidance before you hire, approve, or pay.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 2: OUR PRINCIPLES ================= -->
    <section class="max-w-7xl mx-auto px-6 py-16">
      <div class="grid lg:grid-cols-2 gap-8 items-end mb-12">
        <div class="space-y-3">
          <div class="flex items-center gap-2">
            <span class="h-[2px] w-6 bg-emerald-600"></span>
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-600">
              OUR PRINCIPLES
            </span>
          </div>
          <h2 class="text-3xl md:text-4xl font-black text-slate-900 leading-tight">
            What Guides <span class="text-slate-400">Everything We Publish</span>
          </h2>
        </div>
        <p class="text-slate-600 text-sm md:text-base leading-relaxed lg:max-w-md">
          Our content is designed to make repair conversations easier to understand without pushing users toward a particular contractor, provider, or paid listing.
        </p>
      </div>

      <!-- 3 Grid Cards -->
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white border border-slate-200 rounded-2xl p-8 flex flex-col justify-between space-y-6 shadow-sm">
          <div class="flex items-center justify-between">
            <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-md">
              01
            </span>
            <i data-lucide="shield-check" class="text-slate-400 size-5"></i>
          </div>
          <div>
            <h3 class="font-bold text-lg text-slate-900 mb-2">Independent Guidance</h3>
            <p class="text-xs md:text-sm text-slate-500 leading-relaxed">
              We focus on consumer education and do not rank local repair providers based on paid placement or referral commissions.
            </p>
          </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl p-8 flex flex-col justify-between space-y-6 shadow-sm">
          <div class="flex items-center justify-between">
            <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-md">
              02
            </span>
            <i data-lucide="search" class="text-slate-400 size-5"></i>
          </div>
          <div>
            <h3 class="font-bold text-lg text-slate-900 mb-2">Clear Verification Steps</h3>
            <p class="text-xs md:text-sm text-slate-500 leading-relaxed">
              We explain what details to ask for, what to compare on a quote, and what information should be documented before work begins.
            </p>
          </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl p-8 flex flex-col justify-between space-y-6 shadow-sm">
          <div class="flex items-center justify-between">
            <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-md">
              03
            </span>
            <i data-lucide="list-checks" class="text-slate-400 size-5"></i>
          </div>
          <div>
            <h3 class="font-bold text-lg text-slate-900 mb-2">Practical Checklists</h3>
            <p class="text-xs md:text-sm text-slate-500 leading-relaxed">
              Each guide turns a complicated repair discussion into a short list of questions and checks a consumer can actually use.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 3: DARK BANNER (WHY WE BUILT IT) ================= -->
    <section class="bg-slate-900 text-white py-16 md:py-20 px-6 border-t border-slate-800">
      <div class="max-w-7xl mx-auto grid lg:grid-cols-12 gap-8 items-start">
        <div class="lg:col-span-5 space-y-4">
          <span class="text-xs uppercase font-bold tracking-widest text-emerald-400">
            WHY WE BUILT IT
          </span>
          <h2 class="text-3xl md:text-4xl font-black leading-tight text-white">
            Repair Decisions Shouldn't Feel Like Guesswork.
          </h2>
        </div>

        <div class="lg:col-span-7 space-y-6 text-slate-300 text-sm md:text-base leading-relaxed">
          <p>
            When an essential device stops working, many people are asked to make quick decisions about diagnosis, replacement parts, labor charges and whether the item should leave the home for workshop service.
          </p>
          <p>
            Without a simple reference point, it can be difficult to know which questions matter or what should appear on a written quote.
          </p>
          <p class="font-bold text-white pt-2">
            ForBestGuide was created to make those conversations easier to understand with plain-language guides, comparison points and practical pre-service checklists.
          </p>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 4: DEVICE GUIDES GRID ================= -->
    <section class="max-w-7xl mx-auto px-6 py-20">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
        <div class="space-y-3">
          <div class="flex items-center gap-2">
            <span class="h-[2px] w-6 bg-emerald-600"></span>
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-600">
              EXPLORE OUR GUIDES
            </span>
          </div>
          <h2 class="text-3xl md:text-4xl font-black text-slate-900">
            Start With the Device <span class="text-slate-400">You're Getting Repaired</span>
          </h2>
        </div>

        <a
          href="<?= url('repair-guides.php') ?>"
          class="border border-slate-300 text-slate-700 hover:bg-slate-50 font-semibold px-6 py-3 rounded-xl transition inline-flex items-center gap-2 text-sm shrink-0 self-start md:self-auto"
        >
          <span>View All Guides</span>
          <i data-lucide="arrow-right" class="size-3"></i>
        </a>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($guidesList as $guide): ?>
          <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition flex flex-col justify-between space-y-6">
            <div class="flex items-center justify-between">
              <span class="text-emerald-600 bg-emerald-50 p-3 rounded-xl">
                <i data-lucide="<?= $guide['icon'] ?>" class="size-5"></i>
              </span>
              <span class="text-xs font-bold text-slate-400 font-mono"><?= $guide['id'] ?></span>
            </div>

            <div>
              <h3 class="font-bold text-lg text-slate-900 mb-2"><?= htmlspecialchars($guide['name']) ?></h3>
              <p class="text-xs md:text-sm text-slate-500 leading-relaxed mb-4">
                <?= htmlspecialchars($guide['description']) ?>
              </p>
              <a
                href="<?= url($guide['url']) ?>"
                class="text-xs font-bold text-emerald-600 hover:text-emerald-700 transition inline-flex items-center gap-1"
              >
                <span>Read Guide</span>
                <i data-lucide="arrow-right" class="size-2.5"></i>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- ================= SECTION 5: CALLOUT CTA ================= -->
    <section class="max-w-7xl mx-auto px-6 pb-16">
      <div class="bg-slate-100 rounded-2xl p-8 md:p-10 flex flex-col md:flex-row items-center justify-between gap-6 border border-slate-200">
        <div class="space-y-2">
          <span class="text-[11px] font-bold uppercase tracking-widest text-emerald-600">
            CONSUMER LEARNING FIRST
          </span>
          <h3 class="text-xl md:text-2xl font-black text-slate-900">
            Know what to check before you book a local repair.
          </h3>
        </div>

        <a
          href="<?= url('#quote-verification') ?>"
          class="bg-slate-900 hover:bg-slate-800 text-white font-semibold px-6 py-3.5 rounded-xl transition inline-flex items-center gap-3 text-sm shrink-0"
        >
          <span>Read the Hiring Checklist</span>
          <span class="bg-slate-800 p-1.5 rounded-lg flex items-center justify-center">
            <i data-lucide="arrow-right" class="size-3"></i>
          </span>
        </a>
      </div>
    </section>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
