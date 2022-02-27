<div class="titulo">Construtor & Destrutor</div>

<?php

class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($novoNome, $idade = 18)
    {
        echo 'Construtor invocado!<br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo 'E morreu!';
    }

    public function apresentar()
    {
        echo "$this->nome, $this->idade anos<br>";
    }
}

// $pessoa =  new Pessoa(); ** Problema - parâmetros necessários**

$pessoaA = new Pessoa('Rebeca Maria A', 40);
$pessoaA->apresentar();
unset($pessoaA);

echo '<br>';

$pessoaB = new Pessoa('Rebeca Maria B');
$pessoaB->apresentar();
$pessoaB = null;
