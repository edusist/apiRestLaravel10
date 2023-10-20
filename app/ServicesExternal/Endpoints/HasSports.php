<?php 

namespace App\ServicesExternal\Endpoints;
use App\ServicesExternal\Endpoints\Sports;

//Trait caracteristicas de uma Classe
trait HasSports {

    public function sports(){

        return new Sports();

    }

}