<?php

class Frete{
    public function calcularFrete($peso){
        echo "Calculando frete";
    }
}

class freteNormal extends Frete{
    public function calcularFrete($peso){
        $frete = 10 + ($peso*2);
        echo "Valor do frete Normal: R$" . $frete . "<br>";
    }
}

class freteExpresso extends Frete{
    public function calcularFrete($peso){
        $frete = 20 + ($peso*5);
        echo "Valor do frete Expresso: R$" . $frete . "<br>";
    }
}

class Retirada extends Frete{
    public function calcularFrete($peso){
        echo "Em caso de retirada o frete é gratuíto: 0,00<br>";
    }
}

$freteNormal = new freteNormal();
$freteNormal->calcularFrete(3);

$freteExpresso = new freteExpresso();
$freteExpresso->calcularFrete(3);

$Retirada = new Retirada();
$Retirada->calcularFrete(3);
?>