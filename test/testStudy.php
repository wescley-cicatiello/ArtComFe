<?php

$usuario = [
    'nome' => 'Wescley',
    'sobrenome' => 'Cicatiello Silva',
    'idade' => 33,
    'email' => 'wescleycicatiello@gmail.com',
    'telefone' => '21979169582',
    'endereco' => [
        'rua' => 'Rua eugenio gudin',
        'numero' => 166,
        'bairro' => 'irajá',
        'cep' => '21361500',
        'cidade' => 'Rio de Janeiro',
        'estado' => 'RJ',
        'complemento' => 'apt 706',
        ]   
    ];

echo '<pre>';
var_dump($usuario);
echo '</pre>';

?>