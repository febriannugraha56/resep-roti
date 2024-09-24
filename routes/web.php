<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Models\Resep;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

// Route untuk login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

// Route untuk logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk dashboard (hanya bisa diakses oleh admin)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('reseps', ResepController::class); // CRUD hanya untuk admin
    
Route::get('/reseps/{id}', function ($id) {
    $resep = Resep::findOrFail($id);
    return view('show', compact('resep'));
})->name('reseps.show');

});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    $reseps = Resep::all();
    return view('welcome', compact('reseps'));
});



