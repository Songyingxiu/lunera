<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lunera Home Screen</title>
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#b026ff", 
                        "secondary": "#00f0ff", 
                        "tertiary": "#ff0099", 
                        "background-light": "#1a1a2e",
                        "background-dark": "#050508", 
                        "surface-dark": "#121216",
                        "text-secondary": "#9ca3af",
                        "accent-dark": "#1a1a2e"
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"]
                    },
                    boxShadow: {
                        'neon-purple': '0 0 10px rgba(176, 38, 255, 0.5), 0 0 20px rgba(176, 38, 255, 0.3)',
                        'neon-cyan': '0 0 10px rgba(0, 240, 255, 0.5), 0 0 20px rgba(0, 240, 255, 0.3)',
                        'neon-magenta': '0 0 10px rgba(255, 0, 153, 0.5), 0 0 20px rgba(255, 0, 153, 0.3)',
                    }
                },
            },
        }
    </script>
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        html { scroll-behavior: smooth; }
        body { min-height: max(884px, 100dvh); }
        .text-glow { text-shadow: 0 0 10px rgba(0, 240, 255, 0.7); }
        .text-glow-purple { text-shadow: 0 0 10px rgba(176, 38, 255, 0.7); }
        .clip-path-slant { clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px); }
    </style>
