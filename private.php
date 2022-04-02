<?php

class Animal
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        echo $this->name;
    }
}

class Dog extends Animal
{
}

$cat = new Animal;
$cat->setName('Shwe War');
echo $cat->getName();
