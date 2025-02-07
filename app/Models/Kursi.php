<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_kursi',
        'tipe_kursi',
        'status_kursi',
    ];
    public $timestamps = true;
}
