<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        $country = $request->input('country', 'Indonesia');
        $city = $request->input('city', 'DefaultCity');

        $year = $request->input('year', date('Y'));
        $month = $request->input('month', date('m'));

        $client = new Client();
        $response = $client->get("https://api.aladhan.com/v1/calendarByCity?country=$country&city=$city", [
            'query' => [
                'city' => $city,
                'country' => $country,
                'month' => $month,
                'year' => $year,
            ],
        ]);

        $data = json_decode($response->getBody(), true);



        return view('front.home', [
            'jadwal' => $data['data'],
            'year' => $year,
            'month' => $month,
            'city' => $city,
        ]);
    }
}
