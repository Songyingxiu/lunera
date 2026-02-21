<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lunera Add Episode</title>
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
                    }
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        .clip-path-slant {
            clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px);
        }
        .clip-path-corner {
             clip-path: polygon(0 0, 100% 0, 100% 100%, 20px 100%, 0 calc(100% - 20px));
        }
        .text-glow-purple { text-shadow: 0 0 10px rgba(176, 38, 255, 0.7); }
        .text-glow-cyan { text-shadow: 0 0 12px rgba(0, 240, 255, 0.8); }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background-dark font-display text-white overflow-x-hidden pb-32 min-h-screen relative">
<div class="fixed inset-0 bg-gradient-to-br from-[#0a0a1a] via-[#050508] to-[#120024] -z-20"></div>
<div class="fixed inset-0 bg-cyber-grid bg-[size:40px_40px] opacity:10 -z-10"></div>
<header class="fixed top-0 left-0 right-0 z-50 bg-background-dark/90 backdrop-blur-md border-b border-white/5 shadow-[0_5px_20px_rgba(0,0,0,0.5)]">
<div class="flex items-center justify-between px-4 py-4 pt-6">
<a href="<?= base_url('admin') ?>" class="flex items-center justify-center w-10 h-10 text-white rounded-full bg-surface-dark border border-white/10 hover:border-secondary/50 shadow-lg transition-all">
<span class="material-symbols-outlined">arrow_back</span>
</a>
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
<h2 class="font-cyber text-2xl font-bold tracking-wider text-white uppercase">ADD NEW EPISODE</h2>
<p class="text-text-secondary text-xs uppercase tracking-[0.1em] font-medium">Protocol v2.5 // Admin_Auth_Verified</p>
</section>

<?php if(session()->getFlashdata('errors')): ?>
    <div class="mb-6 bg-red-500/10 border border-red-500/50 text-red-400 px-4 py-3 rounded-sm text-[10px] font-cyber tracking-widest uppercase shadow-[0_0_15px_rgba(255,0,0,0.2)]">
        <ul class="list-disc list-inside">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?= base_url('admin/save-episode') ?>" method="post" class="space-y-6" id="episodeForm">
<div class="space-y-5">
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">CONTENT_ID</label>
<input name="content_id" value="<?= old('content_id') ?>" class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 transition-all font-display text-sm rounded-t-sm" placeholder="e.g., 3" type="number" required/>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">EPISODE_NO</label>
<input name="episode_no" value="<?= old('episode_no') ?>" class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 transition-all font-display text-sm rounded-t-sm" placeholder="01" type="number" required/>
</div>
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">DURATION</label>
<input name="duration" value="<?= old('duration') ?>" class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 transition-all font-display text-sm rounded-t-sm" placeholder="24" type="number" required/>
</div>
</div>
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">TITLE</label>
<input name="title" value="<?= old('title') ?>" class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 transition-all font-display text-sm rounded-t-sm" placeholder="Episode title..." type="text" required/>
</div>
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">EPISODE_THUMB (URL)</label>
<input name="episode_thumb" value="<?= old('episode_thumb') ?>" class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 transition-all font-display text-sm rounded-t-sm" placeholder="https://..." type="url"/>
</div>
<div class="relative group">
<label class="block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">VIDEO_URL</label>
<input name="video_url" value="<?= old('video_url') ?>" class="w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 transition-all font-display text-sm rounded-t-sm" placeholder="https://..." type="url" required/>
</div>
</div>
<div class="bg-surface-dark/40 border border-white/5 p-4 rounded-sm flex items-center justify-between">
<div>
<h4 class="text-white font-cyber text-sm">PUBLISH STATUS</h4>
<p class="text-[10px] text-gray-500">Deploy immediately to production</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked name="status" class="sr-only peer" type="checkbox" value="1"/>
<div class="w-11 h-6 bg-gray-800 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-tertiary"></div>
</label>
</div>
</form>
</main>

<div class="fixed bottom-0 left-0 right-0 p-5 bg-[#050508]/95 backdrop-blur-xl border-t border-white/10 z-50">
<div class="flex gap-4">
<a href="<?= base_url('admin') ?>" class="flex-1 py-3.5 bg-surface-dark border border-secondary/50 text-secondary hover:bg-secondary/10 transition-all font-cyber text-sm text-center tracking-wider clip-path-corner uppercase">
    Cancel
</a>
<button type="submit" form="episodeForm" class="flex-[2] py-3.5 bg-tertiary hover:bg-[#ff1aa3] text-white shadow-neon-magenta hover:shadow-[0_0_20px_rgba(255,0,153,0.6)] transition-all font-cyber text-sm font-bold tracking-wider clip-path-corner uppercase flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-lg">save</span>
    Save Changes
</button>
</div>
</div>
</body></html>