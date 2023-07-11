<?php

namespace App\Legacy;

abstract class Animal
{
    protected string $name;
    private string $type;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function move()
    {
        // self : la classe dans laquelle le code est présent
        // static : la classe dans laquelle le code est exécutée
        return $this->name." se déplace: ".self::class.', '.static::class;
    }

}