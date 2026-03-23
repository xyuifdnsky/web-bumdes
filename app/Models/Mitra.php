<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    // Kolom-kolom yang diizinkan untuk diisi dari form
    protected $fillable = [
        'nama_usaha',
        'nama_pemilik',
        'jenis_usaha',
        'alamat_usaha',
        'rt_rw',
        'dusun',
        'ktp_path',
        'sku_path',
        'status',
    ];

    // (Opsional) Relasi ke User jika nanti kamu hubungkan dengan tabel users
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
