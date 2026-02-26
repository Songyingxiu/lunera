<?= $this->extend('layout/admintemplate') ?>

<?= $this->section('content') ?>

<main class="relative z-10 pt-28 px-5 md:pl-[17rem] md:pr-8 pb-32 space-y-10">
    
    <?php if(session()->getFlashdata('success')): ?>
        <div class="w-full max-w-4xl mx-auto bg-secondary/10 border border-secondary/50 text-secondary px-4 py-3 rounded-sm text-xs font-cyber tracking-wide shadow-neon-cyan flex items-center gap-2">
            <span class="material-symbols-outlined text-sm">check_circle</span>
            <span><?= session()->getFlashdata('success') ?></span>
        </div>
    <?php endif; ?>

    <section class="space-y-5 max-w-6xl mx-auto">
        <h2 class="text-lg md:text-xl font-bold text-white font-cyber tracking-wide flex items-center gap-3">
            <span class="w-1.5 h-6 bg-secondary shadow-[0_0_10px_#00f0ff]"></span>
            ADMIN CONTROLS
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            
            <a href="<?= base_url('admin/add-content') ?>" class="bg-surface-purple/60 backdrop-blur-md border border-secondary rounded-lg p-6 relative overflow-hidden group hover:bg-surface-purple/80 transition-all duration-300 shadow-[0_0_15px_rgba(0,240,255,0.15)] clip-path-corner block cursor-pointer">
                <div class="absolute top-0 right-0 w-32 h-32 bg-secondary/10 blur-3xl -mr-10 -mt-10 group-hover:bg-secondary/20 transition-all"></div>
                <div class="absolute bottom-0 right-0 p-2 opacity-20 text-secondary">
                    <span class="material-symbols-outlined text-[80px]">movie_edit</span>
                </div>
                <div class="flex items-start justify-between relative z-10">
                    <div class="p-3 bg-secondary/10 rounded-md border border-secondary/30 shadow-[0_0_10px_rgba(0,240,255,0.2)]">
                        <span class="material-symbols-outlined text-secondary text-3xl">movie_edit</span>
                    </div>
                    <span class="material-symbols-outlined text-gray-500 group-hover:text-white transition-colors">arrow_forward</span>
                </div>
                <div class="mt-5 relative z-10">
                    <h3 class="text-xl font-cyber font-bold text-white group-hover:text-secondary transition-colors">Manage Content</h3>
                    <p class="text-xs text-text-secondary mt-1.5 tracking-wide">Upload, edit, and remove anime series.</p>
                </div>
            </a>

            <div class="bg-surface-purple/60 backdrop-blur-md border border-secondary rounded-lg p-6 relative overflow-hidden group hover:bg-surface-purple/80 transition-all duration-300 shadow-[0_0_15px_rgba(0,240,255,0.15)] clip-path-corner cursor-pointer">
                <div class="absolute top-0 right-0 w-32 h-32 bg-secondary/10 blur-3xl -mr-10 -mt-10 group-hover:bg-secondary/20 transition-all"></div>
                <div class="absolute bottom-0 right-0 p-2 opacity-20 text-secondary">
                    <span class="material-symbols-outlined text-[80px]">category</span>
                </div>
                <div class="flex items-start justify-between relative z-10">
                    <div class="p-3 bg-secondary/10 rounded-md border border-secondary/30 shadow-[0_0_10px_rgba(0,240,255,0.2)]">
                        <span class="material-symbols-outlined text-secondary text-3xl">category</span>
                    </div>
                    <span class="material-symbols-outlined text-gray-500 group-hover:text-white transition-colors">arrow_forward</span>
                </div>
                <div class="mt-5 relative z-10">
                    <h3 class="text-xl font-cyber font-bold text-white group-hover:text-secondary transition-colors">Edit Categories</h3>
                    <p class="text-xs text-text-secondary mt-1.5 tracking-wide">Organize genres and featured lists.</p>
                </div>
            </div>

            <a href="<?= base_url('admin/add-episode') ?>" class="bg-surface-purple/60 backdrop-blur-md border border-secondary rounded-lg p-6 relative overflow-hidden group hover:bg-surface-purple/80 transition-all duration-300 shadow-[0_0_15px_rgba(0,240,255,0.15)] clip-path-corner block cursor-pointer">
                <div class="absolute top-0 right-0 w-32 h-32 bg-secondary/10 blur-3xl -mr-10 -mt-10 group-hover:bg-secondary/20 transition-all"></div>
                <div class="absolute bottom-0 right-0 p-2 opacity-20 text-secondary">
                    <span class="material-symbols-outlined text-[80px]">layers</span>
                </div>
                <div class="flex items-start justify-between relative z-10">
                    <div class="p-3 bg-secondary/10 rounded-md border border-secondary/30 shadow-[0_0_10px_rgba(0,240,255,0.2)]">
                        <span class="material-symbols-outlined text-secondary text-3xl">layers</span>
                    </div>
                    <span class="material-symbols-outlined text-gray-500 group-hover:text-white transition-colors">arrow_forward</span>
                </div>
                <div class="mt-5 relative z-10">
                    <h3 class="text-xl font-cyber font-bold text-white group-hover:text-secondary transition-colors">Episode Manager</h3>
                    <p class="text-xs text-text-secondary mt-1.5 tracking-wide">Manage episode releases and schedules.</p>
                </div>
            </a>

        </div>
    </section>

    <section class="space-y-5 pb-8 max-w-6xl mx-auto">
        <h2 class="text-lg md:text-xl font-bold text-white font-cyber tracking-wide flex items-center gap-3">
            <span class="w-1.5 h-6 bg-tertiary shadow-[0_0_10px_#ff0099]"></span>
            QUICK STATS HUD
        </h2>
        
        <div class="w-full md:w-1/3">
            <div class="bg-surface-dark/80 backdrop-blur-sm border border-white/10 rounded-lg p-5 relative overflow-hidden w-full group hover:border-white/20 transition-colors cursor-default" style="clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px);">
                <div class="absolute top-0 right-0 w-24 h-24 bg-primary/20 blur-2xl -mr-8 -mt-8 group-hover:bg-primary/30 transition-all"></div>
                <div class="flex flex-col gap-1 mb-3">
                    <span class="text-xs text-text-secondary uppercase tracking-widest font-cyber">Total Users</span>
                    <span class="material-symbols-outlined text-primary text-3xl absolute top-5 right-5 opacity-50">group</span>
                </div>
                <div class="text-4xl font-cyber font-black text-white drop-shadow-[0_0_8px_rgba(176,38,255,0.8)]">
                    <?= isset($total_users) ? $total_users : '0' ?>
                </div>
                <div class="flex items-center gap-1.5 mt-3 pt-3 border-t border-white/5">
                    <span class="material-symbols-outlined text-secondary text-sm">trending_up</span>
                    <span class="text-xs text-secondary font-medium tracking-wide">+12% this week</span>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection() ?>