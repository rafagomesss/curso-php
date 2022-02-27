<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(14 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111'); // true
var_dump(111 === '111'); // false
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true

echo '<p class="divisao">Relacionais no If/Else</p><hr>';
$idade = 66;
if ($idade < 18) {
    echo $idade, ' anos = Menor de idade<br>';
} elseif ($idade <= 65) {
    echo $idade, ' anos = Adulto<br>';
} else {
    echo $idade, ' anos = Terceira idade!<br>';
}

echo '<p class="divisao">Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo '<p class="divisao">Valores podem ser V ou F</p><hr>';
var_dump(!!5);
