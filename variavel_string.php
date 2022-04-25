<?php

$nome = "Fatec";
$sobrenome = "ferraz";
$numero = 5;

echo $nome; //Fatec
echo "</br>";
echo $nome.$numero; //ferraz5
echo "</br>";

echo $nome . '$numero' . $sobrenome; // valor da variavel Fatec $numero ferraz
echo "</br>";
echo $nome . "$numero" . $sobrenome; // Fatec5ferraz
echo "</br>";
echo $nome . ' ' . $sobrenome; // Fatec ferraz
echo "</br>";

var_dump($nome);
echo '</br>';
var_dump($sobrenome);
echo '</br>';
var_dump($nome);
echo '</br>';
?>