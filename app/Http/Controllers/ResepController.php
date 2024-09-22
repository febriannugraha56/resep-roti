<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ResepController extends Controller
{
    // Menampilkan daftar resep
    public function index()
    {
        $reseps = Resep::all();
        return view('reseps.index', compact('reseps'));
    }

    // Menampilkan form untuk membuat resep baru
    public function create()
    {
        return view('reseps.create');
    }

    // Menyimpan resep baru


    public function store(Request $request)
    {
        $request->validate([
            'nama_roti' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Tambahkan format yang diinginkan
            // Validasi lainnya...
        ]);
    
        // Menyimpan gambar
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public'); // Menyimpan di storage/app/public/images
        }
    
        // Membuat resep baru
        Resep::create([
            'nama_roti' => $request->nama_roti,
            'deskripsi' => $request->deskripsi,
            'bahan' => $request->bahan,
            'langkah' => $request->langkah,
            'image' => $path ?? null, // Menyimpan path gambar
        ]);
    
        return redirect()->route('reseps.index')->with('success', 'Resep berhasil ditambahkan.');
    }
    

    // Menampilkan resep tertentu
    public function show($id)
    {
        $resep = Resep::find($id);
        return view('reseps.show', compact('resep'));
    }

    // Menampilkan form edit untuk resep tertentu
    public function edit($id)
    {
        $resep = Resep::find($id);
        return view('reseps.edit', compact('resep'));
    }

    // Mengupdate resep yang sudah ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_roti' => 'required',
            'deskripsi' => 'required',
            'bahan' => 'required',
            'langkah' => 'required',
        ]);

        $resep = Resep::find($id);
        $resep->update($request->all());

        return redirect()->route('reseps.index')
                         ->with('success', 'Resep roti berhasil diupdate');
    }

    // Menghapus resep
    public function destroy($id)
    {
        $resep = Resep::find($id);
        $resep->delete();

        return redirect()->route('reseps.index')
                         ->with('success', 'Resep roti berhasil dihapus');
    }
}

