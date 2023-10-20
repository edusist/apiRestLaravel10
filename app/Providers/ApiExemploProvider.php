<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class ApiExemploProvider extends ServiceProvider{

        /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('api-exemplo', function(){

            return Http::withOptions([

                //não fica verificando de certificado https e valido
                'verify'   => false,
                'base_uri' => 'https://jsonplaceholder.typicode.com/'

            ])->withHeaders([
                'Authorization' => 'Bearer',
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

}