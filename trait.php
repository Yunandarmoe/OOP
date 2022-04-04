<?php

trait Mother
{
    public $name = "Emily";

    public function white()
    {
        return "White";
    }

    public function beauty()
    {
        return "Beauty";
    }
}

class Daughter
{
    use Mother;
}

$daughter = new Daughter;
echo $daughter->name;
echo "<br>";
echo $daughter->beauty();
