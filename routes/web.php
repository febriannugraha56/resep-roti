<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Models\Resep;



Route::resource('reseps', ResepController::class);

// routes/web.php

Route::get('/', function () {
    $reseps = Resep::all();
    return view('welcome', compact('reseps'));
});

// Tambahkan route untuk menampilkan resep berdasarkan ID
Route::get('/reseps/{id}', function ($id) {
    $resep = Resep::findOrFail($id);
    return view('show', compact('resep'));
})->name('reseps.show');

