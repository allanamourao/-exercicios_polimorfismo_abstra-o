<?php

abstract class ContaBancaria{
    protected string $titular;
    protected float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function depositar($valor){
        if($valor > 0){
            $this->saldo = $this->saldo + $valor;
        }
    }

    abstract public function calcularTarifa();
}

class ContaCorrente extends ContaBancaria{

    public function calcularTarifa(){
        return 15.00;
    }
}

class ContaPoupanca extends ContaBancaria{

    public function calcularTarifa(){
        return 0.00;
    }
}

$contaCorrente = new ContaCorrente("Allana", 500);
$contaPoupanca = new ContaPoupanca("Melissa", 500);

$contaCorrente->depositar(200);
$contaPoupanca->depositar(200);

echo "Conta Corrente:<br>";
echo "Saldo após depósito: R$ " . $contaCorrente->getSaldo() . "<br>";
echo "Tarifa: R$ " . $contaCorrente->calcularTarifa() . "<br>";
echo "Saldo após desconto: R$ " . ($contaCorrente->getSaldo() - $contaCorrente->calcularTarifa()) . "<br><br>";

echo "Conta Poupança:<br>";
echo "Saldo após depósito: R$ " . $contaPoupanca->getSaldo() . "<br>";
echo "Tarifa: R$ " . $contaPoupanca->calcularTarifa() . "<br>";
echo "Saldo após desconto: R$ " . ($contaPoupanca->getSaldo() - $contaPoupanca->calcularTarifa()) . "<br>";
?>