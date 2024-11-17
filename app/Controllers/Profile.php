<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index(): string
    {
        $userId = session()->get('user_id'); // Ambil user_id dari sesi

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Harap login terlebih dahulu.');
        }

        // Ambil data pengguna berdasarkan user_id
        $user = $this->userModel->find($userId);

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Data pengguna tidak ditemukan.');
        }

        return view('profile',[
            'user' => $user, // Kirim username ke view
        ]);
    }
}
