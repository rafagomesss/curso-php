<div class="titulo">Desafio Classe Data</div>

<?php

class Data
{
    public int $dia = 01;
    public int $mes = 01;
    public int $ano = 1970;

    public function apresentar()
    {
        return "$this->dia/$this->mes/$this->ano<br>";
    }
}

$data1 = new Data();
echo $data1->apresentar();
