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

    <div id="validationAlert" class="hidden bg-danger/10 border border-danger/50 text-danger px-4 py-3 rounded-sm text-[10px] font-cyber tracking-widest uppercase shadow-neon-red flex items-center gap-2 mt-4">
        <span class="material-symbols-outlined text-sm">warning</span>
        <span id="validationAlertText">SYSTEM HALTED: Missing required parameters.</span>
    </div>

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6">
        <?php if(!empty($users)): ?>
            <?php foreach($users as $u): 
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
                        <button onclick='openEditModal(<?= json_encode($u) ?>)' class="p-2 bg-secondary/10 border border-secondary/30 rounded flex items-center justify-center hover:bg-secondary hover:text-black transition-colors cursor-pointer text-secondary">
                            <span class="material-symbols-outlined text-sm md:text-base">edit</span>
                        </button>
                        
                        <form action="<?= base_url('admin/users/delete/' . $u['id_user']) ?>" method="POST" onsubmit="return confirmDelete(event, this);">
                            <button type="submit" class="p-2 bg-danger/10 border border-danger/30 rounded flex items-center justify-center hover:bg-danger hover:text-white transition-colors cursor-pointer text-danger">
                                <span class="material-symbols-outlined text-sm md:text-base">delete</span>
                            </button>
                        </form>
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

        <form action="<?= base_url('admin/users/add') ?>" method="POST" class="space-y-5 modal-form" novalidate>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="input-group">
                    <label class="flex justify-between">USERNAME <span class="error-msg text-danger hidden text-[9px]">*Req</span></label>
                    <input type="text" name="username" required placeholder="SNDER_NEO" class="req-input w-full">
                </div>
                <div class="input-group">
                    <label class="flex justify-between">EMAIL <span class="error-msg text-danger hidden text-[9px]">*Req</span></label>
                    <input type="email" name="email" required placeholder="neo@lunera.net" class="req-input w-full">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="input-group">
                    <label class="flex justify-between">PROFILE NAME <span class="error-msg text-danger hidden text-[9px]">*Req</span></label>
                    <input type="text" name="profile_name" required placeholder="Neo Tokyo" class="req-input w-full">
                </div>
                <div>
                    <label>PROFILE PICTURE (URL)</label>
                    <input type="url" name="avatar" placeholder="https://..." class="w-full">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="input-group">
                    <label class="flex justify-between">PASSWORD <span class="error-msg text-danger hidden text-[9px]">*Req</span></label>
                    <input type="password" name="password" id="add_password" required placeholder="••••••••" class="req-input w-full">
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
                <button type="button" onclick="closeModal('addUserModal')" class="px-6 py-2.5 text-gray-400 hover:text-white border border-white/20 hover:border-white/50 bg-surface-dark transition-all font-cyber text-xs tracking-wider uppercase cursor-pointer">ABORT</button>
                <button type="submit" class="submit-btn px-8 py-2.5 bg-tertiary text-white shadow-neon-magenta hover:bg-[#ff1aa3] transition-all font-cyber text-xs tracking-wider font-bold uppercase clip-path-slant flex items-center gap-2 cursor-pointer">
                    <span class="material-symbols-outlined text-sm">person_add</span> CREATE USER
                </button>
            </div>
        </form>
    </div>
</div>

