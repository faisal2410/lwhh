<?php

class Student{
    private $name;
    private $age;
    private $class;

    public function __construct($name="", $age="",$class=""){
        $this->name=$name;
        $this->age=$age;
        $this->class=$class;

    }

    public function __get($prop){
        return $this->$prop;

    }

    public function __set($prop, $value){
        $this->$prop=strtoupper($value);
    }

    // public function getName(){
    //     return $this->name;
    // }
    // public function setName($name){
    //      $this->name=$name;
    // }
    // public function getAge(){
    //   return $this->age;
    // }
    // public function setAge($age){
    //      $this->age=$age;
    // }
    // public function getClass(){
    //   return $this->class;
    // }
    // public function setClass($class){
    //      $this->class=$class;
    // }
}

$R=new Student("Rahim", "16","10");
// $R=new Student();
// $R->setName("Rahim");
// echo $R->getName();
// echo $R->getAge();

$R->name="Kamal";
echo $R->age."\n";
echo $R->name;