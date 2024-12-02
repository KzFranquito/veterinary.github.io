<?php

namespace App\Http\Controllers;

use App\Services\TwitterService;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    public function buscarUsuario(Request $request)
    {
        $search = $request->input('hashtag');
        $response = $this->queryTwitter($search);
        $json = json_decode($response);
        
        if ($json && isset($json->data)) {
            $data = [
                'id' => $json->data->id ?? 'ID no disponible',
                'name' => $json->data->name ?? 'Nombre no disponible',
                'username' => $json->data->username ?? 'Usuario no disponible'
            ];
        } else {
            $data = null;
        }

        return view('twitter', compact('data'));
    }

    private function queryTwitter($search)
    {
        $url = "https://api.x.com/2/users/by/username/" . $search;
        $bearer_token = "AAAAAAAAAAAAAAAAAAAAACwfwgEAAAAA2%2BOq2SORxZTdCnuGwKsx8lYgeuI%3DfxfrooLXrbGc0QbMiUfkWgNt55Bryp45qCpwy0sc9GR1dhauI7";

        $header = ['Authorization: Bearer ' . $bearer_token];
        $options = [
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_HEADER => false,
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false
        ];

        $feed = curl_init();
        curl_setopt_array($feed, $options);
        $json = curl_exec($feed);
        curl_close($feed);

        return $json;
    }
}
