<?php
namespace App\ServicesExternal\Endpoints;

use App\ServicesExternal\sportScore\SportScoreService;
use App\ServicesExternal\Entidades\SportsEntidades;
use Illuminate\Support\Collection;

class BaseEndpoint{

    protected SportScoreService $service; 

    public function __construct()
    {
        $this->service = new SportScoreService();
    }
    //$entity pode ser para Classe Sports ou Teams
    protected function transform($json, string $entity):Collection
    {   
        // dd($json);
        //Para cada item e criado um nova instância da entidade Sport
        return collect($json)
                        ->map(fn ($sport) => new $entity($sport));
                           

                            // collect($json)
                            // ->map(
                            //     function($sport){
                            //     return new SportsEntidades($sport);
                            //     });
    }

}