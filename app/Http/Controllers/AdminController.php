<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Produk;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalProduk = Produk::count();
        $totalUser = User::count();
        $totalPembayaran = Pembayaran::count();

        $pembayaran = Pembayaran::latest()->get();

        return view('admin.dashboard', compact(
            'totalProduk',
            'totalUser',
            'totalPembayaran',
            'pembayaran'
        ));
    }
}