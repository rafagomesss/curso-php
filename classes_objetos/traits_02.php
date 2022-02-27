<div class="titulo">Traits #02</div>

<?php

trait Validacao
{
    public function validarString($str)
    {
        return !empty($str);
    }
}

trait ValidacaoMelhor
{
    public function validarString($str)
    {
        return !empty($str) && trim($str);
    }
}

class Usuario
{
    use Validacao, ValidacaoMelhor {
        ValidacaoMelhor::validarString insteadof Validacao;
        // Validacao::validarString insteadof ValidacaoMelhor;
        
        Validacao::validarString as validacaoSimples;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));
