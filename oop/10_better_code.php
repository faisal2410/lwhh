<?php
class Shape{

}
class Shapes{

    private $shapes;

    public function __construct()
    {
        $this->shapes=array();
    }

    public function addShape(Shape $shape){
        array_push($this->shapes,$shape);
    }

    public function totalShapes(){
        return count($this->shapes);
    }

}

class Rectangle extends Shape{

}

class Triangle extends Shape{

}
class Student {

}

$shapeCollection =new Shapes();
$shapeCollection->addShape(new Rectangle());
$shapeCollection->addShape(new Triangle());
// $shapeCollection->addShape(new Student());

echo $shapeCollection->totalShapes();