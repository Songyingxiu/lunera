<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lunera Admin Home</title>
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
                        "danger": "#ff2a2a",
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
                        'neon-red': '0 0 10px rgba(255, 42, 42, 0.5), 0 0 20px rgba(255, 42, 42, 0.3)',
                    },
                    backgroundImage: {
                        'cyber-grid': "linear-gradient(to right, #1a1a2e 1px, transparent 1px), linear-gradient(to bottom, #1a1a2e 1px, transparent 1px)",
                        'radial-glow': "radial-gradient(circle at center, rgba(176, 38, 255, 0.15) 0%, rgba(5, 5, 8, 0) 70%)"
                    }
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .clip-path-slant {
            clip-path: polygon(10% 0, 100% 0, 100% 85%, 90% 100%, 0 100%, 0 15%);
        }
        .clip-path-hex {
            clip-path: polygon(10% 0, 100% 0, 100% 80%, 90% 100%, 0 100%, 0 20%);
        }
        .clip-path-corner {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 92% 100%, 0 100%);
        }
        body {
            min-height: max(884px, 100dvh);
        }
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
                <span class="material-symbols-outlined text-secondary" style="font-size: 28px; text-shadow: 0 0 8px #00f0ff;">dark_mode</span>
                <h1 class="text-xl font-black tracking-tight text-white uppercase italic text-glow-purple">Lunera</h1>
            </div>
            
            <a href="<?= base_url('logout') ?>" class="flex items-center gap-2 px-3 py-1.5 text-danger border border-danger/50 rounded-sm hover:bg-danger/10 hover:shadow-neon-red transition-all duration-300 clip-path-slant group">
                <span class="material-symbols-outlined text-sm group-hover:rotate-180 transition-transform">logout</span>
                <span class="text-xs font-cyber tracking-wider font-bold">LOG OUT</span>
            </a>
            
        </div>
    </header>

    <main class="relative z-10 pt-28 px-5 space-y-8">
        <section class="space-y-4">
            <h2 class="text-lg font-bold text-white font-cyber tracking-wide flex items-center gap-2">
                <span class="w-1 h-5 bg-secondary shadow-[0_0_8px_#00f0ff]"></span>
                ADMIN CONTROLS
            </h2>
            <div class="grid gap-5">
                
                <div class="bg-surface-purple/60 backdrop-blur-md border border-secondary rounded-lg p-5 relative overflow-hidden group hover:bg-surface-purple/80 transition-all duration-300 shadow-[0_0_15px_rgba(0,240,255,0.15)] clip-path-corner">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-secondary/10 blur-3xl -mr-10 -mt-10 group-hover:bg-secondary/20 transition-all"></div>
                    <div class="absolute bottom-0 right-0 p-2 opacity-20 text-secondary">
                        <span class="material-symbols-outlined text-[80px]">movie_edit</span>
                    </div>
                    <div class="flex items-start justify-between relative z-10">
                        <div class="p-3 bg-secondary/10 rounded-md border border-secondary/30 shadow-[0_0_10px_rgba(0,240,255,0.2)]">
                            <span class="material-symbols-outlined text-secondary text-3xl">movie_edit</span>
                        </div>
                        <span class="material-symbols-outlined text-gray-500 group-hover:text-white transition-colors">arrow_forward</span>
                    </div>
                    <div class="mt-4 relative z-10">
                        <h3 class="text-xl font-cyber font-bold text-white group-hover:text-secondary transition-colors">Manage Content</h3>
                        <p class="text-xs text-text-secondary mt-1 tracking-wide">Upload, edit, and remove anime series.</p>
                    </div>
                </div>

                <div class="bg-surface-purple/60 backdrop-blur-md border border-secondary rounded-lg p-5 relative overflow-hidden group hover:bg-surface-purple/80 transition-all duration-300 shadow-[0_0_15px_rgba(0,240,255,0.15)] clip-path-corner">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-secondary/10 blur-3xl -mr-10 -mt-10 group-hover:bg-secondary/20 transition-all"></div>
                    <div class="absolute bottom-0 right-0 p-2 opacity-20 text-secondary">
                        <span class="material-symbols-outlined text-[80px]">category</span>
                    </div>
                    <div class="flex items-start justify-between relative z-10">
                        <div class="p-3 bg-secondary/10 rounded-md border border-secondary/30 shadow-[0_0_10px_rgba(0,240,255,0.2)]">
                            <span class="material-symbols-outlined text-secondary text-3xl">category</span>
                        </div>
                        <span class="material-symbols-outlined text-gray-500 group-hover:text-white transition-colors">arrow_forward</span>
                    </div>
                    <div class="mt-4 relative z-10">
                        <h3 class="text-xl font-cyber font-bold text-white group-hover:text-secondary transition-colors">Edit Categories</h3>
                        <p class="text-xs text-text-secondary mt-1 tracking-wide">Organize genres and featured lists.</p>
                    </div>
                </div>

                <a href="<?= base_url('admin/add-episode') ?>" class="bg-surface-purple/60 backdrop-blur-md border border-secondary rounded-lg p-5 relative overflow-hidden group hover:bg-surface-purple/80 transition-all duration-300 shadow-[0_0_15px_rgba(0,240,255,0.15)] clip-path-corner block">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-secondary/10 blur-3xl -mr-10 -mt-10 group-hover:bg-secondary/20 transition-all"></div>
                    <div class="absolute bottom-0 right-0 p-2 opacity-20 text-secondary">
                        <span class="material-symbols-outlined text-[80px]">layers</span>
                    </div>
                    <div class="flex items-start justify-between relative z-10">
                        <div class="p-3 bg-secondary/10 rounded-md border border-secondary/30 shadow-[0_0_10px_rgba(0,240,255,0.2)]">
                            <span class="material-symbols-outlined text-secondary text-3xl">layers</span>
                        </div>
                        <span class="material-symbols-outlined text-gray-500 group-hover:text-white transition-colors">arrow_forward</span>
                    </div>
                    <div class="mt-4 relative z-10">
                        <h3 class="text-xl font-cyber font-bold text-white group-hover:text-secondary transition-colors">Episode Manager</h3>
                        <p class="text-xs text-text-secondary mt-1 tracking-wide">Manage episode releases and schedules.</p>
                    </div>
                </a>

            </div>
        </section>

        <section class="space-y-4 pb-8">
            <h2 class="text-lg font-bold text-white font-cyber tracking-wide flex items-center gap-2">
                <span class="w-1 h-5 bg-tertiary shadow-[0_0_8px_#ff0099]"></span>
                QUICK STATS HUD
            </h2>
            <div class="w-full">
                <div class="bg-surface-dark/80 backdrop-blur-sm border border-white/10 rounded-lg p-4 relative overflow-hidden clip-path-hex w-full">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-primary/20 blur-2xl -mr-8 -mt-8"></div>
                    <div class="flex flex-col gap-1 mb-2">
                        <span class="text-[10px] text-text-secondary uppercase tracking-widest font-cyber">Total Users</span>
                        <span class="material-symbols-outlined text-primary text-2xl absolute top-4 right-4 opacity-50">group</span>
                    </div>
                    <div class="text-3xl font-cyber font-bold text-white drop-shadow-[0_0_5px_rgba(176,38,255,0.8)]">
                        <?= isset($total_users) ? $total_users : '0' ?>
                    </div>
                    <div class="flex items-center gap-1 mt-2">
                        <span class="material-symbols-outlined text-secondary text-xs">trending_up</span>
                        <span class="text-[10px] text-secondary">+12% this week</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <nav class="fixed bottom-0 left-0 right-0 bg-[#08080c]/90 backdrop-blur-xl border-t border-white/10 pb-6 pt-3 z-50 shadow-[0_-5px_20px_rgba(0,0,0,0.5)]">
        <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-secondary/50 to-transparent shadow-[0_0_10px_#00f0ff]"></div>
        <ul class="flex justify-around items-center px-2">
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 text-secondary group transition-colors relative" href="#">
                    <div class="absolute -top-3 w-12 h-0.5 bg-secondary shadow-[0_0_10px_#00f0ff,0_0_20px_#00f0ff]"></div>
                    <span class="material-symbols-outlined text-[26px] drop-shadow-[0_0_8px_rgba(0,240,255,0.8)] transition-all">dashboard</span>
                    <span class="text-[10px] font-bold tracking-wide drop-shadow-[0_0_5px_rgba(0,240,255,0.8)]">Dashboard</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 text-gray-500 hover:text-white transition-colors group" href="#">
                    <span class="material-symbols-outlined text-[26px] group-hover:drop-shadow-[0_0_8px_rgba(255,255,255,0.5)] transition-all">analytics</span>
                    <span class="text-[10px] font-medium">Analytics</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 text-gray-500 hover:text-tertiary transition-colors group" href="#">
                    <span class="material-symbols-outlined text-[26px] group-hover:drop-shadow-[0_0_8px_rgba(255,0,153,0.8)] transition-all">groups</span>
                    <span class="text-[10px] font-medium">Users</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 text-gray-500 hover:text-secondary transition-colors group" href="#">
                    <span class="material-symbols-outlined text-[26px] group-hover:drop-shadow-[0_0_8px_rgba(0,240,255,0.8)] transition-all">settings</span>
                    <span class="text-[10px] font-medium">System</span>
                </a>
            </li>
        </ul>
    </nav>
</body>
</html>