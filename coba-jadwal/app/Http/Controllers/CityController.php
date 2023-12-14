<?php

namespace App\Http\Controllers;

use App\Models\city;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CityController extends Controller
{
    public function fetchAndSaveCities()
    {
        // Ambil data dari API
        $apiResponse = Http::get('https://api.myquran.com/v1/sholat/kota/semua');

        // Proses data jika berhasil diambil
        if ($apiResponse->successful()) {
            $citiesFromApi = $apiResponse->json();
            
            // Simpan data ke database
            foreach ($citiesFromApi as $apiCity) {
                City::create([
                    'id_kota' => $apiCity['id'],
                    'name' => $apiCity['lokasi'],
                ]);
            }

            return response()->json(['message' => 'Data kota berhasil diambil dan disimpan.']);
        } else {
            return response()->json(['message' => 'Gagal mengambil data kota dari API.']);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(city $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(city $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, city $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(city $city)
    {
        //
    }
}
