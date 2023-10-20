<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ApiExemploFacades extends Facade{


    protected static function getFacadeAccessor()
    {
        return 'api-exemplo';
    }
}