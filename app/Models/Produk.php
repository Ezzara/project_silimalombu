<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table= 'produk';
    public $timestamps = true;
<<<<<<< Updated upstream
    protected $primarykey = 'id';
    public $incrementing = false;
    

    protected $casts = [
        'jmlh_stok' => 'float',
        'harga' => 'float',
    ];
    protected $fillable = [
<<<<<<< Updated upstream
        'id',
        'nm_produk',
        'kd_kategori',
        'gambar',
        'keterangan',
        'jmlh_stok',
        'harga'

    ];

}
