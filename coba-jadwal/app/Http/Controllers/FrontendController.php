<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Iklan;
use App\Models\kategori;
use App\Models\Slide;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $category = kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();


        return view('front.home', [
            'category' => $category,
            'artikel' => $artikel,
            'slide' => $slide,

        ]);
    }

    public function detail($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        $category = kategori::all();
        $iklanA = Iklan::where('id', '1')->first();
        $postinganLama = Artikel::orderBy('created_at', 'asc')->take('3')->get();

        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel,
            'category' => $category,
            'iklanA' => $iklanA,
            'postinganLama' => $postinganLama
        ]);
    }
    public function article()
    {
        $category = kategori::all();
        $artikel = Artikel::orderBy('created_at', 'DESC')->paginate(5);
        $slide = Slide::all();

        $artikel = Artikel::latest();

        if (request('search')) {
            $artikel->where('judul', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('front.detail-page', [
            'category' => $category,
            'artikel' => $artikel->paginate(5)->withQueryString(),
            'slide' => $slide

        ]);
    }

    public function notfound()
    {
        $category = kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();

        return view('front.notfound', [
            'category' => $category,
            'artikel' => $artikel,
            'slide' => $slide
        ]);
    }

    public function categories($category) 
    {
        $artikel = Artikel::where('category', $category)->get();
        $slide = Slide::all();
        $category = kategori::all();

        return view('detail-page', [
            'category' => $category,
            'artikel' => $artikel,
            'slide' => $slide
        ]);

    }
}
