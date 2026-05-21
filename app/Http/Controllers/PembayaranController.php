<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{

    public function destroy($id)
{
    $pembayarans = Pembayaran::findOrFail($id);
    $pembayarans->delete();

    return redirect()->back()->with('success', 'Data pembayaran berhasil dihapus!');
}

  public function index()
{
    $pembayarans = Pembayaran::latest()->paginate(10);

    return view('admin.pembayaran.index', compact('pembayarans'));
}

    public function create($id)
    {
        $produk = Produk::findOrFail($id);

        return view('customer.pages.pembayaran.create', compact('produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'ukuran_detail' => 'required',
            'metode' => 'required',
        ]);

        $produk = Produk::findOrFail($request->produk_id);

        Pembayaran::create([
            'produk_id'       => $produk->id,
            'nama_customer'  => $request->nama_customer,
            'no_telp'        => $request->no_telp,
            'alamat'         => $request->alamat,
            'ukuran_detail'  => $request->ukuran_detail,
            'metode'         => $request->metode,
            'total'          => $produk->harga,
            'tgl_pembayaran' => now(),
            'catatan'        => $request->catatan,
        ]);

        return redirect()->back()
            ->with('success', 'Pembayaran berhasil!');
    }

}