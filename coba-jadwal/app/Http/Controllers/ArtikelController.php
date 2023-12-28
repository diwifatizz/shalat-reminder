<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::all();

        // Mendapatkan role dari user yang sedang masuk
        $level = Auth::user()->level;

        // Jika user adalah admin, tampilkan semua artikel
        if ($level == 'admin') {
            $artikel = Artikel::all();
        } else {
            // Jika user adalah penulis, tampilkan hanya artikel yang ditulis oleh penulis tersebut
            $penulisId = Auth::user()->id;
            $artikel = Artikel::where('user_id', $penulisId)->get();
        }

        return view('back.artikel.index', [
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('back.artikel.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi form
        $this->validate($request, [
            'judul' => 'required',
            'gambar_artikel' => 'required',
            'is_active' => 'required',
        ]);


        $data = [
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'body' => $request->body,
            'kategori_id' => $request->kategori_id,
            'gambar_artikel' => $request->gambar_artikel,
            'is_active' => $request->is_active,
            'user_id' => Auth::id(),
            'views' => 0,
        ];


        // Menyimpan data artikel ke database
        Artikel::create($data);

        // Menampilkan pesan sukses dan mengarahkan kembali ke halaman index
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('artikel.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artikel = Artikel::find($id);
        $kategori = Kategori::all();


        return view('back.artikel.edit', [
            'artikel' => $artikel,
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'gambar_artikel' => 'required', 
        ]);

        $artikel = Artikel::find($id);

        // Update data artikel
        $artikel->update([
            'judul' => $request->judul,
            'body' => $request->body,
            'slug' => Str::slug($request->judul),
            'kategori_id' => $request->kategori_id,
            'gambar_artikel' => $request->gambar_artikel,
            'is_active' => $request->is_active,
            'user_id' => Auth::id(),
        ]);

        Alert::warning('Success', 'Data berhasil diupdate');
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::find($id);

        Storage::delete($artikel->gambar_artikel);

        $artikel->delete();


        Alert::error('Success', 'Data berhasil dihapus');
        return redirect()->route('artikel.index');
    }
}
