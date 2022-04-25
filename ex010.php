<?php

//Faç aum  programa  que  receba  leia  um  inteiro  entre  1  e  7  e  
// imprima  o  dia  da  semana correspondente a este número. Istoe, domingo se 1, segunda-feira se 2, e assim por diante.
$num = 8;

if ($num == 1){
    echo('Domingo');
} elseif($num == 2){
    echo('Segunda-feira');
} elseif($num == 3){
    echo('Terça-feira');
} elseif($num == 4){
     echo('Quarta-feira');
} elseif($num == 5){
    echo('Quinta-feira');
} elseif($num == 6){
    echo('Sexta-feira');
} elseif($num == 7){
    echo('Sábado');
}else {
    echo('Opção inválida');
}


?>