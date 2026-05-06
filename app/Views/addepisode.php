<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lunera Add Episode</title>
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
                        "accent-dark": "#1a1a2e",
                        "danger": "#ff003c"
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
                        'neon-error': '0 0 5px rgba(255, 0, 60, 0.5), inset 0 0 5px rgba(255, 0, 60, 0.1)'
                    },
                    backgroundImage: {
                        'cyber-grid': "linear-gradient(to right, #1a1a2e 1px, transparent 1px), linear-gradient(to bottom, #1a1a2e 1px, transparent 1px)",
                    }
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        .clip-path-slant { clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px); }
        .clip-path-corner { clip-path: polygon(0 0, 100% 0, 100% 100%, 20px 100%, 0 calc(100% - 20px)); }
        .text-glow-purple { text-shadow: 0 0 10px rgba(176, 38, 255, 0.7); }
        .text-glow-cyan { text-shadow: 0 0 12px rgba(0, 240, 255, 0.8); }
        body { min-height: max(884px, 100dvh); }
        
        .shake-error { animation: shake 0.4s cubic-bezier(.36,.07,.19,.97) both; }
        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
        }
    </style>
</head>
<body class="bg-background-dark font-display text-white overflow-x-hidden min-h-screen relative flex flex-col md:items-center">

<div class="fixed inset-0 bg-gradient-to-br from-[#0a0a1a] via-[#050508] to-[#120024] -z-20"></div>
<div class="fixed inset-0 bg-cyber-grid bg-[size:40px_40px] opacity-10 -z-10"></div>
<div class="fixed top-0 left-0 right-0 h-96 bg-gradient-to-b from-primary/10 to-transparent -z-10 blur-3xl"></div>

<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-background-dark/90 backdrop-blur-md border-b border-white/5 shadow-[0_5px_20px_rgba(0,0,0,0.5)]">
    <div class="flex items-center justify-between px-4 py-4 pt-6 max-w-4xl mx-auto w-full">
        <a href="<?= base_url('admin') ?>" class="flex items-center justify-center w-10 h-10 text-white rounded-full bg-surface-dark border border-white/10 hover:border-secondary/50 shadow-lg transition-all">
            <span class="material-symbols-outlined">arrow_back</span>
        </a>
        <div class="flex items-center gap-2">
        <span class="material-symbols-outlined text-secondary filled" style="font-variation-settings: 'FILL' 1, 'wght' 600, 'GRAD' 0, 'opsz' 48; font-size: 24px; text-shadow: 0 0 12px rgba(0, 240, 255, 0.8);">bedtime</span>
        <h1 class="text-lg font-black tracking-tight text-white uppercase italic text-glow-purple">LUNERA</h1>
        </div>
        <div class="w-10"></div>
    </div>
</header>