<div id="editUserModal" class="fixed inset-0 z-[100] hidden flex items-center justify-center bg-black/70 backdrop-blur-sm p-4">
    <div class="bg-surface-dark border border-secondary/40 p-6 md:p-8 rounded-sm w-full max-w-2xl shadow-[0_0_30px_rgba(0,240,255,0.2)] relative clip-path-corner">
        <div class="absolute top-0 left-0 w-16 h-1 bg-secondary shadow-neon-cyan"></div>
        <div class="absolute bottom-0 right-0 w-16 h-1 bg-secondary shadow-neon-cyan"></div>

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl md:text-2xl font-cyber font-bold text-white tracking-widest text-glow-cyan uppercase">Modify User</h2>
            <button type="button" onclick="closeModal('editUserModal')" class="text-gray-500 hover:text-white transition-colors cursor-pointer relative z-10">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
        </div>

        <form id="formEditUser" action="" method="POST" class="space-y-5 modal-form" novalidate>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="input-group">
                    <label class="flex justify-between">USERNAME <span class="error-msg text-danger hidden text-[9px]">*Req</span></label>
                    <input type="text" id="edit_username" name="username" required class="req-input w-full focus:shadow-[inset_0_0_10px_rgba(0,240,255,0.2)]">
                </div>
                <div class="input-group">
                    <label class="flex justify-between">EMAIL <span class="error-msg text-danger hidden text-[9px]">*Req</span></label>
                    <input type="email" id="edit_email" name="email" required class="req-input w-full focus:shadow-[inset_0_0_10px_rgba(0,240,255,0.2)]">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="input-group">
                    <label class="flex justify-between">PROFILE NAME <span class="error-msg text-danger hidden text-[9px]">*Req</span></label>
                    <input type="text" id="edit_profile_name" name="profile_name" required class="req-input w-full focus:shadow-[inset_0_0_10px_rgba(0,240,255,0.2)]">
                </div>
                <div>
                    <label>PROFILE PICTURE (URL)</label>
                    <input type="url" id="edit_avatar" name="avatar" class="w-full focus:shadow-[inset_0_0_10px_rgba(0,240,255,0.2)]">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="input-group">
                    <label class="flex justify-between">NEW PASSWORD <span class="error-msg text-danger hidden text-[9px]">*Min 5 Chars</span></label>
                    <input type="password" id="edit_password" name="password" placeholder="••••••••" class="w-full focus:shadow-[inset_0_0_10px_rgba(0,240,255,0.2)]">
                    <span class="text-gray-600 text-[8px] lowercase block mt-1">(leave blank to keep current)</span>
                </div>
                <div>
                    <label>ROLE ACCESS</label>
                    <select id="edit_role" name="role" required class="w-full focus:shadow-[inset_0_0_10px_rgba(0,240,255,0.2)]">
                        <option value="user">STANDARD USER</option>
                        <option value="admin">ADMINISTRATOR</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-end gap-3 mt-8 border-t border-white/10 pt-5">
                <button type="button" onclick="closeModal('editUserModal')" class="px-6 py-2.5 text-gray-400 hover:text-white border border-white/20 hover:border-white/50 bg-surface-dark transition-all font-cyber text-xs tracking-wider uppercase cursor-pointer">ABORT</button>
                <button type="submit" class="submit-btn px-8 py-2.5 bg-secondary text-black shadow-neon-cyan hover:shadow-[0_0_20px_rgba(0,240,255,0.6)] hover:bg-white transition-all font-cyber text-xs tracking-wider font-bold uppercase clip-path-slant flex items-center gap-2 cursor-pointer">
                    <span class="material-symbols-outlined text-sm">save</span> UPDATE DATA
                </button>
            </div>
        </form>
    </div>
</div>

<div id="deleteConfirmModal" class="fixed inset-0 z-[110] hidden flex items-center justify-center bg-black/80 backdrop-blur-sm p-4">
    <div class="bg-[#120505] border border-danger/50 p-6 md:p-8 rounded-sm w-full max-w-md shadow-[0_0_40px_rgba(255,0,0,0.3)] relative text-center">
        <span class="material-symbols-outlined text-danger text-5xl mb-4 drop-shadow-[0_0_10px_rgba(255,0,0,0.8)]">warning</span>
        <h2 class="text-xl font-cyber font-bold text-white tracking-widest text-glow-red uppercase mb-2">Initialize Purge?</h2>
        <p class="text-sm text-gray-400 mb-8 font-body">This action will permanently delete the user's data from the network. This cannot be undone.</p>
        
        <div class="flex justify-center gap-4">
            <button onclick="cancelDelete()" class="px-6 py-2 text-gray-400 hover:text-white border border-white/20 hover:border-white/50 transition-all font-cyber text-xs uppercase tracking-wider">Cancel</button>
            <button id="confirmDeleteBtn" class="px-6 py-2 bg-danger text-white hover:bg-red-600 shadow-neon-red transition-all font-cyber font-bold text-xs uppercase tracking-wider flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">delete_forever</span> PURGE
            </button>
        </div>
    </div>
</div>

