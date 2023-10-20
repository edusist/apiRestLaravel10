<?php 

namespace App\ServicesExternal\Endpoints;
use App\ServicesExternal\Endpoints\Teams;


//Trait caracteristicas de uma Classe
trait HasTeams {   

    public function teams(){

        return new Teams();

    }
      

}