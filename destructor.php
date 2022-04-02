
<?php
class Fruit
{
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }
    function __destruct()
    {
        echo "The apple is {$this->name}.";
    }
}

$red = new Fruit("red");

?>