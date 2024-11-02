<?php

namespace DamoFD\MagicForm;

use DamoFD\MagicForm\Animal;

class Cow extends Animal
{
    private string $sound = 'moo';

    public function makeSound(): string
    {
        return $this->sound;
    }

    public function getColor(): string
    {
        return 'black & white';
    }
}
