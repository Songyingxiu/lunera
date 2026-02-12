<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Cyberpunk Lunera Explore</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "cyber-bg": "#020412", // Deep dark blue
                        "cyber-surface": "#0a1025", 
                        "cyber-border": "#1e3a8a",
                        "neon-cyan": "#00f3ff", 
                        "neon-magenta": "#ff00ff",
                        "neon-purple": "#bc13fe",
                        "neon-blue": "#0066ff",
                        "holo-dark": "rgba(20, 30, 60, 0.7)",
                    },
                    fontFamily: {
                        "display": ["Orbitron", "sans-serif"],
                        "body": ["Rajdhani", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.375rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                    boxShadow: {
                        "neon-cyan": "0 0 10px rgba(0, 243, 255, 0.5), 0 0 20px rgba(0, 243, 255, 0.3)",
                        "neon-magenta": "0 0 10px rgba(255, 0, 255, 0.5), 0 0 20px rgba(255, 0, 255, 0.3)",
                        "neon-purple": "0 0 15px rgba(188, 19, 254, 0.4)",
                    }
                },
            },
        }
    </script>
<style>.no-scrollbar::-webkit-scrollbar {
            display: none;
        }.no-scrollbar {
            -ms-overflow-style: none;scrollbar-width: none;}html {
            scroll-behavior: smooth;
        }.scanlines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                to bottom,
                rgba(255,255,255,0),
                rgba(255,255,255,0) 50%,
                rgba(0,0,0,0.1) 50%,
                rgba(0,0,0,0.1)
            );
            background-size: 100% 4px;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.3;
        }
        .holographic-border {
            border: 1px solid rgba(0, 243, 255, 0.3);
            box-shadow: inset 0 0 20px rgba(0, 243, 255, 0.1);
        }
    </style>
