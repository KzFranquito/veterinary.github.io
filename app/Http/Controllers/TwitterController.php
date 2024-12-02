<?php

namespace App\Http\Controllers;

use App\Services\TwitterService;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    protected $twitterService;

    public function __construct(TwitterService $twitterService)
    {
        $this->twitterService = $twitterService;
    }

    public function search(Request $request)
    {
        $username = $request->input('username');
        $result = $this->twitterService->queryTwitter($username);

        if ($result) {
            $id = $result['data']['id'];
            $name = $result['data']['name'];
            $username = $result['data']['username'];

            return view('twitter.twitter', compact('id', 'name', 'username'));
        }

        return view('twitter.twitter', ['error' => 'No se encontró el usuario']);
    }

}
