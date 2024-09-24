<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ResepController extends Controller
{
  
    public function index()
    {
        $reseps = Resep::all();
        return view('reseps.index', compact('reseps'));
    }

    
    public function create()
    {
        return view('reseps.create');
    }

   


    public function store(Request $request)
    {
        $request->validate([
            'nama_roti' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            
        ]);
    
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public'); 
        }
    
        // Membuat resep 
        Resep::create([
            'nama_roti' => $request->nama_roti,
            'deskripsi' => $request->deskripsi,
            'bahan' => $request->bahan,
            'langkah' => $request->langkah,
            'image' => $path ?? null, 
        ]);
    
        return redirect()->route('reseps.index')->with('success', 'Resep berhasil ditambahkan.');
    }
    

    // Menampilkan resep 
    public function show($id)
    {
        $resep = Resep::find($id);
        return view('reseps.show', compact('resep'));
    }

    // edit resep 
    public function edit($id)
    {
        $resep = Resep::find($id);
        return view('reseps.edit', compact('resep'));
    }

    // Mengupdate resep 
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

