<?php

use App\ServicesExternal\Endpoints\Sports;
use App\ServicesExternal\Entidades\SportsEntidades;
use App\ServicesExternal\sportScore\SportScoreService;
use Illuminate\Support\Collection;

test('', function(){

    $servico = new SportScoreService();

    $sports = $servico->sports()->get();
    
    expect($sports)
        ->toBenInstanceOf(Collection::class)
        ->and($sports->first())     
        ->toBenInstanceOf(SportsEntidades::class);


}); 