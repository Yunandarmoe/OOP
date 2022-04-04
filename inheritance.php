<?php

class Animal
{
    public $name;

    public function __construct($name)
    {
        echo 'Eat fish <br>';
    }

    public function action()
    {
        return 'Walk <br>';
    }
}

class Cat extends Animal
{
    public $age;

    public function __construct($name, $age)
    {
        $this->age = $age;
        parent::__construct($name);
    }

}

$cat = new Cat('Shwe War', 10);
//echo $cat->name;
//echo $cat->eat();
//echo $cat->action();
echo $cat->age;
