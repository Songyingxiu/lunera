<?php
namespace App\Models;
use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table            = 'profiles';
    protected $primaryKey       = 'id_profile';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    
    // CRITICAL: CodeIgniter requires 'avatar' to be listed here!
    protected $allowedFields    = ['id_user', 'profile_name', 'avatar'];
    protected $useTimestamps    = false;
}