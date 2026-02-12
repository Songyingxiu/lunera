<?php

namespace App\Models;

use CodeIgniter\Model;

class ContentModel extends Model
{
    protected $table            = 'contents';
    protected $primaryKey       = 'id_content';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'id_category', 'title', 'slug', 'description', 
        'thumbnail_url', 'cover_url', 'video_url', 
        'release_year', 'studio', 'type', 'status', 'rating'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = ''; // We didn't add this in migration, so leave blank
}