<style>
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
<body class="bg-cyber-bg font-body text-white overflow-x-hidden pb-24 selection:bg-neon-cyan selection:text-black">
<div class="scanlines"></div>
<header class="sticky top-0 left-0 right-0 z-50 bg-cyber-bg/90 backdrop-blur-md border-b border-neon-cyan/20 pt-12 pb-4 px-4">
<div class="relative w-full group">
<div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-neon-cyan/70">search</span>
</div>
<input class="w-full bg-cyber-surface/80 text-white font-body text-lg rounded-xl py-3 pl-10 pr-10 border border-neon-cyan/30 focus:border-neon-cyan focus:ring-1 focus:ring-neon-cyan focus:shadow-neon-cyan placeholder-gray-500 transition-all duration-300" placeholder="Search the network..." type="text"/>
<div class="absolute inset-y-0 right-3 flex items-center">
<button class="text-neon-cyan hover:text-white transition-colors">
<span class="material-symbols-outlined filled">mic</span>
</button>
</div>
</div>
</header>
<main class="relative z-10 space-y-8 mt-6">
<section class="px-4">
<div class="flex items-center justify-between mb-4">
<h3 class="text-lg font-display font-bold text-white tracking-widest uppercase text-transparent bg-clip-text bg-gradient-to-r from-neon-cyan to-neon-purple drop-shadow-[0_0_5px_rgba(0,243,255,0.5)]">Data Streams</h3>
<span class="text-neon-cyan text-xs font-display font-bold uppercase tracking-wider hover:text-neon-magenta cursor-pointer transition-colors shadow-neon-cyan/20">View All</span>
</div>
<div class="grid grid-cols-2 gap-3">
<div class="relative h-24 rounded-xl overflow-hidden cursor-pointer group border border-neon-purple/30 hover:border-neon-cyan transition-colors duration-300">
<div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-purple-900 to-black opacity-90 group-hover:opacity-100 transition-all duration-300"></div>
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-30 mix-blend-overlay"></div>
<div class="absolute inset-0 bg-gradient-to-r from-neon-purple/20 to-neon-blue/20"></div>
<img alt="Action pattern" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-40 grayscale group-hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYECwmKbvato3IDnbOTB9_edCqQQi5c98_hbN--_uDlPngiSkhbQrzVuQJ_IA_GjREhLQGn0uCDd7-6cnhMPcGuiLpNzYgLsWMo5u6KITgNBrzKZ0y6t40I67ML4NumZHLL83unKO8wLdYdKyrcOPwi_trQoMYVhJFM_OwdXiAP9Elxr4JSbJZdMYUuq5YMHoBNoI-ri0SYWMOw1NdDbYaxkOaQQ0qp-oHhb-nccVl1aAfdXEt3kh8w1PhJK_9YIbbrkOWjAwzauaP"/>
<div class="absolute inset-0 flex items-center justify-between px-4">
<span class="font-display font-bold text-lg tracking-wider text-white drop-shadow-[0_0_8px_rgba(188,19,254,0.8)]">ACTION</span>
<span class="material-symbols-outlined text-3xl text-neon-cyan opacity-80 rotate-12 drop-shadow-[0_0_5px_rgba(0,243,255,0.8)]">swords</span>
</div>
</div>
<div class="relative h-24 rounded-xl overflow-hidden cursor-pointer group border border-neon-purple/30 hover:border-neon-cyan transition-colors duration-300">
<div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-indigo-900 to-black opacity-90 group-hover:opacity-100 transition-all duration-300"></div>
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-30 mix-blend-overlay"></div>
<div class="absolute inset-0 bg-gradient-to-r from-neon-blue/20 to-neon-purple/20"></div>
<img alt="Isekai pattern" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-40 grayscale group-hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBllluX5HhK5gFyG9Eh8s3ghD95oUUFc_T5qfy59_bzISQrl7V1BfeuCp0qwZzzYfT22Ed6xN0WYs_dsvC8WDRPqVrcb-1Vy0-AfONNJh_KJlIaJgnNlN2ZufcTlLMmxvHQYHNsTOSaXBKDDoMkhrkH-XHVfFCQ7d-PJtCj1vQIXm_TsYi5uycpX1t0KfbwDm3C1YD-9pIeoh2iCBtPMrXgpPIKRgkTWDsAzZKyHb8v07ii9RsnlXC366NkxlDDpclaPZNoNMxL_MT8"/>
<div class="absolute inset-0 flex items-center justify-between px-4">
<span class="font-display font-bold text-lg tracking-wider text-white drop-shadow-[0_0_8px_rgba(0,102,255,0.8)]">ISEKAI</span>
<span class="material-symbols-outlined text-3xl text-neon-magenta opacity-80 rotate-12 drop-shadow-[0_0_5px_rgba(255,0,255,0.8)]">auto_awesome</span>
</div>
</div>
<div class="relative h-24 rounded-xl overflow-hidden cursor-pointer group border border-neon-purple/30 hover:border-neon-cyan transition-colors duration-300">
<div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-teal-900 to-black opacity-90 group-hover:opacity-100 transition-all duration-300"></div>
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-30 mix-blend-overlay"></div>
<div class="absolute inset-0 bg-gradient-to-r from-teal-500/20 to-neon-blue/20"></div>
<img alt="SOL pattern" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-40 grayscale group-hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOQZugFL2O6lgbb55-IvchfYetp7BdIsfHJnVaGKyJZHopsy1Fri0IzKyAfYweVBDx2KiuTXHGAckGAVzPw4xSwc3eKJ1tT6d209guillOJNkF60p3nwgNlyofcwMiHelfy_yf5_L7o1RGBviAmKif8yQQUazypE2-QtnY9J2htQ2AjAmjiBdjtrutZznjHZEGbHIRSfcPhHeBSEqzruNKsTlZ1Vpg4txjR16ykU_YBCmQR3vkmTo5GYL9vO_OQOIoXlb0mM0FU13r"/>
<div class="absolute inset-0 flex items-center justify-between px-4">
<span class="font-display font-bold text-lg leading-tight tracking-wider text-white drop-shadow-[0_0_8px_rgba(0,243,255,0.8)]">SLICE OF<br/>LIFE</span>
<span class="material-symbols-outlined text-3xl text-white opacity-80 rotate-12">coffee</span>
</div>
</div>
<div class="relative h-24 rounded-xl overflow-hidden cursor-pointer group border border-neon-purple/30 hover:border-neon-cyan transition-colors duration-300">
<div class="absolute inset-0 bg-gradient-to-br from-fuchsia-900 via-pink-900 to-black opacity-90 group-hover:opacity-100 transition-all duration-300"></div>
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-30 mix-blend-overlay"></div>
<div class="absolute inset-0 bg-gradient-to-r from-neon-magenta/20 to-neon-purple/20"></div>
<img alt="Romance pattern" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-40 grayscale group-hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCD8jKa5HAP5KQLONKxfwIbr581yIiEV0lE9y7CtI6n4SOKRrW7cmD3kHVkW6Dp4spDuLHguf3eK2fAKBRECa6CvxrhkBSNCY2HCSeXEyy5T81K48kuTU6C-XlOVoQAadoUyVzkUEVWHc1ipdeIwQIOF7v7VHO7WlxGvAb7AUNSHSDKPYt-J40TioEorPFSvUTKQs9t0JqUjbUXPX30KLIES3bU4HV78J0SrU0XpKX5xoLGZwhzuaTS_YAGmepvBrvEhlLMEHrvgzhI"/>
<div class="absolute inset-0 flex items-center justify-between px-4">
<span class="font-display font-bold text-lg tracking-wider text-white drop-shadow-[0_0_8px_rgba(255,0,255,0.8)]">ROMANCE</span>
<span class="material-symbols-outlined text-3xl text-neon-cyan opacity-80 rotate-12 drop-shadow-[0_0_5px_rgba(0,243,255,0.8)]">favorite</span>
</div>
</div>
<div class="col-span-2 relative h-20 rounded-xl overflow-hidden cursor-pointer group mt-1 border border-neon-cyan/50 hover:shadow-neon-cyan transition-all duration-300">
<div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-cyan-900 opacity-90"></div>
<div class="absolute inset-0 bg-[linear-gradient(90deg,transparent_0%,rgba(0,243,255,0.1)_50%,transparent_100%)] animate-[pulse_3s_ease-in-out_infinite]"></div>
<img alt="Mecha pattern" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-60" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0YAX2IzJnEB5Bi702qX7Rc5mLAa0XA6dGJHi6nP8wZZdsKFSR6rkoablOYYCaMkm0F0rRV6RrxMrf9pv0btaTBImQmWoyjofrHJ6fblKWgJOZX3zzghlbSULAIcTLk2UwiKOiiOSZS4ORLtU8CBhsg0IkUss-gdPksO2e83yyVtcKSfEiFmXQpfin21pjrzw1ilwddra3rH0zyWLz3v_EVsFTOp5pEQ01lMJj6dmoIuQmtx5Fu0l3fzGLE2VCpkXGplMLQ47M2xVd"/>
<div class="absolute inset-0 flex items-center justify-center gap-3">
<span class="material-symbols-outlined text-3xl text-neon-cyan drop-shadow-[0_0_10px_rgba(0,243,255,1)]">smart_toy</span>
<span class="font-display font-bold text-xl tracking-[0.2em] uppercase text-white drop-shadow-[0_0_5px_rgba(255,255,255,0.8)]">Mecha Zone</span>
</div>
</div>
</div>
</section>
<section class="pl-4">
<div class="flex items-center justify-between pr-4 mb-4">
<h3 class="text-lg font-display font-bold text-white tracking-widest uppercase drop-shadow-[0_0_5px_rgba(255,255,255,0.3)]">Sync Timeline</h3>
<div class="flex gap-2">
<button class="w-8 h-8 rounded-full bg-cyber-surface border border-neon-cyan/30 flex items-center justify-center text-neon-cyan hover:bg-neon-cyan/20 hover:shadow-neon-cyan transition-all">
<span class="material-symbols-outlined text-sm">arrow_back_ios_new</span>
</button>
<button class="w-8 h-8 rounded-full bg-cyber-surface border border-neon-cyan/30 flex items-center justify-center text-neon-cyan hover:bg-neon-cyan/20 hover:shadow-neon-cyan transition-all">
<span class="material-symbols-outlined text-sm">arrow_forward_ios</span>
</button>
</div>
</div>
<div class="flex gap-3 overflow-x-auto no-scrollbar pb-4 pr-4">
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
<span class="text-xs font-display text-gray-400 uppercase font-bold tracking-wider">Mon</span>
<div class="w-10 h-10 rounded bg-cyber-surface border border-gray-700 flex items-center justify-center text-sm font-medium font-display clip-path-polygon">12</div>
</div>
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
<span class="text-xs font-display text-gray-400 uppercase font-bold tracking-wider">Tue</span>
<div class="w-10 h-10 rounded bg-cyber-surface border border-gray-700 flex items-center justify-center text-sm font-medium font-display">13</div>
</div>
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer">
<span class="text-xs font-display text-neon-magenta uppercase font-bold tracking-wider drop-shadow-[0_0_5px_rgba(255,0,255,0.8)]">Wed</span>
<div class="w-10 h-10 rounded bg-neon-magenta text-black shadow-neon-magenta flex items-center justify-center text-lg font-bold font-display relative overflow-hidden">
                14
                <div class="absolute inset-0 bg-white/20 skew-x-12 -translate-x-full animate-[shimmer_2s_infinite]"></div>
