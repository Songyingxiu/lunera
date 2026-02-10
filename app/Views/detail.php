<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lunera Anime Detail Screen</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#00f3ff", // Neon Cyan
                        "cyber-purple": "#bc13fe", // Neon Purple
                        "cyber-dark": "#050014", // Deep dark purple/black
                        "surface-dark": "#13092d", // Dark purple surface
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
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        html {
            scroll-behavior: smooth;
        }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }.glitch-text {
            position: relative;
        }
        body {
             min-height: max(884px, 100dvh);
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-gradient-to-br from-[#0f0c29] via-[#302b63] to-[#24243e] font-body text-white overflow-x-hidden selection:bg-primary selection:text-black">
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-gradient-to-b from-[#050014]/90 to-transparent">
<div class="flex items-center justify-between px-4 py-4 pt-6">
<button class="w-10 h-10 flex items-center justify-center rounded-full bg-[#13092d]/60 backdrop-blur-md text-white hover:bg-primary/20 hover:text-primary transition border border-white/5 hover:border-primary/50">
<span class="material-symbols-outlined">arrow_back</span>
</button>
<div class="flex items-center gap-4">
<button class="w-10 h-10 flex items-center justify-center rounded-full bg-[#13092d]/60 backdrop-blur-md text-white hover:bg-primary/20 hover:text-primary transition border border-white/5 hover:border-primary/50">
<span class="material-symbols-outlined">share</span>
</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full bg-[#13092d]/60 backdrop-blur-md text-white hover:bg-primary/20 hover:text-primary transition border border-white/5 hover:border-primary/50">
<span class="material-symbols-outlined">cast</span>
</button>
</div>
</div>
</header>
<section class="relative w-full h-[60vh] min-h-[450px]">
<div class="absolute inset-0 w-full h-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBllluX5HhK5gFyG9Eh8s3ghD95oUUFc_T5qfy59_bzISQrl7V1BfeuCp0qwZzzYfT22Ed6xN0WYs_dsvC8WDRPqVrcb-1Vy0-AfONNJh_KJlIaJgnNlN2ZufcTlLMmxvHQYHNsTOSaXBKDDoMkhrkH-XHVfFCQ7d-PJtCj1vQIXm_TsYi5uycpX1t0KfbwDm3C1YD-9pIeoh2iCBtPMrXgpPIKRgkTWDsAzZKyHb8v07ii9RsnlXC366NkxlDDpclaPZNoNMxL_MT8');">
<div class="absolute inset-0 bg-gradient-to-b from-[#050014]/40 via-transparent to-[#0f0c29]"></div>
<div class="absolute inset-0 bg-gradient-to-t from-[#0f0c29] via-[#0f0c29]/70 to-transparent"></div>
<div class="absolute inset-0 bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.25)_50%),linear-gradient(90deg,rgba(255,0,0,0.06),rgba(0,255,0,0.02),rgba(0,0,255,0.06))] z-0 bg-[length:100%_2px,3px_100%] pointer-events-none"></div>
</div>
<div class="absolute bottom-0 left-0 w-full px-5 pb-6 z-10">
<div class="flex items-end gap-4 mb-4">
<div class="hidden sm:block w-24 h-36 rounded-lg overflow-hidden border-2 border-primary shadow-[0_0_15px_rgba(0,243,255,0.3)] shrink-0">
<img alt="Poster Small" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBllluX5HhK5gFyG9Eh8s3ghD95oUUFc_T5qfy59_bzISQrl7V1BfeuCp0qwZzzYfT22Ed6xN0WYs_dsvC8WDRPqVrcb-1Vy0-AfONNJh_KJlIaJgnNlN2ZufcTlLMmxvHQYHNsTOSaXBKDDoMkhrkH-XHVfFCQ7d-PJtCj1vQIXm_TsYi5uycpX1t0KfbwDm3C1YD-9pIeoh2iCBtPMrXgpPIKRgkTWDsAzZKyHb8v07ii9RsnlXC366NkxlDDpclaPZNoNMxL_MT8"/>
</div>
<div class="flex-1">
<h1 class="font-display text-3xl sm:text-4xl font-black tracking-wider uppercase leading-none mb-3 text-white drop-shadow-[0_0_10px_rgba(255,255,255,0.5)]">Starbound <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-cyber-purple">Odyssey</span></h1>
<div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-sm font-semibold text-gray-300 font-body tracking-wide">
<div class="flex items-center text-primary drop-shadow-[0_0_5px_rgba(0,243,255,0.8)]">
<span class="material-symbols-outlined text-base fill-current mr-1">star</span>
<span class="font-bold">4.9</span>
</div>
<span class="text-cyber-purple">•</span>
<span>2024</span>
<span class="text-cyber-purple">•</span>
<span>24 Episodes</span>
<span class="text-cyber-purple">•</span>
<span class="text-white/90">Studio MAPPA</span>
</div>
<div class="flex flex-wrap gap-2 mt-4">
<span class="px-3 py-1 rounded-sm text-[10px] font-bold font-display bg-[#00f3ff]/10 text-[#00f3ff] border border-[#00f3ff] shadow-[0_0_8px_rgba(0,243,255,0.3)] uppercase tracking-widest backdrop-blur-sm">Sci-Fi</span>
<span class="px-3 py-1 rounded-sm text-[10px] font-bold font-display bg-[#00f3ff]/10 text-[#00f3ff] border border-[#00f3ff] shadow-[0_0_8px_rgba(0,243,255,0.3)] uppercase tracking-widest backdrop-blur-sm">Adventure</span>
<span class="px-3 py-1 rounded-sm text-[10px] font-bold font-display bg-[#00f3ff]/10 text-[#00f3ff] border border-[#00f3ff] shadow-[0_0_8px_rgba(0,243,255,0.3)] uppercase tracking-widest backdrop-blur-sm">Mecha</span>
</div>
</div>
</div>
<div class="flex items-center gap-3 w-full">
<button class="flex-1 h-12 bg-[#2a0e44] text-white rounded-md flex items-center justify-center gap-2 font-display font-bold hover:bg-[#3d1463] transition active:scale-95 border border-primary shadow-[0_0_15px_rgba(0,243,255,0.4)] relative overflow-hidden group">
<div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12 translate-x-[-150%] group-hover:translate-x-[150%] transition-transform duration-700"></div>
<span class="material-symbols-outlined fill-current text-primary drop-shadow-[0_0_5px_rgba(0,243,255,1)]">play_arrow</span>
<span class="tracking-widest uppercase text-sm">Watch S1 E1</span>
</button>
<button class="w-12 h-12 bg-surface-dark/80 border border-cyber-purple text-cyber-purple rounded-md flex items-center justify-center hover:bg-cyber-purple/20 transition active:scale-95 shadow-[0_0_10px_rgba(188,19,254,0.3)] backdrop-blur-sm">
<span class="material-symbols-outlined drop-shadow-[0_0_5px_rgba(188,19,254,0.8)]">bookmark_add</span>
</button>
</div>
<p class="text-sm text-gray-300 mt-5 leading-relaxed line-clamp-3 font-body tracking-wide border-l-2 border-primary/50 pl-3">
            In a distant future where humanity has colonized the stars, young pilot Kael discovers an ancient mecha buried on a forgotten moon. Thrust into an intergalactic war, he must unlock the machine's secrets to save his home.
        </p>
</div>
</section>
<main class="relative z-10 px-5 space-y-8 pb-10">
<section>
<div class="flex items-center justify-between mb-5 border-b border-white/10 pb-2">
<h3 class="text-lg font-bold text-white font-display tracking-wider uppercase flex items-center gap-2">
<span class="w-2 h-2 bg-primary rounded-full shadow-[0_0_5px_#00f3ff]"></span>
                Episodes
            </h3>
<div class="flex items-center gap-2 text-sm text-primary font-bold cursor-pointer font-display tracking-wide hover:text-white transition">
<span class="uppercase">Season 1</span>
<span class="material-symbols-outlined text-base">expand_more</span>
</div>
</div>
<div class="space-y-4">
<div class="flex gap-3 group cursor-pointer hover:bg-white/5 p-2 -mx-2 rounded-lg transition border border-transparent hover:border-white/10">
<div class="relative w-36 aspect-video rounded-sm overflow-hidden bg-surface-dark shrink-0 border border-cyber-purple shadow-[0_0_8px_rgba(188,19,254,0.2)] group-hover:shadow-[0_0_12px_rgba(188,19,254,0.5)] transition-all duration-300">
<img alt="Ep 1" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOQZugFL2O6lgbb55-IvchfYetp7BdIsfHJnVaGKyJZHopsy1Fri0IzKyAfYweVBDx2KiuTXHGAckGAVzPw4xSwc3eKJ1tT6d209guillOJNkF60p3nwgNlyofcwMiHelfy_yf5_L7o1RGBviAmKif8yQQUazypE2-QtnY9J2htQ2AjAmjiBdjtrutZznjHZEGbHIRSfcPhHeBSEqzruNKsTlZ1Vpg4txjR16ykU_YBCmQR3vkmTo5GYL9vO_OQOIoXlb0mM0FU13r"/>
<div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition backdrop-blur-[1px]">
<span class="material-symbols-outlined text-primary drop-shadow-[0_0_5px_rgba(0,243,255,1)] text-4xl">play_circle</span>
</div>
<div class="absolute bottom-0 right-0 px-1.5 py-0.5 bg-black/90 text-[10px] text-primary font-display font-bold tracking-wider border-t border-l border-primary/30">24:10</div>
</div>
<div class="flex flex-col justify-center flex-1 min-w-0">
<h4 class="text-sm font-bold text-white truncate group-hover:text-primary transition font-display uppercase tracking-wide">1. The Awakening</h4>
<p class="text-xs text-gray-400 mt-1 line-clamp-2 font-body">Kael stumbles upon a mysterious ruin while scavenging for parts and awakens a dormant power.</p>
</div>
<div class="flex items-center">
<span class="material-symbols-outlined text-gray-600 group-hover:text-cyber-purple transition text-lg">download</span>
</div>
</div>
<div class="flex gap-3 group cursor-pointer hover:bg-white/5 p-2 -mx-2 rounded-lg transition border border-transparent hover:border-white/10">
<div class="relative w-36 aspect-video rounded-sm overflow-hidden bg-surface-dark shrink-0 border border-cyber-purple shadow-[0_0_8px_rgba(188,19,254,0.2)] group-hover:shadow-[0_0_12px_rgba(188,19,254,0.5)] transition-all duration-300">
<img alt="Ep 2" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0YAX2IzJnEB5Bi702qX7Rc5mLAa0XA6dGJHi6nP8wZZdsKFSR6rkoablOYYCaMkm0F0rRV6RrxMrf9pv0btaTBImQmWoyjofrHJ6fblKWgJOZX3zzghlbSULAIcTLk2UwiKOiiOSZS4ORLtU8CBhsg0IkUss-gdPksO2e83yyVtcKSfEiFmXQpfin21pjrzw1ilwddra3rH0zyWLz3v_EVsFTOp5pEQ01lMJj6dmoIuQmtx5Fu0l3fzGLE2VCpkXGplMLQ47M2xVd"/>
<div class="absolute bottom-0 right-0 px-1.5 py-0.5 bg-black/90 text-[10px] text-primary font-display font-bold tracking-wider border-t border-l border-primary/30">23:55</div>
</div>
<div class="flex flex-col justify-center flex-1 min-w-0">
<h4 class="text-sm font-bold text-white truncate group-hover:text-primary transition font-display uppercase tracking-wide">2. First Flight</h4>
<p class="text-xs text-gray-400 mt-1 line-clamp-2 font-body">Testing the limits of the Starbound unit, Kael encounters an enemy patrol unit in deep space.</p>
</div>
<div class="flex items-center">
<span class="material-symbols-outlined text-gray-600 group-hover:text-cyber-purple transition text-lg">download</span>
</div>
</div>
<div class="flex gap-3 group cursor-pointer hover:bg-white/5 p-2 -mx-2 rounded-lg transition border border-transparent hover:border-white/10">
<div class="relative w-36 aspect-video rounded-sm overflow-hidden bg-surface-dark shrink-0 border border-cyber-purple shadow-[0_0_8px_rgba(188,19,254,0.2)] group-hover:shadow-[0_0_12px_rgba(188,19,254,0.5)] transition-all duration-300">
<img alt="Ep 3" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWxBMBenzKI8EmKb4yXU74YxNdxBJRZv6xyb69vw8K5Z31gFpJBpF6GWACG7FSdkGMCFrOl41UdFb2ck8gj89GK6GRpJAL5W6KmlAxAHwJ66aq-vhD__V7g3xtMj6cLP_i4Sk4TAoQVzmLmtrcQG-pF2l9OMh6_S5bS3PK0zweIzesWmL8rzS4ewpQ17hByxd2xYbgPY94u2Vr2tiHQXokbl2Nb1AyRoOQz61oFaqUmjB7590LT4JvTAHtqDub-X3TwGVjYtup0LCa"/>
<div class="absolute bottom-0 right-0 px-1.5 py-0.5 bg-black/90 text-[10px] text-primary font-display font-bold tracking-wider border-t border-l border-primary/30">24:02</div>
</div>
<div class="flex flex-col justify-center flex-1 min-w-0">
<h4 class="text-sm font-bold text-white truncate group-hover:text-primary transition font-display uppercase tracking-wide">3. Neon Skies</h4>
<p class="text-xs text-gray-400 mt-1 line-clamp-2 font-body">The crew arrives at the cyberpunk metropolis of Neo-Veridia to find a black market engineer.</p>
</div>
<div class="flex items-center">
<span class="material-symbols-outlined text-gray-600 group-hover:text-cyber-purple transition text-lg">download</span>
</div>
</div>
<div class="flex gap-3 group cursor-pointer hover:bg-white/5 p-2 -mx-2 rounded-lg transition border border-transparent hover:border-white/10">
<div class="relative w-36 aspect-video rounded-sm overflow-hidden bg-surface-dark shrink-0 border border-cyber-purple shadow-[0_0_8px_rgba(188,19,254,0.2)] group-hover:shadow-[0_0_12px_rgba(188,19,254,0.5)] transition-all duration-300">
<img alt="Ep 4" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3ur9dOIicqPYSQ3bgC_4GrH5I4QQN0GfXf14fCG7nrNewy863rPK2EgS_qxPM2jhTZNgQ_nkJMLiSU_c8TkpBxkJUmU_vI4PSHDQKyVURYsODu813xmKvpCNjQJn753AaTTRBTssZCTypAk-JWfayMcQ2wV9mREdmuPVpojNvV0L20kLc-nGr1uGhLkrfHDqLmOv27yym_bSdCoDMnKugO8EqHjTUHCFXROjVXCNrni1qYVIXOzcJ4EI2gFfZWodjDINwhlKbIicF"/>
<div class="absolute bottom-0 right-0 px-1.5 py-0.5 bg-black/90 text-[10px] text-primary font-display font-bold tracking-wider border-t border-l border-primary/30">23:45</div>
</div>
<div class="flex flex-col justify-center flex-1 min-w-0">
<h4 class="text-sm font-bold text-white truncate group-hover:text-primary transition font-display uppercase tracking-wide">4. Dimensional Rift</h4>
<p class="text-xs text-gray-400 mt-1 line-clamp-2 font-body">An experimental warp drive malfunctions, sending the ship into a colorful void between dimensions.</p>
</div>
<div class="flex items-center">
<span class="material-symbols-outlined text-gray-600 group-hover:text-cyber-purple transition text-lg">download</span>
</div>
</div>
</div>
<button class="w-full py-3 mt-4 text-sm font-bold uppercase tracking-widest text-gray-400 bg-surface-dark border border-white/10 rounded-sm hover:text-primary hover:border-primary/50 hover:bg-surface-light transition shadow-lg font-display">
            Show More Episodes
        </button>
</section>
<section>
<div class="flex items-center justify-between mb-5 border-b border-white/10 pb-2">
<h3 class="text-lg font-bold text-white font-display tracking-wider uppercase flex items-center gap-2">
<span class="w-2 h-2 bg-cyber-purple rounded-full shadow-[0_0_5px_#bc13fe]"></span>
                Comments <span class="text-gray-500 text-sm font-normal ml-1 font-body">(1.2k)</span>
</h3>
<span class="text-primary text-xs font-bold uppercase tracking-widest cursor-pointer hover:underline decoration-primary font-display">See All</span>
</div>
<div class="space-y-4">
<div class="bg-surface-dark/50 p-4 rounded-lg border border-white/5 backdrop-blur-sm">
<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-full overflow-hidden shrink-0 ring-1 ring-primary/50">
<img alt="User" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n"/>
</div>
<div class="flex-1">
<div class="flex justify-between items-start">
<h5 class="text-xs font-bold text-white font-display uppercase tracking-wide">AnimeFan99</h5>
<span class="text-[10px] text-gray-500 font-mono">2h ago</span>
</div>
<p class="text-xs text-gray-300 mt-1 font-body">The animation in episode 3 was absolutely insane! Studio MAPPA never misses. 🔥</p>
</div>
</div>
</div>
<div class="bg-surface-dark/50 p-4 rounded-lg border border-white/5 backdrop-blur-sm">
<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-full overflow-hidden shrink-0 bg-cyber-purple/20 ring-1 ring-cyber-purple/50 flex items-center justify-center text-cyber-purple text-xs font-bold font-display">
                        JD
                    </div>
<div class="flex-1">
<div class="flex justify-between items-start">
<h5 class="text-xs font-bold text-white font-display uppercase tracking-wide">John Doe</h5>
<span class="text-[10px] text-gray-500 font-mono">5h ago</span>
</div>
<p class="text-xs text-gray-300 mt-1 font-body">Can't wait to see how Kael develops his powers. The mecha design is top tier.</p>
</div>
</div>
</div>
</div>
<div class="mt-5 flex gap-2">
<input class="flex-1 bg-surface-dark/80 border border-white/10 rounded-md py-3 px-4 text-sm text-white placeholder-gray-500 focus:ring-1 focus:ring-primary focus:border-primary outline-none font-body transition-colors" placeholder="Add a comment..." type="text"/>
<button class="w-11 h-11 flex items-center justify-center rounded-md bg-primary text-black hover:bg-white transition shadow-[0_0_10px_rgba(0,243,255,0.4)]">
<span class="material-symbols-outlined text-sm font-bold">send</span>
</button>
</div>
</section>
<section>
<h3 class="text-lg font-bold text-white mb-4 font-display tracking-wider uppercase flex items-center gap-2 border-b border-white/10 pb-2">
<span class="w-2 h-2 bg-white rounded-full shadow-[0_0_5px_#ffffff]"></span>
            Related Anime
        </h3>
<div class="flex overflow-x-auto gap-4 no-scrollbar pb-4 -mr-5 pr-5 snap-x">
<div class="relative flex-none w-[130px] snap-start cursor-pointer transition-transform active:scale-95 group">
<div class="aspect-[2/3] w-full rounded-md overflow-hidden bg-surface-dark relative border border-white/10 group-hover:border-primary/50 transition duration-300 shadow-lg group-hover:shadow-[0_0_15px_rgba(0,243,255,0.15)]">
<img alt="Sci-fi movie poster" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8I0V2iA4ON3WSmZOl_4zbcVzrt2rEH6JNPwP70Xu52IIYL5g0nKMp-4JlW3qTxBkdDGf0csTaEk0jLeHVQOKGKQwcV6Clobf2d_GMmWO5jMeV7iR9mtiXy9gOuCS2CAA2xRrsC0CZxGhrpOZQiEBt1nOaiIp_gA2Hkc7PK6LclYaaRLrTW3PdHO1n6RtzGQPvPfce_L_0a4jAO05wc_VrfMf4yzujvvKbiJD2x7WWCihCHc6IRHpIBcBOqSqL5GOFFQOsSLjMSgGM"/>
<div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#050014] via-[#050014]/80 to-transparent p-3 pt-8">
<p class="text-xs font-bold text-white truncate font-display tracking-wide group-hover:text-primary transition">Void Walkers</p>
</div>
</div>
</div>
<div class="relative flex-none w-[130px] snap-start cursor-pointer transition-transform active:scale-95 group">
<div class="aspect-[2/3] w-full rounded-md overflow-hidden bg-surface-dark relative border border-white/10 group-hover:border-primary/50 transition duration-300 shadow-lg group-hover:shadow-[0_0_15px_rgba(0,243,255,0.15)]">
<img alt="Action movie poster" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYECwmKbvato3IDnbOTB9_edCqQQi5c98_hbN--_uDlPngiSkhbQrzVuQJ_IA_GjREhLQGn0uCDd7-6cnhMPcGuiLpNzYgLsWMo5u6KITgNBrzKZ0y6t40I67ML4NumZHLL83unKO8wLdYdKyrcOPwi_trQoMYVhJFM_OwdXiAP9Elxr4JSbJZdMYUuq5YMHoBNoI-ri0SYWMOw1NdDbYaxkOaQQ0qp-oHhb-nccVl1aAfdXEt3kh8w1PhJK_9YIbbrkOWjAwzauaP"/>
<div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#050014] via-[#050014]/80 to-transparent p-3 pt-8">
<p class="text-xs font-bold text-white truncate font-display tracking-wide group-hover:text-primary transition">Iron Soul</p>
</div>
</div>
</div>
<div class="relative flex-none w-[130px] snap-start cursor-pointer transition-transform active:scale-95 group">
<div class="aspect-[2/3] w-full rounded-md overflow-hidden bg-surface-dark relative border border-white/10 group-hover:border-primary/50 transition duration-300 shadow-lg group-hover:shadow-[0_0_15px_rgba(0,243,255,0.15)]">
<img alt="Abstract cinematic movie poster dark" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTLpmt5GRHAPlZrKmLggpWZhz-rVF_piip_xCfKEw6HtGrBoq_MqxZDY6Xsdz54Q-h5E7dgdr_FmVz9davCGF50FcmibgTPOi-WNDhEg1fKH-ClPZM4kYMD32aCULBekQovtTJim9CDcW3Yp5YPjCBDyNmAbLCDpyXL5H5RWZt17vDnojlNygsAJY2JNY6-DXNJPn1AgP5QQU9A2v4q5qoO9S414KNhMspVSPGGQh8-Pg22VWoQt3eWvxP1eUBVzrShSeiDh4tytX3"/>
<div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#050014] via-[#050014]/80 to-transparent p-3 pt-8">
<p class="text-xs font-bold text-white truncate font-display tracking-wide group-hover:text-primary transition">Eclipse</p>
</div>
</div>
</div>
<div class="relative flex-none w-[130px] snap-start cursor-pointer transition-transform active:scale-95 group">
<div class="aspect-[2/3] w-full rounded-md overflow-hidden bg-surface-dark relative border border-white/10 group-hover:border-primary/50 transition duration-300 shadow-lg group-hover:shadow-[0_0_15px_rgba(0,243,255,0.15)]">
<img alt="Dark moody movie poster" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC20XjxdZpYbAlYuOa7af45YJZADiV1mKOlOyhJWbH-SeytGORXVaaO8i7To620hbPvPQrdSYyXFMjUEFOSw4RLYZl5ylcdWZqebFhcowXuKlqlTJUhoOneN11zYDgY1orPSrMHT_S15w0R_TewDBO6PVzJBHi1R9AdMRgTZoacQ9ARxlRG5ddzn4YzcyxX8no-tvnUH__VGjNtKMKclExE7PP3BPn1LA_J7oH9Y-qA3nnhtD0_V67PCOPcK5YZD7J7D8_VUlp-XPX1"/>
<div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#050014] via-[#050014]/80 to-transparent p-3 pt-8">
<p class="text-xs font-bold text-white truncate font-display tracking-wide group-hover:text-primary transition">Shadows</p>
</div>
</div>
</div>
</div>
</section>
</main>
</body></html>