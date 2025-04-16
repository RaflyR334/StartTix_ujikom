<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kursi;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    // Menampilkan form pemesanan (kursi)
    public function create(Request $request)
    {
        $jadwal = Jadwal::with('film', 'studio.kursi')->findOrFail($request->jadwal_id);
        $kursiTerpesan = Pemesanan::where('jadwal_id', $jadwal->id)->pluck('kursi_id')->toArray();

        return view('pemesanan.form', compact('jadwal', 'kursiTerpesan'));
    }

    // Simpan data pemesanan dan buat entri pembayaran
    public function store(Request $request)
    {
        $request->validate([
            'jadwal_id' => 'required|exists:jadwals,id',
            'kursi' => 'required|array',
            'nama_pemesan' => 'required|string|max:255',
        ]);

        $jadwal = Jadwal::with('film')->findOrFail($request->jadwal_id);
        $totalHarga = $jadwal->film->harga * count($request->kursi);

        $idPemesananUtama = null;

        foreach ($request->kursis as $idKursi) {
            $pemesanan = Pemesanan::create([
                'jadwal_id' => $jadwal->id,
                'kursi_id' => $idKursi,
                'nama_pemesan' => $request->nama_pemesan,
                'total_harga' => $totalHarga,
            ]);

            // Tandai pemesanan utama untuk pembayaran
            if (!$idPemesananUtama) {
                $idPemesananUtama = $pemesanan->id;

                // Buat pembayaran hanya satu kali (untuk semua kursi)
                Pembayaran::create([
                    'pemesanan_id' => $idPemesananUtama,
                    'metode' => 'Transfer', // default bisa diganti nanti
                    'status' => 'pending',
                ]);
            }
        }

        return redirect()->route('pembayaran.show', $idPemesananUtama)
                         ->with('success', 'Pemesanan berhasil! Lanjutkan ke pembayaran.');
    }
}
