<div class="titulo">Desafio IntDiv</div>

<?php

require_once 'desafio_intdiv.php';

use function \DesafioIntDiv\intdiv;

try {
    echo intdiv(8, 3) . '<br>';
} catch (\DesafioIntDiv\IntDivException $e) {
    echo 'Resultado não é um número inteiro<br>';
}

try {
    echo intdiv(8, 0) . '<br>';
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';
echo \intdiv(8, 3) . '<br>';
