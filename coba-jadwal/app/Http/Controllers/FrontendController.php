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
        // Filter artikel yang memiliki status is_active '1' (Publish)
        $artikel = Artikel::where('is_active', '1')->get();
        $slide = Slide::where('status', '1')->get();

        return view('front.home', [
            'category' => $category,
            'artikel' => $artikel,
            'slide' => $slide,

        ]);
    }

    public function detail($slug)
    {
        $artikel = Artikel::where('slug', $slug)
            ->where('is_active', '1')
            ->firstOrFail();
        $category = kategori::all();
        $iklanA = Iklan::where('id', '1')
            ->where('status', '1')
            ->first();
        $postinganLama = Artikel::where('is_active', '1') // Filter hanya artikel yang is_active '1'
            ->orderBy('created_at', 'asc')
            ->take('3')
            ->get();

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

        // Filter artikel yang memiliki status is_active '1' (Publish)
        $artikel->where('is_active', '1');
        return view('front.detail-page', [
            'category' => $category,
            'artikel' => $artikel->paginate(5)->withQueryString(),
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

    // public function categories($category)
    // {
    //     $artikel = Artikel::where('category', $category)->get();
    //     $slide = Slide::all();
    //     $category = kategori::all();

    //     return view('detail-page', [
    //         'category' => $category,
    //         'artikel' => $artikel,
    //         'slide' => $slide
    //     ]);
    // }


    public function kategori($slug)
    {
        $category = kategori::all();
        $kategori = kategori::where('slug', $slug)->firstOrFail();
        $artikelByKategori = Artikel::where('kategori_id', $kategori->id)
            ->where('is_active', '1')
            ->paginate(5);

        return view('front.kategori', [
            'category' => $category,
            'kategori' => $kategori,
            'artikelByKategori' => $artikelByKategori
        ]);
    }
}
