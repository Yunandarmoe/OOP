<?php
class Color
{
    public $color;
    public function __construct($color)
    {
        $this->color = $color;
    }
}

$red = new Color("Red");
echo $red->color;
