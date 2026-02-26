<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="referrer" content="no-referrer"> 
    <title>Lunera Detail</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#00f3ff", 
                        "cyber-purple": "#bc13fe", 
                        "cyber-dark": "#050014", 
                        "surface-dark": "#13092d", 
                        "surface-light": "#2a1b52",
                        "text-secondary": "#9ca3af",
                    },
                    fontFamily: {
                        "display": ["Orbitron", "sans-serif"],
                        "body": ["Rajdhani", "sans-serif"]
                    },
                    boxShadow: {
                        'neon-cyan': '0 0 10px #00f3ff, 0 0 20px rgba(0, 243, 255, 0.4)',
                        'neon-purple': '0 0 10px #bc13fe, 0 0 20px rgba(188, 19, 254, 0.4)',
                        'neon-border': '0 0 5px #00f3ff, inset 0 0 5px #00f3ff',
                    }
                },
            },
        }
    </script>
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        html { scroll-behavior: smooth; }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        body { min-height: max(884px, 100dvh); }
        
        /* Animasi saat Show More ditekan */
        @keyframes fadeSlideDown {
            from { opacity: 0; transform: translateY(-5px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeSlideDown 0.3s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#0f0c29] via-[#302b63] to-[#24243e] font-body text-white overflow-x-hidden selection:bg-primary selection:text-black">
    
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-gradient-to-b from-[#050014]/90 to-transparent">
        <div class="flex items-center justify-between px-6 py-3 pt-5 max-w-[1200px] mx-auto">
            <a href="<?= base_url('/') ?>" class="w-9 h-9 flex items-center justify-center rounded-full bg-[#13092d]/60 backdrop-blur-md text-white hover:bg-primary/20 hover:text-primary transition border border-white/5 hover:border-primary/50 shadow-lg">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
            </a>
            <div class="flex items-center gap-3">
                <button class="w-9 h-9 flex items-center justify-center rounded-full bg-[#13092d]/60 backdrop-blur-md text-white hover:bg-primary/20 hover:text-primary transition border border-white/5 hover:border-primary/50 shadow-lg">
                    <span class="material-symbols-outlined text-sm">share</span>
                </button>
                <button class="w-9 h-9 flex items-center justify-center rounded-full bg-[#13092d]/60 backdrop-blur-md text-white hover:bg-primary/20 hover:text-primary transition border border-white/5 hover:border-primary/50 shadow-lg">
                    <span class="material-symbols-outlined text-sm">cast</span>
                </button>
            </div>
        </div>
    </header>

    <section class="relative w-full h-[45vh] md:h-[50vh] min-h-[380px]">
        <div class="absolute inset-0 w-full h-full bg-cover bg-center md:bg-top" style="background-image: url('https://us.oricon-group.com/upimg/sns/1000/1591/img1200/f8cd49221ee4f40281b0d8a033a89bb3.jpg');">
            <div class="absolute inset-0 bg-gradient-to-r from-[#050014]/95 via-[#050014]/80 to-transparent hidden md:block"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-[#050014]/40 via-transparent to-[#0f0c29] md:hidden"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#0f0c29] via-[#0f0c29]/90 to-transparent"></div>
        </div>
        
        <div class="absolute bottom-0 left-0 w-full px-5 md:px-12 pb-6 md:pb-10 z-10 max-w-[1200px] mx-auto left-1/2 -translate-x-1/2 flex flex-col md:flex-row items-end gap-5 md:gap-7">
            
            <div class="hidden md:block w-32 lg:w-40 aspect-[2/3] rounded-lg overflow-hidden border-2 border-primary shadow-[0_0_20px_rgba(0,243,255,0.4)] shrink-0 group hover:scale-105 transition-transform duration-500">
                <img alt="Poster" class="w-full h-full object-cover" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/9b52e811-e125-4bb8-b27b-02e36636f5d2/dg0ragn-f7027124-1aec-4741-8f17-1eb4bb8ce6c2.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiIvZi85YjUyZTgxMS1lMTI1LTRiYjgtYjI3Yi0wMmUzNjYzNmY1ZDIvZGcwcmFnbi1mNzAyNzEyNC0xYWVjLTQ3NDEtOGYxNy0xZWI0YmI4Y2U2YzIuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.uYiCcq-oqSeBOvMGtS5aXvejWHhNNDs7OTaMiJUCczs"/>
            </div>

            <div class="flex-1 w-full max-w-3xl">
                <div class="flex items-end gap-3 mb-3">
                    <div class="md:hidden w-20 h-28 rounded-lg overflow-hidden border-2 border-primary shadow-[0_0_15px_rgba(0,243,255,0.3)] shrink-0">
                        <img alt="Poster" class="w-full h-full object-cover" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/9b52e811-e125-4bb8-b27b-02e36636f5d2/dg0ragn-f7027124-1aec-4741-8f17-1eb4bb8ce6c2.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiIvZi85YjUyZTgxMS1lMTI1LTRiYjgtYjI3Yi0wMmUzNjYzNmY1ZDIvZGcwcmFnbi1mNzAyNzEyNC0xYWVjLTQ3NDEtOGYxNy0xZWI0YmI4Y2U2YzIuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.uYiCcq-oqSeBOvMGtS5aXvejWHhNNDs7OTaMiJUCczs"/>
                    </div>
                    <div class="flex-1">
                        <h1 class="font-display text-2xl md:text-4xl lg:text-5xl font-black tracking-wider uppercase leading-none mb-2 text-white drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">
                            <?= $anime['title'] ?>
                        </h1>
                        <div class="flex flex-wrap items-center gap-x-2.5 gap-y-1 text-[11px] md:text-xs font-semibold text-gray-300 font-body tracking-wide">
                            <div class="flex items-center text-primary drop-shadow-[0_0_5px_rgba(0,243,255,0.8)]">
                                <span class="material-symbols-outlined text-sm fill-current mr-1">star</span>
                                <span>4.9</span>
                            </div>
                            <span class="text-cyber-purple">•</span>
                            <span><?= $anime['release_year'] ?></span>
                            <span class="text-cyber-purple">•</span>
                            <span><?= count($episodes) ?> Episodes</span>
                        </div>
                    </div>
                </div>

                <p class="text-[11px] md:text-sm text-gray-300 mb-4 md:mb-5 leading-relaxed line-clamp-2 md:line-clamp-3 font-body tracking-wide border-l-2 md:border-l-4 border-primary/50 pl-3 md:pl-4 bg-gradient-to-r from-primary/5 to-transparent py-1">
                    <?= $anime['description'] ?>
                </p>
                
                <div class="flex items-center gap-3 w-full md:w-auto">
                    <?php if (!empty($episodes) && isset($episodes[0])) : ?>
                        <a href="<?= base_url('watch/' . $episodes[0]['id_episode']) ?>" class="flex-1 md:flex-none">
                            <button class="w-full md:w-48 h-10 md:h-11 bg-[#2a0e44] text-white rounded-md flex items-center justify-center gap-2 font-display font-bold hover:bg-[#3d1463] transition active:scale-95 border border-primary shadow-[0_0_10px_rgba(0,243,255,0.4)] hover:shadow-neon-cyan relative overflow-hidden group">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></div>
                                <span class="material-symbols-outlined fill-current text-primary text-base md:text-lg drop-shadow-[0_0_5px_rgba(0,243,255,1)]">play_arrow</span>
                                <span class="tracking-widest uppercase text-[10px] md:text-xs">Watch S1 E1</span>
                            </button>
                        </a>
                    <?php else : ?>
                        <button class="flex-1 md:flex-none md:w-48 h-10 md:h-11 bg-gray-800 text-gray-500 rounded-md flex items-center justify-center gap-2 font-display font-bold border border-gray-700 cursor-not-allowed">
                            <span class="material-symbols-outlined text-base">block</span>
                            <span class="tracking-widest uppercase text-[10px] md:text-xs">Coming Soon</span>
                        </button>
                    <?php endif; ?>

                    <button id="favBtn" data-id="<?= $anime['id_content'] ?>" 
                        class="w-10 h-10 md:w-11 md:h-11 border border-cyber-purple rounded-md flex items-center justify-center transition-all backdrop-blur-sm bg-surface-dark/80 text-cyber-purple shadow-[0_0_10px_rgba(188,19,254,0.3)] hover:bg-cyber-purple/20">
                        <span id="favIcon" class="material-symbols-outlined text-base md:text-lg">bookmark_add</span>
                    </button>

                    <div id="notif-box" class="fixed bottom-10 right-10 z-[100] space-y-3 pointer-events-none"></div>
                </div>
            </div>
        </div>
    </section>

    <main class="relative z-10 px-5 md:px-12 pb-12 space-y-10 max-w-[1200px] mx-auto mt-4 md:mt-6">
        
        <section>
            <div class="flex items-center justify-between mb-4 border-b border-white/10 pb-2">
                <h3 class="text-base md:text-lg font-bold text-white font-display tracking-wider uppercase flex items-center gap-2">
                    <span class="w-2 h-2 bg-primary rounded-full shadow-[0_0_8px_#00f3ff]"></span>
                    Episodes
                </h3>
            </div>

            <div class="space-y-2.5 md:space-y-3">
                <?php if (!empty($episodes)) : ?>
                    <?php foreach ($episodes as $index => $episode) : 
                        $ep_no = $episode['episode_no'];
                        $desc = "Saksikan episode " . $episode['title'] . " di Lunera Streaming Network.";
                        
                        // Kustom deskripsi jika JJK
                        if ($anime['slug'] == 'jujutsu-kaisen') {
                            if ($ep_no == 1) $desc = "Yuji Itadori eats a cursed finger to save his friends, becoming the host for a terrifying ancient demon.";
                            if ($ep_no == 2) $desc = "Yuji is taken to Jujutsu High and must prove his resolve to the school's eccentric principal to stay alive.";
                            if ($ep_no == 3) $desc = "The first-years head to Roppongi for their first mission, where Nobara proves she's more than just a pretty face.";
                            if ($ep_no == 4) $desc = "The trio is sent to a detention center to handle a Special Grade curse, leading to a life-threatening situation.";
                        }

                        // Logika Maksimal 4 Episode: jika index >= 4, sembunyikan
                        $isHidden = ($index >= 4) ? 'hidden extra-episode' : '';
                    ?>
                        <a href="<?= base_url('watch/' . $episode['id_episode']) ?>" class="flex gap-3 md:gap-4 group cursor-pointer bg-surface-dark/30 hover:bg-surface-dark p-2 md:p-2.5 rounded-md border border-transparent hover:border-white/10 shadow-sm hover:shadow-md transition-all <?= $isHidden ?>">
                            
                            <div class="relative w-28 md:w-36 aspect-video rounded-sm overflow-hidden bg-[#050014] shrink-0 border border-cyber-purple/40 shadow-[0_0_8px_rgba(188,19,254,0.1)] group-hover:shadow-neon-purple transition-all duration-300">
                                <img alt="Ep <?= $ep_no ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 opacity-90 group-hover:opacity-100" 
                                     src="<?= !empty($episode['episode_thumb']) ? $episode['episode_thumb'] : $anime['thumbnail_url'] ?>"
                                     onerror="this.src='<?= $anime['thumbnail_url'] ?>';">
                                
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition backdrop-blur-[1px]">
                                    <span class="material-symbols-outlined text-primary text-2xl md:text-3xl drop-shadow-lg">play_circle</span>
                                </div>
                                <div class="absolute bottom-0 right-0 px-1.5 py-0.5 bg-black/90 text-[9px] md:text-[10px] text-primary font-display font-bold tracking-wider border-t border-l border-primary/30">
                                    <?= $episode['duration'] ?>:00
                                </div>
                            </div>
                            
                            <div class="flex flex-col justify-center flex-1 min-w-0 pr-2">
                                <h4 class="text-xs md:text-sm font-bold text-white truncate group-hover:text-primary transition font-display uppercase tracking-wide">
                                    <?= $ep_no ?>. <?= $episode['title'] ?>
                                </h4>
                                <p class="text-[10px] md:text-xs text-gray-400 mt-1 line-clamp-2 font-body leading-relaxed"><?= $desc ?></p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <?php if (count($episodes) > 4) : ?>
                <button id="showMoreBtn" onclick="showAllEpisodes()" class="w-full md:w-auto md:px-10 py-2.5 mt-4 mx-auto block text-[10px] md:text-xs font-bold uppercase tracking-widest text-gray-400 bg-surface-dark border border-white/10 rounded-md hover:text-primary hover:border-primary/50 hover:bg-surface-light transition shadow-md font-display">
                    Show <?= count($episodes) - 4 ?> More Episodes
                </button>
            <?php endif; ?>
        </section>

        <section>
            <div class="flex items-center justify-between mb-4 border-b border-white/10 pb-2">
                <h3 class="text-base md:text-lg font-bold text-white font-display tracking-wider uppercase flex items-center gap-2">
                    <span class="w-2 h-2 bg-cyber-purple rounded-full shadow-[0_0_8px_#bc13fe]"></span>
                    Comments <span class="text-gray-500 text-xs md:text-sm font-normal ml-1 font-body">(1.2k)</span>
                </h3>
                <span class="text-primary text-[10px] md:text-xs font-bold uppercase tracking-widest cursor-pointer hover:underline decoration-primary font-display">See All</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4">
                <div class="bg-surface-dark/50 p-3 md:p-4 rounded-md border border-white/5 backdrop-blur-sm hover:border-white/10 transition-colors">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full overflow-hidden shrink-0 ring-1 ring-primary/50 shadow-neon-cyan">
                            <img alt="User" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n"/>
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <h5 class="text-[11px] md:text-xs font-bold text-white font-display uppercase tracking-wide">AnimeFan99</h5>
                                <span class="text-[9px] md:text-[10px] text-gray-500 font-mono">2h ago</span>
                            </div>
                            <p class="text-[11px] md:text-xs text-gray-300 mt-1 md:mt-1.5 font-body leading-relaxed">The animation in episode 3 was absolutely insane! Studio MAPPA never misses. 🔥</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-surface-dark/50 p-3 md:p-4 rounded-md border border-white/5 backdrop-blur-sm hover:border-white/10 transition-colors">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full overflow-hidden shrink-0 bg-cyber-purple/20 ring-1 ring-cyber-purple/50 flex items-center justify-center text-cyber-purple text-xs font-bold font-display shadow-neon-purple">JD</div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <h5 class="text-[11px] md:text-xs font-bold text-white font-display uppercase tracking-wide">John Doe</h5>
                                <span class="text-[9px] md:text-[10px] text-gray-500 font-mono">5h ago</span>
                            </div>
                            <p class="text-[11px] md:text-xs text-gray-300 mt-1 md:mt-1.5 font-body leading-relaxed">Can't wait to see how Kael develops his powers. The mecha design is top tier.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-4 md:mt-5 flex gap-2">
                <input class="flex-1 bg-surface-dark/80 border border-white/10 rounded-md py-2.5 md:py-3 px-3 md:px-4 text-[11px] md:text-sm text-white placeholder-gray-500 focus:ring-1 focus:ring-primary focus:border-primary outline-none font-body transition-colors" placeholder="Add a comment..." type="text"/>
                <button class="w-10 h-10 md:w-11 md:h-11 flex items-center justify-center rounded-md bg-primary text-black hover:bg-white hover:scale-105 transition-all shadow-[0_0_10px_rgba(0,243,255,0.4)]">
                    <span class="material-symbols-outlined text-sm md:text-base font-bold">send</span>
                </button>
            </div>
        </section>

        <section>
            <h3 class="text-base md:text-lg font-bold text-white mb-4 font-display tracking-wider uppercase flex items-center gap-2 border-b border-white/10 pb-2">
                <span class="w-2 h-2 bg-white rounded-full shadow-[0_0_5px_#ffffff]"></span>
                Related Anime
            </h3>
            <div class="flex overflow-x-auto gap-3 md:gap-4 no-scrollbar pb-4 -mr-5 md:mr-0 pr-5 md:pr-0 snap-x">
                <?php 
                $related = [
                    ['title' => 'Void Walkers', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA8I0V2iA4ON3WSmZOl_4zbcVzrt2rEH6JNPwP70Xu52IIYL5g0nKMp-4JlW3qTxBkdDGf0csTaEk0jLeHVQOKGKQwcV6Clobf2d_GMmWO5jMeV7iR9mtiXy9gOuCS2CAA2xRrsC0CZxGhrpOZQiEBt1nOaiIp_gA2Hkc7PK6LclYaaRLrTW3PdHO1n6RtzGQPvPfce_L_0a4jAO05wc_VrfMf4yzujvvKbiJD2x7WWCihCHc6IRHpIBcBOqSqL5GOFFQOsSLjMSgGM'],
                    ['title' => 'Iron Soul', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCYECwmKbvato3IDnbOTB9_edCqQQi5c98_hbN--_uDlPngiSkhbQrzVuQJ_IA_GjREhLQGn0uCDd7-6cnhMPcGuiLpNzYgLsWMo5u6KITgNBrzKZ0y6t40I67ML4NumZHLL83unKO8wLdYdKyrcOPwi_trQoMYVhJFM_OwdXiAP9Elxr4JSbJZdMYUuq5YMHoBNoI-ri0SYWMOw1NdDbYaxkOaQQ0qp-oHhb-nccVl1aAfdXEt3kh8w1PhJK_9YIbbrkOWjAwzauaP'],
                    ['title' => 'Eclipse', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDTLpmt5GRHAPlZrKmLggpWZhz-rVF_piip_xCfKEw6HtGrBoq_MqxZDY6Xsdz54Q-h5E7dgdr_FmVz9davCGF50FcmibgTPOi-WNDhEg1fKH-ClPZM4kYMD32aCULBekQovtTJim9CDcW3Yp5YPjCBDyNmAbLCDpyXL5H5RWZt17vDnojlNygsAJY2JNY6-DXNJPn1AgP5QQU9A2v4q5qoO9S414KNhMspVSPGGQh8-Pg22VWoQt3eWvxP1eUBVzrShSeiDh4tytX3'],
                    ['title' => 'Shadows', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC20XjxdZpYbAlYuOa7af45YJZADiV1mKOlOyhJWbH-SeytGORXVaaO8i7To620hbPvPQrdSYyXFMjUEFOSw4RLYZl5ylcdWZqebFhcowXuKlqlTJUhoOneN11zYDgY1orPSrMHT_S15w0R_TewDBO6PVzJBHi1R9AdMRgTZoacQ9ARxlRG5ddzn4YzcyxX8no-tvnUH__VGjNtKMKclExE7PP3BPn1LA_J7oH9Y-qA3nnhtD0_V67PCOPcK5YZD7J7D8_VUlp-XPX1'],
                    ['title' => 'Cyber Surge', 'img' => 'http://googleusercontent.com/profile/picture/8'],
                ];
                foreach ($related as $r) : ?>
                <div class="relative flex-none w-[110px] md:w-[130px] lg:w-[150px] snap-start cursor-pointer transition-transform active:scale-95 group">
                    <div class="aspect-[2/3] w-full rounded-md overflow-hidden bg-surface-dark relative border border-white/10 group-hover:border-primary/50 transition-all duration-300 shadow-md group-hover:shadow-neon-cyan">
                        <img alt="<?= $r['title'] ?>" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-500 group-hover:scale-105" src="<?= $r['img'] ?>"/>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#050014] via-[#050014]/80 to-transparent p-2 md:p-3 pt-8 md:pt-10">
                            <p class="text-[10px] md:text-xs font-bold text-white truncate font-display tracking-wide group-hover:text-primary transition-colors"><?= $r['title'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

        <script>
        // Protocol 1: Show More Episodes logic
        function showAllEpisodes() {
            const extraEps = document.querySelectorAll('.extra-episode');
            extraEps.forEach(ep => {
                ep.classList.remove('hidden');
                ep.classList.add('animate-fade-in');
            });
            document.getElementById('showMoreBtn').style.display = 'none';
        }

        // Protocol 2: My List / Favorite Sync
        // Pulling this OUT of the function above fixes the "nothing happened" bug.
        document.addEventListener('DOMContentLoaded', function() {
            const favBtn = document.getElementById('favBtn');
            
            if (favBtn) {
                favBtn.addEventListener('click', function() {
                    const contentId = this.getAttribute('data-id');
                    
                    // Background sync process
                    fetch(`<?= base_url('lunera/toggleFavorite/') ?>${contentId}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                // Update HUD icon state
                                document.getElementById('favIcon').innerText = data.added ? 'bookmark_added' : 'bookmark_add';
                                
                                // Deploy notification
                                showLuneraNotif(data.message);
                            }
                        })
                        .catch(err => console.error("HUD_ERROR: Connection failed.", err));
                });
            }
        });

        // Protocol 3: System Notification HUD
        function showLuneraNotif(message) {
            const box = document.getElementById('notif-box');
            if (!box) return;

            const el = document.createElement('div');
            el.className = "bg-[#050014] border-l-4 border-primary p-4 shadow-neon-cyan animate-fade-in text-[10px] font-cyber tracking-widest uppercase text-white flex items-center gap-3";
            el.innerHTML = `<span class="material-symbols-outlined text-primary">sync</span> <span>SYSTEM: ${message}</span>`;
            
            box.appendChild(el);
            
            // Auto-purge sequence
            setTimeout(() => { 
                el.style.opacity = '0'; 
                el.style.transition = '0.5s opacity ease-out';
                setTimeout(() => el.remove(), 500); 
            }, 3000);
        }
    </script>
</body>
</html>