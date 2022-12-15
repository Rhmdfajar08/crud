<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_tanaman',
        'nama_plants',
        'type',
        'growth',
        'notes',
    ];
}
