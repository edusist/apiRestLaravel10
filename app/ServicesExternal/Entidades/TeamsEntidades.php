<?php

namespace App\ServicesExternal\Entidades;
use App\ServicesExternal\Endpoints\Sports;

class TeamsEntidades{

    public int $id;
    public string $slug;
    public string $name;    
    public array  $name_translations;
    public ?string $country;
    public ?string $logo; 

    public function __construct(array $data)
    {
    $this->id                =  data_get($data, 'id'); 
    $this->slug              =  data_get($data, 'slug');   
    $this->name              =  data_get($data, 'name'); 
    $this->name_translations =  data_get($data, 'name_translations'); 
    $this->country           =  data_get($data, 'country');
    $this->logo              =  data_get($data, 'logo');
  
    }


}