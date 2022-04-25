<?php

// Faça um programa que leia um número caso seja positivo, calcule a raiz quadrada do número. 
// Caso o númeroseja negativo, mostre uma mensagem dizendo que o número é invalido.

//$num = 144;
//echo sqrt($num);

$num = 25;
if ($num > 0){
    printf('A raiz quadrada é ');
    echo sqrt($num);
} else {
    echo('número é invalido');
}


?>