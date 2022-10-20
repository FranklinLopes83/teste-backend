<?php
use PHPUnit\Framework\TestCase;
use \App\Cliente;

class ClienteTest extends TestCase{
    
    public function testVerificarCamposVazios(){
        $meuCliente = new Cliente("Zilda", "Zilda@gmail.com");
        $this->assertFalse($meuCliente->validaCampos());
    } 

    public function testContarItensPreferencia(){
        $meuCliente = new Cliente("Laele", "Laele@gmail.com", 456);
        $meuCliente->setPreferencias(["Promoção", "Roupa Barata", "Comida Baiana"]);
        $this->assertCount(3, $meuCliente->getPreferencias());
    }

    public function testVerificarTotalCompras(){
        $meuCliente = new Cliente("Junho","jr@gmail.com",4455);
        $meuCliente->setTotalCompras(400);


        $this->assertGreaterThan(300, $meuCliente->getTotalCompras());
    }
}