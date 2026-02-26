<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title><?= esc($title ?? 'Lunera Admin') ?></title>
    
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
                        'input-glow': '0 0 12px rgba(0, 240, 255, 0.4), inset 0 0 4px rgba(0, 240, 255, 0.1)'
                    },
                    backgroundImage: {
                        'cyber-grid': "linear-gradient(to right, #1a1a2e 1px, transparent 1px), linear-gradient(to bottom, #1a1a2e 1px, transparent 1px)",
                    }
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .clip-path-slant { clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px); }
        .clip-path-corner { clip-path: polygon(0 0, 100% 0, 100% 100%, 15px 100%, 0 calc(100% - 15px)); }
        .clip-path-hud { clip-path: polygon(0 0, 95% 0, 100% 20%, 100% 100%, 5% 100%, 0 80%); }
        .text-glow-purple { text-shadow: 0 0 10px rgba(176, 38, 255, 0.7); }
        .text-glow-cyan { text-shadow: 0 0 12px rgba(0, 240, 255, 0.8); }
        .text-glow-magenta { text-shadow: 0 0 10px rgba(255, 0, 153, 0.8); }
        body { min-height: max(884px, 100dvh); }
        
        /* General styling for inputs in admin */
        input:not([type="checkbox"]):not(.sr-only), select, textarea {
            @apply bg-[rgba(10,10,20,0.8)] border border-secondary/40 text-white px-4 py-3 rounded-sm focus:outline-none focus:border-secondary focus:shadow-input-glow transition-all font-display text-sm placeholder:text-gray-600 backdrop-blur-sm shadow-[inset_0_0_10px_rgba(0,240,255,0.05)];
        }
        form label {
            @apply block text-secondary text-[10px] font-cyber tracking-[0.2em] mb-2 ml-1 uppercase font-semibold;
        }
    </style>
    
    <?= $this->renderSection('extra_css') ?>