</div>
<div class="w-2 h-0.5 bg-neon-magenta mt-2 shadow-[0_0_8px_rgba(255,0,255,1)]"></div>
</div>
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
<span class="text-xs font-display text-gray-400 uppercase font-bold tracking-wider">Thu</span>
<div class="w-10 h-10 rounded bg-cyber-surface border border-gray-700 flex items-center justify-center text-sm font-medium font-display">15</div>
</div>
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
<span class="text-xs font-display text-gray-400 uppercase font-bold tracking-wider">Fri</span>
<div class="w-10 h-10 rounded bg-cyber-surface border border-gray-700 flex items-center justify-center text-sm font-medium font-display">16</div>
</div>
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
<span class="text-xs font-display text-gray-400 uppercase font-bold tracking-wider">Sat</span>
<div class="w-10 h-10 rounded bg-cyber-surface border border-gray-700 flex items-center justify-center text-sm font-medium font-display">17</div>
</div>
</div>
<div class="flex flex-col gap-3 pr-4">
<div class="flex gap-3 bg-cyber-surface/60 p-3 rounded-xl border border-neon-cyan/20 backdrop-blur-sm relative overflow-hidden group hover:border-neon-cyan/60 transition-colors">
<div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-bl from-neon-cyan/10 to-transparent rounded-bl-full"></div>
<div class="relative w-24 aspect-video flex-none rounded-lg overflow-hidden border border-white/10 group-hover:shadow-[0_0_10px_rgba(0,243,255,0.3)] transition-all">
<img alt="Anime thumbnail" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3ur9dOIicqPYSQ3bgC_4GrH5I4QQN0GfXf14fCG7nrNewy863rPK2EgS_qxPM2jhTZNgQ_nkJMLiSU_c8TkpBxkJUmU_vI4PSHDQKyVURYsODu813xmKvpCNjQJn753AaTTRBTssZCTypAk-JWfayMcQ2wV9mREdmuPVpojNvV0L20kLc-nGr1uGhLkrfHDqLmOv27yym_bSdCoDMnKugO8EqHjTUHCFXROjVXCNrni1qYVIXOzcJ4EI2gFfZWodjDINwhlKbIicF"/>
<div class="absolute bottom-0 left-0 right-0 bg-black/80 backdrop-blur text-[10px] text-center text-neon-cyan py-0.5 font-bold font-display border-t border-neon-cyan/30">18:30</div>
</div>
<div class="flex-1 flex flex-col justify-center">
<h4 class="text-sm font-display font-bold text-white line-clamp-1 tracking-wide">Nebula Drifters</h4>
<p class="text-xs text-gray-400 mt-0.5 font-mono">EP.12 // The Final Stand</p>
<div class="mt-2 flex items-center gap-2">
<span class="px-1.5 py-0.5 bg-neon-magenta/20 text-neon-magenta rounded-sm text-[10px] font-bold border border-neon-magenta/50 shadow-[0_0_5px_rgba(255,0,255,0.2)]">NEW_DATA</span>
<span class="text-[10px] text-neon-blue font-semibold">Sub &amp; Dub</span>
</div>
</div>
<button class="self-center p-2 rounded-full hover:bg-neon-cyan/10 text-neon-cyan transition-colors">
<span class="material-symbols-outlined">notifications_active</span>
</button>
</div>
<div class="flex gap-3 bg-cyber-surface/60 p-3 rounded-xl border border-white/5 hover:border-neon-purple/50 backdrop-blur-sm relative overflow-hidden group transition-colors">
<div class="relative w-24 aspect-video flex-none rounded-lg overflow-hidden border border-white/10">
<img alt="Anime thumbnail" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWxBMBenzKI8EmKb4yXU74YxNdxBJRZv6xyb69vw8K5Z31gFpJBpF6GWACG7FSdkGMCFrOl41UdFb2ck8gj89GK6GRpJAL5W6KmlAxAHwJ66aq-vhD__V7g3xtMj6cLP_i4Sk4TAoQVzmLmtrcQG-pF2l9OMh6_S5bS3PK0zweIzesWmL8rzS4ewpQ17hByxd2xYbgPY94u2Vr2tiHQXokbl2Nb1AyRoOQz61oFaqUmjB7590LT4JvTAHtqDub-X3TwGVjYtup0LCa"/>
<div class="absolute bottom-0 left-0 right-0 bg-black/80 backdrop-blur text-[10px] text-center text-gray-300 py-0.5 font-bold font-display border-t border-white/10">20:00</div>
</div>
<div class="flex-1 flex flex-col justify-center">
<h4 class="text-sm font-display font-bold text-gray-200 line-clamp-1 tracking-wide">Cyber Heart Academy</h4>
<p class="text-xs text-gray-500 mt-0.5 font-mono">EP.04 // Glitch in System</p>
<div class="mt-2 flex items-center gap-2">
<span class="text-[10px] text-gray-500 font-semibold">Sub only</span>
</div>
</div>
<button class="self-center p-2 rounded-full hover:bg-white/10 text-gray-500 hover:text-white transition-colors">
<span class="material-symbols-outlined">notifications_none</span>
</button>
</div>
</div>
</section>
<section class="pl-4 pb-4">
<h3 class="text-lg font-display font-bold text-white mb-3 tracking-widest uppercase drop-shadow-[0_0_5px_rgba(255,255,255,0.3)]">Recommended For User</h3>
<div class="flex overflow-x-auto gap-4 no-scrollbar pb-2 pr-4 snap-x">
<div class="relative flex-none w-[150px] snap-start cursor-pointer group">
<div class="aspect-[2/3] w-full rounded-xl overflow-hidden bg-cyber-surface relative shadow-lg border border-neon-purple/30 group-hover:border-neon-cyan group-hover:shadow-neon-cyan/30 transition-all duration-300">
<img alt="Anime Poster" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBllluX5HhK5gFyG9Eh8s3ghD95oUUFc_T5qfy59_bzISQrl7V1BfeuCp0qwZzzYfT22Ed6xN0WYs_dsvC8WDRPqVrcb-1Vy0-AfONNJh_KJlIaJgnNlN2ZufcTlLMmxvHQYHNsTOSaXBKDDoMkhrkH-XHVfFCQ7d-PJtCj1vQIXm_TsYi5uycpX1t0KfbwDm3C1YD-9pIeoh2iCBtPMrXgpPIKRgkTWDsAzZKyHb8v07ii9RsnlXC366NkxlDDpclaPZNoNMxL_MT8"/>
<div class="absolute top-2 right-2 px-1.5 py-0.5 bg-neon-purple/90 rounded-sm text-[9px] font-bold text-white shadow-[0_0_10px_rgba(188,19,254,0.6)] tracking-wide backdrop-blur-md border border-white/20">
                        SIMULCAST
                    </div>
