<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

   public function handleGoogleCallback()
{
    try {
        $googleUser = Socialite::driver('google')->user();

        // 1. Cek apakah user dengan email ini sudah ada di database
        $existingUser = User::where('email', $googleUser->getEmail())->first();

        if ($existingUser) {
            // JIKA SUDAH ADA: Langsung login-kan
            Auth::login($existingUser);

            // Redirect sesuai role (Gunakan logic redirect yang sudah kita buat)
            return match($existingUser->role) {
                'admin'  => redirect()->intended(route('admin.dashboard')),
                'mitra'  => redirect()->intended(route('dashboard')),
                'kepala' => redirect()->intended(route('kepala.dashboard')),
                default  => redirect()->intended(route('index')),
            };
        } else {
            // JIKA BELUM ADA: Simpan ke session dan lempar ke form pendaftaran mitra
            session([
                'google_email' => $googleUser->getEmail(),
                'google_name' => $googleUser->getName()
            ]);

            return redirect()->route('register.mitra')
                             ->with('info', 'Email belum terdaftar. Silakan lengkapi data mitra Anda.');
        }

    } catch (\Exception $e) {
        return redirect()->route('login')->with('error', 'Gagal login menggunakan Google.');
    }
}
}
