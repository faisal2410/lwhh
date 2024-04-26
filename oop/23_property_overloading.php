<?php

// class MotorCycle{

//     // private $displacement;
//     // private $capacity;
//     // private $mileage;
//     private $parameters;

//     public function __construct($displacement,$capacity,$mileage)
//     {
        
//         $this->parameters=[];
//         $this->parameters["displacement"]=$displacement;
//         $this->parameters["capacity"]=$capacity;
//         $this->parameters["mileage"]=$mileage;
        
//         // $this->displacement=$displacement;
//         // $this->capacity=$capacity;
//         // $this->mileage=$mileage;
//     }

//     // public function getDisplacement(){
        
//     //     return $this->parameters["displacement"];
//     //     // return $this->displacement;

//     // }
//     // public function setDisplacement($displacement){
        
//     //     $this->parameters["displacement"]=$displacement;
        
//     //     // $this->displacement=$displacement;
//     // }


//     public function __isset($name)
//     {
//         if(!isset($this->parameters[$name])){
//             echo "{$name} not found \n";
//             return false;
//         }
//         return true;
//     }
//     public function __get($name){
        
//         echo $this->parameters[$name],"\n";
        
//         // echo $this->$name;
//     }

//     public function __set($name, $value){
//         $this->parameters[$name]=$value;
//     }

//     public function __unset($name){
//         print_r($this->parameters);
//         unset($this->parameters[$name]);
//         print_r($this->parameters);

//     }

// }

// $pulsar=new MotorCycle("150cc","16ltr","40kmph");

// // echo $pulsar->getDisplacement();
// // $pulsar->displacement;

// $pulsar->capacity;
// $pulsar->displacement="135cc";
// echo $pulsar->displacement;

// if(isset($pulsar->tiresize)){
//     echo "Found \n";
// }else{
//     echo "Not found \n";
// }

// if(isset($pulsar->displacement)){
//     echo $pulsar->displacement;
// }

// unset($pulsar->mileage);