<div class="absolute bottom-0 left-0 right-0 p-2 bg-gradient-to-t from-cyber-bg via-cyber-bg/90 to-transparent">
<div class="flex items-center gap-1 text-xs font-bold text-neon-cyan drop-shadow-[0_0_3px_rgba(0,243,255,0.8)]">
<span class="material-symbols-outlined text-[14px] filled">star</span> 98% MATCH
                        </div>
</div>
</div>
<h4 class="mt-2 text-sm font-display font-bold text-white leading-tight group-hover:text-neon-cyan transition-colors">Astral Mage</h4>
<p class="text-xs text-gray-400 font-mono">Fantasy • Magic</p>
</div>
<div class="relative flex-none w-[150px] snap-start cursor-pointer group">
<div class="aspect-[2/3] w-full rounded-xl overflow-hidden bg-cyber-surface relative shadow-lg border border-neon-purple/30 group-hover:border-neon-cyan group-hover:shadow-neon-cyan/30 transition-all duration-300">
<img alt="Anime Poster" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkmFP6L3sSYn59bUoeZvdbRsH9OwNwCJbUgArRhMOHQPec5MjPyG18roGgXaqAvVU7QBOlPjcOcIIQVnTAnEQ12N17h_FmHr8FLr2KQ8SlE-lkPE4lXkJJqY8_SGl85_7Yx1Z7T85QKNPQmzIpTq52TOPJmD0hhVDicjkSNZbw3TNqbGxczEMA2S_GZRYH3oQIaE5ViDTZs2pyCP0O-ZEQ5ilJLwA8_nA12QiMBlDUtg78Ip-CNSpAAWkWTtqmByMaEBK2pXQa5820"/>
<div class="absolute top-2 right-2 px-1.5 py-0.5 bg-neon-purple/90 rounded-sm text-[9px] font-bold text-white shadow-[0_0_10px_rgba(188,19,254,0.6)] tracking-wide backdrop-blur-md border border-white/20">
                        SIMULCAST
                    </div>
<div class="absolute bottom-0 left-0 right-0 p-2 bg-gradient-to-t from-cyber-bg via-cyber-bg/90 to-transparent">
<div class="flex items-center gap-1 text-xs font-bold text-neon-cyan drop-shadow-[0_0_3px_rgba(0,243,255,0.8)]">
<span class="material-symbols-outlined text-[14px] filled">star</span> 95% MATCH
                        </div>
</div>
</div>
<h4 class="mt-2 text-sm font-display font-bold text-white leading-tight group-hover:text-neon-cyan transition-colors">Forest Spirits</h4>
<p class="text-xs text-gray-400 font-mono">Adventure</p>
</div>
<div class="relative flex-none w-[150px] snap-start cursor-pointer group">
<div class="aspect-[2/3] w-full rounded-xl overflow-hidden bg-cyber-surface relative shadow-lg border border-neon-purple/30 group-hover:border-neon-cyan group-hover:shadow-neon-cyan/30 transition-all duration-300">
<img alt="Anime Poster" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8I0V2iA4ON3WSmZOl_4zbcVzrt2rEH6JNPwP70Xu52IIYL5g0nKMp-4JlW3qTxBkdDGf0csTaEk0jLeHVQOKGKQwcV6Clobf2d_GMmWO5jMeV7iR9mtiXy9gOuCS2CAA2xRrsC0CZxGhrpOZQiEBt1nOaiIp_gA2Hkc7PK6LclYaaRLrTW3PdHO1n6RtzGQPvPfce_L_0a4jAO05wc_VrfMf4yzujvvKbiJD2x7WWCihCHc6IRHpIBcBOqSqL5GOFFQOsSLjMSgGM"/>
<div class="absolute bottom-0 left-0 right-0 p-2 bg-gradient-to-t from-cyber-bg via-cyber-bg/90 to-transparent">
<div class="flex items-center gap-1 text-xs font-bold text-neon-cyan drop-shadow-[0_0_3px_rgba(0,243,255,0.8)]">
<span class="material-symbols-outlined text-[14px] filled">star</span> 92% MATCH
                        </div>
</div>
</div>
<h4 class="mt-2 text-sm font-display font-bold text-white leading-tight group-hover:text-neon-cyan transition-colors">Void Walker</h4>
<p class="text-xs text-gray-400 font-mono">Sci-Fi • Horror</p>
</div>
</div>
</section>
</main>
<nav class="fixed bottom-0 left-0 right-0 bg-[#020412]/95 backdrop-blur-lg border-t border-neon-cyan/20 px-2 pb-6 pt-2 z-50 shadow-[0_-5px_20px_rgba(0,243,255,0.1)]">
<ul class="flex justify-around items-center">
<li class="flex-1">
<a class="flex flex-col items-center justify-center gap-1 text-gray-400 hover:text-neon-cyan hover:drop-shadow-[0_0_5px_rgba(0,243,255,0.8)] transition-all group" href="#">
<span class="material-symbols-outlined text-[26px]">home</span>
<span class="text-[10px] font-display uppercase tracking-wider">Home</span>
</a>
</li>
<li class="flex-1">
<a class="flex flex-col items-center justify-center gap-1 text-neon-cyan drop-shadow-[0_0_5px_rgba(0,243,255,0.8)] group" href="#">
<span class="material-symbols-outlined filled text-[26px]">explore</span>
<span class="text-[10px] font-display uppercase tracking-wider font-bold">Explore</span>
</a>
</li>
<li class="flex-1">
<a class="flex flex-col items-center justify-center gap-1 text-gray-400 hover:text-neon-magenta hover:drop-shadow-[0_0_5px_rgba(255,0,255,0.8)] transition-all group" href="#">
<span class="material-symbols-outlined text-[26px]">bookmark</span>
<span class="text-[10px] font-display uppercase tracking-wider">My List</span>
</a>
</li>
<li class="flex-1">
<a class="flex flex-col items-center justify-center gap-1 text-gray-400 hover:text-white transition-colors group" href="#">
<div class="w-6 h-6 rounded-full overflow-hidden border border-gray-500 group-hover:border-neon-cyan group-hover:shadow-[0_0_5px_rgba(0,243,255,0.5)] transition-all">
<img alt="User avatar tiny" class="w-full h-full object-cover" data-alt="Small user avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n"/>
</div>
<span class="text-[10px] font-display uppercase tracking-wider">Profile</span>
</a>
</li>
</ul>
</nav>
</body></html><!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Cyberpunk Lunera Explore</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "cyber-bg": "#020412", // Deep dark blue
                        "cyber-surface": "#0a1025", 
                        "cyber-border": "#1e3a8a",
                        "neon-cyan": "#00f3ff", 
                        "neon-magenta": "#ff00ff",
                        "neon-purple": "#bc13fe",
                        "neon-blue": "#0066ff",
                        "holo-dark": "rgba(20, 30, 60, 0.7)",
                    },
                    fontFamily: {
                        "display": ["Orbitron", "sans-serif"],
                        "body": ["Rajdhani", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.375rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                    boxShadow: {
                        "neon-cyan": "0 0 10px rgba(0, 243, 255, 0.5), 0 0 20px rgba(0, 243, 255, 0.3)",
                        "neon-magenta": "0 0 10px rgba(255, 0, 255, 0.5), 0 0 20px rgba(255, 0, 255, 0.3)",
                        "neon-purple": "0 0 15px rgba(188, 19, 254, 0.4)",
                    }
                },
            },
        }
    </script>
