<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Iklan;
use App\Models\kategori;
use App\Models\sholat;
use App\Models\Slide;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $category = kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();
        $jadwalfront = sholat::all();

        return view('front.home', [
            'category' => $category,
            'artikel' => $artikel,
            'slide' => $slide,
            'jadwalfront' => $jadwalfront
        ]);
    }

    public function detail($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        $category = kategori::all();
        $iklanA = Iklan::where('id', '1')->first();
        $postinganTerbaru = Artikel::orderBy('created_at', 'DESC')->limit('5')->get();

        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel,
            'category' => $category,
            'iklanA' => $iklanA,
            'postinganTerbaru' => $postinganTerbaru
        ]);
    }

    public function article()
    {
        $category = kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();

        return view('front.detail-page', [
            'category' => $category,
            'artikel' => $artikel,
            'slide' => $slide
        ]);
    }

    public function kontak()
    {
        $category = kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();

        return view('front.kontak', [
            'category' => $category,
            'artikel' => $artikel,
            'slide' => $slide
        ]);
    }
}
