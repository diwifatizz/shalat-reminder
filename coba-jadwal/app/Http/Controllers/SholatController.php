<?php

namespace App\Http\Controllers;

use App\Models\sholat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SholatController extends Controller
{

    public function fetchDataAndSaveToDatabase($id_lokasi, $tahun, $bulan)
    {
        $url = "https://api.myquran.com/v1/sholat/jadwal/{$id_lokasi}/{$tahun}/{$bulan}";

        // Mengambil data dari API
        $response = Http::get($url);

        // Memeriksa apakah request berhasil atau tidak
        if ($response->successful()) {
            $data = $response->json()['data']['jadwal'];

            // Simpan data ke dalam database
            foreach ($data as $jadwal) {
                $data =  [
                    'lokasi' => $id_lokasi,
                    'tanggal' => $jadwal['date'],
                    'imsak' => $jadwal['imsak'],
                    'subuh' => $jadwal['subuh'],
                    'terbit' => $jadwal['terbit'],
                    'dhuha' => $jadwal['dhuha'],
                    'dzuhur' => $jadwal['dzuhur'],
                    'ashar' => $jadwal['ashar'],
                    'maghrib' => $jadwal['maghrib'],
                    'isya' => $jadwal['isya'],
                ];

                Sholat::updateOrCreate(
                    $data
                );
            }

            // Berhasil mendapatkan dan menyimpan data
            return response()->json(['message' => 'Data fetched and saved successfully']);
        } else {
            // Jika request tidak berhasil, Anda dapat menangani kesalahan di sini
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwalshalat = sholat::all();

        return view('back.Jadwal.index', [
            'jadwalshalat' => $jadwalshalat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(sholat $sholat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sholat $sholat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sholat $sholat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sholat $sholat)
    {
        //
    }
}
