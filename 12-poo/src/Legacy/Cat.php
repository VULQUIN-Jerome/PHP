<?php

namespace App\Legacy;

class Cat extends Animal implements Feline
{
    private bool $retractableClaws;

    public function __construct(string $name, bool $retractableClaws = true) {
        parent::__construct($name);
        $this->retractableClaws = $retractableClaws;
    }

    public function climbsOnRoof():string
    {
        return $this->name.' peut monter sur le toit';
    }

    public function move()
    {
        return parent::move().' silencieusement';
    }

    public function scratch(Animal $animal): string
    {
        return $this->name.' griffe '.$animal->name;
    }
}