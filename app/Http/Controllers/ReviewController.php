<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return back()->with('error', 'Silakan login terlebih dahulu untuk memberikan review');
        }

        $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|min:10|max:500'
        ]);

        Review::create([
            'produk_id' => $request->produk_id,
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Ulasan Anda berhasil disimpan!');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);

        $user = auth()->user();
        $admin = auth('admin')->user();

        if (!$user && !$admin) {
            return back()->with('error', 'Silakan login terlebih dahulu');
        }

        // admin bisa hapus semua
        if ($admin) {
            $review->delete();
            return back()->with('success', 'Review dihapus oleh admin');
        }

        // user hanya milik sendiri
        if ($user && $user->id == $review->user_id) {
            $review->delete();
            return back()->with('success', 'Review berhasil dihapus');
        }

        return back()->with('error', 'Tidak punya akses');
    }
}