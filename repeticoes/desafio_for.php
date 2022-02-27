<div class="titulo">Desafio For</div>

<!--
    Criar um for que imprima o seguinte resultado:
    #
    ##
    ###
    ####
    #####
    1) Pode usar incremento $i++
    2) Não pode usar incremento $i++
 -->

<?php

//* Resposta 1;
for ($i = 1; $i <= 5; $i++) {
    echo str_repeat('#', $i), "<br>";
}

echo '<hr>';

//* Resposta 2
$impressao = '';
for ($count = 1; $count <= 5; $count++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';

for (
    $impressao2 = '#';
    $impressao2 !== '######';
    $impressao2 .= '#'
) {
    echo "$impressao2 <br>";
}
