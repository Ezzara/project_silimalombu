<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table= 'kelola_order';
    public $timestamps = true;
    protected $primarykey = 'id';
    public $incrementing = false;

    protected $casts = [
    ];
    protected $fillable = [
        'id',
        'user_id',
        'username',
        'email',
        'nama_penerima',
        'alamat_lengkap',
        'kelurahan',
        'kecamatan',
        'kab_kota',
        'kd_provinsi',
        'kd_pos',
        'telepon',
        'kd_promo',
        'catatan',
        'status',
    ];
}
