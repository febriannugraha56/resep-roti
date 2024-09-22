<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Models\Resep;
use Illuminate\Support\Facades\Auth;


Route::resource('reseps', ResepController::class);


Route::get('/', function () {
    $reseps = Resep::all();
    return view('welcome', compact('reseps'));
});

Route::get('/reseps/{id}', function ($id) {
    $resep = Resep::findOrFail($id);
    return view('show', compact('resep'));
})->name('reseps.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
