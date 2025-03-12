<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $fillable = [
        'bioskop_id',
        'nama_studio',
        'kapasitas',
    ];
    public $timestamps = true;

    public function bioskop(){
        return $this->BelongsTo(Bioskop::class);
    }
}