</head>
<body class="bg-background-dark font-display text-white overflow-x-hidden pb-24 md:pb-12 relative">

    <?= view('layout/template') ?>

    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-gradient-to-b from-background-dark/95 to-transparent backdrop-blur-md border-b border-white/5">
        <div class="flex items-center justify-between px-4 md:px-8 py-4 pt-6 max-w-7xl mx-auto">
            <div class="flex items-center gap-2 md:pl-[17rem]">
                <span class="material-symbols-outlined text-secondary filled" style="font-variation-settings: 'FILL' 1, 'wght' 600, 'GRAD' 0, 'opsz' 48; font-size: 28px; text-shadow: 0 0 12px rgba(0, 240, 255, 0.8);">bedtime</span>
                <h1 class="text-2xl font-black tracking-tight text-white uppercase italic text-glow-purple">Lunera</h1>
            </div>
            <div class="flex items-center gap-4">
                <button class="flex items-center justify-center w-10 h-10 text-white rounded-full bg-surface-dark/80 hover:bg-surface-dark border border-white/10 hover:border-secondary/50 shadow-lg hover:shadow-neon-cyan transition-all duration-300">
                    <span class="material-symbols-outlined">search</span>
                </button>
                <button class="flex items-center justify-center w-10 h-10 text-white rounded-full bg-surface-dark/80 hover:bg-surface-dark border border-white/10 hover:border-secondary/50 shadow-lg hover:shadow-neon-cyan transition-all duration-300">
                    <span class="material-symbols-outlined">cast</span>
                </button>
            </div>
        </div>
    </header>

    <main class="relative z-10 w-full pt-0 md:pl-[17rem] max-w-7xl mx-auto">
        
        <section class="relative w-full h-[60vh] md:h-[450px] lg:h-[550px] min-h-[400px] md:mt-[76px] md:rounded-bl-3xl overflow-hidden shadow-[0_0_30px_rgba(0,0,0,0.6)] group">
            <div class="absolute inset-0 w-full h-full bg-cover bg-center transition-transform duration-1000 group-hover:scale-105" style="background-image: url('https://wallpapers-clan.com/wp-content/uploads/2024/08/chainsaw-man-denji-devil-gif-desktop-wallpaper-preview.gif'); background-position: center top;">
                <div class="absolute inset-0 bg-gradient-to-b from-background-dark/80 via-transparent to-[#050508]/90"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-[#050508]/90 via-[#050508]/40 to-transparent"></div>
                <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
            </div>
            
            <div class="absolute bottom-0 left-0 w-full md:w-3/4 lg:w-1/2 px-5 md:px-10 pb-10 flex flex-col items-start text-left gap-4 z-10">
                <div class="bg-black/60 backdrop-blur-md border border-secondary/60 px-3 py-1 rounded-sm text-secondary text-xs font-bold uppercase tracking-widest mb-1 shadow-[0_0_10px_rgba(0,240,255,0.3)]">
                    Trending #1
                </div>
                <h2 class="text-5xl md:text-7xl font-black tracking-tighter leading-none italic text-white drop-shadow-2xl">
                    CHAINSAW<br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-tertiary to-primary animate-pulse filter drop-shadow-[0_0_8px_rgba(176,38,255,0.8)]">MAN</span>
                </h2>
                <div class="flex items-center flex-wrap gap-2 md:gap-3 text-xs md:text-sm font-medium text-gray-300">
                    <span class="text-secondary font-bold drop-shadow-[0_0_5px_rgba(0,240,255,0.8)]">4.9 ★</span>
                    <span>•</span>
                    <span class="text-gray-200">Action</span>
                    <span>•</span>
                    <span class="text-gray-200">Supernatural</span>
                    <span>•</span>
                    <span class="px-1.5 py-0.5 border border-white/20 rounded text-[10px] md:text-xs uppercase bg-white/5">Dub | Sub</span>
                </div>
                <p class="text-sm md:text-base text-gray-300 line-clamp-2 md:line-clamp-3 shadow-black drop-shadow-md">
                    Denji is a teenage boy living with a Chainsaw Devil named Pochita. Due to the debt his father left behind, he has been living a rock-bottom life.
                </p>
                <div class="flex items-center gap-3 md:gap-4 w-full md:w-auto mt-4 md:mt-6">
                    <button class="flex-1 md:flex-none md:px-8 h-12 md:h-14 bg-primary/20 border border-primary text-white rounded-sm flex items-center justify-center gap-2 font-bold uppercase tracking-wide hover:bg-primary/40 transition active:scale-95 shadow-neon-purple backdrop-blur-md relative overflow-hidden group/btn">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent translate-x-[-100%] group-hover/btn:translate-x-[100%] transition-transform duration-1000"></div>
                        <span class="material-symbols-outlined fill-current text-secondary drop-shadow-[0_0_5px_rgba(0,240,255,1)]">play_arrow</span>
                        Watch Episode 1
                    </button>
                    <button class="w-12 h-12 md:w-14 md:h-14 border border-secondary/50 bg-black/40 backdrop-blur-md text-secondary rounded-sm flex items-center justify-center hover:bg-secondary/20 hover:text-white hover:shadow-neon-cyan transition active:scale-95">
                        <span class="material-symbols-outlined">bookmark_add</span>
                    </button>
                </div>
            </div>
        </section>

        <div class="relative z-10 -mt-2 md:mt-10 pb-10 space-y-12">
            
            <section class="pl-5 md:pl-8">
                <div class="flex items-center justify-between pr-5 md:pr-8 mb-5">
                    <h3 class="text-lg md:text-xl font-bold text-white flex items-center gap-3 pl-3 md:pl-4 leading-none h-6 md:h-7 border-l-2 md:border-l-4 border-secondary shadow-[inset_2px_0_5px_rgba(0,240,255,0.5)]">
                        Continue Watching
                    </h3>
                    <span class="material-symbols-outlined text-secondary text-sm md:text-base shadow-neon-cyan rounded-full p-0.5 cursor-pointer hover:bg-secondary/20 transition-colors">chevron_right</span>
                </div>
                <div class="flex overflow-x-auto gap-4 md:gap-6 no-scrollbar pb-2 pr-5 md:pr-8 snap-x">
                    
                    <?php if (!empty($continue_watching)): ?>
                        <?php foreach ($continue_watching as $watch): ?>
                            <a href="<?= base_url('detail/' . esc($watch['slug'])) ?>" class="relative flex-none w-[260px] md:w-[320px] snap-center group cursor-pointer block">
                                <div class="aspect-video w-full rounded-sm overflow-hidden relative bg-surface-dark border border-white/5 group-hover:border-secondary/50 group-hover:shadow-neon-cyan transition-all duration-300">
                                    <img alt="<?= esc($watch['title']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-90 group-hover:opacity-100" src="<?= esc($watch['cover_url']) ?>"/>
                                    <div class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity backdrop-blur-[2px]">
                                        <span class="material-symbols-outlined text-secondary text-[48px] md:text-[60px] drop-shadow-[0_0_10px_rgba(0,240,255,1)]">play_circle</span>
                                    </div>
                                    <div class="absolute bottom-0 left-0 w-full h-1 md:h-1.5 bg-gray-900">
                                        <div class="h-full bg-gradient-to-r from-secondary to-primary w-[50%] shadow-[0_0_8px_rgba(0,240,255,0.8)]"></div>
                                    </div>
                                </div>
                                <div class="mt-3 pl-1">
                                    <h4 class="font-bold text-sm md:text-base leading-tight text-white truncate group-hover:text-secondary transition-colors uppercase"><?= esc($watch['title']) ?></h4>
                                    <p class="text-xs md:text-sm text-text-secondary mt-1 font-medium flex items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-tertiary shadow-[0_0_5px_#ff0099]"></span>
                                        Resume Watching
                                    </p>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="w-full py-4 pl-2">
                            <p class="text-text-secondary text-sm font-display">You haven't watched anything yet.</p>
                        </div>
                    <?php endif; ?>

                </div>
            </section>

            <section class="pl-5 md:pl-8">
                <h3 class="text-lg md:text-xl font-bold text-white mb-5 flex items-center gap-3 pl-3 md:pl-4 leading-none h-6 md:h-7 border-l-2 md:border-l-4 border-primary shadow-[inset_2px_0_5px_rgba(176,38,255,0.5)]">
                    New Arrivals
                </h3>
                <div class="flex overflow-x-auto gap-3 md:gap-5 no-scrollbar pb-2 pr-5 md:pr-8 snap-x">
                    
                    <?php if (!empty($seasonal)): ?>
                        <?php foreach ($seasonal as $content): ?>
                            <div class="relative flex-none w-[130px] md:w-[180px] snap-start cursor-pointer group">
                                <a href="<?= base_url('detail/' . esc($content['slug'])) ?>" class="block">
                                    <div class="aspect-[2/3] w-full rounded-sm overflow-hidden bg-surface-dark relative border border-white/5 group-hover:border-primary/50 group-hover:shadow-neon-purple transition-all duration-300">
                                        <img alt="<?= esc($content['title']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?= esc($content['thumbnail_url']) ?>"/>
                                        <div class="absolute top-0 right-0 bg-secondary/90 backdrop-blur-sm text-black text-[10px] md:text-xs font-black px-2 py-0.5 md:py-1 rounded-bl-lg shadow-[0_0_8px_rgba(0,240,255,0.4)]">NEW</div>
                                    </div>
                                    <p class="mt-2.5 text-xs md:text-sm font-bold text-white line-clamp-1 group-hover:text-primary transition-colors text-glow-purple">
                                        <?= esc($content['title']) ?>
                                    </p>
                                    <p class="text-[10px] md:text-xs text-text-secondary mt-0.5">
                                        <?= isset($content['rating']) ? esc($content['rating']) . ' ★' : 'N/A' ?> | <?= esc(ucfirst($content['type'])) ?>
                                    </p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="w-full py-6">
                            <p class="text-text-secondary text-sm font-display text-center">No new content available yet.</p>
                        </div>
                    <?php endif; ?>

                </div>
            </section>
            
            <section class="pl-5 md:pl-8">
                <div class="flex items-center gap-2 mb-5">
                    <h3 class="text-lg md:text-xl font-bold text-white border-l-2 md:border-l-4 border-tertiary pl-3 md:pl-4 leading-none h-6 md:h-7 shadow-[inset_2px_0_5px_rgba(255,0,153,0.5)]">
                        Shonen Jump Originals
                    </h3>
                    <span class="material-symbols-outlined text-tertiary text-base md:text-lg drop-shadow-[0_0_5px_rgba(255,0,153,0.8)]">verified</span>
                </div>
                <div class="flex overflow-x-auto gap-4 md:gap-6 no-scrollbar pb-2 pr-5 md:pr-8 snap-x">
                    <div class="relative flex-none w-[240px] md:w-[380px] snap-start cursor-pointer group">
                        <div class="aspect-[16/9] w-full rounded-sm overflow-hidden bg-surface-dark relative border border-white/10 group-hover:border-tertiary/60 group-hover:shadow-neon-magenta transition-all duration-300">
                            <img alt="Black Clover Movie" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90 group-hover:opacity-100" src="https://lewatsfilm.com/wp-content/uploads/2023/06/Black-Clover-Sword-of-the-Wizard-King-2023-54-1024x512.jpg"/>
                            <div class="absolute top-2 left-2 md:top-3 md:left-3">
                                <span class="bg-black/70 backdrop-blur-md text-tertiary border border-tertiary/50 text-[10px] md:text-xs font-bold px-2 md:px-3 py-0.5 md:py-1 rounded-sm uppercase tracking-wider shadow-[0_0_10px_rgba(255,0,153,0.2)]">Exclusive</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h4 class="text-sm md:text-base font-bold text-white group-hover:text-tertiary transition-colors drop-shadow-sm truncate">Black Clover: Sword of the Wizard King</h4>
                            <p class="text-xs md:text-sm text-text-secondary mt-1 line-clamp-1">Asta returns in a new movie adventure!</p>
                        </div>
                    </div>
                    <div class="relative flex-none w-[240px] md:w-[380px] snap-start cursor-pointer group">
                        <div class="aspect-[16/9] w-full rounded-sm overflow-hidden bg-surface-dark relative border border-white/10 group-hover:border-tertiary/60 group-hover:shadow-neon-magenta transition-all duration-300">
                            <img alt="Cyberpunk" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90 group-hover:opacity-100" src="https://www.animationmagazine.net/wordpress/wp-content/uploads/Cyberpunk-Edgrunners.jpg"/>
                            <div class="absolute top-2 left-2 md:top-3 md:left-3">
                                <span class="bg-black/70 backdrop-blur-md text-secondary border border-secondary/50 text-[10px] md:text-xs font-bold px-2 md:px-3 py-0.5 md:py-1 rounded-sm uppercase tracking-wider shadow-[0_0_10px_rgba(0,240,255,0.2)]">Simulcast</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h4 class="text-sm md:text-base font-bold text-white group-hover:text-secondary transition-colors drop-shadow-sm truncate">Cyberpunk: Edgerunners</h4>
                            <p class="text-xs md:text-sm text-text-secondary mt-1 line-clamp-1">In a dystopia riddled with corruption...</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pl-5 md:pl-8 bg-gradient-to-r from-transparent via-primary/5 to-transparent py-8 md:py-10 my-4 border-y border-white/5 relative">
                <h3 class="text-lg md:text-xl font-bold text-white mb-6 md:mb-8 flex items-center gap-3 pl-3 md:pl-4 leading-none h-6 md:h-7 border-l-2 md:border-l-4 border-secondary shadow-[inset_2px_0_5px_rgba(0,240,255,0.5)] relative z-10">
                    Top Rated Movies
                </h3>
                <div class="flex overflow-x-auto gap-6 md:gap-10 no-scrollbar pb-4 pr-5 md:pr-8 snap-x items-center relative z-10">
                    <div class="flex items-end gap-0 flex-none snap-start cursor-pointer group relative">
                        <span class="text-[90px] md:text-[140px] font-black leading-[0.7] md:leading-[0.75] -mr-4 md:-mr-8 tracking-tighter text-transparent z-0 relative bottom-[-10px] md:bottom-[-15px] bg-clip-text bg-gradient-to-b from-secondary to-transparent stroke-2 opacity-50 group-hover:opacity-100 transition-opacity" style="-webkit-text-stroke: 1.5px rgba(0,240,255,0.5);">1</span>
                        <div class="w-[130px] md:w-[200px] aspect-[2/3] rounded-sm overflow-hidden z-10 border border-white/10 group-hover:border-secondary/80 shadow-lg group-hover:shadow-neon-cyan transition-all duration-300">
                            <img alt="Movie 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBllluX5HhK5gFyG9Eh8s3ghD95oUUFc_T5qfy59_bzISQrl7V1BfeuCp0qwZzzYfT22Ed6xN0WYs_dsvC8WDRPqVrcb-1Vy0-AfONNJh_KJlIaJgnNlN2ZufcTlLMmxvHQYHNsTOSaXBKDDoMkhrkH-XHVfFCQ7d-PJtCj1vQIXm_TsYi5uycpX1t0KfbwDm3C1YD-9pIeoh2iCBtPMrXgpPIKRgkTWDsAzZKyHb8v07ii9RsnlXC366NkxlDDpclaPZNoNMxL_MT8"/>
                        </div>
                    </div>
                    <div class="flex items-end gap-0 flex-none snap-start cursor-pointer group relative">
                        <span class="text-[90px] md:text-[140px] font-black leading-[0.7] md:leading-[0.75] -mr-4 md:-mr-8 tracking-tighter text-transparent z-0 relative bottom-[-10px] md:bottom-[-15px] bg-clip-text bg-gradient-to-b from-gray-500 to-transparent stroke-2 opacity-50 group-hover:opacity-100 transition-opacity" style="-webkit-text-stroke: 1.5px rgba(156,163,175,0.5);">2</span>
                        <div class="w-[130px] md:w-[200px] aspect-[2/3] rounded-sm overflow-hidden z-10 border border-white/10 group-hover:border-white/50 shadow-lg transition-all duration-300">
                            <img alt="Movie 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCD8jKa5HAP5KQLONKxfwIbr581yIiEV0lE9y7CtI6n4SOKRrW7cmD3kHVkW6Dp4spDuLHguf3eK2fAKBRECa6CvxrhkBSNCY2HCSeXEyy5T81K48kuTU6C-XlOVoQAadoUyVzkUEVWHc1ipdeIwQIOF7v7VHO7WlxGvAb7AUNSHSDKPYt-J40TioEorPFSvUTKQs9t0JqUjbUXPX30KLIES3bU4HV78J0SrU0XpKX5xoLGZwhzuaTS_YAGmepvBrvEhlLMEHrvgzhI"/>
                        </div>
                    </div>
                    <div class="flex items-end gap-0 flex-none snap-start cursor-pointer group relative">
                        <span class="text-[90px] md:text-[140px] font-black leading-[0.7] md:leading-[0.75] -mr-4 md:-mr-8 tracking-tighter text-transparent z-0 relative bottom-[-10px] md:bottom-[-15px] bg-clip-text bg-gradient-to-b from-tertiary to-transparent stroke-2 opacity-50 group-hover:opacity-100 transition-opacity" style="-webkit-text-stroke: 1.5px rgba(255,0,153,0.5);">3</span>
                        <div class="w-[130px] md:w-[200px] aspect-[2/3] rounded-sm overflow-hidden z-10 border border-white/10 group-hover:border-tertiary/80 shadow-lg group-hover:shadow-neon-magenta transition-all duration-300">
                            <img alt="Movie 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkmFP6L3sSYn59bUoeZvdbRsH9OwNwCJbUgArRhMOHQPec5MjPyG18roGgXaqAvVU7QBOlPjcOcIIQVnTAnEQ12N17h_FmHr8FLr2KQ8SlE-lkPE4lXkJJqY8_SGl85_7Yx1Z7T85QKNPQmzIpTq52TOPJmD0hhVDicjkSNZbw3TNqbGxczEMA2S_GZRYH3oQIaE5ViDTZs2pyCP0O-ZEQ5ilJLwA8_nA12QiMBlDUtg78Ip-CNSpAAWkWTtqmByMaEBK2pXQa5820"/>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
    </main>

</body>
</html>