<style>.no-scrollbar::-webkit-scrollbar {
            display: none;
        }.no-scrollbar {
            -ms-overflow-style: none;scrollbar-width: none;}html {
            scroll-behavior: smooth;
        }.scanlines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                to bottom,
                rgba(255,255,255,0),
                rgba(255,255,255,0) 50%,
                rgba(0,0,0,0.1) 50%,
                rgba(0,0,0,0.1)
            );
            background-size: 100% 4px;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.3;
        }
        .holographic-border {
            border: 1px solid rgba(0, 243, 255, 0.3);
            box-shadow: inset 0 0 20px rgba(0, 243, 255, 0.1);
        }
    </style>
<style>
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
<body class="bg-cyber-bg font-body text-white overflow-x-hidden pb-24 selection:bg-neon-cyan selection:text-black">
<div class="scanlines"></div>
<header class="sticky top-0 left-0 right-0 z-50 bg-cyber-bg/90 backdrop-blur-md border-b border-neon-cyan/20 pt-12 pb-4 px-4">
<div class="relative w-full group">
<div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-neon-cyan/70">search</span>
</div>
<input class="w-full bg-cyber-surface/80 text-white font-body text-lg rounded-xl py-3 pl-10 pr-10 border border-neon-cyan/30 focus:border-neon-cyan focus:ring-1 focus:ring-neon-cyan focus:shadow-neon-cyan placeholder-gray-500 transition-all duration-300" placeholder="Search the network..." type="text"/>
<div class="absolute inset-y-0 right-3 flex items-center">
<button class="text-neon-cyan hover:text-white transition-colors">
<span class="material-symbols-outlined filled">mic</span>
</button>
</div>
</div>
</header>
<main class="relative z-10 space-y-8 mt-6">
<section class="px-4">
<div class="flex items-center justify-between mb-4">
<h3 class="text-lg font-display font-bold text-white tracking-widest uppercase text-transparent bg-clip-text bg-gradient-to-r from-neon-cyan to-neon-purple drop-shadow-[0_0_5px_rgba(0,243,255,0.5)]">Data Streams</h3>
<span class="text-neon-cyan text-xs font-display font-bold uppercase tracking-wider hover:text-neon-magenta cursor-pointer transition-colors shadow-neon-cyan/20">View All</span>
</div>
<div class="grid grid-cols-2 gap-3">
<div class="relative h-24 rounded-xl overflow-hidden cursor-pointer group border border-neon-purple/30 hover:border-neon-cyan transition-colors duration-300">
<div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-purple-900 to-black opacity-90 group-hover:opacity-100 transition-all duration-300"></div>
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-30 mix-blend-overlay"></div>
<div class="absolute inset-0 bg-gradient-to-r from-neon-purple/20 to-neon-blue/20"></div>
<img alt="Action pattern" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-40 grayscale group-hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYECwmKbvato3IDnbOTB9_edCqQQi5c98_hbN--_uDlPngiSkhbQrzVuQJ_IA_GjREhLQGn0uCDd7-6cnhMPcGuiLpNzYgLsWMo5u6KITgNBrzKZ0y6t40I67ML4NumZHLL83unKO8wLdYdKyrcOPwi_trQoMYVhJFM_OwdXiAP9Elxr4JSbJZdMYUuq5YMHoBNoI-ri0SYWMOw1NdDbYaxkOaQQ0qp-oHhb-nccVl1aAfdXEt3kh8w1PhJK_9YIbbrkOWjAwzauaP"/>
<div class="absolute inset-0 flex items-center justify-between px-4">
<span class="font-display font-bold text-lg tracking-wider text-white drop-shadow-[0_0_8px_rgba(188,19,254,0.8)]">ACTION</span>
<span class="material-symbols-outlined text-3xl text-neon-cyan opacity-80 rotate-12 drop-shadow-[0_0_5px_rgba(0,243,255,0.8)]">swords</span>
</div>
</div>
<div class="relative h-24 rounded-xl overflow-hidden cursor-pointer group border border-neon-purple/30 hover:border-neon-cyan transition-colors duration-300">
<div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-indigo-900 to-black opacity-90 group-hover:opacity-100 transition-all duration-300"></div>
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-30 mix-blend-overlay"></div>
<div class="absolute inset-0 bg-gradient-to-r from-neon-blue/20 to-neon-purple/20"></div>
<img alt="Isekai pattern" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-40 grayscale group-hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBllluX5HhK5gFyG9Eh8s3ghD95oUUFc_T5qfy59_bzISQrl7V1BfeuCp0qwZzzYfT22Ed6xN0WYs_dsvC8WDRPqVrcb-1Vy0-AfONNJh_KJlIaJgnNlN2ZufcTlLMmxvHQYHNsTOSaXBKDDoMkhrkH-XHVfFCQ7d-PJtCj1vQIXm_TsYi5uycpX1t0KfbwDm3C1YD-9pIeoh2iCBtPMrXgpPIKRgkTWDsAzZKyHb8v07ii9RsnlXC366NkxlDDpclaPZNoNMxL_MT8"/>
<div class="absolute inset-0 flex items-center justify-between px-4">
<span class="font-display font-bold text-lg tracking-wider text-white drop-shadow-[0_0_8px_rgba(0,102,255,0.8)]">ISEKAI</span>
<span class="material-symbols-outlined text-3xl text-neon-magenta opacity-80 rotate-12 drop-shadow-[0_0_5px_rgba(255,0,255,0.8)]">auto_awesome</span>
</div>
</div>
<div class="relative h-24 rounded-xl overflow-hidden cursor-pointer group border border-neon-purple/30 hover:border-neon-cyan transition-colors duration-300">
<div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-teal-900 to-black opacity-90 group-hover:opacity-100 transition-all duration-300"></div>
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-30 mix-blend-overlay"></div>
<div class="absolute inset-0 bg-gradient-to-r from-teal-500/20 to-neon-blue/20"></div>
<img alt="SOL pattern" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-40 grayscale group-hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOQZugFL2O6lgbb55-IvchfYetp7BdIsfHJnVaGKyJZHopsy1Fri0IzKyAfYweVBDx2KiuTXHGAckGAVzPw4xSwc3eKJ1tT6d209guillOJNkF60p3nwgNlyofcwMiHelfy_yf5_L7o1RGBviAmKif8yQQUazypE2-QtnY9J2htQ2AjAmjiBdjtrutZznjHZEGbHIRSfcPhHeBSEqzruNKsTlZ1Vpg4txjR16ykU_YBCmQR3vkmTo5GYL9vO_OQOIoXlb0mM0FU13r"/>
<div class="absolute inset-0 flex items-center justify-between px-4">
<span class="font-display font-bold text-lg leading-tight tracking-wider text-white drop-shadow-[0_0_8px_rgba(0,243,255,0.8)]">SLICE OF<br/>LIFE</span>
<span class="material-symbols-outlined text-3xl text-white opacity-80 rotate-12">coffee</span>
</div>
</div>
<div class="relative h-24 rounded-xl overflow-hidden cursor-pointer group border border-neon-purple/30 hover:border-neon-cyan transition-colors duration-300">
<div class="absolute inset-0 bg-gradient-to-br from-fuchsia-900 via-pink-900 to-black opacity-90 group-hover:opacity-100 transition-all duration-300"></div>
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-30 mix-blend-overlay"></div>
<div class="absolute inset-0 bg-gradient-to-r from-neon-magenta/20 to-neon-purple/20"></div>
<img alt="Romance pattern" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-40 grayscale group-hover:grayscale-0 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCD8jKa5HAP5KQLONKxfwIbr581yIiEV0lE9y7CtI6n4SOKRrW7cmD3kHVkW6Dp4spDuLHguf3eK2fAKBRECa6CvxrhkBSNCY2HCSeXEyy5T81K48kuTU6C-XlOVoQAadoUyVzkUEVWHc1ipdeIwQIOF7v7VHO7WlxGvAb7AUNSHSDKPYt-J40TioEorPFSvUTKQs9t0JqUjbUXPX30KLIES3bU4HV78J0SrU0XpKX5xoLGZwhzuaTS_YAGmepvBrvEhlLMEHrvgzhI"/>
<div class="absolute inset-0 flex items-center justify-between px-4">
<span class="font-display font-bold text-lg tracking-wider text-white drop-shadow-[0_0_8px_rgba(255,0,255,0.8)]">ROMANCE</span>
<span class="material-symbols-outlined text-3xl text-neon-cyan opacity-80 rotate-12 drop-shadow-[0_0_5px_rgba(0,243,255,0.8)]">favorite</span>
</div>
</div>
<div class="col-span-2 relative h-20 rounded-xl overflow-hidden cursor-pointer group mt-1 border border-neon-cyan/50 hover:shadow-neon-cyan transition-all duration-300">
<div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-cyan-900 opacity-90"></div>
<div class="absolute inset-0 bg-[linear-gradient(90deg,transparent_0%,rgba(0,243,255,0.1)_50%,transparent_100%)] animate-[pulse_3s_ease-in-out_infinite]"></div>
<img alt="Mecha pattern" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-60" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0YAX2IzJnEB5Bi702qX7Rc5mLAa0XA6dGJHi6nP8wZZdsKFSR6rkoablOYYCaMkm0F0rRV6RrxMrf9pv0btaTBImQmWoyjofrHJ6fblKWgJOZX3zzghlbSULAIcTLk2UwiKOiiOSZS4ORLtU8CBhsg0IkUss-gdPksO2e83yyVtcKSfEiFmXQpfin21pjrzw1ilwddra3rH0zyWLz3v_EVsFTOp5pEQ01lMJj6dmoIuQmtx5Fu0l3fzGLE2VCpkXGplMLQ47M2xVd"/>
<div class="absolute inset-0 flex items-center justify-center gap-3">
<span class="material-symbols-outlined text-3xl text-neon-cyan drop-shadow-[0_0_10px_rgba(0,243,255,1)]">smart_toy</span>
<span class="font-display font-bold text-xl tracking-[0.2em] uppercase text-white drop-shadow-[0_0_5px_rgba(255,255,255,0.8)]">Mecha Zone</span>
</div>
</div>
</div>
</section>
<section class="pl-4">
<div class="flex items-center justify-between pr-4 mb-4">
<h3 class="text-lg font-display font-bold text-white tracking-widest uppercase drop-shadow-[0_0_5px_rgba(255,255,255,0.3)]">Sync Timeline</h3>
<div class="flex gap-2">
<button class="w-8 h-8 rounded-full bg-cyber-surface border border-neon-cyan/30 flex items-center justify-center text-neon-cyan hover:bg-neon-cyan/20 hover:shadow-neon-cyan transition-all">
<span class="material-symbols-outlined text-sm">arrow_back_ios_new</span>
</button>
<button class="w-8 h-8 rounded-full bg-cyber-surface border border-neon-cyan/30 flex items-center justify-center text-neon-cyan hover:bg-neon-cyan/20 hover:shadow-neon-cyan transition-all">
<span class="material-symbols-outlined text-sm">arrow_forward_ios</span>
</button>
</div>
</div>
<div class="flex gap-3 overflow-x-auto no-scrollbar pb-4 pr-4">
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
<span class="text-xs font-display text-gray-400 uppercase font-bold tracking-wider">Mon</span>
<div class="w-10 h-10 rounded bg-cyber-surface border border-gray-700 flex items-center justify-center text-sm font-medium font-display clip-path-polygon">12</div>
</div>
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
<span class="text-xs font-display text-gray-400 uppercase font-bold tracking-wider">Tue</span>
<div class="w-10 h-10 rounded bg-cyber-surface border border-gray-700 flex items-center justify-center text-sm font-medium font-display">13</div>
</div>
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer">
<span class="text-xs font-display text-neon-magenta uppercase font-bold tracking-wider drop-shadow-[0_0_5px_rgba(255,0,255,0.8)]">Wed</span>
<div class="w-10 h-10 rounded bg-neon-magenta text-black shadow-neon-magenta flex items-center justify-center text-lg font-bold font-display relative overflow-hidden">
                14
                <div class="absolute inset-0 bg-white/20 skew-x-12 -translate-x-full animate-[shimmer_2s_infinite]"></div>
