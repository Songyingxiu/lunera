<?php

namespace App\Controllers;

use App\Models\ContentModel;
use App\Models\EpisodeModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    protected $contentModel;
    protected $episodeModel;
    protected $userModel;

    public function __construct()
    {
        $this->contentModel = new ContentModel();
        $this->episodeModel = new EpisodeModel();
        $this->userModel    = new UserModel();
    }

    public function index()
    {
        $data = [
            'total_users'   => $this->userModel->countAll(),
            'total_content' => $this->contentModel->countAll(),
            'total_views'   => 12500 
        ];
        return view('adminhome', $data);
    }

    // ==========================================
    // MANAGE EPISODES
    // ==========================================
    public function addEpisode()
    {
        // 1. Fetch categories
        $categoryModel = new \App\Models\CategoryModel();
        
        // 2. Put them in the $data array
        $data = [
            'categories' => $categoryModel->findAll()
        ];

        // 3. Pass $data to the view! (This is the most common part to miss)
        return view('addcontent', $data); 
    }

    public function saveEpisode()
    {
        // Security Validation Protocols
        $rules = [
            'content_id'    => 'required|is_natural_no_zero',
            'episode_no'    => 'required|is_natural_no_zero',
            'title'         => 'required|min_length[3]',
            'duration'      => 'required|is_natural_no_zero',
            'video_url'     => 'required|valid_url',
            'episode_thumb' => 'permit_empty|valid_url'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'id_content'    => $this->request->getPost('content_id'),
            'episode_no'    => $this->request->getPost('episode_no'),
            'title'         => $this->request->getPost('title'),
            'duration'      => $this->request->getPost('duration'),
            'video_url'     => $this->request->getPost('video_url'),
            'episode_thumb' => $this->request->getPost('episode_thumb'),
            'created_at'    => date('Y-m-d H:i:s')
        ];

        $this->episodeModel->insert($data);

        return redirect()->to('/admin')->with('success', 'SYSTEM_SYNC: Episode data successfully deployed to the network.');
    }

    // ==========================================
    // MANAGE CONTENTS
    // ==========================================
    public function addContent()
    {
        // 1. Fetch categories
        $categoryModel = new \App\Models\CategoryModel();
        
        // 2. Put them in the $data array
        $data = [
            'categories' => $categoryModel->findAll()
        ];

        // 3. Pass $data to the view! (This is the most common part to miss)
        return view('addcontent', $data); 
    }

    public function saveContent()
    {
        // Security Validation Protocols untuk Content
        $rules = [
            'id_category'   => 'required',
            'rating'        => 'required|numeric',
            'title'         => 'required|min_length[2]',
            'slug'          => 'required',
            'description'   => 'required',
            'thumbnail_url' => 'required|valid_url',
            'cover_url'     => 'required|valid_url',
            'video_url'     => 'required|valid_url',
            'release_year'  => 'required|numeric',
            'studio'        => 'required',
            'type'          => 'required',
            'status'        => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'id_category'   => $this->request->getPost('id_category'),
            'rating'        => $this->request->getPost('rating'),
            'title'         => $this->request->getPost('title'),
            'slug'          => strtolower(trim($this->request->getPost('slug'))), // memastikan slug kecil semua
            'description'   => $this->request->getPost('description'),
            'thumbnail_url' => $this->request->getPost('thumbnail_url'),
            'cover_url'     => $this->request->getPost('cover_url'),
            'video_url'     => $this->request->getPost('video_url'),
            'release_year'  => $this->request->getPost('release_year'),
            'studio'        => $this->request->getPost('studio'),
            'type'          => $this->request->getPost('type'),
            'status'        => $this->request->getPost('status'),
            'created_at'    => date('Y-m-d H:i:s')
        ];

        $this->contentModel->insert($data);

        return redirect()->to('/admin')->with('success', 'SYSTEM_SYNC: Content catalog successfully deployed to the network.');
    }

    // ==========================================
    // MANAGE USERS
    // ==========================================
    public function users()
    {
        $db = \Config\Database::connect();
        
        // Mengambil data user beserta avatarnya (JOIN)
        $usersList = $db->table('users')
                        ->select('users.*, profiles.profile_name, profiles.avatar')
                        ->join('profiles', 'profiles.id_user = users.id_user', 'left')
                        ->orderBy('users.created_at', 'DESC')
                        ->get()
                        ->getResultArray();

        $data = [
            'title' => 'Lunera Admin - Manage Users',
            'users' => $usersList
        ];

        return view('user', $data);
    }

    public function addUser()
    {
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');

        // 🔴 CHECK FOR DUPLICATE EMAIL
        if ($this->userModel->where('email', $email)->first()) {
            return redirect()->to('admin/users')->withInput()->with('error', 'SYSTEM HALTED: Email ' . $email . ' is already registered to another operative.');
        }

        // 🔴 CHECK FOR DUPLICATE USERNAME
        if ($this->userModel->where('username', $username)->first()) {
            return redirect()->to('admin/users')->withInput()->with('error', 'SYSTEM HALTED: Identity code @' . $username . ' is already taken.');
        }

        $db = \Config\Database::connect();

        // Menggunakan Database Transaction (Mengamankan insert ke 2 tabel sekaligus)
        $db->transStart();

        // 1. Data untuk tabel Users
        $userData = [
            'username'   => $username,
            'email'      => $email,
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'       => $this->request->getPost('role'),
            'created_at' => date('Y-m-d H:i:s')
        ];
        
        $db->table('users')->insert($userData);
        $newUserId = $db->insertID(); // Ambil ID yang baru saja dibuat

        // 2. Data untuk tabel Profiles
        // Ambil input avatar, jika kosong, gunakan gambar default
        $avatarInput = $this->request->getPost('avatar');
        $avatarUrl = !empty($avatarInput) ? $avatarInput : 'https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n';

        $profileData = [
            'id_user'      => $newUserId,
            // Simpan profile_name dari input form
            'profile_name' => $this->request->getPost('profile_name'),
            // Simpan url gambar dari input form
            'avatar'       => $avatarUrl 
        ];
        
        $db->table('profiles')->insert($profileData);

        // Eksekusi Transaction
        $db->transComplete();

        if ($db->transStatus() === FALSE) {
            // Jika gagal
            return redirect()->to('admin/users')->with('error', 'SYSTEM ERROR: Failed to register user.');
        }

        // Jika sukses
        return redirect()->to('admin/users')->with('success', 'USER CREATED: ' . $userData['username'] . ' successfully added to the network.');
    }

    // ==========================================
    // UPDATE USER (DARI MODAL EDIT)
    // ==========================================
    public function updateUser($id_user)
    {
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');

        // 🔴 CHECK FOR DUPLICATE EMAIL (Ignore current user)
        $existingEmail = $this->userModel->where('email', $email)->first();
        if ($existingEmail && $existingEmail['id_user'] != $id_user) {
            return redirect()->to('admin/users')->withInput()->with('error', 'SYSTEM HALTED: Email ' . $email . ' is already in use by another operative.');
        }

        // 🔴 CHECK FOR DUPLICATE USERNAME (Ignore current user)
        $existingUsername = $this->userModel->where('username', $username)->first();
        if ($existingUsername && $existingUsername['id_user'] != $id_user) {
            return redirect()->to('admin/users')->withInput()->with('error', 'SYSTEM HALTED: Identity code @' . $username . ' is already taken.');
        }

        $db = \Config\Database::connect();
        $db->transStart();

        // 1. Update tabel Users
        $userData = [
            'username' => $username,
            'email'    => $email,
            'role'     => $this->request->getPost('role')
        ];

        // Jika password diisi, berarti admin ingin mengganti password user tsb
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $userData['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
        
        $db->table('users')->where('id_user', $id_user)->update($userData);

        // 2. Update tabel Profiles
        $profileData = [
            'profile_name' => $this->request->getPost('profile_name'),
            'avatar'       => $this->request->getPost('avatar') // Asumsi admin pakai input URL
        ];
        
        $db->table('profiles')->where('id_user', $id_user)->update($profileData);

        $db->transComplete();

        if ($db->transStatus() === FALSE) {
            return redirect()->to('admin/users')->with('error', 'SYSTEM ERROR: Failed to update user data.');
        }

        return redirect()->to('admin/users')->with('success', 'USER UPDATED: ' . $userData['username'] . ' modified.');
    }

    // ==========================================
    // DELETE USER
    // ==========================================
    public function deleteUser($id_user)
    {
        $db = \Config\Database::connect();
        
        // Hapus dari tabel users (Jika di database kamu sudah pakai CASCADE, 
        // data di tabel profiles, favorites, dll akan otomatis terhapus)
        $delete = $db->table('users')->where('id_user', $id_user)->delete();

        if ($delete) {
            return redirect()->to('admin/users')->with('success', 'USER PURGED: User data has been permanently deleted.');
        } else {
            return redirect()->to('admin/users')->with('error', 'SYSTEM ERROR: Failed to delete user.');
        }
    }

}