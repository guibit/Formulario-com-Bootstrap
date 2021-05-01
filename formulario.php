<?php
date_default_timezone_set('America/Sao_Paulo');
$nome = $_POST["nome"];
$email = $_POST["email"];
$nascimento = $_POST["nascimento"];
$estado = $_POST["estado"];
$endereco = $_POST["endereco"];
$sexo = $_POST["sexo"];
$cartao = $_POST["cartao"];

echo "Nome: ". $nome ."</br>\n E-mail: ". $email . "\n </br> Data de Nascimento: ". $nascimento . "\n </br>Estado: ". $estado, "\n </br>Endereço: ". $endereco,"\n</br> Sexo: ". $sexo."\n</br> Tipo de cartão:". $cartao ;

?>
