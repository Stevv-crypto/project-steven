<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Khusus laravel dibawah 12
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory; // Khusus laravel dibawah 12
    protected $table = 'tblproduk';
    public $timestamps = false;
}
