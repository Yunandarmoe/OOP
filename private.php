<?php

class Animal
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function eat($food)
    {
        return "Eat $food";
    }
}

$cat = new Animal('Shwe Kyar');
//echo $cat->name;
echo $cat->getName();
