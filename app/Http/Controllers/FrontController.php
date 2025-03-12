<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\Bioskop;
use App\Models\Jadwal;
use App\Models\Studio;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $film = Film::paginate(3);
        return view('index', ['film'=>$film]);
    }

    public function film(){
        $film = Film::all();
        return view('film',['film'=>$film]);
    }


    public function show($id)
    {
    $film = Film::findOrFail($id);
    $bioskop = Bioskop::all();
    $jadwal = Jadwal::all();
    $studio = Studio::all();
    return view('detail', compact('film', 'bioskop', 'jadwal', 'studio'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }

    public function privacy()
    {
        return view('privacy');
    }

    // public function cart(){
    //     $produk = Produk::all();
    //     return view('cart',['produk'=>$produk]);
    // }
}
