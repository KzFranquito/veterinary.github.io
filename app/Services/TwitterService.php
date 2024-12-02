<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TwitterService
{
    protected $bearerToken;

    public function __construct()
    {
        $this->bearerToken = env('TWITTER_BEARER_TOKEN');
    }

    public function queryTwitter($username)
    {
        $url = "https://api.x.com/2/users/by/username/{$username}";

        $response = Http::timeout(30) // Aumenta el tiempo de espera a 30 segundos
            ->withHeaders([
                'Authorization' => 'Bearer ' . $this->bearerToken,
            ])->get($url);



        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
