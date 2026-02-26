<?= $this->extend('layout/admintemplate') ?>

<?= $this->section('content') ?>

<main class="relative z-10 pt-28 px-5 md:pl-[17rem] md:pr-8 pb-32 space-y-6 max-w-6xl mx-auto">
    
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div class="flex items-center gap-2">
            <span class="w-1 h-6 bg-tertiary shadow-[0_0_10px_#ff0099]"></span>
            <h2 class="text-2xl md:text-3xl font-cyber font-extrabold tracking-tighter text-white uppercase italic text-glow-magenta">Manage Users</h2>
        </div>
        <button onclick="openModal('addUserModal')" class="w-full md:w-auto bg-tertiary text-white font-cyber font-bold py-3 md:py-4 px-6 md:px-8 rounded-none shadow-neon-magenta flex items-center justify-center gap-3 clip-path-slant active:scale-[0.98] hover:bg-[#ff1aa3] transition-all cursor-pointer">
            <span class="material-symbols-outlined font-bold">person_add</span>
            <span class="tracking-widest uppercase">Add New User</span>
        </button>
    </div>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="bg-secondary/10 border border-secondary/50 text-secondary px-4 py-3 rounded-sm text-xs font-cyber tracking-wide shadow-neon-cyan flex items-center gap-2 mt-4">
            <span class="material-symbols-outlined text-sm">check_circle</span>
            <span><?= session()->getFlashdata('success') ?></span>
        </div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('error')): ?>
        <div class="bg-danger/10 border border-danger/50 text-danger px-4 py-3 rounded-sm text-xs font-cyber tracking-wide shadow-neon-red flex items-center gap-2 mt-4">
            <span class="material-symbols-outlined text-sm">warning</span>
            <span><?= session()->getFlashdata('error') ?></span>
        </div>
    <?php endif; ?>

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6">
        
        <?php if(!empty($users)): ?>
            <?php foreach($users as $u): 
                // Variasi warna dinamis berdasarkan Role (Admin = Magenta, User = Cyan)
                $borderColor = ($u['role'] == 'admin') ? 'border-tertiary' : 'border-secondary';
                $shadowColor = ($u['role'] == 'admin') ? 'shadow-neon-magenta' : 'shadow-neon-cyan';
                $iconColor   = ($u['role'] == 'admin') ? 'text-tertiary' : 'text-secondary';
                $bgHover     = ($u['role'] == 'admin') ? 'hover:bg-tertiary/20' : 'hover:bg-secondary/20';
                $onlineDot   = ($u['role'] == 'admin') ? 'bg-tertiary shadow-[0_0_5px_#ff0099]' : 'bg-green-500 shadow-[0_0_5px_#22c55e]';
            ?>
            <div class="bg-surface-purple/40 border-l-2 <?= $borderColor ?> p-4 relative group clip-path-hud backdrop-blur-sm <?= $bgHover ?> transition-colors">
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <div class="w-14 h-14 rounded-full border-2 <?= $borderColor ?> <?= $shadowColor ?> overflow-hidden">
                            <img alt="Avatar" class="w-full h-full object-cover" src="<?= esc($u['avatar'] ?? 'https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n') ?>" onerror="this.src='https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n'"/>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 <?= $onlineDot ?> rounded-full border-2 border-background-dark"></div>
                    </div>
                    
                    <div class="flex-1 min-w-0">
                        <h4 class="font-cyber font-bold text-white text-sm md:text-base tracking-wide truncate">
                            <?= esc($u['profile_name'] ?? $u['username']) ?>
                        </h4>
                        <p class="text-[10px] md:text-xs text-text-secondary font-mono truncate uppercase tracking-tight">
                            @<?= esc($u['username']) ?> | <?= esc($u['email']) ?>
                        </p>
                    </div>
                    
                    <div class="flex gap-2 relative z-10">
                        <button class="p-2 bg-secondary/10 border border-secondary/30 rounded flex items-center justify-center hover:bg-secondary/30 transition-colors cursor-pointer">
                            <span class="material-symbols-outlined text-secondary text-sm md:text-base">edit</span>
                        </button>
                        <button class="p-2 bg-danger/10 border border-danger/30 rounded flex items-center justify-center hover:bg-danger/30 transition-colors cursor-pointer">
                            <span class="material-symbols-outlined text-danger text-sm md:text-base">delete</span>
                        </button>
                    </div>
                </div>
                
                <div class="absolute top-0 right-10 w-8 h-0.5 <?= ($u['role'] == 'admin') ? 'bg-tertiary/30' : 'bg-secondary/30' ?>"></div>
                <div class="absolute bottom-2 right-4 text-[8px] font-mono text-text-secondary">
                    ROLE: <span class="<?= $iconColor ?> font-bold"><?= strtoupper(esc($u['role'])) ?></span> | ID: LNR-<?= esc($u['id_user']) ?>
                </div>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-span-full text-center py-10 text-gray-500 font-cyber tracking-widest uppercase">
                No users found in the system databank.
            </div>
        <?php endif; ?>

    </section>
