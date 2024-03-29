<?php

require_once 'pessoa.php';

class Usuario extends Pessoa
{
    public $login;

    public function __construct($nome, $idade, $login)
    {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuário Criado! <br>';
    }

    public function __destruct()
    {
        echo 'Usuário diz: Tchau!!!<br>';
        parent::__destruct();
    }

    public function apresentar()
    {
        echo "@$this->login: ";
        parent::apresentar();
    }
}
