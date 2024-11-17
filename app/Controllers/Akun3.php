<?php

namespace App\Controllers;

use App\Models\KasModel;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\UserModel;

class Akun3 extends BaseController
{
    protected $kasModel;
    protected $userModel;

    public function __construct()
    {
        $this->kasModel = new KasModel();
        $this->userModel = new UserModel();
    }

    public function index()
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

        $kasData = $this->kasModel->where('user_id', $userId)->findAll();

        // Kirim data ke view
        return view('akun3', [
       'user' => $user, // Kirim username ke view
        'kasData' => $kasData    // Kirim data kas ke view
    ]);
}

public function detail($id)
{
    $userId = session()->get('user_id'); // Ambil user_id dari sesi
    $kas = $this->kasModel->where('id', $id)->where('user_id', $userId)->first();

    if (!$kas) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Data tidak ditemukan atau Anda tidak memiliki akses.'
        ]);
    }

    return $this->response->setJSON($kas);
}

    
    public function delete($id)
    {
        $this->kasModel->delete($id);
        return redirect()->to('/akun3');
    }

    // Fungsi untuk Generate PDF
    public function generatePdf()
{
    // Ambil user_id dari sesi
    $userId = session()->get('user_id');
    
    if (!$userId) {
        return redirect()->to('/login')->with('error', 'Harap login terlebih dahulu.');
    }

    // Ambil data kas hanya milik user yang login
    $kasData = $this->kasModel->where('user_id', $userId)->findAll();

    // Load view untuk tabel kas
    $html = view('pdf/rekap_kas', ['kasData' => $kasData]);

    // Inisialisasi Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // Set ukuran kertas dan orientasi (opsional)
    $dompdf->setPaper('A4', 'landscape');

    // Render PDF (memproses HTML menjadi PDF)
    $dompdf->render();

    // Output file PDF ke browser
    $dompdf->stream('laporan_kas.pdf', ['Attachment' => 0]);
}

}
