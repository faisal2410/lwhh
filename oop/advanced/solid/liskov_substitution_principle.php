<?php

// Barbara Liskov

abstract class Bird{

    abstract public function eat();
    abstract public function sleep();
   
}

abstract class FlyingBird extends Bird{
    abstract public function fly();
}

abstract class WalkingBird extends Bird{
    abstract public function walk();
}

class BirdManager{
    public function maintainBird(Bird $b){
        $b->eat();
        $b->sleep();       

    }
    public function moveFlyingBird(FlyingBird $fb){
        $fb->fly();
    }

    public function moveWalkingBird(WalkingBird $wb){
        $wb->walk();
    }
}

class Eagle extends FlyingBird{
    public function eat(){
        
    }
    public function sleep(){

    }
    public function fly(){

    }
}
class Hawk extends FlyingBird{
    public function eat(){
        
    }
    public function sleep(){

    }
    public function fly(){

    }
}

class Penguine extends WalkingBird{
    public function eat(){
        
    }
    public function sleep(){

    }
    public function walk(){

    }
   
}