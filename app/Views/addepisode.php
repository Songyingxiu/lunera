<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lunera Admin Add Episode Updated</title>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        'input-glow': '0 0 5px rgba(0, 240, 255, 0.2), inset 0 0 5px rgba(0, 240, 255, 0.1)',
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
            clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px);
        }
        .clip-path-corner {
             clip-path: polygon(
                0 0,
                100% 0,
                100% 100%,
                20px 100%,
                0 calc(100% - 20px)
            );
        }
        .text-glow-purple {
            text-shadow: 0 0 10px rgba(176, 38, 255, 0.7);
        }
        .text-glow-cyan {
            text-shadow: 0 0 12px rgba(0, 240, 255, 0.8);
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
<body class="bg-background-dark font-display text-white overflow-x-hidden pb-32 min-h-screen relative">
<div class="fixed inset-0 bg-gradient-to-br from-[#0a0a1a] via-[#050508] to-[#120024] -z-20"></div>
<div class="fixed inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay -z-10"></div>
<div class="fixed inset-0 bg-cyber-grid bg-[size:40px_40px] opacity-10 -z-10"></div>
<div class="fixed top-0 left-0 right-0 h-96 bg-gradient-to-b from-primary/10 to-transparent -z-10 blur-3xl"></div>
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-background-dark/90 backdrop-blur-md border-b border-white/5 shadow-[0_5px_20px_rgba(0,0,0,0.5)]">
<div class="flex items-center justify-between px-4 py-4 pt-6">
<button class="flex items-center justify-center w-10 h-10 text-white rounded-full bg-surface-dark border border-white/10 hover:border-secondary/50 shadow-lg hover:shadow-neon-cyan transition-all duration-300">
<span class="material-symbols-outlined">arrow_back</span>
</button>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary text-glow-cyan" style="font-size: 24px; transform: scaleX(-1);">brightness_2</span>
<h1 class="text-lg font-black tracking-tight text-white uppercase italic text-glow-purple">LUNERA</h1>
</div>
<div class="w-10"></div>
</div>
</header>
<main class="relative z-10 pt-24 px-5 space-y-8">
<section class="flex flex-col space-y-2 border-l-2 border-secondary pl-4 relative">
<div class="absolute -left-[3px] top-0 w-[4px] h-8 bg-secondary shadow-[0_0_10px_#00f0ff]"></div>
<h2 class="font-cyber text-2xl font-bold tracking-wider text-white drop-shadow-[0_0_5px_rgba(255,255,255,0.3)] uppercase">ADD NEW EPISODE</h2>
<p class="text-text-secondary text-xs uppercase tracking-[0.1em] font-medium">Content Management Protocol v2.5</p>
</section>
<form class="space-y-6" onsubmit="event.preventDefault();">
<div class="space-y-5">
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">CONTENT_ID</label>
<input class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 focus:shadow-input-glow transition-all font-display text-sm rounded-t-sm" placeholder="e.g., ANIME-102" type="text"/>
<div class="absolute bottom-0 left-0 h-[1px] w-0 bg-secondary shadow-[0_0_10px_#00f0ff] group-focus-within:w-full transition-all duration-500"></div>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">EPISODE_NO</label>
<input class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 focus:shadow-input-glow transition-all font-display text-sm rounded-t-sm" placeholder="01" type="number"/>
<div class="absolute bottom-0 left-0 h-[1px] w-0 bg-secondary shadow-[0_0_10px_#00f0ff] group-focus-within:w-full transition-all duration-500"></div>
</div>
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">DURATION</label>
<input class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 focus:shadow-input-glow transition-all font-display text-sm rounded-t-sm" placeholder="24:00" type="text"/>
<div class="absolute bottom-0 left-0 h-[1px] w-0 bg-secondary shadow-[0_0_10px_#00f0ff] group-focus-within:w-full transition-all duration-500"></div>
</div>
</div>
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">TITLE</label>
<input class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 focus:shadow-input-glow transition-all font-display text-sm rounded-t-sm" placeholder="Episode title..." type="text"/>
<div class="absolute bottom-0 left-0 h-[1px] w-0 bg-secondary shadow-[0_0_10px_#00f0ff] group-focus-within:w-full transition-all duration-500"></div>
</div>
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">EPISODE_THUMB (IMAGE LINK)</label>
<input class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 focus:shadow-input-glow transition-all font-display text-sm rounded-t-sm" placeholder="https://cdn.lunera.com/thumb/..." type="url"/>
<div class="absolute bottom-0 left-0 h-[1px] w-0 bg-secondary shadow-[0_0_10px_#00f0ff] group-focus-within:w-full transition-all duration-500"></div>
</div>
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">VIDEO_URL</label>
<input class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 focus:shadow-input-glow transition-all font-display text-sm rounded-t-sm" placeholder="https://storage.lunera.com/stream/..." type="url"/>
<div class="absolute bottom-0 left-0 h-[1px] w-0 bg-secondary shadow-[0_0_10px_#00f0ff] group-focus-within:w-full transition-all duration-500"></div>
</div>
<div class="relative group opacity-80">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">CREATED_AT</label>
<input class="w-full bg-surface-dark/50 border-b border-white/10 text-gray-400 px-4 py-3 focus:outline-none font-display text-sm rounded-t-sm cursor-not-allowed" readonly="" type="text" value="2024-05-20 14:30:00"/>
<div class="absolute bottom-0 left-0 h-[1px] w-full bg-white/5"></div>
</div>
</div>
<div class="bg-surface-dark/40 border border-white/5 p-4 rounded-sm flex items-center justify-between">
<div>
<h4 class="text-white font-cyber text-sm">PUBLISH STATUS</h4>
<p class="text-[10px] text-gray-500">Make episode visible immediately</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox" value=""/>
<div class="w-11 h-6 bg-gray-800 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-tertiary peer-checked:shadow-neon-magenta-sm"></div>
</label>
</div>
</form>
</main>
<div class="fixed bottom-0 left-0 right-0 p-5 bg-[#050508]/95 backdrop-blur-xl border-t border-white/10 z-50">
<div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>
<div class="flex gap-4">
<button class="flex-1 py-3.5 bg-surface-dark border border-secondary/50 text-secondary hover:bg-secondary/10 hover:shadow-neon-cyan transition-all font-cyber text-sm tracking-wider clip-path-corner uppercase">
                Cancel
            </button>
<button class="flex-[2] py-3.5 bg-tertiary hover:bg-[#ff1aa3] text-white shadow-neon-magenta hover:shadow-[0_0_20px_rgba(255,0,153,0.6)] transition-all font-cyber text-sm font-bold tracking-wider clip-path-corner uppercase flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-lg">save</span>
                Save Changes
            </button>
</div>
</div>

</body></html>