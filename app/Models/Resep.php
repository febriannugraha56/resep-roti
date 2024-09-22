<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    // Tambahkan field yang boleh diisi
    protected $fillable = [
        'nama_roti', 
        'deskripsi', 
        'bahan', 
        'langkah', 
        'image' // Tambahkan ini
    ];
    
}
