<?php

interface BaseAnimal{
    public function isAlive();
    public function canEat($param1, $param2);
    public function breed();
}

class Animal implements BaseAnimal{
    public function isAlive(){

    }
    public function canEat($param1, $param2){

    }
    public function breed(){

    }
}

interface BaseHuman extends BaseAnimal{
    public function canTalk();

}

// class Human implements BaseHuman{
//     public function isAlive()
//     {
//     }
//     public function canEat($param1, $param2)
//     {
//     }
//     public function breed()
//     {
//     }

//     public function canTalk()
//     {

//     }
// }

abstract class AbstractHuman implements BaseHuman
{
    abstract public function run();
    public function eat()
    {
        echo " I am eating";
    }
}

class Human extends AbstractHuman
{
    public function isAlive()
    {
    }
    public function canEat($param1, $param2)
    {
    }
    public function breed()
    {
    }

    public function canTalk()
    {
    }
    public function run(){

    }
}

$h =new Human();

// var_dump($h instanceof BaseAnimal);
// var_dump($h instanceof BaseHuman);  //Polymorphism
// echo($h instanceof BaseAnimal);

$cat=new Animal();

// var_dump($cat instanceof Human);

