<div class="titulo">Traits #01</div>

<?php

trait Validacao
{
    public $a = 'Valor a';
    public function validarString($str)
    {
        return !empty($str);
    }
}

trait ValidacaoMelhor
{
    public $b = 'Valor b';
    private $c =  'Valor c (privado)';
    public function validarStringMelhor($str)
    {
        return !empty($str) && trim($str);
    }
}

class Usuario
{
    use Validacao, ValidacaoMelhor;

    public function imprimirValorC()
    {
        echo '<br>', $this->c;
    }
}

//* var_dump(Validacao->validarString('')); // Errado

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b;
$usuario->imprimirValorC();