<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
  public function produks()
{
    return $this->hasMany(Produk::class);
}
}