<main class="relative z-10 w-full max-w-4xl mx-auto mt-24 mb-32 px-5 md:px-10">
    
    <div class="md:bg-[#050508]/80 md:backdrop-blur-md md:border md:border-white/10 md:p-8 md:shadow-[0_0_30px_rgba(0,0,0,0.8)] relative">
        
        <div class="hidden md:block absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-secondary/50"></div>
        <div class="hidden md:block absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-tertiary/50"></div>

        <section class="flex flex-col space-y-2 border-l-2 border-secondary pl-4 relative mb-8">
            <div class="absolute -left-[3px] top-0 w-[4px] h-8 bg-secondary shadow-[0_0_10px_#00f0ff]"></div>
            <h2 class="font-cyber text-2xl font-bold tracking-wider text-white uppercase">ADD NEW EPISODE</h2>
            <p class="text-text-secondary text-xs uppercase tracking-[0.1em] font-medium">Content Management Protocol v2.5</p>
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

        <div id="validationAlert" class="hidden mb-6 bg-danger/10 border border-danger/50 text-danger px-4 py-3 rounded-sm text-[10px] font-cyber tracking-widest uppercase shadow-neon-error flex items-center gap-2">
            <span class="material-symbols-outlined text-sm">warning</span>
            <span>SYSTEM HALTED: Missing required parameters.</span>
        </div>

        <form action="<?= base_url('admin/save-episode') ?>" method="post" class="space-y-6 md:space-y-8" id="episodeForm" novalidate>
            <div class="space-y-5 md:space-y-7">
                
               <div class="relative group input-group">
                    <label class="flex justify-between block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">
                        <span>CATEGORY</span>
                        <span class="error-msg text-danger hidden text-[9px]">*Req</span>
                    </label>
                    <select name="id_category" class="req-input" required>
                        <option value="" disabled <?= !old('id_category') ? 'selected' : '' ?>>-- Select Category --</option>
                        
                        <?php if(isset($categories)): ?>
                            <?php foreach($categories as $category): ?>
                                <option value="<?= $category['id_category'] ?>" <?= old('id_category') == $category['id_category'] ? 'selected' : '' ?>>
                                    <?= esc($category['title']) ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        
                    </select>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8">
                    <div class="relative group input-group">
                        <label class="flex justify-between block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">
                            <span>EPISODE_NO</span>
                            <span class="error-msg text-danger hidden text-[9px]">*Req</span>
                        </label>
                        <input name="episode_no" value="<?= old('episode_no') ?>" class="req-input w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 transition-all font-display text-sm md:text-base rounded-t-sm" placeholder="01" type="number" required/>
                    </div>
                    
                    <div class="relative group input-group">
                        <label class="flex justify-between block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">
                            <span>DURATION (Min)</span>
                            <span class="error-msg text-danger hidden text-[9px]">*Req</span>
                        </label>
                        <input name="duration" value="<?= old('duration') ?>" class="req-input w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 transition-all font-display text-sm md:text-base rounded-t-sm" placeholder="24" type="number" required/>
                    </div>
                </div>

                <div class="relative group input-group">
                    <label class="flex justify-between block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">
                        <span>TITLE</span>
                        <span class="error-msg text-danger hidden text-[9px]">*Required</span>
                    </label>
                    <input name="title" value="<?= old('title') ?>" class="req-input w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 transition-all font-display text-sm md:text-base rounded-t-sm" placeholder="Episode title..." type="text" required/>
                </div>

                <div class="relative group input-group">
                    <label class="flex justify-between block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">
                        <span>EPISODE_THUMB (URL)</span>
                        <span class="error-msg text-danger hidden text-[9px]">*Required</span>
                    </label>
                    <input name="episode_thumb" value="<?= old('episode_thumb') ?>" class="req-input w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 transition-all font-display text-sm md:text-base rounded-t-sm" placeholder="https://..." type="url" required/>
                </div>

                <div class="relative group input-group">
                    <label class="flex justify-between block text-secondary text-xs font-cyber tracking-widest mb-1.5 ml-1">
                        <span>VIDEO_URL</span>
                        <span class="error-msg text-danger hidden text-[9px]">*Required</span>
                    </label>
                    <input name="video_url" value="<?= old('video_url') ?>" class="req-input w-full bg-surface-dark border-b border-white/20 text-white placeholder-gray-600 px-4 py-3 focus:outline-none focus:border-secondary focus:bg-surface-purple/30 transition-all font-display text-sm md:text-base rounded-t-sm" placeholder="https://..." type="url" required/>
                </div>
            </div>

            <div class="bg-surface-dark/40 border border-white/5 p-4 rounded-sm flex items-center justify-between mt-8">
                <div>
                    <h4 class="text-white font-cyber text-sm">PUBLISH STATUS</h4>
                    <p class="text-[10px] md:text-xs text-gray-500 mt-1">Deploy immediately to production server</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input checked name="status" class="sr-only peer" type="checkbox" value="1"/>
                    <div class="w-11 h-6 bg-gray-800 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-tertiary"></div>
                </label>
            </div>

        </form>
    </div> </main>

<div class="fixed bottom-0 left-0 right-0 p-5 bg-[#050508]/95 backdrop-blur-xl border-t border-white/10 z-50">
    <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/50 to-transparent"></div>
    
    <div class="max-w-4xl mx-auto flex gap-4 w-full">
        <a href="<?= base_url('admin') ?>" class="flex-1 py-3.5 md:py-4 bg-surface-dark border border-secondary/50 text-secondary hover:bg-secondary/10 transition-all font-cyber text-sm md:text-base text-center tracking-wider clip-path-corner uppercase flex items-center justify-center">
            Cancel
        </a>
        <button type="submit" form="episodeForm" class="flex-[2] py-3.5 md:py-4 bg-tertiary hover:bg-[#ff1aa3] text-white shadow-neon-magenta hover:shadow-[0_0_20px_rgba(255,0,153,0.6)] transition-all font-cyber text-sm md:text-base font-bold tracking-wider clip-path-corner uppercase flex items-center justify-center gap-2">
            <span class="material-symbols-outlined text-lg md:text-xl">save</span>
            Save Changes
        </button>
    </div>
</div>

<script>
    document.getElementById('episodeForm').addEventListener('submit', function(event) {
        let isValid = true;
        const inputs = document.querySelectorAll('.req-input');
        const alertBox = document.getElementById('validationAlert');
        
        alertBox.classList.add('hidden');

        inputs.forEach(input => {
            const group = input.closest('.input-group');
            const errorMsg = group.querySelector('.error-msg');

            // Reset desain
            input.classList.remove('border-danger', 'bg-danger/10');
            input.classList.add('border-white/20');
            if(errorMsg) errorMsg.classList.add('hidden');

            if (input.value.trim() === '') {
                isValid = false;
                
                // Set warna error
                input.classList.remove('border-white/20');
                input.classList.add('border-danger', 'bg-danger/10');
                if(errorMsg) errorMsg.classList.remove('hidden');
            }
        });

        if (!isValid) {
            event.preventDefault();
            alertBox.classList.remove('hidden', 'shake-error');
            void alertBox.offsetWidth; 
            alertBox.classList.add('shake-error');
        }
    });

    // Reset warna merah saat mulai diketik
    document.querySelectorAll('.req-input').forEach(input => {
        input.addEventListener('input', function() {
            const group = input.closest('.input-group');
            const errorMsg = group.querySelector('.error-msg');

            input.classList.remove('border-danger', 'bg-danger/10');
            input.classList.add('border-white/20');
            if(errorMsg) errorMsg.classList.add('hidden');
            
            document.getElementById('validationAlert').classList.add('hidden');
        });
    });
</script>

</body>
</html>