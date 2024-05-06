<?php

class StringUtility{
    private $string;
    private $search;

    public function __construct($string)
    {
        $this->string=$string;
    }

    public function search($string){
        $this->search=$string;
        return $this;
    }

    public function replace($string){
        if(!isset($this->search)){
            throw new Exception("Nothing to replace");
        }
        $this->string=str_replace($this->search,$string, $this->string);
        $this->search="";
        return $this;
    }

    public function upperCase(){
        $this->string=strtoupper($this->string);
        return $this;
    }
    public function lowerCase(){
        $this->string=strtolower($this->string);
        return $this;
    }
    public function print(){
        echo $this->string;
    }
}

$s=new StringUtility("Hello world");

//  $s->search("World")->replace("Earth")->upperCase()->print();
 $s->search("world")
 ->replace("Earth")
 ->search("Hello")
 ->replace("Hi")
 ->upperCase()
 ->print();