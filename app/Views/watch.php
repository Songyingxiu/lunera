<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, viewport-fit=cover" name="viewport"/>
<title>Lunera Watch</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "cyber-blue": "#00f0ff",
                        "cyber-pink": "#ff00ff",
                        "cyber-purple": "#bc13fe",
                        "cyber-bg": "#050505",
                        "hud-dark": "rgba(0, 10, 20, 0.85)",
                    },
                    fontFamily: {
                        "display": ["Orbitron", "sans-serif"],
                        "body": ["Rajdhani", "sans-serif"]
                    },
                    boxShadow: {
                        'neon-blue': '0 0 5px #00f0ff, 0 0 10px #00f0ff',
                        'neon-pink': '0 0 5px #ff00ff, 0 0 10px #ff00ff',
                        'neon-purple': '0 0 5px #bc13fe, 0 0 10px #bc13fe',
                        'hud-border': '0 0 2px #00f0ff, inset 0 0 10px rgba(0, 240, 255, 0.2)',
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
        body {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            background-color: #000;
        }
        input[type=range] {
            -webkit-appearance: none; 
            background: transparent; 
        }
        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
        }
        input[type=range]:focus {
            outline: none; 
        }
        .hud-line {
            background: linear-gradient(90deg, transparent 0%, #00f0ff 50%, transparent 100%);
        }
        .scan-line {
            background: repeating-linear-gradient(
                0deg,
                rgba(0,0,0,0.1),
                rgba(0,0,0,0.1) 1px,
                transparent 1px,
                transparent 2px
            );
        }.clip-tech {
            clip-path: polygon(
                10px 0, 100% 0, 
                100% calc(100% - 10px), calc(100% - 10px) 100%, 
                0 100%, 0 10px
            );
        }
        .clip-tech-sm {
            clip-path: polygon(
                6px 0, 100% 0, 
                100% calc(100% - 6px), calc(100% - 6px) 100%, 
                0 100%, 0 6px
            );
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-black font-body text-white relative w-full h-full flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 w-full h-full bg-black z-0">
<img alt="Anime Scene" class="w-full h-full object-cover opacity-90" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOQZugFL2O6lgbb55-IvchfYetp7BdIsfHJnVaGKyJZHopsy1Fri0IzKyAfYweVBDx2KiuTXHGAckGAVzPw4xSwc3eKJ1tT6d209guillOJNkF60p3nwgNlyofcwMiHelfy_yf5_L7o1RGBviAmKif8yQQUazypE2-QtnY9J2htQ2AjAmjiBdjtrutZznjHZEGbHIRSfcPhHeBSEqzruNKsTlZ1Vpg4txjR16ykU_YBCmQR3vkmTo5GYL9vO_OQOIoXlb0mM0FU13r"/>
<div class="absolute inset-0 pointer-events-none z-0 scan-line opacity-20"></div>
<div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/80 via-transparent to-black/60 z-0"></div>
</div>
<div class="absolute inset-0 z-10 flex flex-col justify-between w-full h-full pointer-events-none p-2 md:p-6">
<div class="w-full flex justify-between items-start pointer-events-auto relative">
<div class="absolute top-0 left-0 w-32 h-[1px] bg-cyber-blue shadow-neon-blue opacity-50"></div>
<div class="absolute top-0 right-0 w-32 h-[1px] bg-cyber-blue shadow-neon-blue opacity-50"></div>
<div class="absolute top-0 left-32 w-4 h-4 border-l border-t border-cyber-blue"></div>
<div class="absolute top-0 right-32 w-4 h-4 border-r border-t border-cyber-blue"></div>
<div class="flex items-start gap-4 mt-2">
<button class="group w-10 h-10 clip-tech-sm bg-hud-dark border border-cyber-blue/30 hover:border-cyber-blue hover:shadow-neon-blue flex items-center justify-center transition-all duration-300">
<span class="material-symbols-outlined text-cyber-blue group-hover:text-white text-lg">arrow_back_ios_new</span>
</button>
<div class="flex flex-col relative pl-2 border-l-2 border-cyber-purple">
<h1 class="text-xl md:text-2xl font-display font-bold text-white tracking-widest uppercase drop-shadow-[0_0_5px_rgba(255,255,255,0.8)]">
                        Demon Slayer
                        <span class="text-xs align-top text-cyber-blue opacity-80">v.3.0</span>
</h1>
<div class="flex items-center gap-2 mt-0.5">
<span class="px-1.5 py-0.5 bg-cyber-purple/20 border border-cyber-purple/50 text-[10px] text-cyber-pink font-bold rounded-sm tracking-widest">S3:E4</span>
<span class="text-sm text-gray-300 font-medium font-body tracking-wide uppercase">"Thank You, Tokito"</span>
</div>
</div>
</div>
<div class="flex items-center gap-6 mt-2">
<div class="relative flex items-center bg-black/40 backdrop-blur-sm border border-cyber-blue/30 rounded-sm p-1 clip-tech-sm">
<div class="absolute inset-0 bg-cyber-blue/5 z-0"></div>
<button class="relative z-10 px-4 py-1 text-xs font-display font-bold bg-cyber-blue/20 text-cyber-blue border border-cyber-blue/50 shadow-neon-blue rounded-sm transition-all">SUB</button>
<button class="relative z-10 px-4 py-1 text-xs font-display font-bold text-gray-500 hover:text-white transition-colors">DUB</button>
<div class="absolute top-0 left-0 w-full h-[1px] bg-cyber-blue/20 animate-pulse"></div>
</div>
<button class="group w-10 h-10 clip-tech-sm bg-hud-dark border border-cyber-blue/30 hover:border-cyber-blue hover:shadow-neon-blue flex items-center justify-center transition-all duration-300">
<span class="material-symbols-outlined text-cyber-blue group-hover:rotate-90 transition-transform duration-500">settings</span>
</button>
</div>
</div>
<div class="absolute inset-0 flex items-center justify-center pointer-events-auto gap-8 md:gap-16 z-20">
<div class="absolute pointer-events-none w-[300px] h-[300px] border border-white/5 rounded-full flex items-center justify-center opacity-30">
<div class="w-[280px] h-[280px] border border-white/5 rounded-full border-dashed"></div>
<div class="absolute w-full h-[1px] bg-cyber-blue/10"></div>
<div class="absolute h-full w-[1px] bg-cyber-blue/10"></div>
</div>
<button class="group flex flex-col items-center justify-center gap-1 opacity-60 hover:opacity-100 transition transform active:scale-95">
<span class="material-symbols-outlined text-4xl md:text-5xl text-white drop-shadow-[0_0_8px_rgba(0,240,255,0.8)]">replay_10</span>
<span class="text-[10px] font-display text-cyber-blue tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">-10 SEC</span>
</button>
<button class="relative w-20 h-20 md:w-24 md:h-24 group flex items-center justify-center transition transform active:scale-95">
<div class="absolute inset-0 rounded-full border-2 border-cyber-pink shadow-neon-pink opacity-80 group-hover:opacity-100 group-hover:shadow-[0_0_20px_#ff00ff] transition-all"></div>
<div class="absolute inset-2 rounded-full border border-dashed border-cyber-blue animate-[spin_10s_linear_infinite] opacity-50"></div>
<div class="w-16 h-16 md:w-20 md:h-20 bg-cyber-purple/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:bg-cyber-purple/40 transition-colors">
<span class="material-symbols-outlined text-5xl md:text-6xl text-white fill-current ml-1 drop-shadow-md">play_arrow</span>
</div>
</button>
<button class="group flex flex-col items-center justify-center gap-1 opacity-60 hover:opacity-100 transition transform active:scale-95">
<span class="material-symbols-outlined text-4xl md:text-5xl text-white drop-shadow-[0_0_8px_rgba(0,240,255,0.8)]">forward_10</span>
<span class="text-[10px] font-display text-cyber-blue tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">+10 SEC</span>
</button>
</div>
<div class="w-full flex flex-col justify-end gap-2 pointer-events-auto pb-4 md:pb-6 relative">
<div class="absolute bottom-0 left-0 w-64 h-[2px] bg-gradient-to-r from-cyber-purple to-transparent opacity-70"></div>
<div class="absolute bottom-0 right-0 w-64 h-[2px] bg-gradient-to-l from-cyber-blue to-transparent opacity-70"></div>
<div class="w-full group relative h-8 flex items-center cursor-pointer mb-2">
<div class="absolute bottom-12 left-[35%] transform -translate-x-1/2 flex flex-col items-center opacity-0 group-hover:opacity-100 transition duration-200 pointer-events-none z-30">
<div class="w-40 h-24 clip-tech bg-black border border-cyber-blue shadow-neon-blue overflow-hidden relative">
<div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjZmZmIiBmaWxsLW9wYWNpdHk9IjAuMDUiLz48L3N2Zz4=')] opacity-30 z-10"></div>
<img alt="Preview" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0YAX2IzJnEB5Bi702qX7Rc5mLAa0XA6dGJHi6nP8wZZdsKFSR6rkoablOYYCaMkm0F0rRV6RrxMrf9pv0btaTBImQmWoyjofrHJ6fblKWgJOZX3zzghlbSULAIcTLk2UwiKOiiOSZS4ORLtU8CBhsg0IkUss-gdPksO2e83yyVtcKSfEiFmXQpfin21pjrzw1ilwddra3rH0zyWLz3v_EVsFTOp5pEQ01lMJj6dmoIuQmtx5Fu0l3fzGLE2VCpkXGplMLQ47M2xVd"/>
<div class="absolute bottom-0 left-0 bg-black/60 px-2 py-0.5 text-[10px] font-display text-cyber-blue w-full text-center border-t border-cyber-blue/30">
                            TARGET: 08:42
                        </div>
</div>
<div class="h-4 w-[1px] bg-cyber-blue shadow-neon-blue"></div>
</div>
<div class="w-full h-[2px] bg-gray-700/50 relative flex items-center group-hover:h-[4px] transition-all duration-300">
<div class="h-full bg-cyber-purple shadow-[0_0_10px_#bc13fe] w-[35%] relative z-10">
<div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-white rounded-full shadow-[0_0_10px_#fff,0_0_20px_#bc13fe] scale-0 group-hover:scale-150 transition-transform"></div>
</div>
<div class="absolute left-0 top-0 h-full w-[55%] bg-cyber-blue/20 z-0"></div>
<div class="absolute top-1/2 -translate-y-1/2 w-full h-[1px] bg-blue-500/0 group-hover:bg-cyber-blue/30 blur-sm transition-all"></div>
</div>
</div>
<div class="flex items-center justify-between px-2">
<div class="flex items-end gap-2 text-sm font-display tracking-wider">
<span class="text-cyber-blue font-bold drop-shadow-[0_0_5px_#00f0ff]">08:42</span>
<span class="text-white/30 text-xs mb-0.5">/</span>
<span class="text-white/60">24:15</span>
</div>
<div class="flex items-center gap-6">
<button class="relative group overflow-hidden px-4 py-2 bg-black/40 border border-cyber-pink/50 rounded-sm clip-tech-sm transition-all hover:bg-cyber-pink/10 hover:border-cyber-pink hover:shadow-neon-pink">
<div class="flex items-center gap-2 relative z-10">
<span class="material-symbols-outlined text-cyber-pink text-lg">skip_next</span>
<span class="text-xs font-bold font-display uppercase tracking-widest text-white">Next Ep</span>
</div>
</button>
<button class="text-white/70 hover:text-cyber-blue transition hover:drop-shadow-[0_0_5px_#00f0ff]">
<span class="material-symbols-outlined">subtitles</span>
</button>
<button class="text-white/70 hover:text-cyber-blue transition hover:drop-shadow-[0_0_5px_#00f0ff]">
<span class="material-symbols-outlined">cast</span>
</button>
<div class="relative w-12 h-12 group cursor-pointer flex items-center justify-center">
<svg class="transform -rotate-90 w-12 h-12 absolute">
<circle class="text-white/10" cx="24" cy="24" fill="transparent" r="18" stroke="currentColor" stroke-width="2"></circle>
<circle class="text-cyber-blue drop-shadow-[0_0_3px_#00f0ff]" cx="24" cy="24" fill="transparent" r="18" stroke="currentColor" stroke-dasharray="113" stroke-dashoffset="25" stroke-width="2"></circle>
</svg>
<div class="flex flex-col items-center">
<span class="text-[10px] font-display font-bold text-cyber-blue">5s</span>
</div>
<div class="absolute bottom-full right-0 mb-3 w-max px-3 py-1 bg-black/90 border border-cyber-blue/30 text-cyber-blue text-[10px] font-display uppercase tracking-wider opacity-0 group-hover:opacity-100 transition pointer-events-none clip-tech-sm">
                            Auto-Seq: Engaged
                        </div>
</div>
</div>
</div>
</div>
</div>

</body></html>