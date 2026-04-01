<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;
use App\Models\WatchHistoryModel;
use App\Models\FavoriteModel;

class ProfileApi extends ResourceController
{
    protected $format = 'json';

    // 1. READ (GET) - Fetch User, History, and Favorites
    public function show($id = null)
    {
        $userModel = new UserModel();
        $historyModel = new WatchHistoryModel();
        $favoriteModel = new FavoriteModel();

        $user = $userModel->find($id);

        if (!$user) {
            return $this->failNotFound('User not found in the system.');
        }

        unset($user['password']); // Secure the password

        // Fetch user's watch history and favorites
        $history = $historyModel->where('id_user', $id)->findAll();
        $favorites = $favoriteModel->where('id_user', $id)->findAll();

        return $this->respond([
            'status' => 200,
            'data' => [
                'user' => $user,
                'history' => $history,
                'favorites' => $favorites
            ]
        ]);
    }

    // 2. UPDATE (POST) - Update Username, Password, and Avatar
    public function updateProfile()
    {
        $userModel = new UserModel();
        
        $id = $this->request->getPost('id_user');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $data = [];
        if (!empty($username)) $data['username'] = $username;
        if (!empty($password)) $data['password'] = password_hash($password, PASSWORD_DEFAULT);

        // Handle Image Upload
        $avatar = $this->request->getFile('avatar');
        if ($avatar && $avatar->isValid() && !$avatar->hasMoved()) {
            $newName = $avatar->getRandomName();
            // Move to public/uploads/avatars folder
            $avatar->move(FCPATH . 'uploads/avatars', $newName);
            $data['avatar'] = $newName;
        }

        if ($userModel->update($id, $data)) {
            // Fetch updated user to send back to Flutter
            $updatedUser = $userModel->find($id);
            unset($updatedUser['password']);
            
            return $this->respond([
                'status' => 200,
                'message' => 'Identity updated successfully',
                'user' => $updatedUser
            ]);
        }

        return $this->failServerError('Failed to update system records.');
    }

    // 3. DELETE (DELETE) - Erase Account
    public function delete($id = null)
    {
        $userModel = new UserModel();
        
        if ($userModel->delete($id)) {
            return $this->respondDeleted([
                'status' => 200, 
                'message' => 'Identity permanently purged.'
            ]);
        }
        return $this->failServerError('Failed to execute purge protocol.');
    }
}