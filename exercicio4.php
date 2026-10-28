<?php

abstract class Eletrodomestico{
    protected string $marca;

    public function __construct($marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        echo $this->marca;
    }

    abstract public function ligar();
}

class Televisao extends Eletrodomestico{

    public function __construct($marca){
        parent::__construct($marca);
    }

    public function ligar(){
        echo "<br>A TV está ligando a tela.";
    }
}

class Geladeira extends Eletrodomestico{

    public function __construct($marca){
        parent::__construct($marca);
    }

    public function ligar(){
        echo "<br>Iniciando sistema de refrigeração.";
    }
}

$televisao = new Televisao("Marca:LG");
$televisao->getMarca();
$televisao->ligar();
echo "<br>";
$geladeira = new Geladeira("Marca:Electrolux");
$geladeira->getMarca();
$geladeira->ligar();
?>