<?php
// app/Http/Controllers/JadwalShalatController.php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\Province;
use App\Models\Regency;
use App\Models\sholat;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class JadwalShalatController extends Controller
{
    public function index(Request $request)
    {
        $category = kategori::all();
        $provinces = Province::all();
        $regencies = Regency::all();
        $jadwalfront = sholat::all();

        $year = $request->input('year', date('Y'));
        $month = $request->input('month', date('m'));

        return view('front.jadwalshalat.index', [
            'category' => $category,
            'provinces' => $provinces,
            'regencies' => $regencies,
            'jadwalfront' => $jadwalfront
        ]);
    }
}
