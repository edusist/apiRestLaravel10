<?php

namespace App\ServicesExternal\Endpoints;

use App\ServicesExternal\Endpoints\BaseEndpoint;
use App\ServicesExternal\Entidades\TeamsEntidades;
use App\ServicesExternal\Entidades\SportsEntidades;
use App\ServicesExternal\sportScore\SportScoreService;
use Illuminate\Support\Collection;
use  App\ServicesExternal\Endpoints\Sports;

class Teams extends BaseEndpoint{

    private ?int $sportId;

    public function fromSports(int|SportsEntidades $sport): static
    {
        // dd($sport);
        $this->sportId = $sport instanceof SportsEntidades? $sport->id : $sport;
        // dd($this->sportId);
        return $this;

    }

    public function get():Collection
    {
        //Acesso ao atributo api da Classe SportScoreService()
        return  $this->transform(
                        $this->service
                        ->api
                        ->get('/sports/'. $this->sportId. '/teams')
                        ->json('data'),
                        TeamsEntidades::class
        );
          
    }

    public function post(){
        
    }


}