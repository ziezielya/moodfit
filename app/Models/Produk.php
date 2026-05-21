<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
protected $fillable = ['nama_produk','harga','gambar','style_id'];

public function styles()
{
    return $this->belongsTo(Style::class);
}

public function pembayarans(){
    return $this->hasMany(Pembayaran::class);
}
}
