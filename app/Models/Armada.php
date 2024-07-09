<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    protected $table = 'armada';

    protected $fillable = [
        'id',
        'merek',
        'nopol',
        'thn_beli',
        'deskripsi',
        'kapasitas_kursi',
        'rating',
        'jenis_id',
      
    ];
    public $timestamps = false;
}
