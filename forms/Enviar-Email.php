<?php
//variaveis
$name = $_post['name'];
$email = $_post['email'];
$phone = $_post['numero'];
$message = $_post['message'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

//corpo email
$arquivo = "
    <html>
        <p><b>Nome: </b>$name</p>
        <p><b>E-mail: </b>$email</p>
        <p><b>Número: </b>$phone</p>
        <p><b>Mensagem: </b>$message</p>
        <p>Este E-mail foi enviado em<b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
";

//Pra quem será enviado
$destino = "rafael.creeper05@gmail.com";
$assunto - "Contato pelo site"

//Correção
$headers = "MIME-Version: 1.0\n";
$headers = "Content-type: text/html; charset=iso-8859-1\n";
$headers = "Fom: $name <$email>";

//enviar 
mail($destino, $assunto, $arquivo, $headers);

echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
?>