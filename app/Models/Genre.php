<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

     protected $fillable = [
        'nama_genre',
        'slug',
    ];
    public $timestamps = true;

    public function film(){
        return $this->hasMany(Film::class);
    }
}
