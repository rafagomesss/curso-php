<?php namespace DesafioIntDiv;

ini_set('display_errors', 1);

class IntDivException extends \Exception
{
    
}

function intdiv(int $a, int $b)
{
    if ($a % $b > 0) {
        throw new IntDivException();
    }

    if ($a === 0 || $b === 0) {
        throw new \DivisionByZeroError();
    }

    return $a / $b;
}
