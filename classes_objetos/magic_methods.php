<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo '<br>E morreu!';
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar()
    {
        echo $this, '<br>';
    }

    public function __get($attr)
    {
        echo "Lendo atributo não declarado: '$attr'<br>";
        return $attr;
    }

    public function __set($attr, $valor)
    {
        echo "Alterando atributo não declarado: $attr/$valor<br>";
    }

    public function  __call($metodo, $params)
    {
        echo "Tentando executar o método '$metodo'";
        echo ", com os parâmetros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Rafael', 33); //* __construct
$pessoa->apresentar(); //* chamando o __toString
echo $pessoa, '<br>'; //* chamando o __toString
$pessoa->nome =  'Fulano';

//* chama o método diretamente sem __call
$pessoa->apresentar(); 

// echo $pessoa->nome, '<br>';
// echo $pessoa->nomeCompleto, '<br>';
$pessoa->nomeCompleto = 'Muito Legal!!!'; //* __set
$pessoa->nomeCompleto; //* __get

 //* acesso o atributo diretamente sem __get
$pessoa->nome;

//* __call pq o método não existe no objeto
$pessoa->exec(1, 'teste', true, [1, 2, 3]); 

$pessoa = null; //* __destruct
