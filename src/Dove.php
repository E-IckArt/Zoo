<?php

namespace App;

class Dove extends Animal
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    protected function getNoise(): string
    {
        return 'The '. $this->getName(). ' does Rou Rouuuuu.';
    }
}