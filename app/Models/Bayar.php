<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayar extends Model
{
    use HasFactory;
    protected $table= 'bayar';
    public $timestamps = true;
    protected $primarykey = 'id';
    public $incrementing = false;

    protected $casts = [
    ];
    protected $fillable = [
        'id',
        'nama',
        'nominal',
        'bukti',
        'telepon'
    ];
}
