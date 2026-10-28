<?php

class Animal{
    public function emitirSom(){
        echo "Som desconhecido...";
    }
}

class Gato extends Animal{
    public function emitirSom(){
        echo "Miauuuu!";
    }
}

class Cachorro extends Animal{
    public function emitirSom(){
        echo "AuAu!";
    }
}

$gato = new Gato();
$gato->emitirSom();

$cachorro = new Cachorro();
$cachorro->emitirSom();

?>