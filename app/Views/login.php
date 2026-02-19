<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Cyberpunk Lunera Login</title>
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
                        "background-dark": "#050508", 
                        "surface-purple": "#1a0b2e",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"],
                        "cyber": ["Orbitron", "sans-serif"]
                    },
                    boxShadow: {
                        'neon-purple': '0 0 10px rgba(176, 38, 255, 0.5), 0 0 20px rgba(176, 38, 255, 0.3)',
                        'neon-cyan': '0 0 10px rgba(0, 240, 255, 0.5), 0 0 15px rgba(0, 240, 255, 0.3)',
                        'neon-magenta': '0 0 20px rgba(255, 0, 153, 0.7), 0 0 40px rgba(255, 0, 153, 0.4)',
                    }
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .bg-cyber-circuit {
                background-image: radial-gradient(circle at 2px 2px, rgba(0, 240, 255, 0.05) 1px, transparent 0);
                background-size: 24px 24px;
            }
            .clip-path-login {
                clip-path: polygon(0 0, 100% 0, 100% 70%, 95% 100%, 0 100%);
            }
            .clip-path-input {
                clip-path: polygon(0 0, 95% 0, 100% 25%, 100% 100%, 5% 100%, 0 75%);
            }
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>
<body class="bg-background-dark font-display text-white overflow-hidden min-h-screen relative flex flex-col justify-center items-center px-8">
    <div class="fixed inset-0 bg-gradient-to-br from-[#0a0a2e] via-[#050508] to-[#120024] -z-20"></div>
    <div class="fixed inset-0 bg-cyber-circuit opacity-30 -z-10"></div>
    <div class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-primary/10 blur-[120px] rounded-full -z-10"></div>

    <div class="flex flex-col items-center mb-10 space-y-4">
        <div class="relative">
            <div class="absolute inset-0 bg-secondary blur-2xl opacity-20 animate-pulse"></div>
            <span class="material-symbols-outlined text-[100px] text-secondary leading-none select-none drop-shadow-[0_0_15px_#00f0ff] -scale-x-100" style="font-variation-settings: 'FILL' 0, 'wght' 200;">
                brightness_3
            </span>
        </div>
        <h1 class="font-cyber text-5xl font-black tracking-widest text-white italic drop-shadow-[0_0_10px_rgba(255,255,255,0.4)]">
            LUNERA
        </h1>
    </div>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="w-full max-w-sm mb-6 bg-red-500/10 border border-red-500/50 text-red-200 px-4 py-3 rounded-sm text-xs font-cyber tracking-wide shadow-[0_0_10px_rgba(255,0,0,0.3)]">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">warning</span>
                <?= session()->getFlashdata('error') ?>
            </div>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('auth/process') ?>" method="post" class="w-full max-w-sm space-y-6">
        <div class="space-y-4">
            <div class="relative group">
                <label class="block text-[10px] font-cyber text-secondary uppercase tracking-[0.2em] mb-1.5 ml-1">Identity Code</label>
                <div class="bg-surface-purple/60 border border-secondary shadow-neon-cyan clip-path-input transition-all duration-300 focus-within:bg-surface-purple/80">
                    <input name="username" class="w-full bg-transparent border-none text-white font-cyber px-5 py-4 focus:ring-0 placeholder:text-secondary/30 text-sm tracking-widest" placeholder="Username" type="text" required/>
                </div>
            </div>
            <div class="relative group">
                <label class="block text-[10px] font-cyber text-secondary uppercase tracking-[0.2em] mb-1.5 ml-1">Access Key</label>
                <div class="bg-surface-purple/60 border border-secondary shadow-neon-cyan clip-path-input transition-all duration-300 focus-within:bg-surface-purple/80">
                    <input name="password" class="w-full bg-transparent border-none text-white font-cyber px-5 py-4 focus:ring-0 placeholder:text-secondary/30 text-sm tracking-widest" placeholder="••••••••" type="password" required/>
                </div>
            </div>
        </div>
        
        <button type="submit" class="w-full bg-tertiary shadow-neon-magenta py-5 clip-path-login transition-transform active:scale-95 group relative overflow-hidden">
            <span class="absolute inset-0 bg-white/10 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-500"></span>
            <span class="font-cyber font-black text-lg tracking-[0.3em] uppercase text-white">Initialize Login</span>
        </button>
    </form>
    <div class="mt-12 flex flex-col items-center space-y-3">
        <a class="text-secondary/80 font-cyber text-[10px] uppercase tracking-widest hover:text-secondary transition-colors border-b border-secondary/20 pb-0.5" href="#">
            Reset Credentials
        </a>
        <p class="text-white/40 text-[10px] font-cyber uppercase tracking-widest">
            New operative? <a class="text-secondary font-bold hover:glow-cyan" href="#">Create Account</a>
        </p>
    </div>

    <div class="fixed top-10 left-10 w-20 h-20 border-t border-l border-secondary/20 pointer-events-none"></div>
    <div class="fixed bottom-10 right-10 w-20 h-20 border-b border-r border-tertiary/20 pointer-events-none"></div>
    <div class="fixed top-1/2 right-4 h-32 w-1 bg-gradient-to-b from-transparent via-secondary/20 to-transparent pointer-events-none"></div>
    <div class="fixed top-1/2 left-4 h-32 w-1 bg-gradient-to-b from-transparent via-tertiary/20 to-transparent pointer-events-none"></div>
</body>
</html>