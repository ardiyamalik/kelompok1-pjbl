<?php

namespace App\Controllers;

use App\Models\KasModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {

       // Pastikan sesi aktif
       if (!session()->get('isLoggedIn')) {
        return redirect()->to('/auth/login')->with('error', 'Harap login terlebih dahulu.');
    }

    // Ambil user_id dari sesi
    $userId = session()->get('user_id');
    if (!$userId) {
        return redirect()->to('/auth/login')->with('error', 'User ID tidak ditemukan.');
    }

    // Debugging session data
    log_message('debug', 'Session data: ' . json_encode(session()->get()));

    // Ambil data pengguna
    $userModel = new UserModel();
    $user = $userModel->find($userId);

    if (!$user) {
        return redirect()->to('/auth/login')->with('error', 'Pengguna tidak ditemukan.');
    }

        // Inisialisasi model
        $kasModel = new KasModel();

        // Ambil filter dari query string (opsional)
        $filterPenjualan = $this->request->getGet('filterPenjualan') ?? 'Semua';
        $filterPembayaran = $this->request->getGet('filterPembayaran') ?? 'Semua';

        // Hitung total kas masuk dan keluar berdasarkan filter
        $totalKasMasuk = $kasModel->getTotalMasuk($userId, $filterPenjualan);
        $totalKasKeluar = $kasModel->getTotalKeluar($userId, $filterPembayaran);

        // Ambil data kas per bulan untuk grafik
        $kasMasukPerBulan = $kasModel->getMonthlyTotalsMasukPerAkun($userId);
        $kasKeluarPerBulan = $kasModel->getMonthlyTotalsByJenisAkun($userId);

        // Format data untuk grafik
        $bulanData = [];
        $kasMasukData = [];
        $kasKeluarData = [];

        foreach ($kasMasukPerBulan as $data) {
            $bulanData[] = $data['month'];
            $kasMasukData[] = (int) $data['total'];
        }

        foreach ($kasKeluarPerBulan as $data) {
            $kasKeluarData[] = (int) $data['total'];
        }

        // Siapkan data untuk pie chart
        $akunTypes = ['piutang', 'modal', 'penjualan', 'utang', 'beban'];
        $chartData = [];
        foreach ($akunTypes as $akun) {
            $total = $kasModel->selectSum('harga')
                ->where('akun', $akun)
                ->where('user_id', $userId)
                ->get()
                ->getRow()
                ->harga;

            $chartData[] = [
                'name' => ucfirst($akun),
                'value' => (int) $total
            ];
        }

        // Ambil username dari sesi
        $username = session()->get('username');

        // Kirim data ke view
        return view('dashboard', [
            'user' => $user,
            'username' => $username,
            'totalPenjualan' => $totalKasMasuk,
            'selectedFilterPenjualan' => $filterPenjualan,
            'selectedFilterPembayaran' => $filterPembayaran,
            'totalPembayaran' => $totalKasKeluar,
            'bulanData' => json_encode($bulanData),
            'penjualanData' => json_encode($kasMasukData),
            'pembayaranData' => json_encode($kasKeluarData),
            'chartData' => json_encode($chartData),
        ]);
    }
}
