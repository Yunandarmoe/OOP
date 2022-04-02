<?php

class Animal
{
    protected $name = 'Dogie';
}

class Dog extends Animal
{
    public function getName()
    {
        return $this->name;
    }
}

$dog = new Dog;
echo $dog->getName();
