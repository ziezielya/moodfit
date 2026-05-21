<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;

class AdminPembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::latest()->get();

        return view('admin.pembayaran.index', compact('pembayaran'));
    }
}