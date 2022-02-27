<div class="titulo">Desafio Meses</div>

<?php

$meses = [
    1 => 'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
];

echo '<pre>' . print_r($meses, true) . '</pre>';
echo '<br>' . $meses[5];
echo '<br>' . $meses[12];
