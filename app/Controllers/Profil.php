<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Profil extends Controller
{
    public function index()
    {
        // Ambil data session
        $session = session();
        $userId = $session->get('user_id'); // Pastikan user_id ada di session

        // Ambil model pengguna
        $userModel = new UserModel();

        // Ambil data pengguna berdasarkan user_id
        $user = $userModel->find($userId); // Mengambil data pengguna dari database

        // Periksa apakah pengguna ditemukan
        if (!$user) {
            return redirect()->to('/login')->with('error', 'User not found');
        }

        // Kirim data pengguna ke view
        return view('profil', [
            'user'     => $user,
            'name'     => $user['name'],
            'email'    => $user['email'],
            'username' => $user['username'],
            'nim'      => $user['nim'] ?? 'N/A', // Jika nim tidak ada, tampilkan 'N/A'
            'photo'    => $user['photo'] ?? 'default.png', // Gunakan foto default jika tidak ada
        ]);
    }

    public function update()
    {
        $session = session();
        $userId = $session->get('user_id');
    
        $name = $this->request->getPost('name');
        $username = $this->request->getPost('username');
        $nim = $this->request->getPost('nim');
        $email = $this->request->getPost('email');
    
        $photo = $this->request->getFile('foto');
        $photoName = null;
    
        if ($photo && $photo->isValid() && !$photo->hasMoved()) {
            $photoName = $photo->getRandomName();
            $photo->move(FCPATH . 'uploads/profile', $photoName);
        }
    
        $data = [
            'name' => $name,
            'username' => $username,
            'nim' => $nim,
            'email' => $email,
        ];
    
        if ($photoName) {
            $data['foto'] = $photoName; // Sesuaikan dengan nama kolom database
        }
    
        $userModel = new UserModel();
        $updated = $userModel->update($userId, $data);
    
        if ($updated) {
            return redirect()->to('/profil')->with('success', 'Profile updated successfully!');
        } else {
            return redirect()->to('/profil')->with('error', 'Failed to update profile.');
        }
    }    

}
