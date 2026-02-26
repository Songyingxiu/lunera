<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lunera Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
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
                        "surface-purple": "#1a0b2e",
                        "text-secondary": "#9ca3af",
                        "accent-dark": "#1a1a2e"
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"],
                        "cyber": ["Orbitron", "sans-serif"]
                    },
                    boxShadow: {
                        'neon-purple': '0 0 10px rgba(176, 38, 255, 0.5), 0 0 20px rgba(176, 38, 255, 0.3)',
                        'neon-cyan': '0 0 10px rgba(0, 240, 255, 0.5), 0 0 20px rgba(0, 240, 255, 0.3)',
                        'neon-magenta': '0 0 15px rgba(255, 0, 153, 0.6), 0 0 30px rgba(255, 0, 153, 0.4)',
                        'neon-magenta-sm': '0 0 5px rgba(255, 0, 153, 0.5), 0 0 10px rgba(255, 0, 153, 0.3)',
                    },
                    backgroundImage: {
                        'cyber-grid': "linear-gradient(to right, #1a1a2e 1px, transparent 1px), linear-gradient(to bottom, #1a1a2e 1px, transparent 1px)",
                        'radial-glow': "radial-gradient(circle at center, rgba(176, 38, 255, 0.15) 0%, rgba(5, 5, 8, 0) 70%)"
                    }
                },
            },
        }
    </script>
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .clip-path-slant { clip-path: polygon(10% 0, 100% 0, 100% 85%, 90% 100%, 0 100%, 0 15%); }
        .clip-path-hex { clip-path: polygon(10% 0, 100% 0, 100% 80%, 90% 100%, 0 100%, 0 20%); }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background-dark font-display text-white overflow-x-hidden pb-24 md:pb-12 min-h-screen relative">
    
    <div class="fixed inset-0 bg-gradient-to-br from-[#0a0a1a] via-[#050508] to-[#120024] -z-20"></div>
    <div class="fixed inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay -z-10"></div>
    <div class="fixed inset-0 bg-cyber-grid bg-[size:40px_40px] opacity-10 -z-10"></div>
    <div class="fixed top-0 left-0 right-0 h-96 bg-gradient-to-b from-primary/10 to-transparent -z-10 blur-3xl"></div>
    
    <?= view('layout/template') ?>
    
    <header class="fixed top-0 left-0 right-0 h-[76px] z-50 transition-all duration-300 bg-background-dark/80 backdrop-blur-md border-b border-white/5 shadow-[0_5px_20px_rgba(0,0,0,0.5)]">
        <div class="flex items-center justify-between px-5 py-4 h-full max-w-7xl mx-auto">
            <div class="flex items-center gap-2 md:pl-[17rem]">
                <span class="material-symbols-outlined text-secondary filled" 
                      style="font-variation-settings: 'FILL' 1, 'wght' 600, 'GRAD' 0, 'opsz' 48; font-size: 28px; text-shadow: 0 0 12px rgba(0, 240, 255, 0.8);">
                    bedtime
                </span>
                <h1 class="text-xl font-black tracking-tight text-white uppercase italic" 
                    style="text-shadow: 0 0 8px rgba(176, 38, 255, 0.8);">
                    LUNERA
                </h1>
            </div>
            
            <a href="<?= base_url('settings') ?>" class="flex items-center justify-center w-10 h-10 text-white rounded-full bg-surface-dark hover:bg-surface-purple border border-white/10 hover:border-secondary/50 shadow-lg hover:shadow-neon-cyan transition-all duration-300">
                <span class="material-symbols-outlined">settings</span>
            </a>
        </div>
    </header>

    <main class="relative z-10 pt-28 px-5 md:pl-[17rem] md:pr-10 space-y-10 max-w-7xl mx-auto">
        
        <section class="flex flex-col md:flex-row items-center md:items-end md:justify-start text-center md:text-left relative gap-6">
            <div class="relative group shrink-0">
                <div class="absolute inset-0 rounded-full bg-tertiary blur-xl opacity-60 group-hover:opacity-80 transition-opacity duration-500 animate-pulse"></div>
                <div class="relative w-32 h-32 md:w-40 md:h-40 rounded-full p-1 bg-gradient-to-b from-tertiary to-primary shadow-neon-magenta">
                    <div class="w-full h-full rounded-full overflow-hidden border-2 border-black bg-black">
                        <img alt="User Profile" class="w-full h-full object-cover" src="<?= isset($user['avatar']) ? $user['avatar'] : 'https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n' ?>"/>
                    </div>
                </div>
                <div class="absolute bottom-2 right-2 md:bottom-4 md:right-4 w-5 h-5 md:w-6 md:h-6 bg-secondary rounded-full border-2 border-black shadow-[0_0_10px_#00f0ff]"></div>
            </div>
            <div class="space-y-2 z-10 pb-2">
                <h2 class="font-cyber text-3xl md:text-5xl font-bold tracking-wider text-white drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">
                    <?= isset($user['profile_name']) ? esc($user['profile_name']) : 'NEO_GHOST' ?>
                </h2>
                <p class="text-secondary text-xs md:text-sm uppercase tracking-[0.2em] font-medium drop-shadow-[0_0_5px_rgba(0,240,255,0.8)]">Premium Member</p>
            </div>
        </section>

        <section class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full">
            <div class="bg-surface-purple/40 backdrop-blur-sm border border-primary/30 rounded-lg p-4 md:p-5 relative overflow-hidden clip-path-hex">
                <div class="absolute top-0 right-0 w-16 h-16 bg-primary/20 blur-2xl -mr-8 -mt-8"></div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-[10px] md:text-xs text-text-secondary uppercase tracking-widest font-cyber">XP Level</span>
                    <span class="material-symbols-outlined text-primary text-sm md:text-base">military_tech</span>
                </div>
                <div class="text-3xl md:text-4xl font-cyber font-bold text-white drop-shadow-[0_0_5px_rgba(176,38,255,0.8)]">42</div>
                <div class="w-full bg-white/5 h-1 md:h-1.5 mt-3 md:mt-4 rounded-full overflow-hidden">
                    <div class="bg-primary h-full w-[75%] shadow-[0_0_10px_#b026ff]"></div>
                </div>
                <p class="text-[9px] md:text-[10px] text-text-secondary mt-2 text-right">350 XP to Lvl 43</p>
            </div>
            
            <div class="bg-[#0b1a20]/40 backdrop-blur-sm border border-secondary/30 rounded-lg p-4 md:p-5 relative overflow-hidden clip-path-hex">
                <div class="absolute top-0 right-0 w-16 h-16 bg-secondary/20 blur-2xl -mr-8 -mt-8"></div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-[10px] md:text-xs text-text-secondary uppercase tracking-widest font-cyber">Episodes</span>
                    <span class="material-symbols-outlined text-secondary text-sm md:text-base">timelapse</span>
                </div>
                <div class="text-3xl md:text-4xl font-cyber font-bold text-white drop-shadow-[0_0_5px_rgba(0,240,255,0.8)]">1.2K</div>
                <div class="w-full bg-white/5 h-1 md:h-1.5 mt-3 md:mt-4 rounded-full overflow-hidden">
                    <div class="bg-secondary h-full w-[92%] shadow-[0_0_10px_#00f0ff]"></div>
                </div>
                <p class="text-[9px] md:text-[10px] text-text-secondary mt-2 text-right">Top 5% Viewer</p>
            </div>
            
            <div class="hidden md:block bg-surface-dark/60 backdrop-blur-sm border border-white/10 rounded-lg p-5 relative overflow-hidden clip-path-hex">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs text-text-secondary uppercase tracking-widest font-cyber">Watch Time</span>
                    <span class="material-symbols-outlined text-gray-500 text-base">schedule</span>
                </div>
                <div class="text-4xl font-cyber font-bold text-white opacity-80">480h</div>
            </div>
            <div class="hidden md:block bg-surface-dark/60 backdrop-blur-sm border border-white/10 rounded-lg p-5 relative overflow-hidden clip-path-hex">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs text-text-secondary uppercase tracking-widest font-cyber">Reviews</span>
                    <span class="material-symbols-outlined text-gray-500 text-base">rate_review</span>
                </div>
                <div class="text-4xl font-cyber font-bold text-white opacity-80">24</div>
            </div>
        </section>

        <section>
            <div class="flex gap-3 overflow-x-auto no-scrollbar pb-2 md:flex-wrap">
                <button class="flex-none px-6 py-2.5 bg-primary/20 border border-secondary text-white font-cyber text-xs tracking-wider rounded-sm shadow-[0_0_10px_rgba(0,240,255,0.2)] hover:bg-primary/40 hover:shadow-neon-cyan transition-all uppercase clip-path-slant">
                    Collection
                </button>
                <button class="flex-none px-6 py-2.5 bg-surface-dark border border-white/10 text-gray-400 font-cyber text-xs tracking-wider rounded-sm hover:border-primary/50 hover:text-white transition-all uppercase clip-path-slant">
                    History
                </button>
                <button class="flex-none px-6 py-2.5 bg-surface-dark border border-white/10 text-gray-400 font-cyber text-xs tracking-wider rounded-sm hover:border-primary/50 hover:text-white transition-all uppercase clip-path-slant">
                    Achievements
                </button>
            </div>
        </section>

        <section class="space-y-4 md:space-y-6">
            <div class="flex items-center justify-between">
                <h3 class="text-base md:text-lg font-bold text-white font-cyber tracking-wide flex items-center gap-2 md:gap-3">
                    <span class="w-1 h-4 md:h-5 bg-secondary shadow-[0_0_8px_#00f0ff]"></span>
                    RECENTLY WATCHED
                </h3>
                <span class="text-xs md:text-sm text-text-secondary hover:text-white cursor-pointer font-cyber">View All</span>
            </div>
            
            <div class="flex overflow-x-auto gap-4 md:gap-6 no-scrollbar pb-4 snap-x">
                
                <div class="relative flex-none w-[140px] md:w-[180px] snap-start group cursor-pointer">
                    <div class="aspect-[2/3] w-full rounded-sm overflow-hidden relative border border-secondary/40 group-hover:border-secondary group-hover:shadow-neon-cyan transition-all duration-300">
                        <img alt="Black Clover" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://upload.wikimedia.org/wikipedia/en/thumb/a/aa/Black_Clover_key_visual.jpg/250px-Black_Clover_key_visual.jpg"/>
                        <div class="absolute bottom-0 left-0 w-full h-1 md:h-1.5 bg-gray-900">
                            <div class="h-full bg-secondary w-[45%] shadow-[0_0_5px_#00f0ff]"></div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-6 md:pb-8">
                            <span class="material-symbols-outlined text-white text-3xl drop-shadow-[0_0_5px_rgba(0,240,255,1)]">play_arrow</span>
                        </div>
                    </div>
                    <p class="mt-2 text-xs md:text-sm font-bold text-white truncate font-cyber">Black Clover</p>
                    <p class="text-[10px] md:text-xs text-secondary">E154 • 12m left</p>
                </div>
                
                <div class="relative flex-none w-[140px] md:w-[180px] snap-start group cursor-pointer">
                    <div class="aspect-[2/3] w-full rounded-sm overflow-hidden relative border border-primary/40 group-hover:border-primary group-hover:shadow-neon-purple transition-all duration-300">
                        <img alt="Cyberpunk" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://upload.wikimedia.org/wikipedia/id/a/a1/Cyberpunk_Edgerunners_poster.jpg"/>
                        <div class="absolute bottom-0 left-0 w-full h-1 md:h-1.5 bg-gray-900">
                            <div class="h-full bg-primary w-[90%] shadow-[0_0_5px_#b026ff]"></div>
                        </div>
                    </div>
                    <p class="mt-2 text-xs md:text-sm font-bold text-white truncate font-cyber">Cyberpunk</p>
                    <p class="text-[10px] md:text-xs text-primary">E10 • Finished</p>
                </div>
                
                <div class="relative flex-none w-[140px] md:w-[180px] snap-start group cursor-pointer">
                    <div class="aspect-[2/3] w-full rounded-sm overflow-hidden relative border border-tertiary/40 group-hover:border-tertiary group-hover:shadow-neon-magenta transition-all duration-300">
                        <img alt="Jujutsu Kaisen" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://awsimages.detik.net.id/community/media/visual/2024/02/08/jujutsu-kaisen.jpeg?w=1200"/>
                        <div class="absolute bottom-0 left-0 w-full h-1 md:h-1.5 bg-gray-900">
                            <div class="h-full bg-tertiary w-[10%] shadow-[0_0_5px_#ff0099]"></div>
                        </div>
                    </div>
                    <p class="mt-2 text-xs md:text-sm font-bold text-white truncate font-cyber">Jujutsu Kaisen</p>
                    <p class="text-[10px] md:text-xs text-tertiary">S2 E1 • Just Started</p>
                </div>
                
            </div>
        </section>

        <section class="space-y-4 md:space-y-6 pb-6">
            <div class="flex items-center justify-between">
                <h3 class="text-base md:text-lg font-bold text-white font-cyber tracking-wide flex items-center gap-2 md:gap-3">
                    <span class="w-1 h-4 md:h-5 bg-tertiary shadow-[0_0_8px_#ff0099]"></span>
                    FAVORITES
                </h3>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-5">
                <div class="relative group cursor-pointer overflow-hidden rounded-sm border border-white/5 hover:border-tertiary/50 transition-all">
                    <div class="aspect-video bg-surface-dark relative">
                        <img class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-opacity duration-500 group-hover:scale-105" src="https://image.tmdb.org/t/p/w500/yF1eOkaYvwiORauRCPWznV9xVvi.jpg"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-2 left-3 md:bottom-3 md:left-4">
                            <span class="text-xs md:text-sm font-bold text-white font-cyber">Your Name</span>
                        </div>
                    </div>
                </div>
                <div class="relative group cursor-pointer overflow-hidden rounded-sm border border-white/5 hover:border-tertiary/50 transition-all">
                    <div class="aspect-video bg-surface-dark relative">
                        <img class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-opacity duration-500 group-hover:scale-105" src="https://image.tmdb.org/t/p/w500/4HodYYKEIsGOdinkGi2Ucz6X9i0.jpg"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-2 left-3 md:bottom-3 md:left-4">
                            <span class="text-xs md:text-sm font-bold text-white font-cyber">Oshi no Ko</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

</body>
</html>