</div>
<div class="w-2 h-0.5 bg-neon-magenta mt-2 shadow-[0_0_8px_rgba(255,0,255,1)]"></div>
</div>
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
<span class="text-xs font-display text-gray-400 uppercase font-bold tracking-wider">Thu</span>
<div class="w-10 h-10 rounded bg-cyber-surface border border-gray-700 flex items-center justify-center text-sm font-medium font-display">15</div>
</div>
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
<span class="text-xs font-display text-gray-400 uppercase font-bold tracking-wider">Fri</span>
<div class="w-10 h-10 rounded bg-cyber-surface border border-gray-700 flex items-center justify-center text-sm font-medium font-display">16</div>
</div>
<div class="flex flex-col items-center gap-1 min-w-[48px] cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
<span class="text-xs font-display text-gray-400 uppercase font-bold tracking-wider">Sat</span>
<div class="w-10 h-10 rounded bg-cyber-surface border border-gray-700 flex items-center justify-center text-sm font-medium font-display">17</div>
</div>
</div>
<div class="flex flex-col gap-3 pr-4">
<div class="flex gap-3 bg-cyber-surface/60 p-3 rounded-xl border border-neon-cyan/20 backdrop-blur-sm relative overflow-hidden group hover:border-neon-cyan/60 transition-colors">
<div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-bl from-neon-cyan/10 to-transparent rounded-bl-full"></div>
<div class="relative w-24 aspect-video flex-none rounded-lg overflow-hidden border border-white/10 group-hover:shadow-[0_0_10px_rgba(0,243,255,0.3)] transition-all">
<img alt="Anime thumbnail" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3ur9dOIicqPYSQ3bgC_4GrH5I4QQN0GfXf14fCG7nrNewy863rPK2EgS_qxPM2jhTZNgQ_nkJMLiSU_c8TkpBxkJUmU_vI4PSHDQKyVURYsODu813xmKvpCNjQJn753AaTTRBTssZCTypAk-JWfayMcQ2wV9mREdmuPVpojNvV0L20kLc-nGr1uGhLkrfHDqLmOv27yym_bSdCoDMnKugO8EqHjTUHCFXROjVXCNrni1qYVIXOzcJ4EI2gFfZWodjDINwhlKbIicF"/>
<div class="absolute bottom-0 left-0 right-0 bg-black/80 backdrop-blur text-[10px] text-center text-neon-cyan py-0.5 font-bold font-display border-t border-neon-cyan/30">18:30</div>
</div>
<div class="flex-1 flex flex-col justify-center">
<h4 class="text-sm font-display font-bold text-white line-clamp-1 tracking-wide">Nebula Drifters</h4>
<p class="text-xs text-gray-400 mt-0.5 font-mono">EP.12 // The Final Stand</p>
<div class="mt-2 flex items-center gap-2">
<span class="px-1.5 py-0.5 bg-neon-magenta/20 text-neon-magenta rounded-sm text-[10px] font-bold border border-neon-magenta/50 shadow-[0_0_5px_rgba(255,0,255,0.2)]">NEW_DATA</span>
<span class="text-[10px] text-neon-blue font-semibold">Sub &amp; Dub</span>
</div>
</div>
<button class="self-center p-2 rounded-full hover:bg-neon-cyan/10 text-neon-cyan transition-colors">
<span class="material-symbols-outlined">notifications_active</span>
</button>
</div>
<div class="flex gap-3 bg-cyber-surface/60 p-3 rounded-xl border border-white/5 hover:border-neon-purple/50 backdrop-blur-sm relative overflow-hidden group transition-colors">
<div class="relative w-24 aspect-video flex-none rounded-lg overflow-hidden border border-white/10">
<img alt="Anime thumbnail" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWxBMBenzKI8EmKb4yXU74YxNdxBJRZv6xyb69vw8K5Z31gFpJBpF6GWACG7FSdkGMCFrOl41UdFb2ck8gj89GK6GRpJAL5W6KmlAxAHwJ66aq-vhD__V7g3xtMj6cLP_i4Sk4TAoQVzmLmtrcQG-pF2l9OMh6_S5bS3PK0zweIzesWmL8rzS4ewpQ17hByxd2xYbgPY94u2Vr2tiHQXokbl2Nb1AyRoOQz61oFaqUmjB7590LT4JvTAHtqDub-X3TwGVjYtup0LCa"/>
<div class="absolute bottom-0 left-0 right-0 bg-black/80 backdrop-blur text-[10px] text-center text-gray-300 py-0.5 font-bold font-display border-t border-white/10">20:00</div>
</div>
<div class="flex-1 flex flex-col justify-center">
<h4 class="text-sm font-display font-bold text-gray-200 line-clamp-1 tracking-wide">Cyber Heart Academy</h4>
<p class="text-xs text-gray-500 mt-0.5 font-mono">EP.04 // Glitch in System</p>
<div class="mt-2 flex items-center gap-2">
<span class="text-[10px] text-gray-500 font-semibold">Sub only</span>
</div>
</div>
<button class="self-center p-2 rounded-full hover:bg-white/10 text-gray-500 hover:text-white transition-colors">
<span class="material-symbols-outlined">notifications_none</span>
</button>
</div>
</div>
</section>
<section class="pl-4 pb-4">
<h3 class="text-lg font-display font-bold text-white mb-3 tracking-widest uppercase drop-shadow-[0_0_5px_rgba(255,255,255,0.3)]">Recommended For User</h3>
<div class="flex overflow-x-auto gap-4 no-scrollbar pb-2 pr-4 snap-x">
<div class="relative flex-none w-[150px] snap-start cursor-pointer group">
<div class="aspect-[2/3] w-full rounded-xl overflow-hidden bg-cyber-surface relative shadow-lg border border-neon-purple/30 group-hover:border-neon-cyan group-hover:shadow-neon-cyan/30 transition-all duration-300">
<img alt="Anime Poster" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBllluX5HhK5gFyG9Eh8s3ghD95oUUFc_T5qfy59_bzISQrl7V1BfeuCp0qwZzzYfT22Ed6xN0WYs_dsvC8WDRPqVrcb-1Vy0-AfONNJh_KJlIaJgnNlN2ZufcTlLMmxvHQYHNsTOSaXBKDDoMkhrkH-XHVfFCQ7d-PJtCj1vQIXm_TsYi5uycpX1t0KfbwDm3C1YD-9pIeoh2iCBtPMrXgpPIKRgkTWDsAzZKyHb8v07ii9RsnlXC366NkxlDDpclaPZNoNMxL_MT8"/>
<div class="absolute top-2 right-2 px-1.5 py-0.5 bg-neon-purple/90 rounded-sm text-[9px] font-bold text-white shadow-[0_0_10px_rgba(188,19,254,0.6)] tracking-wide backdrop-blur-md border border-white/20">
                        SIMULCAST
                    </div>
