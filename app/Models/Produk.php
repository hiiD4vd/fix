<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'nama', 'harga', 'kategori_id', 'stok_id', 'diskon_id'
    ];

    // Relasi ke kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    // Relasi ke stok
    public function stok()
    {
        return $this->belongsTo(Stok::class, 'stok_id');
    }

    // Relasi ke diskon
    public function diskon()
    {
        return $this->belongsTo(Diskon::class, 'diskon_id');
    }
}
