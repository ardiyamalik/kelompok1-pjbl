<?php

namespace App\Controllers;

use App\Models\KasModel;
use App\Models\UserModel;

class Akun1 extends BaseController
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

        $selectedFilter = ($filter !== 'Semua') ? ucfirst(strtolower($filter)) : 'Semua';

        // Ambil total kas masuk berdasarkan filter
        $totalMasuk = $this->kasModel->getTotalMasuk($userId, $filter);

        // Mendapatkan total bulanan berdasarkan jenis akun (piutang, modal, dan penjualan)
        $monthlyTotals = $this->kasModel->getMonthlyTotalsMasukPerAkun($userId);

        $kasMasuk = $this->kasModel->getKasMasuk($userId);

        // Kirim data ke view
        return view('akun1', [
            'user' => $user,                   // Data pengguna
            'totalPenjualan' => $totalMasuk,   // Total pemasukan berdasarkan filter
            'selectedFilter' => $selectedFilter, // Filter yang dipilih
            'monthlyTotals' => $monthlyTotals, // Total bulanan berdasarkan jenis akun
            'kasMasuk' => $kasMasuk            // Semua data kas masuk
        ]);
    }

    public function saveKasMasuk()
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
        'jenis'     => 'masuk',
        'user_id'   => $userId, // Tambahkan user_id
    ];

    if ($this->kasModel->insert($data)) {
        return $this->response->setJSON(['status' => 'success']);
    } else {
        return $this->response->setJSON(['status' => 'error']);
    }
}

public function getTotalMasuk()
{
    $kasModel = new KasModel();
    $userId = session()->get('user_id'); // Ambil user_id dari sesi

    if (!$userId) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Harap login terlebih dahulu.'
        ]);
    }

    // Ambil filter dari request (opsional), default "Semua"
    $filter = $this->request->getGet('filter') ?? 'Semua';

    // Ambil total penjualan berdasarkan user_id dan filter
    $totalPenjualan = $kasModel->getTotalMasuk($userId, $filter);

    // Format angka dengan separator ribuan
    $totalPenjualanFormatted = number_format($totalPenjualan, 0, ',', '.');

    return $this->response->setJSON([
        'status' => 'success',
        'totalPenjualan' => $totalPenjualanFormatted
    ]);
}


public function getMonthlyTotals()
{
    $userId = session()->get('user_id'); // Ambil user_id dari sesi

    if (!$userId) {
        return $this->response->setJSON(['status' => 'error', 'message' => 'Harap login terlebih dahulu.']);
    }

    // Ambil data berdasarkan user_id
    $monthlyTotals = $this->kasModel->getMonthlyTotalsMasukPerAkun($userId);

    $formattedData = [];
    foreach ($monthlyTotals as $data) {
        $formattedData[] = [
            'month' => $data['month'],
            'akun'  => $data['akun'],
            'total' => (int) $data['total']
        ];
    }

    return $this->response->setJSON([
        'status'        => 'success',
        'monthlyTotals' => $formattedData
    ]);
}

public function deleteKas($id)
{
    $kas = $this->kasModel->find($id);
    $userId = session()->get('user_id'); // Get the logged-in user's ID

    if ($kas['user_id'] !== $userId) {
        return $this->response->setJSON(['status' => 'error', 'message' => 'You cannot delete this record.']);
    }

    if ($this->kasModel->delete($id)) {
        return $this->response->setJSON(['status' => 'success']);
    } else {
        return $this->response->setJSON(['status' => 'error']);
    }
}

public function editKas($id)
{
    $kas = $this->kasModel->find($id);
    $userId = session()->get('user_id');

    if ($kas['user_id'] !== $userId) {
        return $this->response->setJSON(['status' => 'error', 'message' => 'You cannot edit this record.']);
    }

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
