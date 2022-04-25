<?php
$array = [
    'nome' => 'Fatec',
    'sobrenome' => 'Ferraz'
];
echo $array['nome']; // Exibe: Fatec.
echo ' ';
echo $array['sobrenome']; // Exibe: Ferraz
echo ' ';
// Podemos alterar o valor de uma chave da mesma forma
$array['sobrenome'] = 'Vasconcelos';
echo ' ';
// 0 array passa a ser ['nome' => 'Fatec', 'sobrenome'
echo $array['sobrenome']; // Exibe: Vasconcelos