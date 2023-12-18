<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iklan = Iklan::all();
        return view('back.iklan.index', compact('iklan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('back.iklan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => 'required',
        //     'gambar_iklan' => 'mimes:png,jpg,webp,jpeg,gif,bmp'
        // ]);

        // $data = $request->all();
        // $data['gambar_iklan'] = $request->file('gambar_iklan')->store('iklan');

        // Iklan::create($data);

        // Alert::success('Success', 'Data Berhasil Ditambah');
        // return redirect()->route('iklan.index');
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
        $iklan = Iklan::find($id);

        return view('back.iklan.edit', compact('iklan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'gambar_iklan' => 'mimes:png,jpg,jpeg,gif,bmp'
        ]);

        if (empty($request->file('gambar_iklan'))) {
            $iklan = Iklan::find($id);
            $iklan->update([
                'judul' => $request->judul,
                'link' => $request->link,
                'status' => $request->status,
            ]);

            Alert::warning('Success', 'Data Berhasil Diupdate');
            return redirect()->route('iklan.index');
        } else {
            $iklan = Iklan::find($id);
            Storage::delete($iklan->gambar_iklan);
            $iklan->update([
                'judul' => $request->judul,
                'link' => $request->link,
                'status' => $request->status,
                'gambar_iklan' => $request->file('gambar_iklan')->store('iklan'),
            ]);

            Alert::warning('Success', 'Data Berhasil Diupdate');
            return redirect()->route('iklan.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $iklan = Iklan::find($id);

        // Storage::delete($iklan->gambar_iklan);

        // $iklan->delete();

        // Alert::error('Success', 'Data Berhasil Dihapus');
        // return redirect()->route('iklan.index');
    }
}
