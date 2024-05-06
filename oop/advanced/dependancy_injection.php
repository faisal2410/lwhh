<?php

interface BaseStudent{
    function displayName();
}
class ImprovedStudent implements BaseStudent{
    private $name;
    Private $title;

    public function __construct($name, $title)
    {
        $this->name=$name;
        $this->title=$title;
    }
    public function displayName()
    {
        echo "Hello From {$this->title} {$this->name} \n";
    }

}

class Student implements BaseStudent{
    private $name;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function displayName()
    {
        echo "Hello From ".$this->name."\n";
    }

}

// class StudentManager{
//     function introduceStudent($name){
//       $st=  new Student($name);
//       $st->displayName();
//     }
// }

class StudentManager{
    public function introduceStudent(BaseStudent $student){
        $student->displayName();
    }
}
// $d=new DateTime()
$st=new Student("Faisal ahmed");
$ist=new ImprovedStudent("Faisal ahmed","Mr");

$sm=new StudentManager();
$sm->introduceStudent($st);
$ism=new StudentManager();
$ism->introduceStudent($ist);