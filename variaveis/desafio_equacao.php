<div class="titulo">Desafio Equação</div>

<?php

$numerador1 = 6 * (3 + 2) ** 2;

$numerador2 = ((1 - 5) * (2 - 7) / 2) ** 2;

$denominador = 10 ** 3;

$numerador3 = ($numerador1 - $numerador2);

$calculo = (($numerador3 ** 3) / (10 ** 3));
echo "O resultado final é
    <span style='color:red;
        font-size:50px;
        font-weight: 800;
        text-decoration:underline;'>
            $calculo
    </span>";
