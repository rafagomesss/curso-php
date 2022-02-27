<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    [
        'nome' => 'Roberto',
        'idade' => 26,
        'naturalidade' => 'São Paulo'
    ],
    [
        'nome' => 'Maria',
        'idade' => 25,
        'naturalidade' => 'Bahia'
    ],
];

echo '<pre>' . print_r($dados, true) . '</pre>';
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    'nome' => 'Florinda',
    'idade' => 30,
    'naturalidade' => 'Cidade do México'
];

echo '<br>';
echo '<pre>' . print_r($dados, true) . '</pre>';
echo '<br>' . $dados[2]['idade'];

$dados[2]['Vizinho'] = 'Chaves';
echo '<br>';
echo '<pre>' . print_r($dados[2], true) . '</pre>';

unset($dados[1]);
echo '<br>';
echo '<pre>' . print_r($dados, true) . '</pre>';
var_dump($dados[1]);