<div class="absolute bottom-0 left-0 right-0 p-2 bg-gradient-to-t from-cyber-bg via-cyber-bg/90 to-transparent">
<div class="flex items-center gap-1 text-xs font-bold text-neon-cyan drop-shadow-[0_0_3px_rgba(0,243,255,0.8)]">
<span class="material-symbols-outlined text-[14px] filled">star</span> 98% MATCH
                        </div>
</div>
</div>
<h4 class="mt-2 text-sm font-display font-bold text-white leading-tight group-hover:text-neon-cyan transition-colors">Astral Mage</h4>
<p class="text-xs text-gray-400 font-mono">Fantasy • Magic</p>
</div>
<div class="relative flex-none w-[150px] snap-start cursor-pointer group">
<div class="aspect-[2/3] w-full rounded-xl overflow-hidden bg-cyber-surface relative shadow-lg border border-neon-purple/30 group-hover:border-neon-cyan group-hover:shadow-neon-cyan/30 transition-all duration-300">
<img alt="Anime Poster" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkmFP6L3sSYn59bUoeZvdbRsH9OwNwCJbUgArRhMOHQPec5MjPyG18roGgXaqAvVU7QBOlPjcOcIIQVnTAnEQ12N17h_FmHr8FLr2KQ8SlE-lkPE4lXkJJqY8_SGl85_7Yx1Z7T85QKNPQmzIpTq52TOPJmD0hhVDicjkSNZbw3TNqbGxczEMA2S_GZRYH3oQIaE5ViDTZs2pyCP0O-ZEQ5ilJLwA8_nA12QiMBlDUtg78Ip-CNSpAAWkWTtqmByMaEBK2pXQa5820"/>
<div class="absolute top-2 right-2 px-1.5 py-0.5 bg-neon-purple/90 rounded-sm text-[9px] font-bold text-white shadow-[0_0_10px_rgba(188,19,254,0.6)] tracking-wide backdrop-blur-md border border-white/20">
                        SIMULCAST
                    </div>
