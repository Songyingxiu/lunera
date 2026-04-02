<?php
namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;
use App\Models\ProfileModel;
use App\Models\WatchHistoryModel;
use App\Models\FavoriteModel;

class ProfileApi extends ResourceController
{
    protected $format = 'json';

    // --- READ ---
    public function show($id = null)
    {
        $userModel = new \App\Models\UserModel();
        $profileModel = new \App\Models\ProfileModel();

        $user = $userModel->find($id);
        if (!$user) return $this->failNotFound('User not found');
        unset($user['password']);

        // Merge the avatar from the profiles table
        $profile = $profileModel->where('id_user', $id)->first();
        $user['avatar'] = $profile ? $profile['avatar'] : null;

        // 🚀 Removed the missing History and Favorite models so it stops crashing!
        return $this->respond([
            'status' => 200,
            'data' => [
                'user' => $user
            ]
        ]);
    }

    // --- UPDATE ---
    public function updateProfile()
    {
        $userModel = new UserModel();
        $profileModel = new ProfileModel();
        
        $id = $this->request->getPost('id_user');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        // 1. Update Username/Password in Users Table
        $userData = [];
        if (!empty($username)) $userData['username'] = $username;
        if (!empty($password)) $userData['password'] = password_hash($password, PASSWORD_DEFAULT);
        if (!empty($userData)) $userModel->update($id, $userData);

        // 2. Handle Avatar Upload to Profiles Table safely
        $avatar = $this->request->getFile('avatar');
        if ($avatar && $avatar->isValid() && !$avatar->hasMoved()) {
            $newName = $avatar->getRandomName();
            $avatar->move(FCPATH . 'uploads/avatars', $newName);
            
            $profile = $profileModel->where('id_user', $id)->first();
            if ($profile) {
                $profileModel->update($profile['id_profile'], ['avatar' => $newName]);
            } else {
                $profileModel->insert(['id_user' => $id, 'profile_name' => $username ?: 'User', 'avatar' => $newName]);
            }
        }

        return $this->respond(['status' => 200, 'message' => 'Identity updated']);
    }

    // --- DELETE ---
    public function deleteAccount($id = null)
    {
        if ((new UserModel())->delete($id)) {
            return $this->respondDeleted(['status' => 200, 'message' => 'Account deleted']);
        }
        return $this->failServerError('Failed to delete account');
    }
}