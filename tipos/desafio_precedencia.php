<div class="titulo">Desafio Precedência</div>

<?php

echo '<p>1. Qual o valor será impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);
// 2 + 5 + 3 + 2 / 0
// 12 / 0
//? INF

echo '<p>2. Qual expressão imprime o valor 100?</p>';
echo 'a) ', (1 + 2) * 20 - 15, '<br>'; //* 45
echo 'b) ', 4 * 5 ** 2, '<br>'; //* 100
echo 'c) ', 2 ** 3 ** 4 / 1e25, '<br>'; //*
echo 'd) ', 3 + (3 * 8) / 2 - 3, '<br>'; //* 12
