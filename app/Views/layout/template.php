<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title><?= esc($title ?? 'Lunera') ?></title>
    
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
    
    <?= $this->renderSection('extra_css') ?>
</head>
<body class="bg-background-dark font-display text-white overflow-x-hidden pb-24 md:pb-12 min-h-screen relative">
    
    <div class="fixed inset-0 bg-gradient-to-br from-[#0a0a1a] via-[#050508] to-[#120024] -z-20"></div>
    <div class="fixed inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay -z-10"></div>
    <div class="fixed inset-0 bg-cyber-grid bg-[size:40px_40px] opacity-10 -z-10"></div>
    <div class="fixed top-0 left-0 right-0 h-96 bg-gradient-to-b from-primary/10 to-transparent -z-10 blur-3xl"></div>
    
    <?php
        // 1. Mendapatkan URI untuk menu yang aktif menyala
        $uri = current_url(true);
        $segment = $uri->getSegment(1);

        // 2. LOGIKA CERDAS MENCARI FOTO PROFIL UNTUK SEMUA HALAMAN
        $avatarUrl = 'https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n'; // Default picture

        // Jika variabel $user dikirim dari Controller (seperti di halaman Profile)
        if (isset($user['avatar']) && !empty($user['avatar'])) {
            $avatarUrl = $user['avatar'];
        } 
        // Jika tidak dikirim (seperti di halaman Home/Explore), kita ambil manual dari Database menggunakan session
        elseif (session()->get('id_user')) {
            $db = \Config\Database::connect();
            $userProfile = $db->table('profiles')->where('id_user', session()->get('id_user'))->get()->getRowArray();
            if ($userProfile && !empty($userProfile['avatar'])) {
                $avatarUrl = $userProfile['avatar'];
            }
        }
    ?>

    <aside class="hidden md:flex flex-col fixed top-[76px] left-0 w-64 h-[calc(100vh-76px)] bg-[#050508]/95 backdrop-blur-xl border-r border-white/10 z-40 py-8 px-4 space-y-3 shadow-[5px_0_20px_rgba(0,0,0,0.5)]">
        <div class="text-[10px] font-cyber text-text-secondary uppercase tracking-widest mb-2 px-2">System Nav</div>
        
        <a href="<?= base_url('/') ?>" class="<?= ($segment == '') ? 'relative flex items-center gap-4 px-4 py-3.5 bg-primary/10 border border-primary/50 text-white shadow-neon-purple transition-all font-cyber text-sm tracking-wider clip-path-slant group' : 'flex items-center gap-4 px-4 py-3.5 text-gray-500 hover:text-white hover:bg-surface-dark border border-transparent hover:border-white/10 transition-all font-cyber text-sm tracking-wider clip-path-slant group' ?>">
            <?php if($segment == ''): ?><div class="absolute left-0 top-0 bottom-0 w-[3px] bg-primary shadow-[0_0_10px_#b026ff]"></div><?php endif; ?>
            <span class="material-symbols-outlined text-[22px] group-hover:drop-shadow-[0_0_8px_rgba(255,255,255,0.5)] transition-all">home</span>
            Home
        </a>

        <a href="<?= base_url('explore') ?>" class="<?= ($segment == 'explore') ? 'relative flex items-center gap-4 px-4 py-3.5 bg-secondary/10 border border-secondary/50 text-secondary shadow-neon-cyan transition-all font-cyber text-sm tracking-wider clip-path-slant group' : 'flex items-center gap-4 px-4 py-3.5 text-gray-500 hover:text-secondary hover:bg-surface-dark border border-transparent hover:border-secondary/30 transition-all font-cyber text-sm tracking-wider clip-path-slant group' ?>">
            <?php if($segment == 'explore'): ?><div class="absolute left-0 top-0 bottom-0 w-[3px] bg-secondary shadow-[0_0_10px_#00f0ff]"></div><?php endif; ?>
            <span class="material-symbols-outlined text-[22px] group-hover:drop-shadow-[0_0_8px_rgba(0,240,255,0.8)] transition-all">explore</span>
            Explore
        </a>

        <a href="<?= base_url('mylist') ?>" class="<?= ($segment == 'mylist') ? 'relative flex items-center gap-4 px-4 py-3.5 bg-tertiary/10 border border-tertiary/50 text-tertiary shadow-neon-magenta transition-all font-cyber text-sm tracking-wider clip-path-slant group' : 'flex items-center gap-4 px-4 py-3.5 text-gray-500 hover:text-tertiary hover:bg-surface-dark border border-transparent hover:border-tertiary/30 transition-all font-cyber text-sm tracking-wider clip-path-slant group' ?>">
            <?php if($segment == 'mylist'): ?><div class="absolute left-0 top-0 bottom-0 w-[3px] bg-tertiary shadow-[0_0_10px_#ff0099]"></div><?php endif; ?>
            <span class="material-symbols-outlined text-[22px] group-hover:drop-shadow-[0_0_8px_rgba(255,0,153,0.8)] transition-all">bookmark</span>
            My List
        </a>
        
        <a href="<?= base_url('profile') ?>" class="<?= ($segment == 'profile') ? 'relative flex items-center gap-4 px-4 py-3.5 bg-secondary/10 border border-secondary/50 text-secondary shadow-neon-cyan transition-all font-cyber text-sm tracking-wider clip-path-slant group mt-4' : 'flex items-center gap-4 px-4 py-3.5 text-gray-500 hover:text-secondary hover:bg-surface-dark border border-transparent hover:border-secondary/30 transition-all font-cyber text-sm tracking-wider clip-path-slant group mt-4' ?>">
            <?php if($segment == 'profile'): ?><div class="absolute left-0 top-0 bottom-0 w-[3px] bg-secondary shadow-[0_0_10px_#00f0ff]"></div><?php endif; ?>
            <div class="w-6 h-6 rounded-full overflow-hidden border <?= ($segment == 'profile') ? 'border-secondary shadow-[0_0_8px_rgba(0,240,255,0.6)]' : 'border-gray-500' ?> group-hover:border-secondary group-hover:shadow-[0_0_15px_rgba(0,240,255,0.8)] transition-all">
                <img alt="User avatar" class="w-full h-full object-cover" src="<?= esc($avatarUrl) ?>"/>
            </div>
            Profile
        </a>
        
        <div class="mt-auto pt-10">
            <div class="w-full h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent mb-4"></div>
            <div class="text-center">
                <p class="text-[9px] text-gray-600 font-cyber uppercase tracking-widest">User Interface v2.4</p>
                <div class="flex justify-center gap-1 mt-1">
                    <span class="w-1 h-1 bg-secondary rounded-full shadow-[0_0_5px_#00f0ff] animate-pulse"></span>
                    <span class="w-1 h-1 bg-secondary rounded-full shadow-[0_0_5px_#00f0ff] animate-pulse delay-75"></span>
                </div>
            </div>
        </div>
    </aside>

    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-[#08080c]/90 backdrop-blur-xl border-t border-white/10 pb-6 pt-3 z-50 shadow-[0_-5px_20px_rgba(0,0,0,0.5)]">
        <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-secondary/50 to-transparent shadow-[0_0_10px_#00f0ff]"></div>
        <ul class="flex justify-around items-center px-2">
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 <?= ($segment == '') ? 'text-white' : 'text-gray-500 hover:text-white' ?> transition-colors group relative" href="<?= base_url('/') ?>">
                    <?php if($segment == ''): ?><div class="absolute -top-3 w-12 h-0.5 bg-white shadow-[0_0_10px_#ffffff,0_0_20px_#ffffff]"></div><?php endif; ?>
                    <span class="material-symbols-outlined text-[26px] group-hover:drop-shadow-[0_0_8px_rgba(255,255,255,0.5)] transition-all">home</span>
                    <span class="text-[10px] font-medium">Home</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 <?= ($segment == 'explore') ? 'text-secondary' : 'text-gray-500 hover:text-secondary' ?> transition-colors group relative" href="<?= base_url('explore') ?>">
                    <?php if($segment == 'explore'): ?><div class="absolute -top-3 w-12 h-0.5 bg-secondary shadow-[0_0_10px_#00f0ff,0_0_20px_#00f0ff]"></div><?php endif; ?>
                    <span class="material-symbols-outlined text-[26px] group-hover:drop-shadow-[0_0_8px_rgba(0,240,255,0.8)] transition-all">explore</span>
                    <span class="text-[10px] font-medium">Explore</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 <?= ($segment == 'mylist') ? 'text-tertiary' : 'text-gray-500 hover:text-tertiary' ?> transition-colors group relative" href="<?= base_url('mylist') ?>">
                    <?php if($segment == 'mylist'): ?><div class="absolute -top-3 w-12 h-0.5 bg-tertiary shadow-[0_0_10px_#ff0099,0_0_20px_#ff0099]"></div><?php endif; ?>
                    <span class="material-symbols-outlined text-[26px] group-hover:drop-shadow-[0_0_8px_rgba(255,0,153,0.8)] transition-all">bookmark</span>
                    <span class="text-[10px] font-medium">My List</span>
                </a>
            </li>
            <li class="flex-1">
                <a class="flex flex-col items-center justify-center gap-1 <?= ($segment == 'profile') ? 'text-secondary' : 'text-gray-500 hover:text-secondary' ?> group transition-colors relative" href="<?= base_url('profile') ?>">
                    <?php if($segment == 'profile'): ?><div class="absolute -top-3 w-12 h-0.5 bg-secondary shadow-[0_0_10px_#00f0ff,0_0_20px_#00f0ff]"></div><?php endif; ?>
                    <div class="w-6 h-6 rounded-full overflow-hidden border <?= ($segment == 'profile') ? 'border-secondary shadow-[0_0_8px_rgba(0,240,255,0.6)]' : 'border-gray-500' ?> group-hover:border-secondary group-hover:shadow-[0_0_15px_rgba(0,240,255,0.8)] transition-all">
                        <img alt="User avatar" class="w-full h-full object-cover" src="<?= esc($avatarUrl) ?>"/>
                    </div>
                    <span class="text-[10px] font-bold tracking-wide <?= ($segment == 'profile') ? 'drop-shadow-[0_0_5px_rgba(0,240,255,0.8)]' : '' ?>">Profile</span>
                </a>
            </li>
        </ul>
    </nav>
    
    <?= $this->renderSection('content') ?>
    
    <?= $this->renderSection('extra_js') ?>
</body>
</html>