<?php


if(isset($_POST(['email']) && !empty($_POST(['email'])))) {

$nome = addslashes($_POST(['name']))
$email = addslashes($_POST(['email']))
$numero = addslashes($_POST(['phone']))
$mensagem = addslashes($_POST(['message']))


$to = "rafael.creeper05@gmail.com";
$subject = "Contato - Coleta";
$body = "Nome: ".$nome. "\r\n"
        "Email: ".$email. "\r\n"
        "Numero: ".$numero. "\r\n"
        "Assunto: ".$mensagem;
$header = "From: rafael_rfs05@hotmail.com" . "\r\n"
           . "Reply to: ".$email. "\e\n"
           . "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

encho("email enviado!");

}

else{

encho("email nao enviado..");

}



$
}

?>