<?php
interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo "Woof";
    }
}

$animal = new Dog();
$animal->makeSound();
