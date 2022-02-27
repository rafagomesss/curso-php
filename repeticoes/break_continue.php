<div class="titulo">Break/Continue</div>

<?php

$count = 16;
for (;;) {
    echo "$count <br>";
    $count++;
    if ($count > 20) {
        break;
    }
}

echo '<br><hr>';

for (;;) {
    $count++;
    if ($count % 2 === 1) {
        continue;
    }
    echo "$count <br>";
    if ($count >= 30) {
        break;
    }
}

foreach ([1, 2, 3, 4, 5, 6] as $valor) {
    if ($valor === 5) {
        break;
    }
    if ($valor % 2 === 0) {
        continue;
    }
    echo "$valor <br>";
}

echo "Fim!";
