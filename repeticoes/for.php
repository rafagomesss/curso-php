<div class="titulo">Laço For</div>

<?php

for ($count = 1; $count <= 5; $count++) {
    echo "$count <br>";
}
//? Variável count é disponibilizada fora do laço

echo '<hr>';

//? Variável count será reutilizada aqui
for (; $count <= 10; $count++) {
    echo "$count <br>";
}

echo '<hr>';

for (; $count <= 15;) {
    echo "$count <br>";
    $count++;
}

$array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

echo '<pre>' . print_r($array, true) . '</pre>';

echo '<hr>';

for ($i = 0; $i < count($array); $i++) {
    echo "{$array[$i]}<br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo '<hr>';

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo '<br>';
}
