<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table= 'kategori';
    public $timestamps = true;
    protected $primarykey = 'id';
    public $incrementing = false;

    protected $casts = [
    ];
    protected $fillable = [
        'id',
        'nm_kategori',
    ];

}
