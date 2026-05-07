<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lunera Login</title>
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
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"],
                        "cyber": ["Orbitron", "sans-serif"]
                    },
                    boxShadow: {
                        'neon-purple': '0 0 10px rgba(176, 38, 255, 0.5), 0 0 20px rgba(176, 38, 255, 0.3)',
                        'neon-cyan': '0 0 10px rgba(0, 240, 255, 0.5), 0 0 15px rgba(0, 240, 255, 0.3)',
                        'neon-magenta': '0 0 20px rgba(255, 0, 153, 0.7), 0 0 40px rgba(255, 0, 153, 0.4)',
                        'neon-error': '0 0 10px rgba(255, 0, 60, 0.5), 0 0 15px rgba(255, 0, 60, 0.3)',
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
            /* Animasi untuk error box */
            .shake-error {
                animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
            }
            @keyframes shake {
                10%, 90% { transform: translate3d(-1px, 0, 0); }
                20%, 80% { transform: translate3d(2px, 0, 0); }
                30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
                40%, 60% { transform: translate3d(4px, 0, 0); }
            }
        }
    </style>
    <style>
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-background-dark font-display text-white overflow-hidden min-h-screen relative flex flex-col justify-center items-center px-8">
    <div class="fixed inset-0 bg-gradient-to-br from-[#0a0a2e] via-[#050508] to-[#120024] -z-20"></div>
    <div class="fixed inset-0 bg-cyber-circuit opacity-30 -z-10"></div>
    <div class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-primary/10 blur-[120px] rounded-full -z-10"></div>

    <div class="flex flex-col items-center mb-10">
    <div class="relative mb-2">
        <div class="absolute inset-0 bg-secondary blur-3xl opacity-20 animate-pulse"></div>
        <span class="material-symbols-outlined text-secondary filled relative z-10" 
              style="font-variation-settings: 'FILL' 1, 'wght' 600, 'GRAD' 0, 'opsz' 48; font-size: 80px; text-shadow: 0 0 20px rgba(0, 240, 255, 0.8);">
            bedtime
        </span>
    </div>
    
    <h1 class="font-cyber text-5xl font-black tracking-[0.2em] text-white italic drop-shadow-[0_0_15px_rgba(176,38,255,0.7)]">
        LUNERA
    </h1>
    
    <div class="w-24 h-1 bg-gradient-to-r from-transparent via-secondary to-transparent mt-2 opacity-50"></div>
    </div>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="w-full max-w-sm mb-6 bg-danger/10 border border-danger/50 text-danger px-4 py-3 rounded-sm text-xs font-cyber tracking-wide shadow-neon-error flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">warning</span>
                <span>SYSTEM ERROR: <?= session()->getFlashdata('error') ?></span>
            </div>
        </div>
    <?php endif; ?>

    <div id="validationError" class="hidden w-full max-w-sm mb-6 bg-danger/10 border border-danger/50 text-danger px-4 py-3 rounded-sm text-xs font-cyber tracking-wide shadow-neon-error flex items-center justify-between shake-error">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-sm">error</span>
            <span id="errorText">ACCESS DENIED: Required fields missing.</span>
        </div>
    </div>

    <form id="loginForm" action="<?= base_url('auth/process') ?>" method="post" class="w-full max-w-sm space-y-6" novalidate>
        <div class="space-y-4">
            
            <div class="relative group">
                <label class="block text-[10px] font-cyber text-secondary uppercase tracking-[0.2em] mb-1.5 ml-1 flex justify-between">
                    <span>Identity Code</span>
                    <span id="usernameAlert" class="text-danger hidden">*Required</span>
                </label>
                <div id="usernameBox" class="bg-surface-purple/60 border border-secondary shadow-neon-cyan clip-path-input transition-all duration-300 focus-within:bg-surface-purple/80">
                    <input id="usernameInput" name="username" class="w-full bg-transparent border-none text-white font-cyber px-5 py-4 focus:ring-0 placeholder:text-secondary/30 text-sm tracking-widest" placeholder="Username" type="text" required/>
                </div>
            </div>

            <div class="relative group">
                <label class="block text-[10px] font-cyber text-secondary uppercase tracking-[0.2em] mb-1.5 ml-1 flex justify-between">
                    <span>Access Key</span>
                    <span id="passwordAlert" class="text-danger hidden">*Required</span>
                </label>
                <div id="passwordBox" class="bg-surface-purple/60 border border-secondary shadow-neon-cyan clip-path-input transition-all duration-300 focus-within:bg-surface-purple/80">
                    <input id="passwordInput" name="password" class="w-full bg-transparent border-none text-white font-cyber px-5 py-4 focus:ring-0 placeholder:text-secondary/30 text-sm tracking-widest" placeholder="••••••••" type="password" required/>
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
            New operative? <a class="text-secondary font-bold hover:text-white transition-colors" href="#">Create Account</a>
        </p>
    </div>

    <div class="fixed top-10 left-10 w-20 h-20 border-t border-l border-secondary/20 pointer-events-none"></div>
    <div class="fixed bottom-10 right-10 w-20 h-20 border-b border-r border-tertiary/20 pointer-events-none"></div>
    <div class="fixed top-1/2 right-4 h-32 w-1 bg-gradient-to-b from-transparent via-secondary/20 to-transparent pointer-events-none"></div>
    <div class="fixed top-1/2 left-4 h-32 w-1 bg-gradient-to-b from-transparent via-tertiary/20 to-transparent pointer-events-none"></div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            let isValid = true;
            
            const usernameInput = document.getElementById('usernameInput');
            const passwordInput = document.getElementById('passwordInput');
            const usernameBox   = document.getElementById('usernameBox');
            const passwordBox   = document.getElementById('passwordBox');
            const errorBox      = document.getElementById('validationError');
            const passwordAlert = document.getElementById('passwordAlert');
            
            // Reset state
            usernameBox.classList.remove('border-danger', 'shadow-neon-error');
            passwordBox.classList.remove('border-danger', 'shadow-neon-error');
            document.getElementById('usernameAlert').classList.add('hidden');
            passwordAlert.classList.add('hidden');
            errorBox.classList.add('hidden');
            
            // Re-trigger animation by cloning and replacing the error box
            const newErrorBox = errorBox.cloneNode(true);
            errorBox.parentNode.replaceChild(newErrorBox, errorBox);
            
            // 1. Validate Username Empty
            if (usernameInput.value.trim() === '') {
                usernameBox.classList.add('border-danger', 'shadow-neon-error');
                document.getElementById('usernameAlert').classList.remove('hidden');
                document.getElementById('usernameAlert').innerText = '*Required';
                isValid = false;
            }
            
            // 2. Validate Password Empty OR Minimum Length
            const passwordValue = passwordInput.value.trim();
            
            if (passwordValue === '') {
                passwordBox.classList.add('border-danger', 'shadow-neon-error');
                passwordAlert.classList.remove('hidden');
                passwordAlert.innerText = '*Required';
                newErrorBox.querySelector('#errorText').innerText = 'ACCESS DENIED: Required fields missing.';
                isValid = false;
            } 
            else if (passwordValue.length < 5) {
                passwordBox.classList.add('border-danger', 'shadow-neon-error');
                passwordAlert.classList.remove('hidden');
                passwordAlert.innerText = '*Min 5 chars';
                newErrorBox.querySelector('#errorText').innerText = 'ACCESS DENIED: Password must be at least 5 characters.';
                isValid = false;
            }

            // Jika ada yang kosong/invalid, cegah form dikirim
            if (!isValid) {
                event.preventDefault(); // Stop form dari submit
                newErrorBox.classList.remove('hidden'); // Munculkan kotak error merah
            }
        });

        // Menghilangkan error saat user mulai mengetik
        document.getElementById('usernameInput').addEventListener('input', function() {
            document.getElementById('usernameBox').classList.remove('border-danger', 'shadow-neon-error');
            document.getElementById('usernameAlert').classList.add('hidden');
            document.getElementById('validationError').classList.add('hidden');
        });

        document.getElementById('passwordInput').addEventListener('input', function() {
            document.getElementById('passwordBox').classList.remove('border-danger', 'shadow-neon-error');
            document.getElementById('passwordAlert').classList.add('hidden');
            document.getElementById('validationError').classList.add('hidden');
        });
    </script>
</body>
</html>