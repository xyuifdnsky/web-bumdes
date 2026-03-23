<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    } // <--- Tadi merah karena mungkin ini terhapus atau nempel


    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // AMBIL DATA USER YANG LOGIN
        $user = auth()->user();

        // LOGIKA PENGALIHAN BERDASARKAN ROLE
        if ($user->role === 'admin') {
            return redirect()->intended(route('admin.dashboard'));
        } elseif ($user->role === 'kepala') {
            return redirect()->intended(route('kepala.dashboard'));
        } elseif ($user->role === 'mitra') {
            return redirect()->intended(route('dashboard'));
        } else {
            // Default untuk customer atau role lain
            return redirect()->intended(route('index'));
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

