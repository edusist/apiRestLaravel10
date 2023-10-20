<?php

namespace App\Http\Controllers;

use App\Facades\ApiExemploFacades;
use App\Helpers\ApiExemploHelpers;
use App\ServicesExternal\sportScore\SportScoreService;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Stream\Stream;
use Illuminate\Support\Collection;

class ApiController extends Controller
{
    public function __invoke()
    {

        $servico = new SportScoreService();



        //Busca os esportes
        // $response = $servico
        //     ->sports()
        //     ->get();


        $sport1 = $servico
            ->sports()
            ->get()
            ->first();
        // dd($sport1);



        //Busca os Times do esporte
        $response = $servico
            ->teams() //HasTeams Estância da Classe Teams
            ->fromSports($sport1)
            ->get();

        // dd($response);

        foreach ($response as $valor) {
            echo "<pre>";
            print_r($valor->id);
            echo "<br>";
            print_r($valor->name);
            echo "<br>";
            print_r($valor->slug);
            echo "<br>";
            print_r($valor->country);
            echo "<br>";
            print_r($valor->logo);
            echo "<br>";
            print_r($valor->name_translations);
            echo "</pre>";
        }

        // foreach ($response->json('data')  as $value) {


        //     echo "<pre>";            
        //     print_r($value['name']);             
        //     echo "<br>";
        //     echo "</pre>";
        // }
        // foreach ($value as $valor) {
        //     echo "<pre>";            
        //     print_r($valor); 
        //     // print_r($valor["slug"]);               
        //     echo "<br>";
        //     echo "</pre>";
        //     if ($valor["slug"] == "tennis") {

        //         // echo "<pre>";
        //         // print_r($valor['name_translations']);
        //         // // print_r($valor["slug"]);
        //         // echo "<br>";
        //         // echo "</pre>";                    

        //         foreach ($valor['name_translations'] as $v) {              

        //                 echo "<pre>";
        //                 print_r($v);
        //                 echo "<br>";                     
        //         }

        //     }
        // }

    }

    public function getPlaceholder()
    {

        $resposta = ApiExemploFacades::posts('/posts')
            ->object();


        foreach ($resposta  as $value) {

            echo "<pre>";
            print_r($value->id);
            echo "<br>";
            print_r($value->title);
            echo "<br>";
            print_r($value->body);
            echo "<br>";
            echo "</pre>";
        }
    }
}
  // ])->get('https://sportscore1.p.rapidapi.com/sports/1/teams?page=3&per_page=10');
        // $response = $servico->api->get('https://sportscore1.p.rapidapi.com/sports');

       // $client = new \GuzzleHttp\Client();

        // $response = $client->request(
        //     'GET',
        //     'https://sportscore1.p.rapidapi.com/sports/1/teams?page=1',
        //     [
        //         'headers' => [
        //             'X-RapidAPI-Host' => 'sportscore1.p.rapidapi.com',
        //             'X-RapidAPI-Key' => 'c7a2dc09dfmshdcc6e5be3a27006p1e56f2jsnd48882198077',
        //         ]
        //     ]
        // );

        // dd( json_decode($response->getBody(), true));