<?php

class ParentClass{
    protected $name;

    public function __construct($name)
    {
        $this->name=$name;
        $this->sayHi();
    }
    public function sayHi(){
        echo "Hi from {$this->name}<br>";
    }
    public function sayHi2(){
        echo "Hi2 from {$this->name}<br>";
    }
}

class ChildCLass extends ParentClass{
    public function sayHi()
    {
       parent::sayHi2();

    //    parent::sayHi();
        echo "Hello <br>";
    }
}

$cc=new ChildCLass("ABCD");