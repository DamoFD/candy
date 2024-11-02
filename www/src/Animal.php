<?php

namespace DamoFD\MagicForm;

class Animal
{
    private int $legs = 4;

    public function getLegs(): int
    {
        return $this->legs;
    }

    public function setLegs(int $legs): void
    {
        $this->legs = $legs;
    }

    public function getEyes(): int
    {
        return 2;
    }
}
