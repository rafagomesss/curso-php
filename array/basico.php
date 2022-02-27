<div class="titulo">Array</div>

<?php
$lista = [1, 2, 3.4, "texto"];
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
echo '<pre>' . print_r($lista, true) . '</pre>';

$lista[0] = 1234;

echo '<pre>' . print_r($lista, true) . '</pre>';

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]);

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; //* cuidado com caracteres especiais
echo '<br>' . mb_substr($texto, 10, 1);
