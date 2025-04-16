<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bioskop extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bioskop',
        'alamat',
    ];
    public $timestamps = true;

    public function studio()
    {
        return $this->hasMany(Studio::class);
    }
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
