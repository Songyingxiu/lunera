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
        $data = [
            'total_users'   => $this->userModel->countAll(),
            'total_content' => $this->contentModel->countAll(),
            'total_views'   => 12500 
        ];
        return view('adminhome', $data);
    }

    public function addEpisode()
    {
        return view('addepisode');
    }

    public function saveEpisode()
    {
        // RESTORED: Security Validation Protocols
        $rules = [
            'content_id'    => 'required|is_natural_no_zero',
            'episode_no'    => 'required|is_natural_no_zero',
            'title'         => 'required|min_length[3]',
            'duration'      => 'required|is_natural_no_zero',
            'video_url'     => 'required|valid_url',
            'episode_thumb' => 'permit_empty|valid_url'
        ];

        if (!$this->validate($rules)) {
            // If validation fails, we go back with the errors and the user's typed data
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form addepisode.php
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

        // RESTORED: Cyberpunk Success Message
        return redirect()->to('/admin')->with('success', 'SYSTEM_SYNC: Episode data successfully deployed to the network.');
    }
}