<?php

abstract class Animal
{
    public $name;

    public function eat()
    {
        echo "Eat fish";
    }
}

class Cat extends Animal
{
}

$cat = new Cat();
$cat->name = "Shwe War";
echo $cat->name;
