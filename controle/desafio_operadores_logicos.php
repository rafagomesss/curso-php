<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>
<div class="titulo">Desafio Op. Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
 -->

<form action="#" method="POST">
    <div>
        <label for="t1">Trablho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trablho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php

$respostas = [
    1 => 'TV 50\' e Sorvete',
    2 => 'TV 32\' e Sorvete',
    3 => 'Fica em casa mais saudável!'
];

if (!empty($_POST['t1']) && !empty($_POST['t2'])) {
    echo $respostas[1];
} elseif (empty($_POST['t1']) xor empty($_POST['t2'])) {
    echo $respostas[2];
} else {
    echo $respostas[3];
}
