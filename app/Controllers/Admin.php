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
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // Data untuk Quick Stats HUD di adminhome.php
        $data = [
            'total_users'   => $this->userModel->countAll(),
            'total_content' => $this->contentModel->countAll(),
            'total_views'   => 12500 // Dummy atau ambil dari tabel history
        ];
        return view('adminhome', $data);
    }

    public function addEpisode()
    {
        return view('addepisode');
    }

    public function saveEpisode()
    {
        // Ambil data dari form addepisode.php
        $data = [
            'id_content'    => $this->request->getPost('content_id'), // Pastikan name di input form sesuai
            'episode_no'    => $this->request->getPost('episode_no'),
            'title'         => $this->request->getPost('title'),
            'duration'      => $this->request->getPost('duration'),
            'video_url'     => $this->request->getPost('video_url'),
            'episode_thumb' => $this->request->getPost('episode_thumb'),
            'created_at'    => date('Y-m-d H:i:s')
        ];

        $this->episodeModel->insert($data);

        return redirect()->to('/admin')->with('success', 'Episode added successfully');
    }
}