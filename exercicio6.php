<?php

abstract class Funcionario{
    protected string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        echo $this->nome;
    }

    abstract public function calcularSalario();
}

class FuncionarioFixo extends Funcionario{

    public function __construct($nome){
        parent::__construct($nome);
    }

    public function calcularSalario(){
       $salario = 2500;
       echo "Salário fixo: R$" . $salario;
    }
}

class FuncionarioComissionado extends Funcionario{

    public function __construct($nome){
        parent::__construct($nome);
    }

    public function calcularSalario(){
       $salario = 1800 + ((8000*10)/100);
       echo "Salário Comissionado: R$" . $salario;
    }
}

$FuncionarioFixo = new FuncionarioFixo("Allana");
$FuncionarioFixo->calcularSalario();

echo "<br>";

$FuncionarioComissionado = new FuncionarioComissionado("Melissa");
$FuncionarioComissionado->calcularSalario();

?>