</head>
<body class="bg-background-dark font-display text-white overflow-x-hidden min-h-screen relative">
    
    <div class="fixed inset-0 bg-gradient-to-br from-[#0a0a1a] via-[#050508] to-[#120024] -z-20"></div>
    <div class="fixed inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay -z-10"></div>
    <div class="fixed inset-0 bg-cyber-grid bg-[size:40px_40px] opacity-10 -z-10"></div>
    <div class="fixed top-0 left-0 right-0 h-96 bg-gradient-to-b from-primary/10 to-transparent -z-10 blur-3xl"></div>
    
    <?php
        $uri = current_url(true);
        $segment = $uri->getSegment(2); // Ambil segment setelah /admin/
    ?>

    <header class="fixed top-0 left-0 right-0 h-[76px] z-50 transition-all duration-300 bg-background-dark/80 backdrop-blur-md border-b border-white/5 shadow-[0_5px_20px_rgba(0,0,0,0.5)]">
        <div class="flex items-center justify-between px-5 py-4 h-full">
            <div class="flex items-center gap-2 md:pl-2">
                <span class="material-symbols-outlined text-secondary filled" style="font-variation-settings: 'FILL' 1, 'wght' 600, 'GRAD' 0, 'opsz' 48; font-size: 28px; text-shadow: 0 0 12px rgba(0, 240, 255, 0.8);">bedtime</span>
                <h1 class="text-xl font-black tracking-tight text-white uppercase italic text-glow-purple">Lunera Admin</h1>
            </div>
            
            <a href="<?= base_url('logout') ?>" class="flex items-center gap-2 px-4 py-2 text-danger border border-danger/50 rounded-sm hover:bg-danger/10 hover:shadow-neon-red transition-all duration-300 clip-path-slant group">
                <span class="material-symbols-outlined text-sm group-hover:rotate-180 transition-transform">logout</span>
                <span class="text-xs font-cyber tracking-wider font-bold">LOG OUT</span>
            </a>
        </div>
    </header>

    <aside class="hidden md:flex flex-col fixed top-[76px] left-0 w-64 h-[calc(100vh-76px)] bg-[#050508]/95 backdrop-blur-xl border-r border-white/10 z-40 py-8 px-4 space-y-3 shadow-[5px_0_20px_rgba(0,0,0,0.5)]">
        <div class="text-[10px] font-cyber text-text-secondary uppercase tracking-widest mb-2 px-2">Navigation Panel</div>
        
        <a href="<?= base_url('admin') ?>" class="<?= ($segment == '') ? 'relative flex items-center gap-3 px-4 py-3.5 bg-secondary/10 border border-secondary/50 text-secondary shadow-neon-cyan transition-all font-cyber text-sm tracking-wider clip-path-slant group' : 'flex items-center gap-3 px-4 py-3.5 text-gray-500 hover:text-white hover:bg-surface-dark border border-transparent hover:border-white/10 transition-all font-cyber text-sm tracking-wider clip-path-slant group' ?>">
            <?php if($segment == ''): ?><div class="absolute left-0 top-0 bottom-0 w-[3px] bg-secondary shadow-[0_0_10px_#00f0ff]"></div><?php endif; ?>
            <span class="material-symbols-outlined text-[20px] <?= ($segment != '') ? 'group-hover:drop-shadow-[0_0_8px_rgba(255,255,255,0.5)] transition-all' : '' ?>">dashboard</span>
            Dashboard
        </a>
        
        <a href="<?= base_url('admin/users') ?>" class="<?= ($segment == 'users') ? 'relative flex items-center gap-3 px-4 py-3.5 bg-tertiary/10 border border-tertiary/50 text-tertiary shadow-neon-magenta transition-all font-cyber text-sm tracking-wider clip-path-slant group' : 'flex items-center gap-3 px-4 py-3.5 text-gray-500 hover:text-tertiary hover:bg-surface-dark border border-transparent hover:border-tertiary/30 transition-all font-cyber text-sm tracking-wider clip-path-slant group' ?>">
            <?php if($segment == 'users'): ?><div class="absolute left-0 top-0 bottom-0 w-[3px] bg-tertiary shadow-[0_0_10px_#ff0099]"></div><?php endif; ?>
            <span class="material-symbols-outlined text-[20px] <?= ($segment != 'users') ? 'group-hover:drop-shadow-[0_0_8px_rgba(255,0,153,0.8)] transition-all' : '' ?>">groups</span>
            Users
        </a>

        <a href="#" class="flex items-center gap-3 px-4 py-3.5 text-gray-500 hover:text-white hover:bg-surface-dark border border-transparent hover:border-white/10 transition-all font-cyber text-sm tracking-wider clip-path-slant group">
            <span class="material-symbols-outlined text-[20px] group-hover:drop-shadow-[0_0_8px_rgba(255,255,255,0.5)] transition-all">analytics</span>
            Analytics
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

    <?= $this->renderSection('content') ?>

    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-[#08080c]/90 backdrop-blur-xl border-t border-white/10 pb-6 pt-3 z-50 shadow-[0_-5px_20px_rgba(0,0,0,0.5)]">
        <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-<?= ($segment == 'users') ? 'tertiary' : 'secondary' ?>/50 to-transparent shadow-[0_0_10px_<?= ($segment == 'users') ? '#ff0099' : '#00f0ff' ?>]"></div>
        <ul class="flex justify-around items-center px-2">
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 <?= ($segment == '') ? 'text-secondary relative' : 'text-gray-500 hover:text-white' ?> group transition-colors" href="<?= base_url('admin') ?>">
                    <?php if($segment == ''): ?><div class="absolute -top-3 w-12 h-0.5 bg-secondary shadow-[0_0_10px_#00f0ff,0_0_20px_#00f0ff]"></div><?php endif; ?>
                    <span class="material-symbols-outlined text-[26px] <?= ($segment == '') ? 'drop-shadow-[0_0_8px_rgba(0,240,255,0.8)]' : '' ?>">dashboard</span>
                    <span class="text-[10px] font-bold tracking-wide">Dashboard</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 text-gray-500 hover:text-white transition-colors group" href="#">
                    <span class="material-symbols-outlined text-[26px]">analytics</span>
                    <span class="text-[10px] font-medium">Analytics</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 <?= ($segment == 'users') ? 'text-tertiary relative' : 'text-gray-500 hover:text-tertiary' ?> group transition-colors" href="<?= base_url('admin/users') ?>">
                    <?php if($segment == 'users'): ?><div class="absolute -top-3 w-12 h-0.5 bg-tertiary shadow-[0_0_10px_#ff0099,0_0_20px_#ff0099]"></div><?php endif; ?>
                    <span class="material-symbols-outlined text-[26px] <?= ($segment == 'users') ? 'drop-shadow-[0_0_8px_rgba(255,0,153,0.8)]' : '' ?>">groups</span>
                    <span class="text-[10px] font-bold tracking-wide">Users</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 text-gray-500 hover:text-secondary transition-colors group" href="#">
                    <span class="material-symbols-outlined text-[26px]">settings</span>
                    <span class="text-[10px] font-medium">System</span>
                </a>
            </li>
        </ul>
    </nav>
    
    <?= $this->renderSection('extra_js') ?>
</body>
</html>