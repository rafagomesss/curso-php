<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="c-f">C° > °F</option>
        <option value="f-c">°F > C°</option>
    </select>
    <button>Calcular</button>
</form>

<?php

define('MILHAS_KM', 1.609344);
define('METROS_KM', 1000);

$valorConversao = !empty($_POST['param']) ? $_POST['param'] : 0;
$valorConversao = empty($valorConversao) ?
    0 :
    $valorConversao;

$unidadeEscolhida = !empty($_POST['conversao']) ? $_POST['conversao'] : null;

switch ($unidadeEscolhida) {
    case 'km-milha':
        $resultado = round($valorConversao / MILHAS_KM, 4) . 'mi';
        $mensagem = "{$valorConversao}km(s) = $resultado";
        break;
    case 'milha-km':
        $resultado = round($valorConversao * MILHAS_KM, 4) . 'km(s)';
        $mensagem = "{$valorConversao}mi = $resultado";
        break;
    case 'metro-km':
        $resultado = round($valorConversao / METROS_KM, 4) . 'km(s)';
        $mensagem = "{$valorConversao}m(s) = $resultado";
        break;
    case 'km-metro':
        $resultado = round($valorConversao * METROS_KM, 4) . 'm(s)';
        $mensagem = "{$valorConversao}km(s) = $resultado";
        break;
    case 'c-f':
        $resultado = round(($valorConversao * 9 / 5) + 32, 2) . '°F';
        $mensagem = "{$valorConversao}C° = $resultado";
        break;
    case 'f-c':
        $resultado = round(($valorConversao - 32) * 5 / 9, 2) . 'C°';
        $mensagem = "{$valorConversao}F° = $resultado";
        break;
    default:
        $resultado = 'Unidade de conversão inválida!';
}

echo "<br><hr>Resultado:<br> $mensagem";
