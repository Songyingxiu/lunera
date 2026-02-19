<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    
    // Kolom yang boleh diisi/diubah oleh aplikasi
    protected $allowedFields    = ['username', 'email', 'password', 'role', 'created_at'];

    // security (extra step not necesarry)
    protected $useTimestamps = false;
}