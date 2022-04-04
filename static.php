<?php

class Car
{
    public static $name = "Marcede";

    public static function drive()
    {
        return "Drive";
    }
}

echo Car::$name;
echo "<br>";
echo Car::drive();