</main>

<div id="addUserModal" class="fixed inset-0 z-[100] hidden flex items-center justify-center bg-black/70 backdrop-blur-sm p-4">
    <div class="bg-surface-purple border border-tertiary/40 p-6 md:p-8 rounded-sm w-full max-w-2xl shadow-[0_0_30px_rgba(255,0,153,0.3)] relative clip-path-corner">
        
        <div class="absolute top-0 left-0 w-16 h-1 bg-tertiary shadow-neon-magenta"></div>
        <div class="absolute bottom-0 right-0 w-16 h-1 bg-tertiary shadow-neon-magenta"></div>

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl md:text-2xl font-cyber font-bold text-white tracking-widest text-glow-magenta uppercase">Add New User</h2>
            <button type="button" onclick="closeModal('addUserModal')" class="text-gray-500 hover:text-white transition-colors cursor-pointer relative z-10">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
        </div>

        <form action="<?= base_url('admin/users/add') ?>" method="POST" class="space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label>USERNAME</label>
                    <input type="text" name="username" required placeholder="SNDER_NEO" class="w-full">
                </div>
                <div>
                    <label>EMAIL</label>
                    <input type="email" name="email" required placeholder="neo@lunera.net" class="w-full">
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label>PROFILE NAME</label>
                    <input type="text" name="profile_name" required placeholder="Neo Tokyo" class="w-full">
                </div>
                <div>
                    <label>PROFILE PICTURE (URL)</label>
                    <input type="url" name="avatar" placeholder="https://..." class="w-full">
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label>PASSWORD</label>
                    <input type="password" name="password" required placeholder="••••••••" class="w-full">
                </div>
                <div>
                    <label>ROLE ACCESS</label>
                    <select name="role" required class="w-full">
                        <option value="user">STANDARD USER</option>
                        <option value="admin">ADMINISTRATOR</option>
                    </select>
                </div>
            </div>
            
            <div class="flex justify-end gap-3 mt-8 border-t border-white/10 pt-5">
                <button type="button" onclick="closeModal('addUserModal')" class="px-6 py-2.5 text-gray-400 hover:text-white border border-white/20 hover:border-white/50 bg-surface-dark transition-all font-cyber text-xs tracking-wider uppercase cursor-pointer">
                    ABORT
                </button>
                <button type="submit" class="px-8 py-2.5 bg-tertiary text-white shadow-neon-magenta hover:shadow-[0_0_20px_rgba(255,0,153,0.6)] hover:bg-[#ff1aa3] transition-all font-cyber text-xs tracking-wider font-bold uppercase clip-path-slant flex items-center gap-2 cursor-pointer">
                    <span class="material-symbols-outlined text-sm">person_add</span>
                    CREATE USER
                </button>
            </div>
        </form>
    </div>
</div>

<?= $this->section('extra_js') ?>
<script>
    function openModal(id) { 
        document.getElementById(id).classList.remove('hidden'); 
    }
    function closeModal(id) { 
        document.getElementById(id).classList.add('hidden'); 
    }
    
    // Close modal if clicked outside the form box
    document.getElementById('addUserModal').addEventListener('click', function(e) {
        if(e.target === this) {
            closeModal('addUserModal');
        }
    });
</script>
<?= $this->endSection() ?>

<?= $this->endSection() ?>