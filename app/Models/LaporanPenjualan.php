<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPenjualan extends Model
{
    use HasFactory;

    protected $table = 'laporan_penjualan';

    protected $fillable = ['produk_id', 'diskon_id', 'jumlah', 'total_harga'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function diskon()
    {
        return $this->belongsTo(Diskon::class);
    }
}
