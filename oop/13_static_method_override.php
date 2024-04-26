<?php

class A{

   static public function sayHi(){
        echo "Hi from A \n";
    }

}

class B extends A{
  static public function sayHi(){
    echo "Hi from B \n";
    parent::sayHi();

    }
}

B::sayHi();