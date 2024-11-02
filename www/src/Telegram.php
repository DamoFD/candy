<?php

namespace DamoFD\MagicForm;

use DamoFD\MagicForm\Shouter;
use DamoFD\MagicForm\Dog;
use DamoFD\MagicForm\Cow;

class Telegram extends Shouter
{
    public function dog(): void
    {
        $dog = new Dog();
        echo $dog->makeSound();
        echo $dog->getLegs();
        $dog->setLegs(5);
        echo $dog->getLegs();
        echo $dog->getEyes();
        echo $dog->getColor();
    }

    public function cow(): void
    {
        $cow = new Cow();
        echo $cow->makeSound();
        echo $cow->getLegs();
        echo $cow->getEyes();
        echo $cow->getColor();
    }
}
