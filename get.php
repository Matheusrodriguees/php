<?php

 #http://localhost:8080/_2019/ GET_POST_texto/get.php?nome-Alexandro%20Tadeu&email=alex
if (isset($_GET['texto']) and isset($_GET['nome']) and isset($_GET['email']))
    $name = $_GET['nome'];
    $data $_GET['data'];
    $email = $_GET['email'];
    $mensagem = $_GET['mensagem'];
    
    $conteudo= "$name, Semail, $texto\r\n";
    $arquivo = fopen('isset_r.txt', 'a+');
    fwrite($arquivo, $conteudo);
    fclose($arquivo);
 ?>