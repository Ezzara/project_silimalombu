<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';
    public $timestamps = true;
    protected $primarykey = 'kd_order';

    protected $casts = [
        'jumlah' => 'float',
        'total' => 'float'
    ];

    protected $fillable = [
        'kd_order',
        'uname',
        'jumlah',
        'alamat',
        'tgl_transaksi',
        'total'
    ];
}
