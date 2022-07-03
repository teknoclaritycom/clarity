<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;
    protected $table = 'kontens';
    protected $fillable = ['judul','deskripsi','slug','thumbnail','isikonten','kategori','penulis'];
}
