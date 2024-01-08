<?php

namespace App\Http\Controllers;

use App\Models\Galeri; // Ganti model dari Kepala menjadi Galeri
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $data = [
            'galeri' => Galeri::all(),
        ];

        return view('galeri.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeri.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $foto->storeAs('public/galeri', $foto->hashName());
        $galeri = Galeri::create([
            'judul' => $request->judul,
            'foto' => $foto->hashName(),
            'tanggal' => $request->tanggal,
        ]);

        if ($galeri) {
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Disimpan']);
        } else {
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Disimpan']);
        }
    }

    // ... (method-method lainnya tetap sama)

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeri = Galeri::find($id);
        return view('galeri.update', compact('galeri'));
    }


    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        Storage::disk("local")->delete("public/galeri/" . $galeri->foto);
        $galeri->delete();

        if ($galeri) {
            return redirect()->route("galeri.index")->with(["success" => "Data Berhasil Dihapus"]);
        } else {
            return redirect()->route("galeri.index")->with(["error" => "Data Gagal Dihapus"]);
        }
    }
}
