<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function showWeather()
    {
        $apiKey = env('OPENWEATHERMAP_API_KEY');
        $cityId = "3816237";
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?id={$cityId}&appid={$apiKey}&units=metric";;


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        $datos = json_decode($response, true);

        return view('entrega/entrega', ['datos' => $datos]);
    }
}
