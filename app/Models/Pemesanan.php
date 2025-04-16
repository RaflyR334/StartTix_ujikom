<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jadwal_id',
        'kursi_id',
        'nama_pemesan',
        'total_harga'
    ];
    public $timestamps = true;

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }

    public function kursi()
    {
        return $this->belongsTo(Kursi::class);
    }
    public function pembayaran()
    {
    return $this->hasOne(Pembayaran::class);
    }
}

