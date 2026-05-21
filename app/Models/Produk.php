<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Produk extends Model
{
    protected $fillable = ['nama_produk','harga','gambar','style_id'];

    public function style()
    {
        return $this->belongsTo(Style::class, 'style_id');
    }

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'produk_id');
    }
}
