<?php
class Animal{
    protected $name;

    public function __construct($name){
        $this->name=$name;
    }
    public function eat(){
        echo "{$this->name} is eating <br>";
    }
    public function run(){
        echo "{$this->name} is running <br>";
    }
    public function sleep(){
        echo "{$this->name} is sleeping <br>";
    }
    public function greet(){}  //override
    protected function addTitle($title){

        $this->name= $title." ".$this->name;

    }
}

class Human extends Animal{

    public function greet(){
        $this->addTitle("Mr. ");
        echo "{$this->name} says Hi   <br>";
    }
  
}

class Cat extends Animal{
    public function greet(){
        echo "{$this->name} says meow <br>";
    }
  
}

$rasel=new Human("Rasel");

$rasel->greet();
$rasel->run();

$cat1=new Cat("Koko");
$cat1->run();
$cat1->greet();
