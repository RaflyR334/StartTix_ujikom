<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursi;
use App\Models\Studio;
Use Alert;

class KursiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kursi = Kursi::all();
        return view('admin.kursi.index', compact('kursi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studio= Studio::all();
        return view('admin.kursi.create', compact( 'studio'));
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
            'studio_id' => 'required',
            'no_kursi' => 'required|unique:kursis,no_kursi',
            'tipe_kursi' => 'required',
        ], [
            'no_kursi.unique' => 'Nomor kursi sudah ada. Silakan pilih nomor lain.'
        ]);

        $kursi = new Kursi();
        $kursi->studio_id= $request->studio_id;
        $kursi->no_kursi = $request->no_kursi;
        $kursi->tipe_kursi = $request->tipe_kursi;
        $kursi->save();

        Alert::success('success', "data berhasil ditambah")->autoClose(1000);
        return redirect()->route('kursi.index');
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
        $studio= Studio::all();
        $kursi = Kursi::findOrFail($id);
        return view('admin.kursi.edit', compact('kursi', 'studio'));
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
            'studio_id' => 'required',
            'no_kursi' => 'required',
            'tipe_kursi' => 'required',
        ]);

        $kursi = Kursi::findOrFail($id);
        $kursi->studio_id= $request->studio_id;
        $kursi->no_kursi = $request->no_kursi;
        $kursi->tipe_kursi = $request->tipe_kursi;
        $kursi->save();

        Alert::success('success', "data berhasil diubah")->autoClose(1000);
        return redirect()->route('kursi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kursi = Kursi::findOrFail($id);
        $kursi->delete();
        Alert::success('success', "data berhasil dihapus")->autoClose(1000);
        return redirect()->route('kursi.index');
    }
}
