<?php

// Faça um programa que leia um número e, caso ele seja positivo, calcule e mostre: 
//• O número digitado ao quadrado
//• A raiz quadrada do número digitado

$num = 25;
if ($num > 0){
    printf('O número digitado foi %d é a raiz quadrada é  ', $num);
    echo sqrt($num);
} else {
    echo('número é invalido');
}
?>