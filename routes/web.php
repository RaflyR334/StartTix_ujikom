<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PemesananController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin', 'middleware'=>['auth',IsAdmin::class]], function (){
    Route::get('/',function(){
        return view('admin.indexadmin');
    });

    // Route Lainnya ....
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('genre', App\Http\Controllers\GenreController::class);
    Route::resource('jadwal', App\Http\Controllers\JadwalController::class);
    Route::resource('film', App\Http\Controllers\FilmController::class);
    Route::resource('kursi', App\Http\Controllers\KursiController::class);
    Route::resource('studio', App\Http\Controllers\StudioController::class);
    Route::resource('bioskop', App\Http\Controllers\BioskopController::class);

});

// Route Frontend(depan)
Route::get('/', [FrontController::class, 'index']);
Route::get('film/{id}',[FrontController::class, 'show']);
Route::get('all-film',[FrontController::class, 'film']);
Route::get('about-us',[FrontController::class, 'about']);
Route::get('contact',[FrontController::class, 'contact']);
Route::get('faq',[FrontController::class, 'faq']);
Route::get('privacy-policy',[FrontController::class, 'privacy']);

Route::get('/pesan-tiket', [PemesananController::class, 'create'])->name('pesan.tiket');

// Pemesanan
Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');

// Pembayaran
Route::get('/pembayaran/{id}', [PembayaranController::class, 'show'])->name('pembayaran.show');
Route::put('/pembayaran/{id}', [PembayaranController::class, 'update'])->name('pembayaran.update');



// Route::GET('/genre', [App\Http\Controllers\GenreController::class, 'index'])->name('genre.index');
    // Route::GET('/genre/tambah', [App\Http\Controllers\GenreController::class, 'create'])->name('genre.create');
    // Route::POST('/genre/store', [App\Http\Controllers\GenreController::class, 'store'])->name('genre.store');
    // Route::PUT('/genre/edit/{id}', [App\Http\Controllers\GenreController::class, 'update'])->name('genre.edit');
