<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'genre_id',
        'tahun_rilis',
        'poster',
        'durasi',
        'age_rating',
        'harga',
        'status',
        'trailer'
    ];
    public $timestamps = true;

    public function genre(){
        return $this->BelongsTo(Genre::class);
    }
}
