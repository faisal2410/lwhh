<?php
class Color
{
    public $color;
    public function __construct($color)
    {
        $this->color = $color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function __toString()
    {
        return "The color is {$this->color} \n";
    }
}

$c=new Color("Red");

// echo serialize($c);
echo $c;