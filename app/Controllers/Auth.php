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

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}