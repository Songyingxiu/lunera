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
<body class="bg-background-dark font-display text-white overflow-x-hidden pb-24 min-h-screen relative">
    <div class="fixed inset-0 bg-gradient-to-br from-[#0a0a1a] via-[#050508] to-[#120024] -z-20"></div>
    <div class="fixed inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay -z-10"></div>
    <div class="fixed inset-0 bg-cyber-grid bg-[size:40px_40px] opacity-10 -z-10"></div>
    <div class="fixed top-0 left-0 right-0 h-96 bg-gradient-to-b from-primary/10 to-transparent -z-10 blur-3xl"></div>
    
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-background-dark/80 backdrop-blur-md border-b border-white/5">
        <div class="flex items-center justify-between px-4 py-4 pt-6">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary -scale-x-100" style="font-size: 28px; text-shadow: 0 0 10px rgba(0, 240, 255, 0.8), 0 0 20px rgba(0, 240, 255, 0.4);">brightness_3</span>
                <h1 class="text-xl font-black tracking-tight text-white uppercase italic" style="text-shadow: 0 0 8px rgba(176, 38, 255, 0.8), 0 0 15px rgba(176, 38, 255, 0.4);">LUNERA</h1>
            </div>
            
            <a href="<?= base_url('settings') ?>" class="flex items-center justify-center w-10 h-10 text-white rounded-full bg-surface-dark hover:bg-surface-purple border border-white/10 hover:border-secondary/50 shadow-lg hover:shadow-neon-cyan transition-all duration-300">
                <span class="material-symbols-outlined">settings</span>
            </a>
        </div>
    </header>

    <main class="relative z-10 pt-24 px-5 space-y-8">
        <section class="flex flex-col items-center justify-center text-center relative">
            <div class="relative mb-4 group">
                <div class="absolute inset-0 rounded-full bg-tertiary blur-xl opacity-60 group-hover:opacity-80 transition-opacity duration-500 animate-pulse"></div>
                <div class="relative w-32 h-32 rounded-full p-1 bg-gradient-to-b from-tertiary to-primary shadow-neon-magenta">
                    <div class="w-full h-full rounded-full overflow-hidden border-2 border-black bg-black">
                        <img alt="User Profile" class="w-full h-full object-cover" src="<?= isset($user['avatar']) ? $user['avatar'] : 'https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n' ?>"/>
                    </div>
                </div>
                <div class="absolute bottom-2 right-2 w-5 h-5 bg-secondary rounded-full border-2 border-black shadow-[0_0_10px_#00f0ff]"></div>
            </div>
            <div class="space-y-1 z-10">
                <h2 class="font-cyber text-3xl font-bold tracking-wider text-white drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">
                    <?= isset($user['profile_name']) ? esc($user['profile_name']) : 'NEO_GHOST' ?>
                </h2>
                <p class="text-secondary text-xs uppercase tracking-[0.2em] font-medium drop-shadow-[0_0_5px_rgba(0,240,255,0.8)]">Premium Member</p>
            </div>
        </section>

        <section class="grid grid-cols-2 gap-4 w-full">
            <div class="bg-surface-purple/40 backdrop-blur-sm border border-primary/30 rounded-lg p-4 relative overflow-hidden clip-path-hex">
                <div class="absolute top-0 right-0 w-16 h-16 bg-primary/20 blur-2xl -mr-8 -mt-8"></div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-[10px] text-text-secondary uppercase tracking-widest font-cyber">XP Level</span>
                    <span class="material-symbols-outlined text-primary text-sm">military_tech</span>
                </div>
                <div class="text-3xl font-cyber font-bold text-white drop-shadow-[0_0_5px_rgba(176,38,255,0.8)]">42</div>
                <div class="w-full bg-white/5 h-1 mt-3 rounded-full overflow-hidden">
                    <div class="bg-primary h-full w-[75%] shadow-[0_0_10px_#b026ff]"></div>
                </div>
                <p class="text-[9px] text-text-secondary mt-1 text-right">350 XP to Lvl 43</p>
            </div>
            <div class="bg-[#0b1a20]/40 backdrop-blur-sm border border-secondary/30 rounded-lg p-4 relative overflow-hidden clip-path-hex">
                <div class="absolute top-0 right-0 w-16 h-16 bg-secondary/20 blur-2xl -mr-8 -mt-8"></div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-[10px] text-text-secondary uppercase tracking-widest font-cyber">Episodes</span>
                    <span class="material-symbols-outlined text-secondary text-sm">timelapse</span>
                </div>
                <div class="text-3xl font-cyber font-bold text-white drop-shadow-[0_0_5px_rgba(0,240,255,0.8)]">1.2K</div>
                <div class="w-full bg-white/5 h-1 mt-3 rounded-full overflow-hidden">
                    <div class="bg-secondary h-full w-[92%] shadow-[0_0_10px_#00f0ff]"></div>
                </div>
                <p class="text-[9px] text-text-secondary mt-1 text-right">Top 5% Viewer</p>
            </div>
        </section>

        <section>
            <div class="flex gap-3 overflow-x-auto no-scrollbar pb-2">
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

        <section class="space-y-4">
            <div class="flex items-center justify-between">
                <h3 class="text-base font-bold text-white font-cyber tracking-wide flex items-center gap-2">
                    <span class="w-1 h-4 bg-secondary shadow-[0_0_8px_#00f0ff]"></span>
                    RECENTLY WATCHED
                </h3>
                <span class="text-xs text-text-secondary hover:text-white cursor-pointer">View All</span>
            </div>
            <div class="flex overflow-x-auto gap-4 no-scrollbar pb-4 snap-x">
                <div class="relative flex-none w-[140px] snap-start group cursor-pointer">
                    <div class="aspect-[2/3] w-full rounded-sm overflow-hidden relative border border-secondary/40 group-hover:border-secondary group-hover:shadow-neon-cyan transition-all duration-300">
                        <img alt="Black Clover" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://upload.wikimedia.org/wikipedia/en/thumb/a/aa/Black_Clover_key_visual.jpg/250px-Black_Clover_key_visual.jpg"/>
                        <div class="absolute bottom-0 left-0 w-full h-1 bg-gray-900">
                            <div class="h-full bg-secondary w-[45%] shadow-[0_0_5px_#00f0ff]"></div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-6">
                            <span class="material-symbols-outlined text-white drop-shadow-[0_0_5px_rgba(0,240,255,1)]">play_arrow</span>
                        </div>
                    </div>
                    <p class="mt-2 text-xs font-bold text-white truncate font-cyber">Black Clover</p>
                    <p class="text-[10px] text-secondary">E154 • 12m left</p>
                </div>
                <div class="relative flex-none w-[140px] snap-start group cursor-pointer">
                    <div class="aspect-[2/3] w-full rounded-sm overflow-hidden relative border border-primary/40 group-hover:border-primary group-hover:shadow-neon-purple transition-all duration-300">
                        <img alt="Cyberpunk" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://upload.wikimedia.org/wikipedia/id/a/a1/Cyberpunk_Edgerunners_poster.jpg"/>
                        <div class="absolute bottom-0 left-0 w-full h-1 bg-gray-900">
                            <div class="h-full bg-primary w-[90%] shadow-[0_0_5px_#b026ff]"></div>
                        </div>
                    </div>
                    <p class="mt-2 text-xs font-bold text-white truncate font-cyber">Cyberpunk</p>
                    <p class="text-[10px] text-primary">E10 • Finished</p>
                </div>
                <div class="relative flex-none w-[140px] snap-start group cursor-pointer">
                    <div class="aspect-[2/3] w-full rounded-sm overflow-hidden relative border border-tertiary/40 group-hover:border-tertiary group-hover:shadow-neon-magenta transition-all duration-300">
                        <img alt="Jujutsu Kaisen" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://awsimages.detik.net.id/community/media/visual/2024/02/08/jujutsu-kaisen.jpeg?w=1200"/>
                        <div class="absolute bottom-0 left-0 w-full h-1 bg-gray-900">
                            <div class="h-full bg-tertiary w-[10%] shadow-[0_0_5px_#ff0099]"></div>
                        </div>
                    </div>
                    <p class="mt-2 text-xs font-bold text-white truncate font-cyber">Jujutsu Kaisen</p>
                    <p class="text-[10px] text-tertiary">S2 E1 • Just Started</p>
                </div>
            </div>
        </section>

        <section class="space-y-4 pb-4">
            <div class="flex items-center justify-between">
                <h3 class="text-base font-bold text-white font-cyber tracking-wide flex items-center gap-2">
                    <span class="w-1 h-4 bg-tertiary shadow-[0_0_8px_#ff0099]"></span>
                    FAVORITES
                </h3>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="relative group cursor-pointer overflow-hidden rounded-sm border border-white/5 hover:border-tertiary/50 transition-all">
                    <div class="aspect-video bg-surface-dark relative">
                        <img class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-opacity duration-500" src="https://image.tmdb.org/t/p/w500/yF1eOkaYvwiORauRCPWznV9xVvi.jpg"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-2 left-3">
                            <span class="text-xs font-bold text-white font-cyber">Your Name</span>
                        </div>
                    </div>
                </div>
                <div class="relative group cursor-pointer overflow-hidden rounded-sm border border-white/5 hover:border-tertiary/50 transition-all">
                    <div class="aspect-video bg-surface-dark relative">
                        <img class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-opacity duration-500" src="https://image.tmdb.org/t/p/w500/4HodYYKEIsGOdinkGi2Ucz6X9i0.jpg"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-2 left-3">
                            <span class="text-xs font-bold text-white font-cyber">Oshi no Ko</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <nav class="fixed bottom-0 left-0 right-0 bg-[#08080c]/90 backdrop-blur-xl border-t border-white/10 pb-6 pt-3 z-50 shadow-[0_-5px_20px_rgba(0,0,0,0.5)]">
        <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-secondary/50 to-transparent shadow-[0_0_10px_#00f0ff]"></div>
        <ul class="flex justify-around items-center px-2">
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 text-gray-500 hover:text-white transition-colors group" href="<?= base_url('/') ?>">
                    <span class="material-symbols-outlined text-[26px] group-hover:drop-shadow-[0_0_8px_rgba(255,255,255,0.5)] transition-all">home</span>
                    <span class="text-[10px] font-medium">Home</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 text-gray-500 hover:text-secondary transition-colors group" href="<?= base_url('explore') ?>">
                    <span class="material-symbols-outlined text-[26px] group-hover:drop-shadow-[0_0_8px_rgba(0,240,255,0.8)] transition-all">explore</span>
                    <span class="text-[10px] font-medium">Explore</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 text-gray-500 hover:text-tertiary transition-colors group" href="#">
                    <span class="material-symbols-outlined text-[26px] group-hover:drop-shadow-[0_0_8px_rgba(255,0,153,0.8)] transition-all">bookmark</span>
                    <span class="text-[10px] font-medium">My List</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 text-secondary group transition-colors relative" href="<?= base_url('profile') ?>">
                    <div class="absolute -top-3 w-12 h-0.5 bg-secondary shadow-[0_0_10px_#00f0ff,0_0_20px_#00f0ff]"></div>
                    <div class="w-6 h-6 rounded-full overflow-hidden border border-secondary shadow-[0_0_8px_rgba(0,240,255,0.6)] group-hover:shadow-[0_0_15px_rgba(0,240,255,0.8)] transition-all">
                        <img alt="User avatar tiny" class="w-full h-full object-cover" src="<?= isset($user['avatar']) ? $user['avatar'] : 'https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n' ?>"/>
                    </div>
                    <span class="text-[10px] font-bold tracking-wide drop-shadow-[0_0_5px_rgba(0,240,255,0.8)]">Profile</span>
                </a>
            </li>
        </ul>
    </nav>
</body>
</html>