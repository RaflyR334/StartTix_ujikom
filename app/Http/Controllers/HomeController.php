<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth::user();
        if ($user->isAdmin == 1){
            $film = Film::all();
            $user = User::count('id');
            return view('admin.indexadmin', compact('film','user'));
            $user = User::all();
            return view('admin.indexadmin', compact('user'));
        } else {
            $film = Film::all();
            $user = User::count('id');
            return view('index', compact('film','user'));
            $user = User::all();
            return view('admin.indexadmin', compact('user'));
        }

    }
}
