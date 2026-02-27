<?php

namespace App\Controllers;

use App\Models\ContentModel;
use App\Models\CategoryModel;
use App\Models\EpisodeModel;
use App\Models\UserModel;

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
        $userId = session()->get('id_user');
        $db = \Config\Database::connect();
        
        $continue_watching = [];

        if ($userId) {
            $userProfile = $this->userModel->join('profiles', 'profiles.id_user = users.id_user')
                                        ->where('users.id_user', $userId)
                                        ->first();
            
            if ($userProfile) {
                $continue_watching = $db->table('watch_history')
                                ->join('contents', 'contents.id_content = watch_history.id_content')
                                ->where('watch_history.id_profile', $userProfile['id_profile'])
                                ->orderBy('watched_at', 'DESC')
                                ->limit(5)
                                ->get()->getResultArray();
            }
        }

        $data = [
            'trending' => $this->contentModel->where('type', 'series')->orderBy('rating', 'DESC')->findAll(5),
            'movies'   => $this->contentModel->where('type', 'movie')->orderBy('rating', 'DESC')->findAll(6),
            'seasonal' => $this->contentModel->orderBy('created_at', 'DESC')->findAll(10),
            'continue_watching' => $continue_watching
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

    public function watch($id = null)
    {
        $isMovie = $this->request->getGet('is_movie');

        if ($isMovie) {
            $anime = $this->contentModel->find($id);
            
            if (!$anime || strtolower($anime['type']) != 'movie') {
                return redirect()->to('/');
            }
            
            $episode = [
                'id_episode' => $anime['id_content'],
                'id_content' => $anime['id_content'],
                'title'      => 'Full Movie',
                'episode_no' => 1,
                'video_url'  => $anime['video_url'],
                'duration'   => isset($anime['duration']) ? $anime['duration'] : '120'
            ];
            
        } else {
            $episode = $this->episodeModel->find($id);
            
            if (!$episode) {
                return redirect()->to('/');
            }
            $anime = $this->contentModel->find($episode['id_content']);
        }

        $data = [
            'episode' => $episode,
            'anime'   => $anime
        ];
        
        return view('watch', $data);
    }

    public function myList()
    {
        $userId = session()->get('id_user');
        
        $userProfile = $this->userModel->join('profiles', 'profiles.id_user = users.id_user')
                                    ->where('users.id_user', $userId)
                                    ->first();

        if (!$userProfile) return redirect()->to('/login');

        $idProfile = $userProfile['id_profile'];
        $db = \Config\Database::connect();

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
        $userId = session()->get('id_user');
        $db = \Config\Database::connect();
        
        $data['user'] = $this->userModel->join('profiles', 'profiles.id_user = users.id_user')
                                        ->where('users.id_user', $userId)
                                        ->first();

        $data['history'] = $db->table('watch_history')
                              ->join('contents', 'contents.id_content = watch_history.id_content')
                              ->where('watch_history.id_profile', $data['user']['id_profile'])
                              ->orderBy('watched_at', 'DESC')
                              ->limit(5)
                              ->get()->getResultArray();

        $data['favorites'] = $db->table('favorites')
                                ->join('contents', 'contents.id_content = favorites.id_content')
                                ->where('favorites.id_profile', $data['user']['id_profile'])
                                ->orderBy('added_at', 'DESC')
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
        $userId = session()->get('id_user');
        $db = \Config\Database::connect();

        $profileName = $this->request->getPost('profile_name');
        $username    = $this->request->getPost('username');
        
        $avatarFile = $this->request->getFile('avatar');
        $avatarPath = null;

        if ($avatarFile && $avatarFile->isValid() && !$avatarFile->hasMoved()) {
            $newName = $avatarFile->getRandomName();
            $avatarFile->move(FCPATH . 'uploads/avatars', $newName);
            $avatarPath = base_url('uploads/avatars/' . $newName);
        } else {
            $avatarPath = $this->request->getPost('avatar_url');
        }

        if ($username) {
            $db->table('users')->where('id_user', $userId)->update(['username' => $username]);
        }

        $profileData = [];
        if ($profileName) $profileData['profile_name'] = $profileName;
        if ($avatarPath)  $profileData['avatar']       = $avatarPath;

        if (!empty($profileData)) {
            $db->table('profiles')->where('id_user', $userId)->update($profileData);
        }

        return redirect()->to('profile')->with('success', 'PROFILE_SYNC: Your data has been updated.');
    }

    public function settings()
    {
        return view('setting');
    }

    public function toggleFavorite($id_content)
    {
        $userId = session()->get('id_user');
        if (!$userId) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Login required']);
        }

        $db = \Config\Database::connect();
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

    // --- METHOD AJAX SEARCH (GET) ---
    public function searchAPI()
    {
        $query = $this->request->getGet('query');
        
        if (empty(trim($query))) {
             return $this->response->setJSON(['status' => 'error', 'message' => 'Query is empty']);
        }

        // Cari berdasarkan judul
        $results = $this->contentModel->like('title', $query)->findAll();

        return $this->response->setJSON([
            'status'  => 'success',
            'query'   => $query,
            'results' => $results
        ]);
    }
}