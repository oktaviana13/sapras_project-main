<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sman extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'npsn',
        'nama',
        'alamat',
        'kabupaten/kota'
    ];
}
