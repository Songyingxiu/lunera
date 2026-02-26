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
        // 1. Cari data episode berdasarkan ID
        $episode = $this->episodeModel->find($episode_id);
        
        if (!$episode) {
            return redirect()->to('/');
        }

        // 2. Cari data Anime induknya berdasarkan id_content dari episode
        $anime = $this->contentModel->find($episode['id_content']);

        $data = [
            'episode' => $episode,
            'anime'   => $anime // Kirim data anime ke view
        ];
        
        return view('watch', $data);
    }

    
    public function myList()
    {
        $userId = session()->get('id_user');
        
        // Get profile ID linked to user
        $userProfile = $this->userModel->join('profiles', 'profiles.id_user = users.id_user')
                                    ->where('users.id_user', $userId)
                                    ->first();

        if (!$userProfile) return redirect()->to('/login');

        $idProfile = $userProfile['id_profile'];
        $db = \Config\Database::connect();

        // The Query: Join favorites with contents to get titles and images
        $favorites = $db->table('favorites')
                        ->select('contents.*, favorites.added_at')
                        ->join('contents', 'contents.id_content = favorites.id_content')
                        ->where('favorites.id_profile', $idProfile)
                        ->orderBy('favorites.added_at', 'DESC')
                        ->get()
                        ->getResultArray();

        return view('mylist', ['favorites' => $favorites]);
    }
    

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

    // RESTORED: Toggle Favorite Logic
    public function toggleFavorite($id_content)
    {
        $userId = session()->get('id_user');
        if (!$userId) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Login required']);
        }

        $db = \Config\Database::connect();
        // Get profile ID (Fixes the Null error from your screenshot)
        $userProfile = $this->userModel->join('profiles', 'profiles.id_user = users.id_user')
                                    ->where('users.id_user', $userId)
                                    ->first();

        if (!$userProfile) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Profile not found']);
        }

        $idProfile = $userProfile['id_profile'];
        $favoritesTable = $db->table('favorites');
        $existing = $favoritesTable->where(['id_profile' => $idProfile, 'id_content' => $id_content])->get()->getRow();

        if ($existing) {
            $favoritesTable->where('id_favorite', $existing->id_favorite)->delete();
            $added = false;
            $msg = 'PURGED: Content removed from collection.';
        } else {
            $favoritesTable->insert(['id_profile' => $idProfile, 'id_content' => $id_content, 'added_at' => date('Y-m-d H:i:s')]);
            $added = true;
            $msg = 'SYNCED: Content added to MyList.';
        }

        return $this->response->setJSON(['status' => 'success', 'message' => $msg, 'added' => $added]);
    }
}