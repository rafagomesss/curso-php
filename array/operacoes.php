<div class="titulo">Operações</div>

<?php
$dados1 = [
    'nome' => 'José',
    'idade' => 28
];

$dados2 = [
    'nome' => 'Maria',
    'naturalidade' => 'Fortaleza'
];

$dados2['endereco'] = 'Rua A';

$dadosCompletos = $dados1 + $dados2;
echo '<pre>' . print_r($dadosCompletos, true) . '</pre>';

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo '<br>';
echo "${dadosCompletos['idade']}";

unset($dadosCompletos['nome']);
echo '<br>';
echo '<pre>' . print_r($dadosCompletos, true) . '</pre>';

unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
echo '<pre>' . print_r($decimais, true) . '</pre>';

$decimais = array_merge($pares, $impares);
echo '<br>';
echo '<pre>' . print_r($decimais, true) . '</pre>';

sort($decimais);
echo '<br>';
echo '<pre>' . print_r($decimais, true) . '</pre>';
