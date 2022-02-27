<div class="titulo">If Else</div>

<?php

if (true) {
    echo "Serei impresso?<br>";
}

if (false) {
    echo 'Verdadeiro - ParteA<br>';
    echo 'Verdadeiro - ParteB<br>';
} else {
    echo 'Falso - ParteA<br>';
    echo 'Falso - ParteB<br>';
}

if (false) {
    echo 'Passo A<br>';
} elseif (false) {
    echo 'Passo B<br>';
} elseif (true) {
    echo 'Passo C<br>';
} elseif (true) {
    echo 'Passo D<br>';
} elseif (true) {
    echo 'Passo E<br>';
} else {
    echo 'Último Passo<br>';
}

echo 'Fim<br>';
