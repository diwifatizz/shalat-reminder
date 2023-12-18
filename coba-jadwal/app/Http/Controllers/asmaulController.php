<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class asmaulController extends Controller
{
    public function index()
    {
        $category = kategori::all();
        return view('front.asmaul-husna.index', [
            'category' => $category,
        ]);
    }
}
