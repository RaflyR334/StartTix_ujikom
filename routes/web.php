<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::group(['prefix'=>'admin', 'middleware'=>['auth',IsAdmin::class]], function (){
//     Route::get('/',function(){
//         return view('admin.indexadmin');
//     });

    // Route Lainnya ....
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('genre', App\Http\Controllers\GenreController::class);
    Route::resource('jadwal', App\Http\Controllers\JadwalController::class);
    Route::resource('film', App\Http\Controllers\FilmController::class);



    // Route::GET('/genre', [App\Http\Controllers\GenreController::class, 'index'])->name('genre.index');
    // Route::GET('/genre/tambah', [App\Http\Controllers\GenreController::class, 'create'])->name('genre.create');
    // Route::POST('/genre/store', [App\Http\Controllers\GenreController::class, 'store'])->name('genre.store');
    // Route::PUT('/genre/edit/{id}', [App\Http\Controllers\GenreController::class, 'update'])->name('genre.edit');
// });
