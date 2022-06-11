<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table= 'produk';
    public $timestamps = true;

    protected $casts = [
        'jmlh_stok' => 'float',
        'harga' => 'float'
    ];
    protected $fillabel = [
        'id_produk',
        'nm_produk',
        'kd_kategori',
        'gambar',
        'keterangan',
        'jmlh_stok',
        'harga'

    ];
}
