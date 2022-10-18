<?php
namespace App;

class Slug{
    private  $texto;
    public function __construct($texto){
        $this->texto = $texto;
    }
    

    public function converter(){
        $resultado = str_replace(" ", "-", $this->texto); //O str_repalce ira substtuir um determinado valor que esta sendo procurado (Primeiro paramentro por outro) por outro segundo paramentro
        return strtolower($resultado);
    }
}


