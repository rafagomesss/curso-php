<div class="titulo">Recursividade</div>

<?php
function somaUmAte($numero)
{
    $soma = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(10) . '<br>';

function somaRecursivaUmAte($numero)
{
    if ($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(10) . '<br>';

function fatorial(int $num)
{
    return $num > 1 ? $num * fatorial($num - 1) : 1;
}

function somaRecursivaEconomica($numero)
{
    return $numero === 1 ? 1 :
        $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150) . '<br>';
