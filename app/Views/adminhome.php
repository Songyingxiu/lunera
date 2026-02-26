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
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .clip-path-slant { clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px); }
        .clip-path-hex { clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px); }
        .clip-path-corner { clip-path: polygon(0 0, 100% 0, 100% 100%, 20px 100%, 0 calc(100% - 20px)); }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background-dark font-display text-white overflow-x-hidden min-h-screen relative">
    
    <div class="fixed inset-0 bg-gradient-to-br from-[#0a0a1a] via-[#050508] to-[#120024] -z-20"></div>
    <div class="fixed inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay -z-10"></div>
    <div class="fixed inset-0 bg-cyber-grid bg-[size:40px_40px] opacity-10 -z-10"></div>
    <div class="fixed top-0 left-0 right-0 h-96 bg-gradient-to-b from-primary/10 to-transparent -z-10 blur-3xl"></div>
    
    <header class="fixed top-0 left-0 right-0 h-[76px] z-50 transition-all duration-300 bg-background-dark/80 backdrop-blur-md border-b border-white/5 shadow-[0_5px_20px_rgba(0,0,0,0.5)]">
        <div class="flex items-center justify-between px-5 py-4 h-full">
            <div class="flex items-center gap-2 md:pl-2">
                <span class="material-symbols-outlined text-secondary filled" style="font-variation-settings: 'FILL' 1, 'wght' 600, 'GRAD' 0, 'opsz' 48; font-size: 28px; text-shadow: 0 0 12px rgba(0, 240, 255, 0.8);">bedtime</span>
                <h1 class="text-xl font-black tracking-tight text-white uppercase italic" style="text-shadow: 0 0 10px rgba(176, 38, 255, 0.7);">Lunera</h1>
            </div>
            
            <a href="<?= base_url('logout') ?>" class="flex items-center gap-2 px-4 py-2 text-danger border border-danger/50 rounded-sm hover:bg-danger/10 hover:shadow-neon-red transition-all duration-300 clip-path-slant group">
                <span class="material-symbols-outlined text-sm group-hover:rotate-180 transition-transform">logout</span>
                <span class="text-xs font-cyber tracking-wider font-bold">LOG OUT</span>
            </a>
        </div>
    </header>

    <aside class="hidden md:flex flex-col fixed top-[76px] left-0 w-64 h-[calc(100vh-76px)] bg-[#050508]/95 backdrop-blur-xl border-r border-white/10 z-40 py-8 px-4 space-y-3 shadow-[5px_0_20px_rgba(0,0,0,0.5)]">
        <div class="text-[10px] font-cyber text-text-secondary uppercase tracking-widest mb-2 px-2">Navigation Panel</div>
        
        <a href="#" class="relative flex items-center gap-3 px-4 py-3.5 bg-secondary/10 border border-secondary/50 text-secondary shadow-neon-cyan transition-all font-cyber text-sm tracking-wider clip-path-slant group">
            <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-secondary shadow-[0_0_10px_#00f0ff]"></div>
            <span class="material-symbols-outlined text-[20px]">dashboard</span>
            Dashboard
        </a>
        
        <a href="#" class="flex items-center gap-3 px-4 py-3.5 text-gray-500 hover:text-white hover:bg-surface-dark border border-transparent hover:border-white/10 transition-all font-cyber text-sm tracking-wider clip-path-slant group">
            <span class="material-symbols-outlined text-[20px] group-hover:drop-shadow-[0_0_8px_rgba(255,255,255,0.5)] transition-all">analytics</span>
            Analytics
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-3.5 text-gray-500 hover:text-tertiary hover:bg-surface-dark border border-transparent hover:border-tertiary/30 transition-all font-cyber text-sm tracking-wider clip-path-slant group">
            <span class="material-symbols-outlined text-[20px] group-hover:drop-shadow-[0_0_8px_rgba(255,0,153,0.8)] transition-all">groups</span>
            Users
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-3.5 text-gray-500 hover:text-secondary hover:bg-surface-dark border border-transparent hover:border-secondary/30 transition-all font-cyber text-sm tracking-wider clip-path-slant group">
            <span class="material-symbols-outlined text-[20px] group-hover:drop-shadow-[0_0_8px_rgba(0,240,255,0.8)] transition-all">settings</span>
            System
        </a>
        
        <div class="mt-auto pt-10">
            <div class="w-full h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent mb-4"></div>
            <div class="text-center">
                <p class="text-[9px] text-gray-600 font-cyber uppercase tracking-widest">Admin HUD v2.5</p>
                <div class="flex justify-center gap-1 mt-1">
                    <span class="w-1 h-1 bg-secondary rounded-full shadow-[0_0_5px_#00f0ff] animate-pulse"></span>
                    <span class="w-1 h-1 bg-secondary rounded-full shadow-[0_0_5px_#00f0ff] animate-pulse delay-75"></span>
                    <span class="w-1 h-1 bg-secondary rounded-full shadow-[0_0_5px_#00f0ff] animate-pulse delay-150"></span>
                </div>
            </div>
        </div>
    </aside>

    <main class="relative z-10 pt-28 px-5 md:pl-[17rem] md:pr-8 pb-32 space-y-10">
        
        <?php if(session()->getFlashdata('success')): ?>
            <div class="w-full bg-secondary/10 border border-secondary/50 text-secondary px-4 py-3 rounded-sm text-xs font-cyber tracking-wide shadow-neon-cyan flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">check_circle</span>
                <span><?= session()->getFlashdata('success') ?></span>
            </div>
        <?php endif; ?>

        <section class="space-y-5">
            <h2 class="text-lg md:text-xl font-bold text-white font-cyber tracking-wide flex items-center gap-3">
                <span class="w-1.5 h-6 bg-secondary shadow-[0_0_10px_#00f0ff]"></span>
                ADMIN CONTROLS
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                
                <div class="bg-surface-purple/60 backdrop-blur-md border border-secondary rounded-lg p-6 relative overflow-hidden group hover:bg-surface-purple/80 transition-all duration-300 shadow-[0_0_15px_rgba(0,240,255,0.15)] clip-path-corner cursor-pointer">
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
                    <div class="mt-5 relative z-10">
                        <h3 class="text-xl font-cyber font-bold text-white group-hover:text-secondary transition-colors">Manage Content</h3>
                        <p class="text-xs text-text-secondary mt-1.5 tracking-wide">Upload, edit, and remove anime series.</p>
                    </div>
                </div>

                <div class="bg-surface-purple/60 backdrop-blur-md border border-secondary rounded-lg p-6 relative overflow-hidden group hover:bg-surface-purple/80 transition-all duration-300 shadow-[0_0_15px_rgba(0,240,255,0.15)] clip-path-corner cursor-pointer">
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
                    <div class="mt-5 relative z-10">
                        <h3 class="text-xl font-cyber font-bold text-white group-hover:text-secondary transition-colors">Edit Categories</h3>
                        <p class="text-xs text-text-secondary mt-1.5 tracking-wide">Organize genres and featured lists.</p>
                    </div>
                </div>

                <a href="<?= base_url('admin/add-episode') ?>" class="bg-surface-purple/60 backdrop-blur-md border border-secondary rounded-lg p-6 relative overflow-hidden group hover:bg-surface-purple/80 transition-all duration-300 shadow-[0_0_15px_rgba(0,240,255,0.15)] clip-path-corner block cursor-pointer">
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
                    <div class="mt-5 relative z-10">
                        <h3 class="text-xl font-cyber font-bold text-white group-hover:text-secondary transition-colors">Episode Manager</h3>
                        <p class="text-xs text-text-secondary mt-1.5 tracking-wide">Manage episode releases and schedules.</p>
                    </div>
                </a>

            </div>
        </section>

        <section class="space-y-5 pb-8">
            <h2 class="text-lg md:text-xl font-bold text-white font-cyber tracking-wide flex items-center gap-3">
                <span class="w-1.5 h-6 bg-tertiary shadow-[0_0_10px_#ff0099]"></span>
                QUICK STATS HUD
            </h2>
            
            <div class="w-full md:w-1/3">
                <div class="bg-surface-dark/80 backdrop-blur-sm border border-white/10 rounded-lg p-5 relative overflow-hidden clip-path-hex w-full group hover:border-white/20 transition-colors cursor-default">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-primary/20 blur-2xl -mr-8 -mt-8 group-hover:bg-primary/30 transition-all"></div>
                    <div class="flex flex-col gap-1 mb-3">
                        <span class="text-xs text-text-secondary uppercase tracking-widest font-cyber">Total Users</span>
                        <span class="material-symbols-outlined text-primary text-3xl absolute top-5 right-5 opacity-50">group</span>
                    </div>
                    <div class="text-4xl font-cyber font-black text-white drop-shadow-[0_0_8px_rgba(176,38,255,0.8)]">
                        <?= isset($total_users) ? $total_users : '0' ?>
                    </div>
                    <div class="flex items-center gap-1.5 mt-3 pt-3 border-t border-white/5">
                        <span class="material-symbols-outlined text-secondary text-sm">trending_up</span>
                        <span class="text-xs text-secondary font-medium tracking-wide">+12% this week</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-[#08080c]/90 backdrop-blur-xl border-t border-white/10 pb-6 pt-3 z-50 shadow-[0_-5px_20px_rgba(0,0,0,0.5)]">
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