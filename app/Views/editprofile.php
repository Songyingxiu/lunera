<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lunera Edit Profile</title>
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
                        "background-dark": "#050508",
                        "surface-purple": "#1a0b2e",
                        "text-secondary": "#9ca3af",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"],
                        "cyber": ["Orbitron", "sans-serif"]
                    },
                    boxShadow: {
                        'neon-cyan': '0 0 10px rgba(0, 240, 255, 0.5), 0 0 20px rgba(0, 240, 255, 0.3)',
                        'neon-magenta': '0 0 15px rgba(255, 0, 153, 0.6), 0 0 30px rgba(255, 0, 153, 0.4)',
                    },
                    backgroundImage: {
                        'cyber-grid': "linear-gradient(to right, #1a1a2e 1px, transparent 1px), linear-gradient(to bottom, #1a1a2e 1px, transparent 1px)",
                    }
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        .clip-path-slant-right {
            clip-path: polygon(0 0, 100% 0, 100% 70%, 95% 100%, 0 100%);
        }
        .clip-path-cut-corner {
            clip-path: polygon(0 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 0 100%);
        }
        .glow-border {
            box-shadow: 0 0 5px rgba(0, 240, 255, 0.3), inset 0 0 5px rgba(0, 240, 255, 0.1);
        }
        .hud-pattern {
            background-image: radial-gradient(circle at 2px 2px, rgba(0, 240, 255, 0.05) 1px, transparent 0);
            background-size: 24px 24px;
        }
        .logo-text {
            text-shadow: 0 0 8px rgba(176, 38, 255, 0.6), 0 0 12px rgba(176, 38, 255, 0.3);
        }
        .moon-glow {
            text-shadow: 0 0 10px rgba(0, 240, 255, 0.8), 0 0 20px rgba(0, 240, 255, 0.4);
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
    <div class="fixed inset-0 hud-pattern opacity-30 -z-10"></div>
    <div class="fixed top-0 left-0 right-0 h-96 bg-gradient-to-b from-primary/10 to-transparent -z-10 blur-3xl"></div>

    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-background-dark/90 backdrop-blur-md border-b border-white/5">
        <div class="flex items-center justify-between px-4 py-4 pt-6">
            <div class="flex items-center gap-3">
                <a href="<?= base_url('profile') ?>" class="text-text-secondary hover:text-white transition-colors">
                    <span class="material-symbols-outlined">arrow_back</span>
                </a>
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-secondary moon-glow" style="font-size: 24px;">bedtime</span>
                    <h1 class="text-xl font-black italic tracking-tighter text-white font-cyber logo-text">LUNERA</h1>
                </div>
            </div>
            <div class="w-6"></div>
        </div>
    </header>

    <main class="relative z-10 pt-24 px-5 space-y-8">
        
        <form action="<?= base_url('profile/update') ?>" method="post" enctype="multipart/form-data">
        
        <section class="flex flex-col items-center gap-4">
            <div class="relative">
                <div class="w-32 h-32 rounded-full border-2 border-tertiary shadow-neon-magenta p-1 bg-surface-purple overflow-hidden">
                    <img id="avatar_preview" alt="User avatar" class="w-full h-full object-cover rounded-full" src="<?= isset($user['avatar']) ? $user['avatar'] : 'https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n' ?>"/>
                </div>
                <label for="avatar_upload" class="absolute bottom-0 right-0 bg-secondary text-background-dark p-2 rounded-full shadow-neon-cyan flex items-center justify-center border-2 border-background-dark hover:scale-110 transition-transform cursor-pointer">
                    <span class="material-symbols-outlined text-lg">photo_camera</span>
                </label>
                <input type="file" id="avatar_upload" name="avatar_file" accept="image/*" class="hidden">
            </div>
            
            <div class="text-center">
                 <p class="text-[10px] text-secondary font-cyber tracking-widest uppercase mt-2">Upload New Avatar</p>
                 <p id="file_name_display" class="text-xs text-text-secondary mt-1 hidden"></p>
            </div>
        </section>

        <section class="space-y-6 mt-6">
            <div class="space-y-2">
                <label class="text-[10px] font-cyber text-secondary uppercase tracking-[0.2em] ml-1">Display Name</label>
                <div class="bg-surface-purple/80 border border-secondary/50 rounded-sm p-4 relative glow-border clip-path-cut-corner">
                    <input name="profile_name" class="bg-transparent border-none p-0 w-full focus:ring-0 text-white font-cyber tracking-wide text-sm" type="text" value="<?= esc($user['profile_name']) ?>" required/>
                    <div class="absolute bottom-0 right-0 w-8 h-8 flex items-center justify-center opacity-20">
                        <span class="material-symbols-outlined text-xs">terminal</span>
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-[10px] font-cyber text-secondary uppercase tracking-[0.2em] ml-1">Username</label>
                <div class="bg-surface-purple/80 border border-secondary/50 rounded-sm p-4 relative glow-border clip-path-cut-corner">
                    <div class="flex items-center gap-1">
                        <span class="text-secondary/60 text-sm font-cyber">@</span>
                        <input name="username" class="bg-transparent border-none p-0 w-full focus:ring-0 text-white font-cyber tracking-wide text-sm" type="text" value="<?= esc($user['username']) ?>" required/>
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-[10px] font-cyber text-secondary uppercase tracking-[0.2em] ml-1">New Password</label>
                <div class="bg-surface-purple/80 border border-secondary/50 rounded-sm p-4 relative glow-border clip-path-cut-corner">
                    <div class="flex items-center gap-1">
                        <input name="password" class="bg-transparent border-none p-0 w-full focus:ring-0 text-white font-cyber tracking-wide text-sm" type="password" placeholder="Leave blank to keep current"/>
                    </div>
                    <div class="absolute bottom-0 right-0 w-10 h-10 flex items-center justify-center opacity-40 cursor-pointer hover:text-secondary">
                        <span class="material-symbols-outlined text-sm">lock</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-6">
            <button type="submit" class="w-full py-5 relative group overflow-hidden bg-tertiary border border-tertiary/50 hover:shadow-neon-magenta transition-all duration-300 clip-path-slant-right">
                <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
                <span class="relative z-10 font-cyber font-black tracking-[0.3em] text-white text-base flex items-center justify-center gap-3">
                    <span class="material-symbols-outlined">save</span>
                    SAVE CHANGES
                </span>
                <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-white/20 blur-xl"></div>
            </button>
        </section>
        
        </form>
    </main>

    <script>
        document.getElementById('avatar_upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                // Tampilkan preview gambar
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('avatar_preview').src = e.target.result;
                }
                reader.readAsDataURL(file);
                
                // Tampilkan nama file
                const fileNameDisplay = document.getElementById('file_name_display');
                fileNameDisplay.textContent = file.name;
                fileNameDisplay.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>