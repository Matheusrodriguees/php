<?php

if (isset($_GET['nome']) and isset($_GET['email'])and isset($_GET['data']) and
isset($_GET['mensagem'])) {

    $name = $_GET['nome'];
    $email = $_GET['email'];
    $data = $_GET['data'];    
    $mensagem = $_GET['mensagem'];


    $conteudo = "$name \n$email \n$data \n$mensagem\r\n\n";

    $arquivo = fopen('isset_get.txt', 'a+');
    fwrite($arquivo, $conteudo);
    fclose($arquivo);

}

echo "Nome: $name </br> Email: $email </br> Data: $data </br> Mensagem: $mensagem.";

 ?>