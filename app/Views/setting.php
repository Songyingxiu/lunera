<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lunera Settings</title>
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
                        "danger": "#ff003c", 
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
                        'neon-red': '0 0 15px rgba(255, 0, 60, 0.6), 0 0 30px rgba(255, 0, 60, 0.4)',
                    },
                    backgroundImage: {
                        'cyber-grid': "linear-gradient(to right, #1a1a2e 1px, transparent 1px), linear-gradient(to bottom, #1a1a2e 1px, transparent 1px)",
                    }
                },
            },
        }
    </script>
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .clip-path-slant-right { clip-path: polygon(0 0, 100% 0, 100% 70%, 95% 100%, 0 100%); }
        .clip-path-cut-corner { clip-path: polygon(0 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 0 100%); }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background-dark font-display text-white overflow-x-hidden pb-32 min-h-screen relative">
    <div class="fixed inset-0 bg-gradient-to-br from-[#0a0a1a] via-[#050508] to-[#120024] -z-20"></div>
    <div class="fixed inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay -z-10"></div>
    <div class="fixed inset-0 bg-cyber-grid bg-[size:40px_40px] opacity-10 -z-10"></div>
    <div class="fixed top-0 left-0 right-0 h-96 bg-gradient-to-b from-primary/10 to-transparent -z-10 blur-3xl"></div>
    
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-background-dark/90 backdrop-blur-md border-b border-white/5">
        <div class="relative flex items-center justify-between px-4 py-4 pt-6">
            <a href="<?= base_url('profile') ?>" class="z-20 text-text-secondary hover:text-white transition-colors">
                <span class="material-symbols-outlined">arrow_back</span>
            </a>
            <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-secondary -scale-x-100" style="font-size: 20px; text-shadow: 0 0 8px rgba(0, 240, 255, 0.5);">brightness_3</span>
                    <h1 class="text-xl font-black italic tracking-tighter text-white font-cyber" style="text-shadow: 0 0 10px rgba(176, 38, 255, 0.6);">LUNERA</h1>
                </div>
            </div>
            <div class="w-6"></div>
        </div>
    </header>

    <main class="relative z-10 pt-24 px-5 space-y-8">
        <section class="space-y-4">
            <div class="flex items-center gap-4">
                <h2 class="text-sm font-bold text-secondary font-cyber tracking-widest uppercase glow-text-cyan">Account</h2>
                <div class="h-[1px] flex-grow bg-gradient-to-r from-secondary to-transparent shadow-[0_0_8px_#00f0ff]"></div>
            </div>
            <div class="space-y-3">
                <a href="<?= base_url('profile/edit') ?>" class="block w-full group bg-surface-purple/40 backdrop-blur-sm border border-white/5 hover:border-secondary/50 rounded-sm p-4 relative overflow-hidden transition-all duration-300 clip-path-cut-corner text-left cursor-pointer">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-[0_0_10px_#00f0ff]"></div>
                    <div class="flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-text-secondary group-hover:text-white transition-colors">badge</span>
                            <div>
                                <p class="text-sm font-bold text-white font-cyber tracking-wide">Edit Profile</p>
                                <p class="text-[10px] text-text-secondary">Update personal data</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-text-secondary group-hover:text-secondary transition-colors">chevron_right</span>
                    </div>
                </a>
                
                <button class="w-full group bg-surface-purple/40 backdrop-blur-sm border border-white/5 hover:border-secondary/50 rounded-sm p-4 relative overflow-hidden transition-all duration-300 clip-path-cut-corner text-left">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-[0_0_10px_#00f0ff]"></div>
                    <div class="flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-text-secondary group-hover:text-white transition-colors">mail</span>
                            <div>
                                <p class="text-sm font-bold text-white font-cyber tracking-wide">Update Email</p>
                                <p class="text-[10px] text-text-secondary">Connected Account</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-text-secondary group-hover:text-secondary transition-colors">edit</span>
                    </div>
                </button>
            </div>
        </section>

        <section class="space-y-4">
            <div class="flex items-center gap-4">
                <h2 class="text-sm font-bold text-secondary font-cyber tracking-widest uppercase glow-text-cyan">Preferences</h2>
                <div class="h-[1px] flex-grow bg-gradient-to-r from-secondary to-transparent shadow-[0_0_8px_#00f0ff]"></div>
            </div>
            <div class="space-y-3">
                <div class="w-full bg-surface-purple/40 backdrop-blur-sm border border-white/5 rounded-sm p-4 relative overflow-hidden clip-path-cut-corner flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-text-secondary">notifications</span>
                        <div>
                            <p class="text-sm font-bold text-white font-cyber tracking-wide">Notifications</p>
                            <p class="text-[10px] text-text-secondary">Push alerts for new eps</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox" value=""/>
                        <div class="w-11 h-6 bg-gray-800/80 peer-focus:outline-none rounded-sm border border-gray-600 peer-checked:bg-secondary/20 peer-checked:border-secondary peer-checked:shadow-[0_0_10px_rgba(0,240,255,0.4)] transition-all"></div>
                        <div class="absolute top-[2px] left-[2px] bg-gray-400 peer-checked:bg-secondary peer-checked:translate-x-full peer-checked:shadow-[0_0_8px_#00f0ff] h-5 w-5 transition-all rounded-sm"></div>
                    </label>
                </div>
                <button class="w-full group bg-surface-purple/40 backdrop-blur-sm border border-white/5 hover:border-secondary/50 rounded-sm p-4 relative overflow-hidden transition-all duration-300 clip-path-cut-corner text-left">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-[0_0_10px_#00f0ff]"></div>
                    <div class="flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-text-secondary group-hover:text-white transition-colors">closed_caption</span>
                            <div>
                                <p class="text-sm font-bold text-white font-cyber tracking-wide">Subtitles & Audio</p>
                                <p class="text-[10px] text-text-secondary">Default: English / Japanese</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-text-secondary group-hover:text-secondary transition-colors">chevron_right</span>
                    </div>
                </button>
            </div>
        </section>

        <section class="space-y-4 pt-4">
            <a href="<?= base_url('logout') ?>" class="block w-full text-center py-4 relative group overflow-hidden bg-tertiary/10 border border-tertiary/50 hover:bg-tertiary/20 hover:shadow-neon-magenta transition-all duration-300 clip-path-slant-right cursor-pointer">
                <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
                <span class="relative z-10 font-cyber font-bold tracking-[0.2em] text-tertiary text-sm flex items-center justify-center gap-2 group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined">logout</span>
                    LOGOUT
                </span>
                <div class="absolute bottom-0 right-0 w-4 h-4 bg-tertiary blur-md"></div>
            </a>
            
            <form action="<?= base_url('profile/delete') ?>" method="post" onsubmit="return confirm('DANGER: Are you sure you want to permanently delete your account? This action cannot be undone.');">
                <button type="submit" class="w-full py-4 relative group overflow-hidden bg-danger/10 border border-danger/50 hover:bg-danger/20 hover:shadow-neon-red transition-all duration-300 clip-path-slant-right">
                    <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
                    <span class="relative z-10 font-cyber font-bold tracking-[0.2em] text-danger text-sm flex items-center justify-center gap-2 group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">delete_forever</span>
                        DELETE ACCOUNT
                    </span>
                    <div class="absolute bottom-0 right-0 w-4 h-4 bg-danger blur-md"></div>
                </button>
            </form>
            
            <div class="text-center pt-2">
                <p class="text-[10px] text-gray-600 font-cyber uppercase tracking-widest">Lunera System v2.4.1</p>
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