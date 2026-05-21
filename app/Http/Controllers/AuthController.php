<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Login gagal',
        ]);
    }

    // LOGOUT
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}