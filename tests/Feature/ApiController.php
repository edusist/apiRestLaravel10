<?php

namespace App\Http\Controllers;

use App\Facades\ApiExemploFacades;
use App\Helpers\ApiExemploHelpers;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function __invoke()
    {
        


        // $response = Http::post('https://jsonplaceholder.typicode.com/users', [

        //     "name" => "Eduardo ",
        //     "username" => "Ribeiro"

        // ]);

        // $response = Http::get('https://jsonplaceholder.typicode.com/', [

        //     "id" => 200,
        //     "title" => "novo"
           
        // ]);

        // Http::retry(3, 100)->withQueryParameters([
        //     'name' => 'Taylor',
        //     'username' => "jonas",

        // ])->get('https://jsonplaceholder.typicode.com/users');

        // $response = Http::asForm()->post('https://jsonplaceholder.typicode.com/users', [

        //     "name" => "Eduardo ",
        //     "username" => "Ribeiro"
        // ]);
        // dd($response->json());

        // $photo = "C:\Users\Administrador\Pictures\Frente_rua_jaraguá.jpg";
        
        // $response = Http::withBody(
        //     base64_encode($photo), 'image/jpeg'
        // )->post('http://example.com/photos');
        // dd($response);

        // $response = Http::PUT('https://jsonplaceholder.typicode.com/users/3',[
        //        "name" => "Eduardo ",
        //     "username" => "Ribeiro"  
        // ]);

        $response = Http::DELETE('https://jsonplaceholder.typicode.com/posts?userId=1');
        // dd($response->json());

        // $response = Http::acceptJson()->get('https://jsonplaceholder.typicode.com/photos');


        // dd($response->json());
        foreach ($response->json() as $key => $value) {
    

            echo "<pre>";
            // print_r($value->json());
            print_r($value);
            // print_r($response->headers());       
            echo "<br>";     
            echo "</pre>";

            // foreach ($value as $key => $value) {
            //     echo "<pre>";
            //     // print_r($value->json());
            //     print_r($value);
            //     // print_r($response->headers());       
            //     echo "<br>";     
            //     echo "</pre>";
            // }
        }
      
        
       // return ApiExemploFacades::get('/posts')->json();
        
        // return (new ApiExemploHelpers())->getApi()
        // ->get('https://jsonplaceholder.typicode.com/posts')
        // ->json();
    }
}
