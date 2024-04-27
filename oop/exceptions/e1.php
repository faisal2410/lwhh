<?php
class Student{

    private $name, $age;
    public function __construct($name, $age)
    {
        $this->name=$name;
        if($age<4){
            throw new Exception("Too Young\n",1001);
        }elseif($age>35){
            throw new Exception("Too Old",1002);
        }
        $this->age=$age;
    }
}


try {
    $s=new Student("Rahim",39);
    echo "It will never display \n";
    
} catch (Exception $e) {
    echo "Error Code: ".$e->getCode()." "."Message: ".  $e->getMessage()."\n";
    
}finally{
echo "It will run \n";
}
