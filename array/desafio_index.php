<div class="titulo">Desafio Índex</div>

<?php
$lista = [
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
];

/** Array(
    [0] => 8,
    [4] => 2,
    [3] => 3,
    ['a'] => 4,
    [5] => 5,
    ['9'] => 6,
    [06] => 7
)
 */
//? no índice [0] o valor 8 sobrepoe o valor 1

echo '<pre>' . print_r($lista, true) . '</pre>';
