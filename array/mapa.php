<div class="titulo">Mapa</div>

<?php

$dados = [
    'idade' => 25,
    'cor' => 'verde',
    'peso' => 49.8
];

echo '<pre>' . print_r($dados, true) . '</pre>';

var_dump($dados[0]);
echo '<br>' . $dados['idade'];
echo '<br>' . $dados['cor'];
echo '<br>' . $dados['peso'];
var_dump($dados['outra_informacao']);

$lista = [
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
];

echo '<br>';
echo '<pre>' . print_r($lista, true) . '</pre>';

$lista[] = 'i';
echo '<br>';
echo '<pre>' . print_r($lista, true) . '</pre>';

$lista['vinte'] = 'j';
echo '<br>';
echo '<pre>' . print_r($lista, true) . '</pre>';

$lista[false] = 'tentei indexar com false!';
echo '<br>';
echo '<pre>' . print_r($lista, true) . '</pre>';

$lista[true] = 'tentei indexar com true!';
echo '<br>';
echo '<pre>' . print_r($lista, true) . '</pre>';
