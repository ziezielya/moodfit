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

        // First try normal guard attempt (works with hashed passwords)
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/admin/dashboard');
        }

        // Fallback: if admin exists and password stored in plain text, hash it and login
        $admin = Admin::where('email', $request->email)->first();
        if ($admin) {
            if ($admin->password === $request->password) {
                $admin->password = Hash::make($request->password);
                $admin->save();
                Auth::guard('admin')->login($admin);
                return redirect('/admin/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Login gagal: kredensial tidak cocok',
        ])->withInput();
    }

    // LOGOUT
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login')->with('success', 'Anda telah logout');
    }

    // CUSTOMER LOGIN / LOGOUT
    public function showUserLogin()
    {
        return view('auth.login');
    }

    public function userLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->back()->with('success', 'Login berhasil');
        }

        return back()->withErrors(['email' => 'Login gagal'])->withInput();
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Anda telah logout');
    }
}