<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lunera Settings</title>
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
                        "danger": "#ff003c", 
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
                        'neon-red': '0 0 15px rgba(255, 0, 60, 0.6), 0 0 30px rgba(255, 0, 60, 0.4)',
                    },
                    backgroundImage: {
                        'cyber-grid': "linear-gradient(to right, #1a1a2e 1px, transparent 1px), linear-gradient(to bottom, #1a1a2e 1px, transparent 1px)",
                    }
                },
            },
        }
    </script>
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .clip-path-slant-right { clip-path: polygon(0 0, 100% 0, 100% 70%, 95% 100%, 0 100%); }
        .clip-path-cut-corner { clip-path: polygon(0 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 0 100%); }
        body { min-height: max(884px, 100dvh); }
        
        /* Animasi Modal Muncul */
        .modal-enter { animation: modalFadeIn 0.3s ease-out forwards; }
        @keyframes modalFadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body class="bg-background-dark font-display text-white overflow-x-hidden min-h-screen relative flex flex-col md:items-center">
    <div class="fixed inset-0 bg-gradient-to-br from-[#0a0a1a] via-[#050508] to-[#120024] -z-20"></div>
    <div class="fixed inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay -z-10"></div>
    <div class="fixed inset-0 bg-cyber-grid bg-[size:40px_40px] opacity-10 -z-10"></div>
    <div class="fixed top-0 left-0 right-0 h-96 bg-gradient-to-b from-primary/10 to-transparent -z-10 blur-3xl"></div>
    
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-background-dark/80 backdrop-blur-md border-b border-white/5 shadow-[0_5px_20px_rgba(0,0,0,0.5)]">
        <div class="flex items-center justify-between px-4 py-4 pt-6 max-w-2xl mx-auto w-full">
            <a href="<?= base_url('profile') ?>" class="z-20 text-text-secondary hover:text-white transition-colors p-2 hover:bg-white/5 rounded-full">
                <span class="material-symbols-outlined">arrow_back</span>
            </a>
            <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none pt-2">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-secondary filled" 
                        style="font-variation-settings: 'FILL' 1, 'wght' 600, 'GRAD' 0, 'opsz' 48; font-size: 24px; text-shadow: 0 0 12px rgba(0, 240, 255, 0.8);">
                        bedtime
                    </span>
                    <h1 class="text-xl font-black italic tracking-tight text-white font-cyber" 
                        style="text-shadow: 0 0 10px rgba(176, 38, 255, 0.7);">
                        LUNERA
                    </h1>
                </div>
            </div>
            <div class="w-10"></div>
        </div>
    </header>

    <main class="relative z-10 w-full max-w-2xl mx-auto pt-28 pb-16 px-5 space-y-10">
        
        <section class="space-y-4">
            <div class="flex items-center gap-4">
                <h2 class="text-sm md:text-base font-bold text-secondary font-cyber tracking-widest uppercase text-shadow-[0_0_8px_#00f0ff]">Account</h2>
                <div class="h-[1px] flex-grow bg-gradient-to-r from-secondary to-transparent shadow-[0_0_8px_#00f0ff]"></div>
            </div>
            <div class="space-y-4">
                <a href="<?= base_url('profile/edit') ?>" class="block w-full group bg-surface-purple/40 backdrop-blur-sm border border-white/5 hover:border-secondary/50 rounded-sm p-5 relative overflow-hidden transition-all duration-300 clip-path-cut-corner text-left cursor-pointer">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-[0_0_10px_#00f0ff]"></div>
                    <div class="flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-text-secondary group-hover:text-white transition-colors text-2xl md:text-3xl">badge</span>
                            <div>
                                <p class="text-sm md:text-base font-bold text-white font-cyber tracking-wide">Edit Profile</p>
                                <p class="text-xs text-text-secondary mt-1">Update personal data and avatar</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-text-secondary group-hover:text-secondary transition-colors">chevron_right</span>
                    </div>
                </a>
                
                <button class="w-full group bg-surface-purple/40 backdrop-blur-sm border border-white/5 hover:border-secondary/50 rounded-sm p-5 relative overflow-hidden transition-all duration-300 clip-path-cut-corner text-left">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-[0_0_10px_#00f0ff]"></div>
                    <div class="flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-text-secondary group-hover:text-white transition-colors text-2xl md:text-3xl">mail</span>
                            <div>
                                <p class="text-sm md:text-base font-bold text-white font-cyber tracking-wide">Update Email</p>
                                <p class="text-xs text-text-secondary mt-1">Manage connected account</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-text-secondary group-hover:text-secondary transition-colors">edit</span>
                    </div>
                </button>
            </div>
        </section>

        <section class="space-y-4">
            <div class="flex items-center gap-4">
                <h2 class="text-sm md:text-base font-bold text-secondary font-cyber tracking-widest uppercase text-shadow-[0_0_8px_#00f0ff]">Preferences</h2>
                <div class="h-[1px] flex-grow bg-gradient-to-r from-secondary to-transparent shadow-[0_0_8px_#00f0ff]"></div>
            </div>
            <div class="space-y-4">
                <div class="w-full bg-surface-purple/40 backdrop-blur-sm border border-white/5 rounded-sm p-5 relative overflow-hidden clip-path-cut-corner flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-text-secondary text-2xl md:text-3xl">notifications</span>
                        <div>
                            <p class="text-sm md:text-base font-bold text-white font-cyber tracking-wide">Notifications</p>
                            <p class="text-xs text-text-secondary mt-1">Push alerts for new episodes</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox" value=""/>
                        <div class="w-12 h-6 md:h-7 bg-gray-800/80 peer-focus:outline-none rounded-sm border border-gray-600 peer-checked:bg-secondary/20 peer-checked:border-secondary peer-checked:shadow-[0_0_10px_rgba(0,240,255,0.4)] transition-all"></div>
                        <div class="absolute top-[2px] left-[2px] bg-gray-400 peer-checked:bg-secondary peer-checked:translate-x-full peer-checked:shadow-[0_0_8px_#00f0ff] h-5 w-5 md:h-6 md:w-5 transition-all rounded-sm"></div>
                    </label>
                </div>
                
                <button class="w-full group bg-surface-purple/40 backdrop-blur-sm border border-white/5 hover:border-secondary/50 rounded-sm p-5 relative overflow-hidden transition-all duration-300 clip-path-cut-corner text-left">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-[0_0_10px_#00f0ff]"></div>
                    <div class="flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-text-secondary group-hover:text-white transition-colors text-2xl md:text-3xl">closed_caption</span>
                            <div>
                                <p class="text-sm md:text-base font-bold text-white font-cyber tracking-wide">Subtitles & Audio</p>
                                <p class="text-xs text-text-secondary mt-1">Default: English / Japanese</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-text-secondary group-hover:text-secondary transition-colors">chevron_right</span>
                    </div>
                </button>
            </div>
        </section>

        <section class="space-y-4 pt-6 mt-6 border-t border-white/5">
            <a href="<?= base_url('logout') ?>" class="block w-full text-center py-4 md:py-5 relative group overflow-hidden bg-tertiary/10 border border-tertiary/50 hover:bg-tertiary/20 hover:shadow-neon-magenta transition-all duration-300 clip-path-slant-right cursor-pointer">
                <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
                <span class="relative z-10 font-cyber font-bold tracking-[0.2em] md:tracking-[0.3em] text-tertiary text-sm md:text-base flex items-center justify-center gap-3 group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined">logout</span>
                    LOGOUT
                </span>
                <div class="absolute bottom-0 right-0 w-6 h-6 bg-tertiary blur-md"></div>
            </a>
            
            <form id="deleteAccountForm" action="<?= base_url('profile/delete') ?>" method="post" class="hidden">
            </form>

            <button onclick="openDeleteModal()" type="button" class="w-full py-4 md:py-5 relative group overflow-hidden bg-danger/10 border border-danger/50 hover:bg-danger/20 hover:shadow-neon-red transition-all duration-300 clip-path-slant-right mt-4">
                <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
                <span class="relative z-10 font-cyber font-bold tracking-[0.2em] md:tracking-[0.3em] text-danger text-sm md:text-base flex items-center justify-center gap-3 group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined">delete_forever</span>
                    DELETE ACCOUNT
                </span>
                <div class="absolute bottom-0 right-0 w-6 h-6 bg-danger blur-md"></div>
            </button>
            
            <div class="text-center pt-6">
                <p class="text-xs text-gray-600 font-cyber uppercase tracking-widest">Lunera System v2.4.1</p>
            </div>
        </section>
    </main>

    <div id="deleteModal" class="fixed inset-0 z-[100] flex items-center justify-center hidden bg-black/80 backdrop-blur-sm transition-opacity duration-300">
        <div class="bg-[#0b0510] border-2 border-danger/80 p-6 md:p-8 max-w-sm w-full shadow-neon-red clip-path-cut-corner modal-enter relative overflow-hidden mx-4">
            <div class="absolute top-0 right-0 w-24 h-24 bg-danger/20 blur-2xl"></div>
            
            <div class="flex flex-col items-center text-center space-y-5 relative z-10">
                <span class="material-symbols-outlined text-danger text-6xl drop-shadow-[0_0_15px_rgba(255,0,60,0.8)]">warning</span>
                
                <div>
                    <h3 class="font-cyber font-bold text-white text-xl tracking-wider mb-2">SYSTEM WARNING</h3>
                    <p class="text-sm text-text-secondary font-display leading-relaxed">
                        Are you sure you want to permanently delete this operative data? All watch history and favorites will be purged.
                    </p>
                </div>
                
                <div class="flex w-full gap-4 pt-4">
                    <button onclick="closeDeleteModal()" class="flex-1 py-3 bg-surface-dark border border-white/20 text-white text-sm font-cyber tracking-widest hover:bg-white/5 transition-colors uppercase">
                        Cancel
                    </button>
                    <button onclick="confirmDelete()" class="flex-1 py-3 bg-danger/80 border border-danger text-white text-sm font-cyber tracking-widest shadow-neon-red hover:bg-danger transition-colors font-bold uppercase">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('deleteAccountForm');

        function openDeleteModal() {
            modal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            modal.classList.add('hidden');
        }

        function confirmDelete() {
            deleteForm.submit();
        }
    </script>
</body>
</html>