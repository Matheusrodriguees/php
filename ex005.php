<?php

//Faça um  programa  que  leia  uma  temperatura  em  graus  Fahrenheit  e  apresente-a  convertida em graus Celsius.
//A formula de conversãoé: C = 5.0 ∗(F −32.0)/9.0, sendo C a temperatura em Celsius e F a temperatura em Fahrenheit.

$F = 89;
$res = (($F - 32) * 5/9 );
printf('Graus em celsius ');
echo $english_format_number = number_format($res,2,",");

?>