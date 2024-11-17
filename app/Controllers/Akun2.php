<?php

namespace App\Controllers;

use App\Models\KasModel;
use App\Models\UserModel;

class Akun2 extends BaseController
{
    protected $kasModel;
    protected $userModel;

    public function __construct()
    {
        $this->kasModel = new KasModel();
        $this->userModel = new UserModel();
    }

    public function index($filter = 'Semua')
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

        $selectedFilter = ($filter === 'Semua') ? 'Semua' : ucfirst(strtolower($filter));
    
        $totalPembayaran = $this->kasModel->getTotalKeluar($userId, $selectedFilter);
        $monthlyTotals = $this->kasModel->getMonthlyTotalsByJenisAkun($userId);
        $kasKeluar = $this->kasModel->getKasKeluar($userId);
    
        return view('akun2', [
            'user' => $user,
            'username' => session()->get('username'), // Kirim username ke view
            'totalPembayaran' => $totalPembayaran,
            'selectedFilter' => $selectedFilter,
            'monthlyTotals' => $monthlyTotals,
            'kasKeluar' => $kasKeluar
        ]);
    }

    public function saveKasKeluar()
    {

        $userId = session()->get('user_id'); // Ambil user_id dari session

        if (!$userId) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'User tidak terdeteksi.']);
        }

        $data = [
            'tanggal'   => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'akun'      => $this->request->getPost('akun'),
            'jumlah'    => $this->request->getPost('jumlah'),
            'harga'     => $this->request->getPost('harga'),
            'jenis'     => 'keluar',
            'user_id'   => $userId, // Tambahkan user_ida
        ];

        if ($this->kasModel->insert($data)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }
    }

    public function getTotalKeluar()
{
    $userId = session()->get('user_id'); // Ambil user_id dari sesi
    $kasModel = new KasModel();
    
    // Pastikan metode di model menerima userId dan mengembalikan total yang benar
    $totalPembayaran = $kasModel->getTotalKeluar($userId); 

    // Format angka dengan separator ribuan
    $totalPembayaranFormatted = number_format($totalPembayaran, 0, ',', '.');
    
    return $this->response->setJSON([
        'status' => 'success',
        'totalPembayaran' => $totalPembayaranFormatted
    ]);
}


public function getMonthlyTotals()
{
    $userId = session()->get('user_id'); // Ambil user_id dari sesi
    $monthlyTotals = $this->kasModel->getMonthlyTotalsByJenisAkun($userId);

    $formattedData = [];
    foreach ($monthlyTotals as $data) {
        $formattedData[] = [
            'month' => $data['month'],
            'akun' => $data['akun'],
            'total' => (int) $data['total']
        ];
    }

    return $this->response->setJSON([
        'status' => 'success',
        'monthlyTotals' => $formattedData
    ]);
}

public function deleteKas($id)
{
    if ($this->kasModel->delete($id)) {
        return $this->response->setJSON(['status' => 'success']);
    } else {
        return $this->response->setJSON(['status' => 'error']);
    }
}

public function editKas($id)
{
    $kas = $this->kasModel->find($id);

    if ($kas) {
        return $this->response->setJSON(['status' => 'success', 'kas' => $kas]);
    } else {
        return $this->response->setJSON(['status' => 'error']);
    }
}


public function updateKas()
{
    $id = $this->request->getPost('id');
    $data = [
        'tanggal'   => $this->request->getPost('tanggal'),
        'deskripsi' => $this->request->getPost('deskripsi'),
        'akun'      => $this->request->getPost('akun'),
        'jumlah'    => $this->request->getPost('jumlah'),
        'harga'     => $this->request->getPost('harga'),
    ];

    if ($this->kasModel->update($id, $data)) {
        return $this->response->setJSON(['status' => 'success']);
    } else {
        return $this->response->setJSON(['status' => 'error']);
    }
}
    
}
