<?php

ini_set('display_errors', true);

class Person
{
    public string $name = 'Test';

    public function getName()
    {
        return 'O nome de Person é ' . $this->name;
    }
}

$person = new Person();
echo $person->name;
echo '<br>';
echo $person->getName();
