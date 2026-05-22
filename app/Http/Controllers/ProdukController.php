<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Style;

class ProdukController extends Controller
{

    // =========================
    // INDEX
    // =========================
    public function index(Request $request)
{
    $search = strtolower($request->search);

    $produks = Produk::with(['reviews', 'style'])
        ->latest()
        ->get();

    // SEARCH
    if ($search) {
        $produks = $produks->filter(function ($item) use ($search) {

            return str_contains(strtolower($item->nama_produk), $search)
                || str_contains(strtolower($item->style->nama_style ?? ''), $search);
        });
    }

    return view('admin.produk.index', compact('produks'));
}
    // =========================
    // CREATE
    // =========================
    public function create()
    {
        $styles = Style::all();

        return view('admin.produk.tambah', compact('styles'));
    }

    // =========================
    // STORE
    // =========================
    public function store(Request $request)
{
    $produk = new Produk();

    $produk->nama_produk = $request->nama_produk;
    $produk->harga = $request->harga;
    $produk->style_id = $request->style_id;

    // UPLOAD GAMBAR
    if ($request->hasFile('gambar')) {

    $file = $request->file('gambar');

    $namaFile = time() . '.' . $file->getClientOriginalExtension();

    $file->storeAs('produk', $namaFile, 'public');

    $produk->gambar = 'produk/' . $namaFile;
}

    // =========================
    // EDIT
    // =========================
    public function edit($id)
{
    $produk = Produk::findOrFail($id);
    $styles = Style::all();

    return view('admin.produk.edit', compact('produk', 'styles'));
}

    // =========================
    // UPDATE
    // =========================
    public function update(Request $request, $id)
{
    $produk = Produk::findOrFail($id);

    $produk->nama_produk = $request->nama_produk;
    $produk->harga = $request->harga;
    $produk->style_id = $request->style_id;

    // UPDATE GAMBAR
    if ($request->hasFile('gambar')) {

        $gambar = $request->file('gambar')
            ->store('produk', 'public');

        $produk->gambar = $gambar;
    }

    $produk->save();

    return redirect('/admin/produk/index')
        ->with('success', 'Produk berhasil diperbarui   ');
}


    // =========================
    // DELETE
    // =========================
    public function destroy($id)
    {
        Produk::destroy($id);

        return back()
            ->with('success', 'Produk berhasil dihapus');
    }
}