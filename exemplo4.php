<?php

abstract class Carro{
    abstract public function acelerar();
}

class CarroCombustao extends Carro{
    public function acelerar(){
        echo "Injetando combustível";
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo "Enviando Energia";
    }
}

$carroCombustao = new CarroCombustao();
$carroCombustao->acelerar();
echo "<br>";
$carroEletrico = new CarroEletrico();
$carroEletrico->acelerar();

?>