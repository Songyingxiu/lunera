<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <title>Watch <?= esc($anime['title'] ?? 'Anime') ?> - EP <?= esc($episode['episode_no'] ?? '') ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
                    }
                },
            },
        }
    </script>
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Mengunci body agar tidak scroll dan fix 100% layar */
        body, html {
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #000;
        }

        input[type=range] { -webkit-appearance: none; background: transparent; }
        input[type=range]::-webkit-slider-thumb { -webkit-appearance: none; }
        input[type=range]:focus { outline: none; }
        
        .scan-line {
            background: repeating-linear-gradient(0deg, rgba(0,0,0,0.1), rgba(0,0,0,0.1) 1px, transparent 1px, transparent 2px);
        }
        .clip-tech { clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px); }
        .clip-tech-sm { clip-path: polygon(6px 0, 100% 0, 100% calc(100% - 6px), calc(100% - 6px) 100%, 0 100%, 0 6px); }
        
        .hud-container { cursor: crosshair; }
        .clickable-area { cursor: pointer; }
    </style>
</head>

<body class="bg-black font-body text-white w-screen h-screen overflow-hidden">
    
    <div class="fixed inset-0 w-screen h-screen bg-black z-0 flex items-center justify-center">
        <video id="animePlayer" class="w-full h-full object-contain" autoplay playsinline>
            <source src="<?= esc($episode['video_url']) ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    
    <div class="fixed inset-0 pointer-events-none z-10 scan-line opacity-10"></div>
    <div class="fixed top-0 left-0 w-full h-32 bg-gradient-to-b from-black/90 to-transparent pointer-events-none z-10"></div>
    <div class="fixed bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/90 to-transparent pointer-events-none z-10"></div>

    <div class="hud-container fixed inset-0 z-20 flex flex-col justify-between w-screen h-screen p-4 md:px-12 md:py-6 lg:px-16 pointer-events-none">
        
        <div class="w-full flex justify-between items-start pointer-events-auto relative">
            <div class="absolute top-0 left-0 w-24 md:w-48 h-[1px] bg-cyber-blue shadow-neon-blue opacity-50"></div>
            <div class="absolute top-0 right-0 w-24 md:w-48 h-[1px] bg-cyber-blue shadow-neon-blue opacity-50"></div>
            <div class="absolute top-0 left-24 md:left-48 w-3 md:w-4 h-3 md:h-4 border-l border-t border-cyber-blue opacity-50"></div>
            <div class="absolute top-0 right-24 md:right-48 w-3 md:w-4 h-3 md:h-4 border-r border-t border-cyber-blue opacity-50"></div>
            
            <div class="flex items-start gap-3 md:gap-4 mt-3">
                <a href="<?= base_url('detail/' . (isset($anime['slug']) ? esc($anime['slug']) : '')) ?>" class="clickable-area group w-8 h-8 md:w-10 md:h-10 clip-tech-sm bg-hud-dark border border-cyber-blue/30 hover:border-cyber-blue hover:shadow-neon-blue flex items-center justify-center transition-all duration-300">
                    <span class="material-symbols-outlined text-cyber-blue group-hover:text-white text-base md:text-lg">arrow_back_ios_new</span>
                </a>
                <div class="flex flex-col relative pl-2 md:pl-3 border-l-2 border-cyber-purple">
                    <h1 class="text-lg md:text-xl font-display font-bold text-white tracking-widest uppercase drop-shadow-[0_0_8px_rgba(255,255,255,0.8)]">
                        <?= esc($anime['title'] ?? 'UNKNOWN CONTENT') ?>
                        <span class="text-[10px] md:text-xs align-top text-cyber-blue opacity-80 ml-1">v.3.0</span>
                    </h1>
                    <div class="flex items-center gap-2 md:gap-3 mt-1">
                        <span class="px-1.5 py-0.5 bg-cyber-purple/20 border border-cyber-purple/50 text-[9px] md:text-[10px] text-cyber-pink font-bold rounded-sm tracking-widest uppercase">
                            EP <?= esc($episode['episode_no']) ?>
                        </span>
                        <span class="text-xs md:text-sm text-gray-300 font-medium font-body tracking-wider uppercase">
                            "<?= esc($episode['title']) ?>"
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center gap-3 md:gap-4 mt-3">
                <div class="clickable-area relative flex items-center bg-black/40 backdrop-blur-sm border border-cyber-blue/30 rounded-sm p-1 clip-tech-sm hidden sm:flex">
                    <div class="absolute inset-0 bg-cyber-blue/5 z-0"></div>
                    <button class="relative z-10 px-3 md:px-4 py-1 text-[10px] md:text-xs font-display font-bold bg-cyber-blue/20 text-cyber-blue border border-cyber-blue/50 shadow-neon-blue rounded-sm transition-all">SUB</button>
                    <button class="relative z-10 px-3 md:px-4 py-1 text-[10px] md:text-xs font-display font-bold text-gray-500 hover:text-white transition-colors">DUB</button>
                    <div class="absolute top-0 left-0 w-full h-[1px] bg-cyber-blue/20 animate-pulse"></div>
                </div>
                <button class="clickable-area group w-8 h-8 md:w-10 md:h-10 clip-tech-sm bg-hud-dark border border-cyber-blue/30 hover:border-cyber-blue hover:shadow-neon-blue flex items-center justify-center transition-all duration-300">
                    <span class="material-symbols-outlined text-cyber-blue group-hover:rotate-90 transition-transform duration-500 text-base md:text-lg">settings</span>
                </button>
            </div>
        </div>

        <div class="absolute inset-0 flex items-center justify-center pointer-events-none gap-8 md:gap-14 z-30">
            <div class="absolute pointer-events-none w-[220px] h-[220px] md:w-[320px] md:h-[320px] border border-white/5 rounded-full flex items-center justify-center opacity-20">
                <div class="w-[200px] h-[200px] md:w-[300px] md:h-[300px] border border-white/5 rounded-full border-dashed"></div>
                <div class="absolute w-full h-[1px] bg-cyber-blue/10"></div>
                <div class="absolute h-full w-[1px] bg-cyber-blue/10"></div>
            </div>
            
            <button onclick="skipVideo(-10)" class="clickable-area pointer-events-auto group flex flex-col items-center justify-center gap-1.5 opacity-60 hover:opacity-100 transition transform active:scale-95">
                <span class="material-symbols-outlined text-3xl md:text-4xl lg:text-5xl text-white drop-shadow-[0_0_10px_rgba(0,240,255,0.8)]">replay_10</span>
                <span class="text-[9px] md:text-[10px] font-display text-cyber-blue tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">-10 SEC</span>
            </button>
            
            <button id="mainPlayBtn" onclick="togglePlayPause()" class="clickable-area pointer-events-auto relative w-16 h-16 md:w-20 md:h-20 group flex items-center justify-center transition transform active:scale-95">
                <div class="absolute inset-0 rounded-full border-2 border-cyber-pink shadow-neon-pink opacity-80 group-hover:opacity-100 group-hover:shadow-[0_0_20px_#ff00ff] transition-all"></div>
                <div class="absolute inset-2 md:inset-3 rounded-full border border-dashed border-cyber-blue animate-[spin_10s_linear_infinite] opacity-50"></div>
                <div class="w-12 h-12 md:w-16 md:h-16 bg-cyber-purple/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:bg-cyber-purple/40 transition-colors">
                    <span id="playIcon" class="material-symbols-outlined text-4xl md:text-5xl text-white fill-current drop-shadow-md">pause</span>
                </div>
            </button>
            
            <button onclick="skipVideo(10)" class="clickable-area pointer-events-auto group flex flex-col items-center justify-center gap-1.5 opacity-60 hover:opacity-100 transition transform active:scale-95">
                <span class="material-symbols-outlined text-3xl md:text-4xl lg:text-5xl text-white drop-shadow-[0_0_10px_rgba(0,240,255,0.8)]">forward_10</span>
                <span class="text-[9px] md:text-[10px] font-display text-cyber-blue tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">+10 SEC</span>
            </button>
        </div>

        <div class="w-full flex flex-col justify-end gap-2 md:gap-3 pointer-events-auto relative z-30">
            <div class="absolute bottom-0 left-0 w-48 md:w-80 h-[2px] bg-gradient-to-r from-cyber-purple to-transparent opacity-70"></div>
            <div class="absolute bottom-0 right-0 w-48 md:w-80 h-[2px] bg-gradient-to-l from-cyber-blue to-transparent opacity-70"></div>
            
            <div class="clickable-area w-full group relative h-8 flex items-center cursor-pointer mb-1 md:mb-2">
                <div class="w-full h-[2px] md:h-[3px] bg-gray-700/50 relative flex items-center group-hover:h-[4px] md:group-hover:h-[5px] transition-all duration-300 rounded-full">
                    <div id="progressBar" class="h-full bg-cyber-purple shadow-[0_0_15px_#bc13fe] w-[0%] relative z-10 rounded-l-full pointer-events-none">
                        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-2 md:w-3 md:h-3 bg-white rounded-full shadow-[0_0_10px_#fff,0_0_20px_#bc13fe] scale-0 group-hover:scale-100 transition-transform"></div>
                    </div>
                    <div class="absolute left-0 top-0 h-full w-full bg-transparent z-0 cursor-pointer" onclick="seekVideo(event)"></div>
                </div>
            </div>
            
            <div class="flex items-center justify-between px-2">
                <div class="flex items-end gap-2 text-xs md:text-sm font-display tracking-wider">
                    <span id="currentTimeDisplay" class="text-cyber-blue font-bold drop-shadow-[0_0_8px_#00f0ff]">00:00</span>
                    <span class="text-white/30 text-[10px] md:text-xs mb-0.5">/</span>
                    <span id="durationDisplay" class="text-white/60">
                        <?= esc($episode['duration']) ?>:00
                    </span>
                </div>
                
                <div class="flex items-center gap-4 md:gap-6">
                    <button class="clickable-area relative group overflow-hidden px-3 md:px-4 py-1.5 md:py-2 bg-black/60 backdrop-blur-sm border border-cyber-pink/50 rounded-sm clip-tech-sm transition-all hover:bg-cyber-pink/20 hover:border-cyber-pink hover:shadow-neon-pink">
                        <div class="flex items-center gap-1.5 md:gap-2 relative z-10">
                            <span class="material-symbols-outlined text-cyber-pink text-base md:text-lg">skip_next</span>
                            <span class="text-[10px] md:text-xs font-bold font-display uppercase tracking-widest text-white">Next Ep</span>
                        </div>
                    </button>
                    
                    <button class="clickable-area text-white/70 hover:text-cyber-blue hover:scale-110 transition-all hover:drop-shadow-[0_0_8px_#00f0ff] hidden sm:block">
                        <span class="material-symbols-outlined text-xl md:text-2xl">subtitles</span>
                    </button>
                    
                    <button class="clickable-area text-white/70 hover:text-cyber-blue hover:scale-110 transition-all hover:drop-shadow-[0_0_8px_#00f0ff] hidden sm:block">
                        <span class="material-symbols-outlined text-xl md:text-2xl">cast</span>
                    </button>
                    
                    <button class="clickable-area text-white/70 hover:text-cyber-blue hover:scale-110 transition-all hover:drop-shadow-[0_0_8px_#00f0ff] ml-1">
                        <span class="material-symbols-outlined text-2xl" onclick="toggleFullScreen()">fullscreen</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const video = document.getElementById('animePlayer');
        const playIcon = document.getElementById('playIcon');
        const progressBar = document.getElementById('progressBar');
        const currentTimeDisplay = document.getElementById('currentTimeDisplay');
        const durationDisplay = document.getElementById('durationDisplay');

        // Pastikan format durasi terupdate begitu metadata video terload
        video.addEventListener('loadedmetadata', () => {
            durationDisplay.innerText = formatTime(video.duration);
        });

        function togglePlayPause() {
            if (video.paused) {
                video.play();
                playIcon.innerText = 'pause';
            } else {
                video.pause();
                playIcon.innerText = 'play_arrow';
            }
        }

        function skipVideo(seconds) {
            video.currentTime += seconds;
        }

        function formatTime(timeInSeconds) {
            if (isNaN(timeInSeconds)) return "00:00";
            const minutes = Math.floor(timeInSeconds / 60);
            const seconds = Math.floor(timeInSeconds % 60);
            return `${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        }

        video.addEventListener('timeupdate', () => {
            const current = video.currentTime;
            const duration = video.duration;
            
            if (!isNaN(duration) && duration > 0) {
                const progressPercent = (current / duration) * 100;
                progressBar.style.width = `${progressPercent}%`;
                currentTimeDisplay.innerText = formatTime(current);
            }
        });

        video.addEventListener('pause', () => { playIcon.innerText = 'play_arrow'; });
        video.addEventListener('play', () => { playIcon.innerText = 'pause'; });

        function seekVideo(e) {
            const rect = e.target.getBoundingClientRect();
            const clickX = e.clientX - rect.left;
            const percent = clickX / rect.width;
            video.currentTime = percent * video.duration;
        }

        function toggleFullScreen() {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen().catch(err => {
                    console.log(`Error attempting to enable fullscreen: ${err.message}`);
                });
            } else {
                document.exitFullscreen();
            }
        }
    </script>
</body>
</html>