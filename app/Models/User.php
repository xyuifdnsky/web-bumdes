<?php

namespace App\Models;

// 1. Hilangkan tanda komentar (//) pada baris ini untuk mengaktifkan fitur verifikasi
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// 2. Tambahkan "implements MustVerifyEmail" di samping Authenticatable
class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id', // Tambahan: Untuk menyimpan ID dari akun Google saat SSO
        'role',      // Tambahan: Untuk membedakan user ini 'mitra', 'pelanggan', atau 'admin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relasi ke data Mitra
     * 1 Akun User (yang mendaftar sebagai mitra) memiliki 1 Profil Mitra
     */
    public function mitra()
    {
        return $this->hasOne(Mitra::class);
    }
}