<?= $this->section('extra_js') ?>
<script>
    // --- Buka & Tutup Modal ---
    function openModal(id) { document.getElementById(id).classList.remove('hidden'); }
    function closeModal(id) { document.getElementById(id).classList.add('hidden'); }
    
    // Klik area luar modal untuk menutup
    window.addEventListener('click', function(e) {
        if(e.target.id === 'addUserModal') closeModal('addUserModal');
        if(e.target.id === 'editUserModal') closeModal('editUserModal');
    });

    // --- Modal Konfirmasi Delete Bergaya Cyberpunk ---
    let formToDelete = null;
    function confirmDelete(e, formElement) {
        e.preventDefault(); 
        formToDelete = formElement;
        openModal('deleteConfirmModal');
        return false;
    }
    function cancelDelete() {
        formToDelete = null;
        closeModal('deleteConfirmModal');
    }
    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        if (formToDelete) formToDelete.submit();
    });

    // --- Mengisi Data ke Modal Edit ---
    function openEditModal(data) {
        document.getElementById('edit_username').value = data.username;
        document.getElementById('edit_email').value = data.email;
        document.getElementById('edit_profile_name').value = data.profile_name || data.username;
        document.getElementById('edit_avatar').value = data.avatar || '';
        document.getElementById('edit_password').value = ''; // Reset password field
        document.getElementById('edit_role').value = data.role;
        
        document.getElementById('formEditUser').action = "<?= base_url('admin/users/update/') ?>" + data.id_user;
        openModal('editUserModal');
    }

    // --- Form UI Validation (Add & Edit) with 5 Char Password Minimum ---
    document.querySelectorAll('.modal-form').forEach(form => {
        form.addEventListener('submit', function(event) {
            let isValid = true;
            const inputs = form.querySelectorAll('.req-input');
            const alertBox = document.getElementById('validationAlert');
            const alertText = document.getElementById('validationAlertText');
            
            let errorMessage = 'SYSTEM HALTED: Missing required parameters.';

            inputs.forEach(input => {
                const group = input.closest('.input-group');
                const errorMsg = group.querySelector('.error-msg');

                input.classList.remove('border-danger', 'bg-danger/10');
                if(errorMsg) errorMsg.classList.add('hidden');

                // Check for empty required inputs
                if (input.value.trim() === '' && input.hasAttribute('required')) {
                    isValid = false;
                    input.classList.add('border-danger', 'bg-danger/10');
                    if(errorMsg) {
                        errorMsg.innerText = '*Req';
                        errorMsg.classList.remove('hidden');
                    }
                }
                
                // Specific Check for Passwords (Add User)
                if(input.id === 'add_password' && input.value.trim().length > 0 && input.value.trim().length < 5) {
                    isValid = false;
                    input.classList.add('border-danger', 'bg-danger/10');
                    if(errorMsg) {
                        errorMsg.innerText = '*Min 5 Chars';
                        errorMsg.classList.remove('hidden');
                    }
                    errorMessage = 'SYSTEM HALTED: Password must be at least 5 characters.';
                }
            });

            // Specific Check for Edit Password (it's not required, but IF filled, must be 5 chars)
            const editPassword = form.querySelector('#edit_password');
            if (editPassword && editPassword.value.trim().length > 0 && editPassword.value.trim().length < 5) {
                isValid = false;
                editPassword.classList.add('border-danger', 'bg-danger/10');
                const group = editPassword.closest('.input-group');
                const errorMsg = group.querySelector('.error-msg');
                if(errorMsg) {
                    errorMsg.innerText = '*Min 5 Chars';
                    errorMsg.classList.remove('hidden');
                }
                errorMessage = 'SYSTEM HALTED: Password must be at least 5 characters.';
            }

            if (!isValid) {
                event.preventDefault();
                alertText.innerText = errorMessage;
                alertBox.classList.remove('hidden');
                
                // Efek getar Cyberpunk
                form.classList.remove('shake-error');
                void form.offsetWidth; 
                form.classList.add('shake-error');
                
                // Auto hide alert
                setTimeout(() => alertBox.classList.add('hidden'), 4000);
            }
        });
    });

    // --- Reset Error Saat Mengetik ---
    document.querySelectorAll('.req-input, #edit_password').forEach(input => {
        input.addEventListener('input', function() {
            const group = input.closest('.input-group');
            if(group) {
                const errorMsg = group.querySelector('.error-msg');
                input.classList.remove('border-danger', 'bg-danger/10');
                if(errorMsg) errorMsg.classList.add('hidden');
            }
        });
    });
</script>

<style>
    .shake-error { animation: shake 0.4s cubic-bezier(.36,.07,.19,.97) both; }
    @keyframes shake {
        10%, 90% { transform: translate3d(-1px, 0, 0); }
        20%, 80% { transform: translate3d(2px, 0, 0); }
        30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
        40%, 60% { transform: translate3d(4px, 0, 0); }
    }
</style>
<?= $this->endSection() ?>

<?= $this->endSection() ?>