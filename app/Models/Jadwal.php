<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_id',
        'bioskop_id',
        'studio_id',
        'tanggal',
        'jam'
    ];
    public $timestamps = true;

    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }

    public function bioskop()
    {
        return $this->belongsTo(Bioskop::class);
    }

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
