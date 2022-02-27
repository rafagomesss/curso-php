<div class="titulo">Desafio do Módulo</div>

<?php

require_once 'usuario.php';

$usuario = new Usuario('Fulano Ciclano', 21, 'ful_cicl');
$usuario->apresentar();
unset($usuario);
