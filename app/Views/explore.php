<?= $this->extend('layout/template') ?>

<?= $this->section('extra_css') ?>
<style>
    .scanlines {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            to bottom,
            rgba(255,255,255,0),
            rgba(255,255,255,0) 50%,
            rgba(0,0,0,0.1) 50%,
            rgba(0,0,0,0.1)
        );
        background-size: 100% 4px;
        pointer-events: none;
        z-index: 9999;
        opacity: 0.3;
    }
    .holographic-border {
        border: 1px solid rgba(0, 243, 255, 0.3);
        box-shadow: inset 0 0 20px rgba(0, 243, 255, 0.1);
    }
    
    /* Animasi Pop-up */
    @keyframes slideUpFade {
        from { opacity: 0; transform: translateY(20px) scale(0.95); }
        to { opacity: 1; transform: translateY(0) scale(1); }
    }
    .modal-animate {
        animation: slideUpFade 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    
    /* Scrollbar untuk area pencarian */
    .custom-scrollbar::-webkit-scrollbar { width: 6px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: rgba(0,0,0,0.2); border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(0, 243, 255, 0.4); border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: rgba(0, 243, 255, 0.8); }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="scanlines"></div>

<header class="fixed top-0 left-0 right-0 z-40 bg-[#020412]/90 backdrop-blur-md border-b border-[#00f3ff]/20 pt-5 md:pt-6 pb-3 px-4 md:pl-[17rem] transition-all duration-300">
    <div class="relative w-full max-w-7xl mx-auto group">
        <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
            <span class="material-symbols-outlined text-[#00f3ff]/70 text-lg md:text-xl">search</span>
        </div>
        
        <input id="searchInput" class="w-full bg-[#0a1025]/80 text-white font-body text-sm md:text-base rounded-xl py-2.5 md:py-3 pl-10 pr-10 border border-[#00f3ff]/30 focus:border-[#00f3ff] focus:ring-1 focus:ring-[#00f3ff] focus:shadow-[0_0_10px_rgba(0,243,255,0.5)] placeholder-gray-500 transition-all duration-300" placeholder="Type and hit Enter to search database..." type="text"/>
        
        <div class="absolute inset-y-0 right-3 flex items-center">
            <button class="text-[#00f3ff] hover:text-white transition-colors" id="btnSearchIcon">
                <span class="material-symbols-outlined filled text-xl md:text-2xl" id="searchIconStatus">mic</span>
            </button>
        </div>
    </div>
</header>

<main class="relative z-10 pt-24 md:pt-28 space-y-8 md:space-y-10 px-4 md:pl-[17rem] md:pr-8 w-full max-w-[1600px] mx-auto pb-20">
    
    <section>
        <div class="flex items-center justify-between mb-3 md:mb-4 max-w-7xl mx-auto">
            <h3 class="text-base md:text-lg font-display font-bold text-white tracking-widest uppercase text-transparent bg-clip-text bg-gradient-to-r from-[#00f3ff] to-[#bc13fe] drop-shadow-[0_0_5px_rgba(0,243,255,0.5)]">
                Categories
            </h3>
            <span class="text-[#00f3ff] text-[10px] md:text-xs font-display font-bold uppercase tracking-wider cursor-default transition-colors shadow-neon-cyan/20">View All</span>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 max-w-7xl mx-auto">
            <?php if (!empty($categories)): ?>
                <?php 
                    $icons = ['swords', 'auto_awesome', 'coffee', 'favorite', 'rocket', 'psychology', 'dark_mode', 'local_fire_department'];
                    $bgColors = [
                        'from-[#050014] to-[#1e3a8a]', 
                        'from-[#050014] to-[#4c0519]', 
                        'from-[#050014] to-[#064e3b]', 
                        'from-[#050014] to-[#4a044e]'  
                    ];
                    $glowColors = [
                        'group-hover:border-[#00f3ff] text-[#00f3ff]', 
                        'group-hover:border-[#bc13fe] text-[#bc13fe]', 
                        'group-hover:border-[#ff00ff] text-[#ff00ff]', 
                        'group-hover:border-[#0066ff] text-[#0066ff]'  
                    ];

                    foreach ($categories as $index => $cat): 
                        $icon = $icons[$index % count($icons)];
                        $bg = $bgColors[$index % count($bgColors)];
                        $glow = $glowColors[$index % count($glowColors)];
                ?>
                <div class="relative h-20 md:h-24 rounded-xl overflow-hidden group border border-white/10 transition-all duration-500 block hover:shadow-[0_0_15px_rgba(255,255,255,0.1)] <?= explode(' ', $glow)[0] ?>">
                    <div class="absolute inset-0 bg-gradient-to-br <?= $bg ?> opacity-80 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-30 mix-blend-overlay"></div>
                    <div class="absolute inset-0 flex items-center justify-between px-4 md:px-5">
                        <span class="font-display font-bold text-sm md:text-base tracking-widest text-white drop-shadow-lg uppercase line-clamp-2 z-10 relative">
                            <?= esc($cat['category_name']) ?>
                        </span>
                        <span class="material-symbols-outlined text-3xl md:text-5xl opacity-50 group-hover:opacity-90 group-hover:scale-110 rotate-12 transition-all duration-300 z-10 relative drop-shadow-[0_0_10px_currentColor] <?= explode(' ', $glow)[1] ?>">
                            <?= $icon ?>
                        </span>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-gray-500 font-body text-xs md:text-sm col-span-2 md:col-span-4 border border-white/10 p-3 rounded-xl bg-[#0a1025]/50">System Notice: No categories data found in the network database.</p>
            <?php endif; ?>
        </div>
    </section>

    <section>
        <div class="flex items-center justify-between mb-3 md:mb-4 max-w-7xl mx-auto">
            <h3 class="text-base md:text-lg font-display font-bold text-white tracking-widest uppercase drop-shadow-[0_0_5px_rgba(255,255,255,0.3)]">
                Sync Timeline
            </h3>
            <div class="flex gap-2">
                <button class="w-7 h-7 md:w-8 md:h-8 rounded-full bg-[#0a1025] border border-[#00f3ff]/30 flex items-center justify-center text-[#00f3ff] hover:bg-[#00f3ff]/20 hover:shadow-[0_0_10px_rgba(0,243,255,0.5)] transition-all">
                    <span class="material-symbols-outlined text-xs md:text-sm">arrow_back_ios_new</span>
                </button>
                <button class="w-7 h-7 md:w-8 md:h-8 rounded-full bg-[#0a1025] border border-[#00f3ff]/30 flex items-center justify-center text-[#00f3ff] hover:bg-[#00f3ff]/20 hover:shadow-[0_0_10px_rgba(0,243,255,0.5)] transition-all">
                    <span class="material-symbols-outlined text-xs md:text-sm">arrow_forward_ios</span>
                </button>
            </div>
        </div>
        
        <div class="flex gap-3 md:gap-5 overflow-x-auto no-scrollbar pb-4 max-w-7xl mx-auto">
            <?php 
                // Dynamic Calendar
                for ($i = -2; $i <= 3; $i++) {
                    $timestamp = strtotime("$i days");
                    $dayName = date('D', $timestamp);
                    $dateNum = date('d', $timestamp);
                    
                    if ($i == 0) {
            ?>
                        <div class="flex flex-col items-center gap-1.5 min-w-[44px] md:min-w-[56px] cursor-pointer">
                            <span class="text-[9px] md:text-[11px] font-display text-[#ff0099] uppercase font-bold tracking-wider drop-shadow-[0_0_5px_rgba(255,0,153,0.8)]"><?= $dayName ?></span>
                            <div class="w-9 h-9 md:w-12 md:h-12 rounded-lg bg-[#ff0099] text-white shadow-[0_0_15px_rgba(255,0,153,0.6)] flex items-center justify-center text-base md:text-lg font-bold font-display relative overflow-hidden">
                                <?= $dateNum ?>
                                <div class="absolute inset-0 bg-white/30 skew-x-12 -translate-x-full animate-[shimmer_2s_infinite]"></div>
                            </div>
                            <div class="w-1.5 h-0.5 bg-[#ff0099] mt-1 shadow-[0_0_8px_rgba(255,0,153,1)]"></div>
                        </div>
            <?php   } else { ?>
                        <div class="flex flex-col items-center gap-1.5 min-w-[44px] md:min-w-[56px] cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
                            <span class="text-[9px] md:text-[11px] font-display text-gray-400 uppercase font-bold tracking-wider"><?= $dayName ?></span>
                            <div class="w-9 h-9 md:w-12 md:h-12 rounded-lg bg-[#0a1025] border border-gray-700 flex items-center justify-center text-xs md:text-base font-medium font-display"><?= $dateNum ?></div>
                        </div>
            <?php 
                    }
                } 
            ?>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 md:gap-4 mt-2 max-w-7xl mx-auto">
            <div class="flex gap-3 md:gap-4 bg-[#0a1025]/60 p-3 md:p-4 rounded-xl border border-[#00f3ff]/20 backdrop-blur-sm relative overflow-hidden group hover:border-[#00f3ff]/60 transition-colors">
                <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-bl from-[#00f3ff]/10 to-transparent rounded-bl-full"></div>
                <div class="relative w-24 md:w-32 aspect-video flex-none rounded-lg overflow-hidden border border-white/10 group-hover:shadow-[0_0_15px_rgba(0,243,255,0.3)] transition-all">
                    <img alt="Anime thumbnail" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3ur9dOIicqPYSQ3bgC_4GrH5I4QQN0GfXf14fCG7nrNewy863rPK2EgS_qxPM2jhTZNgQ_nkJMLiSU_c8TkpBxkJUmU_vI4PSHDQKyVURYsODu813xmKvpCNjQJn753AaTTRBTssZCTypAk-JWfayMcQ2wV9mREdmuPVpojNvV0L20kLc-nGr1uGhLkrfHDqLmOv27yym_bSdCoDMnKugO8EqHjTUHCFXROjVXCNrni1qYVIXOzcJ4EI2gFfZWodjDINwhlKbIicF"/>
                    <div class="absolute bottom-0 left-0 right-0 bg-black/80 backdrop-blur text-[9px] md:text-[10px] text-center text-[#00f3ff] py-0.5 font-bold font-display border-t border-[#00f3ff]/30">18:30</div>
                </div>
                <div class="flex-1 flex flex-col justify-center">
                    <h4 class="text-sm md:text-base font-display font-bold text-white line-clamp-1 tracking-wide">Nebula Drifters</h4>
                    <p class="text-[10px] md:text-xs text-gray-400 mt-0.5 font-mono">EP.12 // The Final Stand</p>
                    <div class="mt-2 flex items-center gap-2">
                        <span class="px-1.5 py-0.5 bg-[#ff00ff]/20 text-[#ff00ff] rounded-sm text-[8px] md:text-[9px] font-bold border border-[#ff00ff]/50 shadow-[0_0_5px_rgba(255,0,255,0.2)] tracking-widest">NEW_DATA</span>
                        <span class="text-[9px] md:text-[10px] text-[#0066ff] font-semibold">Sub & Dub</span>
                    </div>
                </div>
                <button class="self-center p-2 rounded-full hover:bg-[#00f3ff]/10 text-[#00f3ff] transition-colors">
                    <span class="material-symbols-outlined text-xl md:text-2xl">notifications_active</span>
                </button>
            </div>
            
            <div class="flex gap-3 md:gap-4 bg-[#0a1025]/60 p-3 md:p-4 rounded-xl border border-white/5 hover:border-[#bc13fe]/50 backdrop-blur-sm relative overflow-hidden group transition-colors">
                <div class="relative w-24 md:w-32 aspect-video flex-none rounded-lg overflow-hidden border border-white/10 group-hover:shadow-[0_0_15px_rgba(188,19,254,0.3)] transition-all">
                    <img alt="Anime thumbnail" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWxBMBenzKI8EmKb4yXU74YxNdxBJRZv6xyb69vw8K5Z31gFpJBpF6GWACG7FSdkGMCFrOl41UdFb2ck8gj89GK6GRpJAL5W6KmlAxAHwJ66aq-vhD__V7g3xtMj6cLP_i4Sk4TAoQVzmLmtrcQG-pF2l9OMh6_S5bS3PK0zweIzesWmL8rzS4ewpQ17hByxd2xYbgPY94u2Vr2tiHQXokbl2Nb1AyRoOQz61oFaqUmjB7590LT4JvTAHtqDub-X3TwGVjYtup0LCa"/>
                    <div class="absolute bottom-0 left-0 right-0 bg-black/80 backdrop-blur text-[9px] md:text-[10px] text-center text-gray-300 py-0.5 font-bold font-display border-t border-white/10">20:00</div>
                </div>
                <div class="flex-1 flex flex-col justify-center">
                    <h4 class="text-sm md:text-base font-display font-bold text-gray-200 group-hover:text-white line-clamp-1 tracking-wide transition-colors">Cyber Heart Academy</h4>
                    <p class="text-[10px] md:text-xs text-gray-500 group-hover:text-gray-400 mt-0.5 font-mono transition-colors">EP.04 // Glitch in System</p>
                    <div class="mt-2 flex items-center gap-2">
                        <span class="text-[9px] md:text-[10px] text-gray-500 font-semibold tracking-wider uppercase">Sub only</span>
                    </div>
                </div>
                <button class="self-center p-2 rounded-full hover:bg-white/10 text-gray-500 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-xl md:text-2xl">notifications_none</span>
                </button>
            </div>
        </div>
    </section>

    <section class="pb-2">
        <h3 class="text-base md:text-lg font-display font-bold text-white mb-3 md:mb-4 tracking-widest uppercase drop-shadow-[0_0_5px_rgba(255,255,255,0.3)] max-w-7xl mx-auto">
            Recommended / All Network Data
        </h3>
        
        <div class="flex flex-wrap gap-4 max-w-7xl mx-auto">
            <?php if (!empty($all_content)): ?>
                <?php foreach ($all_content as $content): ?>
                
                <div class="relative flex-none w-[130px] md:w-[150px] lg:w-[180px] cursor-pointer group">
                    <a href="<?= base_url('detail/' . esc($content['slug'])) ?>" class="block">
                        <div class="aspect-[2/3] w-full rounded-xl overflow-hidden bg-[#0a1025] relative shadow-lg border border-[#bc13fe]/30 group-hover:border-[#00f3ff] group-hover:shadow-[0_0_20px_rgba(0,243,255,0.3)] transition-all duration-300">
                            <img alt="<?= esc($content['title']) ?>" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-transform duration-500 group-hover:scale-105" src="<?= esc($content['thumbnail_url']) ?>"/>
                            <div class="absolute top-2 right-2 px-1.5 py-0.5 bg-[#bc13fe]/90 rounded-sm text-[8px] md:text-[9px] font-bold text-white shadow-[0_0_10px_rgba(188,19,254,0.6)] tracking-wide backdrop-blur-md border border-white/20 uppercase">
                                <?= esc($content['type']) ?>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-2 md:p-3 bg-gradient-to-t from-[#020412] via-[#020412]/90 to-transparent">
                                <div class="flex items-center gap-1 text-[10px] md:text-xs font-bold text-[#00f3ff] drop-shadow-[0_0_3px_rgba(0,243,255,0.8)]">
                                    <span class="material-symbols-outlined text-[12px] md:text-[14px] filled">star</span> <?= esc($content['rating'] ?? 'N/A') ?> 
                                </div>
                            </div>
                        </div>
                        <h4 class="mt-2 text-xs md:text-sm font-display font-bold text-white leading-tight group-hover:text-[#00f3ff] transition-colors truncate">
                            <?= esc($content['title']) ?>
                        </h4>
                        <p class="text-[9px] md:text-xs text-gray-400 font-mono mt-0.5 uppercase"><?= esc($content['status']) ?></p>
                    </a>
                </div>
                
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-gray-500 font-body text-sm w-full text-center">No data found in the network.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<div id="searchModal" class="fixed inset-0 z-[100] flex items-start justify-center pt-24 md:pt-32 px-4 hidden">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm cursor-pointer transition-opacity" id="closeModalBg"></div>
    
    <div class="relative w-full max-w-2xl bg-[#0a1025] holographic-border rounded-2xl shadow-[0_0_30px_rgba(0,243,255,0.2)] overflow-hidden modal-animate flex flex-col max-h-[70vh]">
        
        <div class="p-4 border-b border-[#00f3ff]/20 bg-[#020412]/80 flex justify-between items-center z-10">
            <h3 class="text-white font-display tracking-widest uppercase text-sm md:text-base flex items-center gap-2">
                <span class="material-symbols-outlined text-[#00f3ff] text-xl">youtube_searched_for</span>
                Search Results
            </h3>
            <button id="closeModalBtn" class="text-gray-400 hover:text-[#ff003c] transition-colors">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
        </div>
        
        <div id="searchResultsContainer" class="p-4 overflow-y-auto flex-1 flex flex-col gap-3 custom-scrollbar relative z-0 min-h-[150px]">
            <div id="searchLoading" class="hidden text-center py-10">
                <span class="material-symbols-outlined text-[#bc13fe] animate-spin text-4xl">autorenew</span>
                <p class="text-gray-400 font-mono text-xs mt-3 uppercase tracking-widest">Querying Database...</p>
            </div>
            
            <div id="searchDataRender" class="flex flex-col gap-3"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const searchIconStatus = document.getElementById('searchIconStatus');
        const modal = document.getElementById('searchModal');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const closeModalBg = document.getElementById('closeModalBg');
        const dataRenderArea = document.getElementById('searchDataRender');
        const loadingDiv = document.getElementById('searchLoading');

        // Fungsi Menutup Modal
        function closeModal() {
            modal.classList.add('hidden');
        }

        closeModalBtn.addEventListener('click', closeModal);
        closeModalBg.addEventListener('click', closeModal);

        // Eksekusi Pencarian
        if (searchInput) {
            searchInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.keyCode === 13) {
                    e.preventDefault();
                    
                    const query = this.value.trim();
                    if (query === '') return;

                    // Buka modal & loading
                    modal.classList.remove('hidden');
                    dataRenderArea.innerHTML = '';
                    loadingDiv.classList.remove('hidden');
                    searchIconStatus.innerText = 'search'; 

                    // Gunakan GET untuk menghindari CSRF block
                    const searchUrl = '<?= base_url('api/search') ?>?query=' + encodeURIComponent(query);

                    fetch(searchUrl, {
                        method: 'GET',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        loadingDiv.classList.add('hidden');
                        searchIconStatus.innerText = 'mic';
                        
                        if (data.status === 'success') {
                            const results = data.results;
                            
                            // Jika data tidak ditemukan
                            if (results.length === 0) {
                                dataRenderArea.innerHTML = `
                                    <div class="text-center py-8">
                                        <span class="material-symbols-outlined text-[#ff003c] text-5xl mb-2 drop-shadow-[0_0_10px_rgba(255,0,60,0.5)]">error</span>
                                        <p class="text-white font-display text-base tracking-wide">
                                            Sorry, we don't have <span class="text-[#00f3ff]">"${query}"</span> in this platform for now.
                                        </p>
                                    </div>
                                `;
                            } else {
                                // Jika data ditemukan
                                let html = '';
                                results.forEach(item => {
                                    const detailUrl = '<?= base_url('detail/') ?>' + item.slug;
                                    
                                    html += `
                                    <a href="${detailUrl}" class="flex gap-4 p-3 rounded-xl border border-white/5 hover:border-[#bc13fe]/50 bg-[#050014]/50 hover:bg-[#050014] transition-all group">
                                        <div class="w-16 md:w-20 aspect-[2/3] rounded-md overflow-hidden flex-none shadow-md border border-white/10 group-hover:border-[#bc13fe]">
                                            <img src="${item.thumbnail_url}" alt="${item.title}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                        </div>
                                        <div class="flex-1 flex flex-col justify-center">
                                            <h4 class="text-white font-display font-bold text-sm md:text-base group-hover:text-[#00f3ff] transition-colors line-clamp-1">${item.title}</h4>
                                            <div class="flex items-center gap-2 mt-1">
                                                <span class="px-1.5 py-0.5 bg-white/10 text-gray-300 text-[10px] rounded uppercase border border-white/10">${item.type}</span>
                                                <span class="text-[#00f3ff] text-[10px] font-bold tracking-widest uppercase">${item.status}</span>
                                            </div>
                                            <p class="text-xs text-gray-500 mt-2 line-clamp-2 font-body">${item.description || 'No description available.'}</p>
                                        </div>
                                        <div class="flex items-center pr-2">
                                            <span class="material-symbols-outlined text-gray-600 group-hover:text-[#bc13fe] transition-colors">chevron_right</span>
                                        </div>
                                    </a>
                                    `;
                                });
                                dataRenderArea.innerHTML = html;
                            }
                        } else {
                            dataRenderArea.innerHTML = `<p class="text-[#ff003c] text-center font-mono">SYSTEM ERROR: Fetch failed.</p>`;
                        }
                    })
                    .catch(error => {
                        console.error('Fetch Error:', error);
                        loadingDiv.classList.add('hidden');
                        searchIconStatus.innerText = 'mic';
                        dataRenderArea.innerHTML = `<p class="text-[#ff003c] text-center font-mono">CONNECTION ERROR: Unable to reach the server.</p>`;
                    });
                }
            });
        }
    });
</script>

<?= $this->endSection() ?>