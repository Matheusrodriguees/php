<?php
$nomes = ['De', 'Fatec', 'Vasconcelos'];
echo $nomes[@]; // Exibe: De
echo ' ';
echo $nomes [2]; // Exibe: Vasconcelos



$nome = 'Fatec';
$array = [21, 'PHP', true, $nome];
echo $array[0]; // Exibe: 21
echo $array[1];
// Exibe: PHP
echo $array[3];
// Exibe: Fatec

?>


