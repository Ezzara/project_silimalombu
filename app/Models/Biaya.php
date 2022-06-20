<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    use HasFactory;

    protected $table = 'biaya';
    public $timestamps = true;
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $casts = [  
        'biaya_kirim',
    ];
    protected $fillable = [
        'id',
        'nm_provinsi',
        'biaya_kirim',
    ];
}
