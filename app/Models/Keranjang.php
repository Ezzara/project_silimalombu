<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjang';
    public $timestamps = true;

    protected $casts = [
        'jumlah',
        'harga_satuan',
        'harga_total'
    ];
    protected $fillable = [
        'id',
        'nm_produk',
        'gambar',
        'jumlah',
        'harga_satuan',
        'harga_total'
    ];
}
