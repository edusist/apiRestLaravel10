<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\PendingRequest;


class ApiExemploHelpers{

    private $api;
    
    public function __construct()
    {
        $this->api = Http::withHeaders([
            'Authorization' => 'Bearer'
        ]);
       
    }

    public function getApi(): PendingRequest
    {
        return $this->api;
    }

}
