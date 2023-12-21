<?php
// app/Http/Controllers/JadwalShalatController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Province;
use App\Models\Regency;
use App\Models\kategori;
use App\Models\prayer;

class JadwalShalatController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan data provinsi dan kabupaten/kota
        $provinces = Province::all();
        $regencies = Regency::all();
        $category = kategori::all();

        $year = $request->input('year', date('Y'));
        $month = $request->input('month', date('m'));
        $day = $request->input('day', date('d'));
        $city = $request->input('city', 'pekanbaru');

        // Menyesuaikan relasi provinsi dengan kabupaten/kota
        $selectedProvince = $request->input('province');
        if ($selectedProvince) {
            $regencies = Province::find($selectedProvince)->regencies;
        }

        // Menyesuaikan jadwal shalat
        $client = new Client();
        $response = $client->get("https://api.aladhan.com/v1/calendarByCity", [
            'query' => [
                'city' => $city,
                'country' => 'Indonesia',
                'day' => $day,
                'month' => $month,
                'year' => $year,
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        // Menyimpan jadwal shalat ke database

        foreach ($data['data'] as $dataJadwal) {
            $formattedDate = date('Y-m-d', strtotime($dataJadwal['date']['gregorian']['date']));

            // Pastikan $selectedProvince tidak null sebelum menyimpan
            $regencyId = $selectedProvince ? $selectedProvince : 1; // Ganti 1 dengan nilai default yang sesuai

            // Hilangkan informasi zona waktu dari nilai waktu
            $fajrTime = date('H:i:s', strtotime($dataJadwal['timings']['Fajr']));
            $sunriseTime = date('H:i:s', strtotime($dataJadwal['timings']['Sunrise']));
            $dhuhrTime = date('H:i:s', strtotime($dataJadwal['timings']['Dhuhr']));
            $asrTime = date('H:i:s', strtotime($dataJadwal['timings']['Asr']));
            $sunsetTime = date('H:i:s', strtotime($dataJadwal['timings']['Sunset']));
            $maghribTime = date('H:i:s', strtotime($dataJadwal['timings']['Maghrib']));
            $ishaTime = date('H:i:s', strtotime($dataJadwal['timings']['Isha']));
            $imsakTime = date('H:i:s', strtotime($dataJadwal['timings']['Imsak']));

            prayer::create([
                'date' => $formattedDate,
                'regency_id' => $regencyId,
                'fajr' => $fajrTime,
                'sunrise' => $sunriseTime,
                'dhuhr' => $dhuhrTime,
                'asr' => $asrTime,
                'sunset' => $sunsetTime,
                'maghrib' => $maghribTime,
                'isha' => $ishaTime,
                'imsak' => $imsakTime,
            ]);
        }

        return view('front.jadwalshalat.index', [
            'jadwal' => $data['data'],
            'year' => $year,
            'month' => $month,
            'day' => $day,
            'city' => $city,
            'category' => $category,
            'provinces' => $provinces,
            'regencies' => $regencies,
            'selectedProvince' => $selectedProvince,
        ]);
    }
    public function getKabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $regencies = Regency::where('province_id', $id_provinsi)->get();

        foreach ($regencies as $regency) {
            echo "<option value ='$regency->name'>$regency->name</option>";
        }
    }
}
