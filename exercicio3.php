<?php

class Notificacao{
    public function enviar($mensagem){
        echo "Realizando Inscrição";
    }
}

class NotificacaoEmail extends Notificacao{
    public function enviar($mensagem){
        echo "O canal utilizado é o email. A mensagem '" . $mensagem . "' foi enviada.<br>";
        echo "Sua inscrição foi realizada com sucesso!<br><br>";
    }
}

class NotificacaoSMS extends Notificacao{
    public function enviar($mensagem){
        echo "O canal utilizado é o SMS. A mensagem '" . $mensagem . "' foi enviada.<br>";
        echo "Sua inscrição foi realizada com sucesso!<br><br>";
    }
}

class NotificacaoPush extends Notificacao{
    public function enviar($mensagem){
        echo "O canal utilizado é o Push. A mensagem '" . $mensagem . "' foi enviada.<br>";
        echo "Sua inscrição foi realizada com sucesso!<br><br>";
    }
}

$NotificacaoEmail = new NotificacaoEmail();
$NotificacaoEmail->enviar("Olá por Email");

$NotificacaoSMS = new NotificacaoSMS();
$NotificacaoSMS->enviar("Olá por SMS");

$NotificacaoPush = new NotificacaoPush();
$NotificacaoPush->enviar("Olá por Push");
?>