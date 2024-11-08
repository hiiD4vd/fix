<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = ['produk_id', 'jumlah', 'diskon_id'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function diskon()
    {
        return $this->belongsTo(Diskon::class);
    }
}
