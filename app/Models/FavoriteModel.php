<?php

namespace App\Models;

use CodeIgniter\Model;

class FavoriteModel extends Model
{
    protected $table            = 'favorites';
    protected $primaryKey       = 'id_favorite';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    // Field yang diizinkan untuk diisi
    protected $allowedFields    = [
        'id_profile', 
        'id_content', 
        'added_at'
    ];

    // Menggunakan fitur timestamp otomatis dari CI4 untuk field added_at
    protected $useTimestamps = true;
    protected $createdField  = 'added_at';
    protected $updatedField  = ''; // Dikosongkan karena tidak ada kolom updated_at di migration
}