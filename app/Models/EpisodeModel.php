<?php

namespace App\Models;

use CodeIgniter\Model;

class EpisodeModel extends Model
{
    protected $table            = 'episodes';
    protected $primaryKey       = 'id_episode';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    // FIXED: Added episode_thumb and created_at to the allowed list
    protected $allowedFields    = [
        'id_content', 
        'episode_no', 
        'title', 
        'episode_thumb', 
        'video_url', 
        'duration', 
        'created_at'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = ''; // Leaving this empty as your partner did
}