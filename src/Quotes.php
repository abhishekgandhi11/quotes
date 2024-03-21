<?php

// namespace Fhsinchy\Inspire;
namespace Abhishekgandhi11\Quotes;

use Illuminate\Support\Facades\Http;

class Quotes {
    public function getQuote() {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://quotes15.p.rapidapi.com/quotes/random/', [
            'headers' => [
                'X-RapidAPI-Host' => 'quotes15.p.rapidapi.com',
                'X-RapidAPI-Key' => '12e832b0eemsh78c115c1e2bba87p1d9bc1jsn637de7d91a2f',
            ],
        ]);
       
        $data = json_decode($response->getBody(), true);
       
        return [
            'quote' => $data['content'],
            'author' => $data['originator']['name'],
        ];
        // return $response['quote'] . ' -' . $response['author'];
    }
}