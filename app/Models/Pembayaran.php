<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayarans';

    protected $fillable = [
        'produk_id',
        'nama_customer',
        'no_telp',
        'alamat',
        'ukuran_detail',
        'metode',
        'total',
        'tgl_pembayaran',
        'catatan'
    ];
}