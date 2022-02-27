<div class="titulo">Tipo Booleano</div>

<?php

echo true;
echo '<br>';
echo false;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false); //* true
echo '<br>' . is_bool('true'); //* false

//* fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); //* apenas zero é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.0000000001);
echo '<br>' . var_dump((bool) ""); //* false
echo '<br>' . var_dump((bool) "0"); //* false
echo '<br>' . var_dump((bool) " "); //* todo resto é true
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");
echo '<br>' . var_dump((bool) "false");

echo '<br>' . var_dump(!!"false");
