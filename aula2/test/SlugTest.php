<?php
use PHPUnit\Framework\TestCase;


class SlugTest extends TestCase{
    public function test_converter(){
        require_once ("app/Slug.php");

        $meuSlug = new Slug("Noticia do estado maior");
        $resultadoEsperado = "noticia-do-estado-maior";

        $this->assertEquals($meuSlug->converter(), $resultadoEsperado);
    }
}