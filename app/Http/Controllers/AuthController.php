<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;

class AuthController extends Controller
{
    // SHOW LOGIN PAGE
    public function showLogin()
    {
        return view('admin.login');
    }

    // LOGIN PROCESS
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Login gagal: kredensial tidak cocok',
        ])->withInput();
    }

    // LOGOUT
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/')->with('success', 'Anda telah logout');
    }

     // =========================
    // USER LOGIN
    // =========================

    public function showUserLogin()
    {
        return view('customer.auth.login');
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('produk'))->with('success', 'Login berhasil');
        }

        return back()->withErrors([
            'email' => 'Login gagal: email atau password salah',
        ])->withInput();
    }

   public function userLogout()
{
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/')->with('success', 'Anda telah logout');
}
}