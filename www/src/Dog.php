<?php

namespace DamoFD\MagicForm;

use DamoFD\MagicForm\Animal;

class Dog extends Animal
{
    private string $sound = 'woof';

    private string $color = 'brown';

    public function makeSound(): string
    {
        return $this->sound;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
