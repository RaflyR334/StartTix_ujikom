<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Film;
use App\Models\Bioskop;
use App\Models\Studio;
Use Alert;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('admin.jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $film = Film::all();
        $bioskop = Bioskop::all();
        $studio= Studio::all();
        return view('admin.jadwal.create', compact('film', 'bioskop', 'studio'));
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
            'film_id' => 'required',
            'bioskop_id' => 'required',
            'studio_id' => 'required',

            'tanggal' => 'required',
            'jam' => 'required',
        ]);

        $jadwal = new jadwal();
        $jadwal->film_id = $request->film_id;
        $jadwal->bioskop_id = $request->bioskop_id;
        $jadwal->studio_id= $request->studio_id;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->jam = $request->jam;
        $jadwal->save();

        Alert::success('success', "data berhasil ditambah")->autoClose(1000);
        return redirect()->route('jadwal.index');
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
        $film = Film::all();
        $bioskop = Bioskop::all();
        $studio= Studio::all();
        $jadwal = Jadwal::findOrFail($id);
        return view('admin.jadwal.edit', compact('jadwal', 'film', 'bioskop', 'studio'));
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
            'film_id' => 'required',
            'bioskop_id' => 'required',
            'studio_id' => 'required',

            'tanggal' => 'required',
            'jam' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->film_id = $request->film_id;
        $jadwal->bioskop_id = $request->bioskop_id;
        $jadwal->studio_id= $request->studio_id;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->jam = $request->jam;
        $jadwal->save();

        Alert::success('success', "data berhasil diubah")->autoClose(1000);
        return redirect()->route('jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        Alert::success('success', "data berhasil dihapus")->autoClose(1000);
        return redirect()->route('jadwal.index');
    }
}
