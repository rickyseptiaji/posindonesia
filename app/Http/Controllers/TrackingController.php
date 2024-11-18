<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TrackingController extends Controller
{

    public function index() {
        return view('pages.tracking');
    }

    public function tracking(Request $req)
    {
        $apiKey = 'eb33b5c927f4a9d38653f5e2c19cf282297567d460d276c74df1cedc0f05a25c';
        $courier = 'pos';
        $awb = $req->input('awb');

        $client = new Client();
        $url = "https://api.binderbyte.com/v1/track";

        try {
            $response = $client->request('GET', $url, [
                'query' => [
                    'api_key' => $apiKey,
                    'courier' => $courier,
                    'awb' => $awb
                ]
            ]);

            $body = $response->getBody();
            $data = json_decode($body, true);

            return view('pages.tracking', ['data' => $data]);
        } catch (\Throwable $e) {
            return view('pages.tracking', [
                'error' => 'Unable to fetch tracking data',
                'message' => $e->getMessage()
            ]);
        }
    }
}