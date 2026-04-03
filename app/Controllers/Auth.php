<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // Jika sudah login, lempar ke home
        if (session()->get('id_user')) {
            return redirect()->to('/');
        }
        return view('login');
    }

    public function process()
    {
        $userModel = new UserModel();
        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $userModel->where('username', $username)->first();

        if ($user) {
            // Cek password hash
            if (password_verify($password, $user['password'])) {
                // Set Session
                $sessionData = [
                    'id_user'   => $user['id_user'],
                    'username'  => $user['username'],
                    'role'      => $user['role'], // 'admin' atau 'user'
                    'isLoggedIn' => true
                ];
                session()->set($sessionData);

                // Redirect berdasarkan Role
                if ($user['role'] == 'admin') {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/');
                }
            }
        }

        // Jika gagal
        return redirect()->back()->with('error', 'Invalid Username or Password');
    }

    public function apiLogin()
    {
        $userModel = new UserModel();
        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $userModel->where('username', $username)->first();

        if ($user) {
            // Cek password hash
            if (password_verify($password, $user['password'])) {
                
                // Return JSON response for Flutter
                return $this->response->setJSON([
                    'status'  => 200,
                    'message' => 'Login successful',
                    'data'    => [
                        'id_user'  => $user['id_user'],
                        'username' => $user['username'],
                        'role'     => $user['role']
                    ]
                ]);
            }
        }

        // Return JSON error response for Flutter
        return $this->response->setJSON([
            'status'  => 401,
            'message' => 'Invalid Username or Password'
        ]);
    }

    public function register()
    {
        $userModel = new \App\Models\UserModel();
        $profileModel = new \App\Models\ProfileModel();
        
        // 1. Catch Text Data
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $email = $this->request->getPost('email');
        $profileName = $this->request->getPost('profile_name');

        // 2. Validate Identity
        if ($userModel->where('username', $username)->first()) {
            return $this->response->setJSON(['status' => 400, 'message' => 'IDENTITY CODE ALREADY EXISTS']);
        }
        if ($userModel->where('email', $email)->first()) {
            return $this->response->setJSON(['status' => 400, 'message' => 'EMAIL ALREADY REGISTERED']);
        }

        // 3. Insert User Core
        $userData = [
            'username' => $username,
            'email'    => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role'     => 'user'
        ];

        if ($userModel->insert($userData)) {
            $userId = $userModel->insertID();

            // 4. Handle Avatar File Upload
            $avatarName = '';
            $avatarFile = $this->request->getFile('avatar');
            
            if ($avatarFile && $avatarFile->isValid() && !$avatarFile->hasMoved()) {
                // Generate a random secure name and move it to public/uploads/avatars/
                $avatarName = $avatarFile->getRandomName();
                $avatarFile->move(FCPATH . 'uploads/avatars', $avatarName);
            }

            // 5. Insert Profile Data
            $profileModel->insert([
                'id_user'      => $userId,
                'profile_name' => $profileName,
                'avatar'       => $avatarName
            ]);

            return $this->response->setJSON([
                'status'  => 200,
                'message' => 'IDENTITY CREATED SUCCESSFULLY'
            ]);
        }

        return $this->response->setJSON(['status' => 500, 'message' => 'CREATION FAILED']);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}