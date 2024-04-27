<?php
trait MyTrait{
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;
    public function sayHi()
    {
        echo "\n Hello";
    }
}
MyClassA::$number=2;
echo MyClassA::$number;


$ma=new MyClassA();
$ma->sayHi();