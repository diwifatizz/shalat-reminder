<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class AsmaulController extends Controller
{
    public function index()
    {
        $category = kategori::all();
        return view('front.asmaul-husna.index', [
            'category' => $category,
        ]);
    }
}
