<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    // Menampilkan halaman pembayaran
    public function show($id)
    {
        $pembayaran = Pembayaran::with('pemesanan.jadwal.film')->findOrFail($id);

        return view('pembayaran.show', compact('pembayaran'));
    }

    // Simpan bukti bayar dan ubah status
    public function update(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        $request->validate([
            'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('bukti_bayar')->store('bukti-bayar', 'public');

        $pembayaran->update([
            'bukti_bayar' => $path,
            'status' => 'berhasil',
        ]);

        return redirect()->route('home')->with('success', 'Pembayaran berhasil dikonfirmasi!');
    }
}
