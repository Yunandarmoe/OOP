<?php

class Greet
{
    public $name = 'Hello World';
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        return 'Hello!';
    }
}

$greet = new Greet("Welcome...");
//$greet->name = "Welcome...";
//$greet->setName('Welcome...');
echo $greet->name;
