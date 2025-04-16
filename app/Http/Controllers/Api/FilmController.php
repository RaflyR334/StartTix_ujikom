<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;
use Storage;
use Str;
use Validator;

class FilmController extends Controller
{
    public function index()
    {
        $film = Film::with('genre')->latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'daftar film',
            'data' => $film,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|unique:films',
            'slug' => 'required',
            'deskripsi' => 'required',
            'genre_id' => 'required',
            'tahun_rilis' => 'required',
            'durasi' => 'required',
            'age_rating' => 'required',
            'harga' => 'required',
            'status' => 'required|in:coming_soon,playing,ended',
            'poster' => 'required|image|mimes:png,jpg|max:2048', // Validasi untuk poster
            'trailer' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'validasi gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            // Pastikan file poster ada
            if ($request->hasFile('poster')) {
                $path = $request->file('poster')->store('public/films');
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'File poster tidak ditemukan',
                ], 422);
            }

            // Simpan data film
            $film = new Film;
            $film->judul = $request->judul;
            $film->slug = Str::slug($request->judul);
            $film->deskripsi = $request->deskripsi;
            $film->genre_id = $request->genre_id;
            $film->tahun_rilis = $request->tahun_rilis;
            $film->durasi = $request->durasi;
            $film->age_rating = $request->age_rating;
            $film->harga = $request->harga;
            $film->status = $request->status;
            $film->poster = $path;
            $film->trailer = $request->trailer;
            $film->save();

            return response()->json([
                'success' => true,
                'message' => 'film berhasil dibuat',
                'data' => $film,
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'terjadi kesalahan',
                'errors' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(string $id)
    {
        try {
            $film = Film::findOrFail($id)->with('genre')->first();
            return response()->json([
                'success' => true,
                'message' => 'detail film',
                'data' => $film,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'film tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'slug' => 'required',
            'deskripsi' => 'required',
            'genre_id' => 'required',
            'tahun_rilis' => 'required',
            'durasi' => 'required',
            'age_rating' => 'required',
            'harga' => 'required',
            'status' => 'required|in:coming_soon,playing,ended',
            'poster' => 'nullable|image|mimes:png,jpg|max:2048', // Poster tidak wajib diupdate
            'trailer' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'validasi gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $film = Film::findOrFail($id);

            // Cek apakah ada file poster yang diupload
            if ($request->hasFile('poster')) {
                // Hapus poster lama
                Storage::delete($film->poster);
                $path = $request->file('poster')->store('public/films');
                $film->poster = $path;
            }

            // Update informasi film lainnya
            $film->judul = $request->judul;
            $film->slug = Str::slug($request->judul);
            $film->deskripsi = $request->deskripsi;
            $film->genre_id = $request->genre_id;
            $film->tahun_rilis = $request->tahun_rilis;
            $film->durasi = $request->durasi;
            $film->age_rating = $request->age_rating;
            $film->harga = $request->harga;
            $film->status = $request->status;
            $film->trailer = $request->trailer;
            $film->save();

            return response()->json([
                'success' => true,
                'message' => 'film berhasil diperbarui',
                'data' => $film,
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'terjadi kesalahan',
                'errors' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            $film = Film::findOrFail($id);
            // Hapus poster
            Storage::delete($film->poster);
            $film->delete();

            return response()->json([
                'success' => true,
                'message' => 'film ' . $film->judul . ' berhasil dihapus',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'film tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }
}  