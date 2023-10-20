<?php

namespace App\ServicesExternal\Endpoints;

use App\ServicesExternal\Endpoints\BaseEndpoint;
use App\ServicesExternal\Entidades\SportsEntidades;
use App\ServicesExternal\sportScore\SportScoreService;
use Illuminate\Support\Collection;


class Sports extends BaseEndpoint{ 


    public function get(){
    
        //Acesso ao atributo api da Classe SportScoreService()
        return  $this->transform(
                        $this->service
                        ->api
                        ->get('/sports')
                        ->json('data'),
                        SportsEntidades::class
        );
          
    }

}