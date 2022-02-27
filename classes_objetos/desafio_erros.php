<div class="titulo">Desafio Erros</div>

<?php

interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    function metodo1()
    {
        echo __CLASS__ . ": Método 1<br>";
    }
    public function metodo2($parametro)
    {
        echo __CLASS__ . ": Método 2 $parametro<br>";
    }
    public function metodo3() {
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata {
    
    function __construct($parametro)
    {
        
    }
    
    public function metodo2($parametro)
    {
        
    }
}

$exemplo = new Classe('externo');
$exemplo->metodo3();
