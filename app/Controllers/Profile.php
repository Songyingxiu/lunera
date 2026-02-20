<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    protected $userModel;
    protected $db;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->db = \Config\Database::connect();
    }

    // 1. Menampilkan Halaman Profil (profile.php)
    public function index()
    {
        $userId = session()->get('id_user');
        
        $data['user'] = $this->userModel->join('profiles', 'profiles.id_user = users.id_user')
                                        ->where('users.id_user', $userId)
                                        ->first();

        // Ambil riwayat tontonan
        $data['history'] = $this->db->table('watch_history')
                                    ->join('contents', 'contents.id_content = watch_history.id_content')
                                    ->where('watch_history.id_profile', $data['user']['id_profile'])
                                    ->orderBy('watched_at', 'DESC')
                                    ->get()->getResultArray();

        return view('profile', $data);
    }

    // 2. Menampilkan Form Edit Profil (editprofile.php)
    public function edit()
    {
        $userId = session()->get('id_user');
        
        $data['user'] = $this->userModel->join('profiles', 'profiles.id_user = users.id_user')
                                        ->where('users.id_user', $userId)
                                        ->first();
                                        
        return view('editprofile', $data);
    }

    // 3. Memproses Update Profil & Upload Foto ke Database
    public function update()
    {
        $userId = session()->get('id_user');

        // A. Ambil data teks dari form
        $profileName = $this->request->getPost('profile_name');
        $username    = $this->request->getPost('username');
        $password    = $this->request->getPost('password');

        // B. Update tabel 'users' (Username & Password)
        $userData = ['username' => $username];
        
        // Update password HANYA jika field password diisi oleh user
        if (!empty($password)) {
            $userData['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
        $this->userModel->update($userId, $userData);

        // Update session username agar sistem tetap mengenali nama yang baru
        session()->set('username', $username);

        // C. Proses Upload Gambar Avatar
        $avatarFile = $this->request->getFile('avatar_file');
        $avatarPath = null;

        // Cek apakah ada file yang diupload dan valid
        if ($avatarFile && $avatarFile->isValid() && !$avatarFile->hasMoved()) {
            // Generate nama file acak (contoh: 17098234.jpg)
            $newName = $avatarFile->getRandomName();
            
            // Pindahkan file ke folder public/uploads/avatars/
            $avatarFile->move(FCPATH . 'uploads/avatars', $newName);
            
            // Simpan link lengkapnya untuk disimpan di database
            $avatarPath = base_url('uploads/avatars/' . $newName);
        }

        // D. Update tabel 'profiles' (Profile Name & Avatar)
        $profileData = ['profile_name' => $profileName];
        
        // Jika upload berhasil, masukkan link foto baru ke dalam array yang akan diupdate
        if ($avatarPath) {
            $profileData['avatar'] = $avatarPath;
        }

        // Eksekusi update tabel profiles
        $this->db->table('profiles')->where('id_user', $userId)->update($profileData);

        // Lempar kembali ke halaman profil dengan pesan sukses
        return redirect()->to('/profile')->with('success', 'Profile & Avatar successfully updated!');
    }


    public function delete()
    {
        $userId = session()->get('id_user');

        if ($userId) {
            // Karena kita menggunakan CASCADE di tabel (Migration), 
            // menghapus user akan otomatis menghapus profile, history, dan favorites-nya.
            $this->userModel->delete($userId);

            // Hancurkan sesi login
            session()->destroy();

            // Kembalikan ke halaman login
            return redirect()->to('/login')->with('success', 'Account deleted successfully.');
        }

        return redirect()->to('/');
    }
}