<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    // Menentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'description',
    ];

    // Jika tabel yang digunakan tidak sesuai dengan nama model secara konvensi, tambahkan baris berikut:
    // protected $table = 'brands';
}
