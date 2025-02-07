<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Alert;

class FilmController extends Controller
{

    public function index()
    {
        $film = Film::all();
        return view('admin.film.index', compact('film'));
    }

    public function create()
    {
        $genre = Genre::all();
        return view('admin.film.create', compact('genre'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'slug' => 'required',
            'deskripsi' => 'required',
            'genre_id' => 'required',
            'tahun_rilis' => 'required',
            'durasi' => 'required',
            'age_rating' => 'required',
            'harga' => 'required',
            'status' => 'required|in:coming_soon,playing,ended',
            'poster' => 'required|image|mimes:jpeg,jpg,png|max:10048',
            'trailer' => 'required',
        ]);

        $film = new Film();
        $film->judul = $request->judul;
        $film->slug = $request->slug;
        $film->deskripsi = $request->deskripsi;
        $film->genre_id = $request->genre_id;
        $film->tahun_rilis = $request->tahun_rilis;
        $film->durasi = $request->durasi;
        $film->age_rating = $request->age_rating;
        $film->harga = $request->harga;
        $film->status = $request->status;
        $film->trailer = $request->trailer;

        // Upload poster
        $poster = $request->file('poster');
        $poster->storeAs('public/films', $poster->hashName());
        $film->poster = $poster->hashName();
        $film->save();


        Alert::success('Success', 'Data berhasil ditambah')->autoClose(1000);
        return redirect()->route('film.index');
    }

    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('admin.film.show', compact('film'));
    }

    public function edit($id)
    {
        $genre = Genre::all();
        $film = Film::findOrFail($id);
        return view('admin.film.edit', compact('film', 'genre'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'slug' => 'required',
            'deskripsi' => 'required',
            'genre_id' => 'required',
            'tahun_rilis' => 'required',
            'durasi' => 'required',
            'age_rating' => 'required',
            'harga' => 'required',
            'status' => 'required',
            'poster' => 'required|image|mimes:jpeg,jpg,png|max:10048',
            'trailer' => 'required',
        ]);

        $film = Film::findOrFail($id);
        $film->judul = $request->judul;
        $film->slug = $request->slug;
        $film->deskripsi = $request->deskripsi;
        $film->genre_id = $request->genre_id;
        $film->tahun_rilis = $request->tahun_rilis;
        $film->durasi = $request->durasi;
        $film->age_rating = $request->age_rating;
        $film->harga = $request->harga;
        $film->status = $request->status;
        $film->trailer = $request->trailer;

        // Upload poster if new poster is provided
        if ($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $poster->storeAs('public/films', $poster->hashName());
            Storage::delete('public/films/' . $film->poster);
            $film->poster = $poster->hashName();
        }

        $film->save();

        Alert::success('Success', 'Data berhasil diubah')->autoClose(1000);
        return redirect()->route('film.index');
    }

    public function destroy($id)
    {
        $film = Film::findOrFail($id);

        // Delete image from storage
        Storage::delete('public/films/' . $film->image);

        // Delete the product
        $film->delete();

        Alert::success('Success', 'Data berhasil dihapus')->autoClose(1000);
        return redirect()->route('film.index');
    }
}
