<?php

namespace App\Http\Controllers\Auth;

use App\Enums\Role;
use App\Enums\UserStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AdminLoginController extends Controller
{
    public function create()
    {
        return view('auth.admin-login', [
            'title' => 'ImmaLend - Admin Login',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        $key = Str::transliterate(Str::lower($request->input('email')) . '|' . $request->ip());

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);

            throw ValidationException::withMessages([
                'email' => "Terlalu banyak percobaan login. Coba lagi dalam {$seconds} detik.",
            ]);
        }

        // Hanya Admin yang aktif. Teacher/Student otomatis ditolak.
        $loggedIn = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'status' => UserStatus::Active->value,
            fn($query) => $query->where('role', Role::Admin->value),
        ], $request->boolean('remember'));

        if (!$loggedIn) {
            RateLimiter::hit($key);

            throw ValidationException::withMessages([
                'email' => 'Email atau password salah.',
            ]);
        }

        RateLimiter::clear($key);
        $request->session()->regenerate();

        return redirect()->intended(route('lendings.admin-index'));
    }
}