<?php

abstract class FormaGeometrica{

    abstract public function calcularArea();
}

class Retangulo extends FormaGeometrica{
    public int $altura;
    public int $base;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }
        public function calcularArea(){
        $resultado = $this->base * $this->altura;
        echo "O valor da área do retângulo é: " . $resultado . " cm². <br>";
    }
}

class Circulo extends FormaGeometrica{
    public int $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }
        public function calcularArea(){
        $resultado = ($this->raio * $this->raio) * 3.14;
        echo "O valor da área do circulo é aproximadamente: " . $resultado . " cm².<br>";
    }
}

$retangulo = new Retangulo(5, 8);
$retangulo->calcularArea();

echo "<br>";

$circulo = new Circulo(4);
$circulo->calcularArea();
?>