<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    use HasFactory;

    protected $fillable = [
        'studio_id',
        'no_kursi',
        'tipe_kursi',
    ];
    public $timestamps = true;

    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
