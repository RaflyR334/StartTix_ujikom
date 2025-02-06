<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
Use Alert;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = Genre::all();
        return view('admin.genre.index', compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.genre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_genre' => 'required',
            'slug' => 'required',
        ]);

        $genre = new Genre();
        $genre->nama_genre = $request->nama_genre;
        $genre->slug = $request->slug;
        $genre->save();

        Alert::success('success', "data berhasil ditambah")->autoClose(1000);
        return redirect()->route('genre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::findOrFail($id);
        return view('admin.genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_genre' => 'required',
            'slug' => 'required',
        ]);

        $genre = Genre::findOrFail($id);
        $genre->nama_genre = $request->nama_genre;
        $genre->slug = $request->slug;
        $genre->save();

        Alert::success('success', "data berhasil diubah")->autoClose(1000);
        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        Alert::success('success', "data berhasil dihapus")->autoClose(1000);
        return redirect()->route('genre.index');
    }
}
