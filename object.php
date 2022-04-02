<?php

class Dog
{

    //properties
    public $name = "Aung Net";


    //methods
    public function eat($food = "Bone"): string
    {
        return "Eat $food";
    }
}

$dog = new Dog();

echo $dog->name;
echo $dog->eat('Meat');
