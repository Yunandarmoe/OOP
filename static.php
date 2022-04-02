<?php
class Greet
{
    public static $greet = "Welcome";

    public function hello()
    {
        echo "Hello World!";
    }
}


echo Greet::$greet;
