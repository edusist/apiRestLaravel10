<?php

namespace App\ServicesExternal\sportScore;
use App\ServicesExternal\Endpoints\HasSports;
use App\ServicesExternal\Endpoints\HasTeams;
// use app\ServicesExternal\sportScore\SportScoreService;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

/**
 * sportscore rapidapi API Serivice 
 * url: https://rapidapi.com/pt/tipsters/api/sportscore1/
 */

class SportScoreService{

    use HasSports; //Chamada do Trait
    use HasTeams;

    
    public PendingRequest $api; //PendingRequest

    public function  __construct(){

        $this->api = Http::withHeaders([
            'X-Rapidapi-Key' => 'c7a2dc09dfmshdcc6e5be3a27006p1e56f2jsnd48882198077',
            'X-Rapidapi-Host' => 'sportscore1.p.rapidapi.com',
        ])->baseUrl('https://sportscore1.p.rapidapi.com');
    }


}