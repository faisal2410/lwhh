<?php

class A
{
    protected static $name="Bangladesh \n";
    static public function sayHi()
    {
      $name2= self::$name="Hello \n";
        echo "Hi from A {$name2} \n";
    }
}

class B extends A
{
    static public function sayHi()
    {
        echo parent::$name ."\n";
        echo "Hi from B \n";
        parent::sayHi();
    }
}

B::sayHi();
