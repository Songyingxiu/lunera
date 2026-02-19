<?php

namespace App\Controllers;

use App\Models\ContentModel;
use App\Models\CategoryModel;
use App\Models\EpisodeModel;
use App\Models\UserModel; // Tambahkan Model User

class Lunera extends BaseController
{
    protected $contentModel;
    protected $categoryModel;
    protected $episodeModel;
    protected $userModel;

    public function __construct()
    {
        $this->contentModel = new ContentModel();
        $this->categoryModel = new CategoryModel();
        $this->episodeModel = new EpisodeModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'trending' => $this->contentModel->where('type', 'series')->orderBy('rating', 'DESC')->findAll(5),
            'movies'   => $this->contentModel->where('type', 'movie')->orderBy('rating', 'DESC')->findAll(6),
            'seasonal' => $this->contentModel->orderBy('created_at', 'DESC')->findAll(10)
        ];
        return view('home', $data);
    }

    public function explore()
    {
        $data = [
            'categories' => $this->categoryModel->findAll(),
            'all_content' => $this->contentModel->orderBy('created_at', 'DESC')->findAll()
        ];
        return view('explore', $data);
    }

    public function detail($slug = null)
    {
        $anime = $this->contentModel->where('slug', $slug)->first();

        if (!$anime) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Anime not found.");
        }

        // Ambil episode
        $episodes = $this->episodeModel->where('id_content', $anime['id_content'])->orderBy('episode_no', 'ASC')->findAll();

        $data = [
            'anime'    => $anime,
            'episodes' => $episodes,
            'related'  => $this->contentModel->where('id_category', $anime['id_category'])
                                            ->where('id_content !=', $anime['id_content'])
                                            ->findAll(5)
        ];

        return view('detail', $data);
    }

    public function watch($episode_id = null)
    {
        $episode = $this->episodeModel->find($episode_id);
        
        if (!$episode) {
            return redirect()->to('/');
        }

        $data = [
            'episode' => $episode
        ];
        return view('watch', $data);
    }

    // --- FITUR USER (Baru) ---

    public function profile()
    {
        // Ambil ID dari session login
        $userId = session()->get('id_user');
        
        // Ambil data user & profile dari database
        // Kita join tabel users dan profiles
        $data['user'] = $this->userModel->join('profiles', 'profiles.id_user = users.id_user')
                                        ->where('users.id_user', $userId)
                                        ->first();

        // Ambil history tontonan (Join WatchHistory -> Content)
        $db = \Config\Database::connect();
        $data['history'] = $db->table('watch_history')
                              ->join('contents', 'contents.id_content = watch_history.id_content')
                              ->where('watch_history.id_profile', $data['user']['id_profile'])
                              ->orderBy('watched_at', 'DESC')
                              ->get()->getResultArray();

        return view('profile', $data);
    }

    public function editProfile()
    {
        $userId = session()->get('id_user');
        $data['user'] = $this->userModel->join('profiles', 'profiles.id_user = users.id_user')
                                        ->where('users.id_user', $userId)
                                        ->first();
        return view('editprofile', $data);
    }

    public function updateProfile()
    {
        // Logic simpan data edit profile
        // Untuk sementara redirect dulu karena view editprofile kamu belum punya tag <form>
        return redirect()->to('/profile')->with('success', 'Profile updated!');
    }

    public function settings()
    {
        return view('setting');
    }
}