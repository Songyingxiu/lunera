<?= $this->extend('layout/template') ?>

<?= $this->section('extra_css') ?>
<style type="text/tailwindcss">
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    .text-glow-cyan { text-shadow: 0 0 10px rgba(0, 240, 255, 0.8); }
    .text-glow-magenta { text-shadow: 0 0 10px rgba(255, 0, 153, 0.8); }
    .poster-glow-cyan { box-shadow: 0 0 15px rgba(0, 240, 255, 0.2); }
    .poster-glow-magenta { box-shadow: 0 0 15px rgba(255, 0, 153, 0.2); }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<header class="fixed top-0 left-0 right-0 z-40 bg-[#0a0a2e]/90 backdrop-blur-md border-b border-white/10 pt-6 md:pt-8 pb-4 px-5 md:pl-[17rem] md:pr-8 transition-all duration-300">
    <div class="flex items-center gap-3 max-w-7xl mx-auto">
        <span class="material-symbols-outlined text-secondary text-glow-cyan text-3xl md:text-4xl" style="transform: scaleX(-1);">brightness_2</span>
        <h1 class="font-cyber text-2xl md:text-3xl font-black tracking-widest text-white italic drop-shadow-[0_0_8px_rgba(255,255,255,0.5)]">MY COLLECTION</h1>
    </div>
</header>

<main class="relative z-10 pt-28 md:pt-36 px-5 md:pl-[17rem] md:pr-8 pb-20 space-y-6 md:space-y-8 w-full max-w-[1600px] mx-auto min-h-screen">
    
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-white/10 pb-4">
            
            <div class="flex items-center gap-2 overflow-x-auto no-scrollbar">
                <button class="flex-shrink-0 px-6 md:px-10 py-2 md:py-2.5 bg-secondary/10 border-l-2 border-secondary text-secondary font-cyber text-xs md:text-sm tracking-widest relative group">
                    FAVORITES
                    <div class="absolute inset-0 bg-secondary/5 blur-sm opacity-50"></div>
                    <div class="absolute -bottom-4 left-0 right-0 h-[2px] bg-secondary shadow-neon-cyan"></div>
                </button>
                <button class="flex-shrink-0 px-6 md:px-10 py-2 md:py-2.5 bg-white/5 border-l-2 border-white/20 text-white/50 font-cyber text-xs md:text-sm tracking-widest hover:text-white hover:bg-white/10 transition-colors">
                    DOWNLOADS
                </button>
            </div>

            <div class="relative w-full md:w-80 shrink-0">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-text-secondary text-lg">search</span>
                <input class="w-full bg-surface-dark/80 border border-white/10 rounded-sm py-2.5 pl-12 pr-4 text-xs md:text-sm font-cyber tracking-widest focus:outline-none focus:border-secondary/50 focus:ring-1 focus:ring-secondary/50 transition-all placeholder:text-gray-600 text-white" placeholder="FILTER COLLECTION..." type="text"/>
                <div class="absolute bottom-0 right-0 w-3 h-3 border-b border-r border-secondary/40"></div>
            </div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 md:gap-6 mt-6 md:mt-8">
            
            <?php if (!empty($favorites)): ?>
                <?php foreach ($favorites as $index => $item): 
                    // Variasi warna border untuk estetika UI Cyberpunk
                    $isMagenta = $index % 3 == 0; 
                    $borderColor = $isMagenta ? 'border-tertiary/40' : 'border-secondary/40';
                    $glowClass = $isMagenta ? 'poster-glow-magenta group-hover:shadow-[0_0_20px_rgba(255,0,153,0.5)]' : 'poster-glow-cyan group-hover:shadow-[0_0_20px_rgba(0,240,255,0.5)]';
                    $textGlow = $isMagenta ? 'text-glow-magenta group-hover:text-tertiary' : 'group-hover:text-secondary text-glow-cyan';
                ?>
                <a href="<?= base_url('detail/' . esc($item['slug'])) ?>" class="space-y-2.5 md:space-y-3 group block cursor-pointer">
                    <div class="relative aspect-[3/4] overflow-hidden rounded-md border <?= $borderColor ?> <?= $glowClass ?> transition-all duration-300">
                        <img alt="<?= esc($item['title']) ?>" class="w-full h-full object-cover group-hover:scale-110 group-hover:opacity-80 transition-all duration-500" src="<?= esc($item['thumbnail_url']) ?>" onerror="this.src='https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n';"/>
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent opacity-80"></div>
                        
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="material-symbols-outlined text-white text-5xl drop-shadow-lg">play_circle</span>
                        </div>

                        <div class="absolute top-2 right-2 bg-background-dark/90 backdrop-blur-sm px-1.5 py-0.5 rounded border border-white/20">
                            <span class="text-[9px] md:text-[10px] font-cyber font-bold <?= $isMagenta ? 'text-tertiary' : 'text-secondary' ?>">
                                <?= esc($item['type'] ?? 'HD') ?>
                            </span>
                        </div>
                    </div>
                    
                    <div class="px-1">
                        <h3 class="font-cyber text-[11px] md:text-xs font-bold tracking-wider text-white truncate uppercase transition-colors <?= $textGlow ?>">
                            <?= esc($item['title']) ?>
                        </h3>
                        <p class="text-[9px] md:text-[10px] text-text-secondary uppercase mt-0.5">
                            <?= esc($item['status'] ?? 'Saved') ?>
                        </p>
                    </div>
                </a>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full py-20 flex flex-col items-center justify-center text-center border border-white/5 rounded-xl bg-surface-dark/30 backdrop-blur-sm">
                    <span class="material-symbols-outlined text-6xl text-gray-600 mb-4">heart_broken</span>
                    <h3 class="text-xl font-cyber font-bold text-white tracking-widest uppercase mb-2">No Data Found</h3>
                    <p class="text-sm text-text-secondary font-body">Your favorites databank is currently empty.<br>Start exploring the network to add content.</p>
                    <a href="<?= base_url('explore') ?>" class="mt-6 px-8 py-3 bg-secondary/20 border border-secondary text-secondary font-cyber text-xs tracking-widest uppercase hover:bg-secondary hover:text-black transition-all shadow-neon-cyan">
                        Explore Network
                    </a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</main>

<?= $this->endSection() ?>