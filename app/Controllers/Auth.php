<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
    // Halaman register
    public function register()
    {
        return view('auth/register'); // View untuk halaman register
    }

    // Proses register
    public function register_process()
    {
        $model = new UserModel();

        // Ambil data dari form
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi input
        if ($model->check_user_exists('email', $email)) {
            return redirect()->back()->with('error', 'Email already exists!')->withInput();
        }

        if ($model->check_user_exists('username', $username)) {
            return redirect()->back()->with('error', 'Username already exists!')->withInput();
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Data untuk disimpan
        $data = [
            'name' => $name,
            'email' => $email,
            'username' => $username,
            'password' => $hashed_password,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Simpan ke database
        if ($model->register_user($data)) {
            // Set session jika diperlukan
            session()->set([
                'username' => $username,
                'isLoggedIn' => true,
            ]);

            // Redirect ke dashboard
            return redirect()->to('/dashboard')->with('success', 'Registration successful!');
        } else {
            return redirect()->back()->with('error', 'Failed to register. Please try again.')->withInput();
        }
    }

    // Halaman login
    public function login()
    {
        return view('auth/login'); // View untuk halaman login
    }

    // Proses login
    public function login_process()
    {
        $model = new UserModel();
    
        // Ambil data dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
    
        // Cari user berdasarkan username
        $user = $model->where('username', $username)->first();
    
        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Set session, termasuk user_id
                session()->set([
                    'user_id'    => $user['id'], // Tambahkan user_id
                    'username'   => $user['username'],
                    'isLoggedIn' => true,
                ]);
    
                // Redirect ke dashboard
                return redirect()->to('/dashboard')->with('success', 'Login successful!');
            } else {
                return redirect()->back()->with('error', 'Invalid password!')->withInput();
            }
        } else {
            return redirect()->back()->with('error', 'User not found!')->withInput();
        }
    }    

    // Proses logout
    public function logout()
    {
        session()->destroy(); // Hapus semua data sesi
        return redirect()->to('/auth/login'); // Redirect ke halaman login
    }

}
