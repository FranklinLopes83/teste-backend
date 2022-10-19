<?php
namespace App;

class Slug{
    private  $texto;
    public function __construct($texto){
        $this->texto = $texto;
    }
    
    public function getTexto(){
        return trim($this->texto); // aA função remove todos espalps tanto do lado direrio qunato do lado esquerdo do testo
    }

    public function converter(){
        $resultado = str_replace(" ", "-", $this->getTexto()); //O str_repalce ira substtuir um determinado valor que esta sendo procurado (Primeiro paramentro por outro) por outro segundo paramentro
        return strtolower($resultado);
    }
}


