<?php
define('APP_INIT', true);
require_once __DIR__ . '/config.php';

$pageTitle = "Explore All Consumer Repair Guides";
$pageDescription = "Comprehensive, independent consumer guides for PC & Laptop, Washing Machine, Refrigerator, Smart TV, Smart Home, and Gaming & Audio.";

include __DIR__ . '/includes/header.php';
?>

<div class="min-h-screen bg-slate-50 text-slate-800 font-sans antialiased">
    <!-- Breadcrumb -->
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center gap-2 text-xs text-slate-500 font-medium">
      <a href="<?= url() ?>" class="hover:text-emerald-600 transition flex items-center gap-1">
        <i data-lucide="home" class="size-3"></i> Home
      </a>
      <span>/</span>
      <span class="text-slate-900 font-semibold">Repair Guides</span>
    </div>

    <!-- Header Section -->
    <section class="max-w-7xl mx-auto px-6 py-8">
      <div class="bg-[#173b36] rounded-3xl p-8 md:p-12 text-white relative overflow-hidden shadow-lg">
        <div class="pointer-events-none absolute -right-20 -top-20 size-80 rounded-full bg-[#d7f27c]/15 blur-3xl"></div>
        <div class="max-w-3xl space-y-4 relative z-10">
          <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs font-bold uppercase tracking-widest text-[#d7f27c]">
            <i data-lucide="shield-check" class="size-3.5"></i> 100% UNBIASED DIRECTORY
          </span>
          <h1 class="text-3xl md:text-5xl font-serif font-bold tracking-normal text-white">
            Consumer Repair Guides Library
          </h1>
          <p class="text-slate-200 text-sm md:text-base leading-relaxed max-w-2xl">
            Select a device category below to learn what questions to ask, what tests technicians must perform, and what information must appear on your itemized estimate before approving repair work.
          </p>
        </div>
      </div>
    </section>

    <!-- Grid of Guides -->
    <section class="max-w-7xl mx-auto px-6 py-8 pb-20">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($guidesList as $guide): ?>
          <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition flex flex-col justify-between group">
            <div class="relative h-56 bg-slate-100 overflow-hidden">
              <img
                src="<?= asset($guide['image']) ?>"
                alt="<?= htmlspecialchars($guide['name']) ?>"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                onerror="this.src='https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=600&q=80'"
              />
              <div class="absolute top-4 left-4 rounded-full bg-slate-900/80 px-3 py-1 text-[11px] font-bold text-white backdrop-blur-sm">
                Guide <?= $guide['id'] ?>
              </div>
              <div class="absolute bottom-3 left-3 right-3 rounded-xl bg-slate-900/70 p-2 text-[11px] text-white backdrop-blur-sm flex items-center gap-1.5">
                <i data-lucide="shield-check" class="size-3.5 text-[#d7f27c] shrink-0"></i>
                <span class="truncate"><?= htmlspecialchars($guide['overlayText']) ?></span>
              </div>
            </div>

            <div class="p-6 flex flex-col justify-between flex-1 space-y-4">
              <div>
                <span class="text-[10px] font-bold uppercase tracking-wider text-[#8aa231] block mb-1">
                  <?= htmlspecialchars($guide['category']) ?>
                </span>
                <h2 class="font-serif text-2xl font-bold text-[#173b36] group-hover:text-[#8aa231] transition-colors leading-snug">
                  <?= htmlspecialchars($guide['title']) ?>
                </h2>
                <p class="mt-2 text-xs text-slate-500 leading-relaxed">
                  <?= htmlspecialchars($guide['description']) ?>
                </p>
              </div>

              <div class="border-t border-slate-100 pt-4 flex items-center justify-between">
                <a
                  href="<?= url($guide['url']) ?>"
                  class="text-xs font-bold text-[#173b36] hover:text-[#8aa231] transition-colors flex items-center gap-1"
                >
                  <span>Open Full Guide</span>
                  <i data-lucide="arrow-right" class="size-3"></i>
                </a>
                <span class="text-xs text-slate-400 font-mono">Verified Standard</span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
