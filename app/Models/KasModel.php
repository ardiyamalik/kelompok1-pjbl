<?php

namespace App\Models;

use CodeIgniter\Model;

class KasModel extends Model
{
    protected $table      = 'kas';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'tanggal', 'deskripsi', 'akun', 'jumlah', 'harga', 'jenis', 'user_id'
    ];

    public function getTotalMasuk($userId, $filter = "Semua")
{
    $builder = $this->builder('kas');
    $builder->select('SUM(harga) as total')
            ->where('user_id', $userId)
            ->where('jenis', 'masuk');

    if ($filter !== "Semua") {
        $builder->where('akun', $filter);
    }

    $result = $builder->get()->getRow();
    return $result->total ?? 0;
}
    
    public function getKasMasuk($userId)
{
    return $this->where('jenis', 'masuk')
                ->where('user_id', $userId) // Filter berdasarkan user_id
                ->findAll();
}


public function getTotalKeluar($userId, $filter = 'Semua')
{
    $this->where('jenis', 'keluar') // Hanya data keluar
         ->where('user_id', $userId); // Filter berdasarkan user_id

    if ($filter !== 'Semua') {
        $this->where('akun', strtolower($filter)); // Filter berdasarkan akun
    }

    return $this->selectSum('harga')->get()->getRow()->harga ?? 0; // Kembalikan 0 jika null
}


public function getKasKeluar($userId)
{
    return $this->where('jenis', 'keluar')
                ->where('user_id', $userId) // Filter berdasarkan user_id
                ->findAll();
}

    public function getMonthlyTotals($filter = 'Semua')
{
    // Memastikan hanya data jenis 'keluar' yang diambil
    $builder = $this->builder();
    $builder->select("DATE_FORMAT(tanggal, '%Y-%m') as month, SUM(harga) as total")
            ->where('jenis', 'keluar')
            ->groupBy("month")
            ->orderBy("month", "ASC");

    // Jika ada filter untuk akun 'utang' atau 'beban'
    if ($filter !== 'Semua') {
        $builder->whereIn('akun', ['utang', 'beban']);
    }

    return $builder->get()->getResult();
}

public function getMonthlyTotalsByJenisAkun($userId)
{
    return $this->select("DATE_FORMAT(tanggal, '%Y-%m') as month, akun, SUM(harga) as total")
                ->where('jenis', 'keluar')
                ->where('user_id', $userId) // Filter berdasarkan user_id
                ->groupBy("month, akun")
                ->orderBy("month", "ASC")
                ->findAll();
}


public function getMonthlyTotalsMasukPerAkun($userId)
{
    return $this->select("DATE_FORMAT(tanggal, '%Y-%m') as month, akun, SUM(harga) as total")
                ->where('jenis', 'masuk')
                ->where('user_id', $userId) // Tambahkan filter user_id
                ->groupBy("month, akun")
                ->orderBy("month", "ASC")
                ->findAll();
}


public function getKasMasukByUser($userId)
{
    return $this->where('jenis', 'masuk')
                ->where('user_id', $userId) // Filter berdasarkan user_id
                ->findAll();
}


}
