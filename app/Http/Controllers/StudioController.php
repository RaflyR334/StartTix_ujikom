<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studio;
use App\Models\Bioskop;
Use Alert;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studio = Studio::all();
        return view('admin.studio.index', compact('studio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bioskop = Bioskop::all();
        return view('admin.studio.create', compact('bioskop'));
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
            'bioskop_id' => 'required',
            'nama_studio' => 'required|unique:studios,bioskop_id',
            'kapasitas' => 'required',
        ], [
            'nama_studio.unique' => 'Nama studio sudah ada. Silakan pilih nama lain.'
        ]);

        $studio = new Studio();
        $studio ->bioskop_id = $request->bioskop_id;
        $studio->nama_studio = $request->nama_studio;
        $studio->kapasitas = $request->kapasitas;
        $studio->save();

        Alert::success('success', "data berhasil ditambah")->autoClose(1000);
        return redirect()->route('studio.index');
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
        $bioskop = Studio::findOrFail($id);
        return view('admin.studio.edit', compact('studio'));
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
            'bioskop_id' => 'required',
            'nama_studio' => 'required',
            'kapasitas' => 'required',
        ]);

        $studio = Studio::findOrFail($id);
        $studio->bioskop_id = $request->bioskop_id;
        $studio->nama_studio = $request->nama_studio;
        $studio->kapasitas = $request->kapasitas;
        $studio->save();

        Alert::success('success', "data berhasil diubah")->autoClose(1000);
        return redirect()->route('studio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studio = Studio::findOrFail($id);
        $studio->delete();
        Alert::success('success', "data berhasil dihapus")->autoClose(1000);
        return redirect()->route('studio.index');
    }
}
