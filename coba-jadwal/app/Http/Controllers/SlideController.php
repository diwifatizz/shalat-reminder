<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slide = Slide::all();
        return view('back.slide.index', compact('slide'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_slide' => 'required',
            'link' => 'required',
            'gambar_slide' => 'required',
            'status' => 'required',

        ]);

        $slide = [
            'judul_slide' => $request->judul_slide,
            'link' => $request->link,
            'gambar_slide' => $request->gambar_slide,
            'status' => $request->status,
        ];

        Slide::create($slide);

        Alert::warning('Success', 'Data berhasil ditambahkan');
        return redirect()->route('slide.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slide = slide::find($id);
        if (!$slide) {


            Alert::error('Success', 'Data berhasil dihapus');
            return redirect()->back();
        }

        Storage::delete($slide->gambar_slide);

        $slide->delete();



        Alert::error('Success', 'Data berhasil dihapus');
        return redirect()->route('slide.index');
    }
}
