<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webset extends Model
{
    use HasFactory;
    protected $table = 'websets';
    protected $fillable = ['namaweb','author','description','iglink','fblink','ytlink']; 
}
