<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'lokasi' => Lokasi::all(),
        ];

        return view('lokasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lokasi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lokasi = Lokasi::create([
            'jam' => $request->jam,
            'isi' => $request->isi,
        ]);

        if ($lokasi) {
            return redirect()->route('lokasi.index')->with(['success' => 'Data Berhasil Disimpan']);
        } else {
            return redirect()->route('lokasi.index')->with(['error' => 'Data Gagal Disimpan']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Lokasi $lokasi)
    {
        return view('lokasi.tampilan', compact('lokasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lokasi = Lokasi::find($id);
        return view('lokasi.update', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $lokasi = Lokasi::findOrFail($id);

        if ($request->file('foto') == "") {
            $lokasi->update([
                'jam' => $request->jam,
                'isi' => $request->isi,
            ]);
        } else {
            Storage::disk("local")->delete("public/lokasi/" . $lokasi->foto);
            $foto = $request->file("foto");
            $foto->storeAs("public/lokasi", $foto->hashName());
            $lokasi->update([
                'jam' => $request->jam,
                'isi' => $request->isi,
                'foto' => $foto->hashName(),
            ]);
        }

        if ($lokasi) {
            return redirect()->route('lokasi.index')->with(['success' => 'Data Berhasil Diubah!']);
        } else {
            return redirect()->route('lokasi.index')->with(['error'=> 'Data Gagal Diubah']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        Storage::disk("local")->delete("public/lokasi/" . $lokasi->foto);
        $lokasi->delete();

        if ($lokasi) {
            return redirect()->route("lokasi.index")->with(["success" => "Data Berhasil Dihapus"]);
        } else {
            return redirect()->route("lokasi.index")->with(["error" => "Data Gagal Dihapus"]);
        }
    }
}