<div class="absolute bottom-0 left-0 right-0 p-2 bg-gradient-to-t from-cyber-bg via-cyber-bg/90 to-transparent">
<div class="flex items-center gap-1 text-xs font-bold text-neon-cyan drop-shadow-[0_0_3px_rgba(0,243,255,0.8)]">
<span class="material-symbols-outlined text-[14px] filled">star</span> 95% MATCH
                        </div>
</div>
</div>
<h4 class="mt-2 text-sm font-display font-bold text-white leading-tight group-hover:text-neon-cyan transition-colors">Forest Spirits</h4>
<p class="text-xs text-gray-400 font-mono">Adventure</p>
</div>
<div class="relative flex-none w-[150px] snap-start cursor-pointer group">
<div class="aspect-[2/3] w-full rounded-xl overflow-hidden bg-cyber-surface relative shadow-lg border border-neon-purple/30 group-hover:border-neon-cyan group-hover:shadow-neon-cyan/30 transition-all duration-300">
<img alt="Anime Poster" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8I0V2iA4ON3WSmZOl_4zbcVzrt2rEH6JNPwP70Xu52IIYL5g0nKMp-4JlW3qTxBkdDGf0csTaEk0jLeHVQOKGKQwcV6Clobf2d_GMmWO5jMeV7iR9mtiXy9gOuCS2CAA2xRrsC0CZxGhrpOZQiEBt1nOaiIp_gA2Hkc7PK6LclYaaRLrTW3PdHO1n6RtzGQPvPfce_L_0a4jAO05wc_VrfMf4yzujvvKbiJD2x7WWCihCHc6IRHpIBcBOqSqL5GOFFQOsSLjMSgGM"/>
<div class="absolute bottom-0 left-0 right-0 p-2 bg-gradient-to-t from-cyber-bg via-cyber-bg/90 to-transparent">
<div class="flex items-center gap-1 text-xs font-bold text-neon-cyan drop-shadow-[0_0_3px_rgba(0,243,255,0.8)]">
<span class="material-symbols-outlined text-[14px] filled">star</span> 92% MATCH
                        </div>
</div>
</div>
<h4 class="mt-2 text-sm font-display font-bold text-white leading-tight group-hover:text-neon-cyan transition-colors">Void Walker</h4>
<p class="text-xs text-gray-400 font-mono">Sci-Fi • Horror</p>
</div>
</div>
</section>
</main>
<nav class="fixed bottom-0 left-0 right-0 bg-[#020412]/95 backdrop-blur-lg border-t border-neon-cyan/20 px-2 pb-6 pt-2 z-50 shadow-[0_-5px_20px_rgba(0,243,255,0.1)]">
<ul class="flex justify-around items-center">
<li class="flex-1">
<a class="flex flex-col items-center justify-center gap-1 text-gray-400 hover:text-neon-cyan hover:drop-shadow-[0_0_5px_rgba(0,243,255,0.8)] transition-all group" href="#">
<span class="material-symbols-outlined text-[26px]">home</span>
<span class="text-[10px] font-display uppercase tracking-wider">Home</span>
</a>
</li>
<li class="flex-1">
<a class="flex flex-col items-center justify-center gap-1 text-neon-cyan drop-shadow-[0_0_5px_rgba(0,243,255,0.8)] group" href="#">
<span class="material-symbols-outlined filled text-[26px]">explore</span>
<span class="text-[10px] font-display uppercase tracking-wider font-bold">Explore</span>
</a>
</li>
<li class="flex-1">
<a class="flex flex-col items-center justify-center gap-1 text-gray-400 hover:text-neon-magenta hover:drop-shadow-[0_0_5px_rgba(255,0,255,0.8)] transition-all group" href="#">
<span class="material-symbols-outlined text-[26px]">bookmark</span>
<span class="text-[10px] font-display uppercase tracking-wider">My List</span>
</a>
</li>
<li class="flex-1">
<a class="flex flex-col items-center justify-center gap-1 text-gray-400 hover:text-white transition-colors group" href="#">
<div class="w-6 h-6 rounded-full overflow-hidden border border-gray-500 group-hover:border-neon-cyan group-hover:shadow-[0_0_5px_rgba(0,243,255,0.5)] transition-all">
<img alt="User avatar tiny" class="w-full h-full object-cover" data-alt="Small user avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n"/>
</div>
<span class="text-[10px] font-display uppercase tracking-wider">Profile</span>
</a>
</li>
</ul>
</nav>
</body></html>