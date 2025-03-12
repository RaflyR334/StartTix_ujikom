<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bioskop;
Use Alert;

class BioskopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bioskop = Bioskop::all();
        return view('admin.bioskop.index', compact('bioskop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bioskop.create');
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
            'nama_bioskop' => 'required|unique:bioskops,nama_bioskop',
            'alamat' => 'required',
        ],[
            'nama_bioskop.unique' => 'Nama bioskop sudah ada. Silakan pilih nama lain.',
        ]);

        $bioskop = new Bioskop();
        $bioskop->nama_bioskop = $request->nama_bioskop;
        $bioskop->alamat = $request->alamat;
        $bioskop->save();

        Alert::success('success', "data berhasil ditambah")->autoClose(1000);
        return redirect()->route('bioskop.index');
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
        $bioskop = Bioskop::findOrFail($id);
        return view('admin.bioskop.edit', compact('bioskop'));
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
            'nama_bioskop' => 'required',
            'alamat' => 'required',
        ]);

        $bioskop = Bioskop::findOrFail($id);
        $bioskop->nama_bioskop = $request->nama_bioskop;
        $bioskop->alamat = $request->alamat;
        $bioskop->save();

        Alert::success('success', "data berhasil diubah")->autoClose(1000);
        return redirect()->route('bioskop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bioskop = Bioskop::findOrFail($id);
        $bioskop->delete();
        Alert::success('success', "data berhasil dihapus")->autoClose(1000);
        return redirect()->route('bioskop.index');
    }
}
