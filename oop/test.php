<?php
// ✅// Sample array of users with their IDs and names

// $users=[
//     ['id'=>1, 'name'=>"Faisal ahmed"],
//     ['id'=>2, 'name'=>"Afnan Ferdousi"],
//     ['id'=>3, 'name'=>"Abdur Rahman Talha"],
// ];

// // Loop through each user and destructure the 'id' and 'name' keys

// foreach($users as ['id'=>$id, 'name'=>$name]){
//     echo "User ID: $id, Name:$name \n";
// }


// ✅ Sorting
// $arr=[
//     ["name"=>"Faisal ahmed","age"=>50],
//     ["name"=>"Raihana Ferdousi","age"=>11],
//     ["name"=>"Mashrufa Binte Faisal","age"=>9]

// ];

// // sort by age

// usort($arr,fn($a,$b)=>$a['age']-$b['age']);

// // print_r($arr);  //sort by age
// // sort by name
// usort($arr,fn($a,$b)=>strcmp($a['name'], $b['name']));

// // print_r($arr); // sort by name


//✅ PHP has spread operator as well
// If you want to merge two array, you can use it.
// $array1=[1,2,3];
// $array2=[4,5,6];

// // Spread Operator
// $mergedArray=[...$array1,...$array2];

// Print_r($mergedArray);


//✅ // PHP arrow functions... I think they are awesome

// // Filter example

// $numbers=[1,2,3,4,5,6,7,8,9];
// $evenNumbers=array_filter($numbers, fn($n)=>$n%2==0);

// // Map example
// $names=["Afnan", "Talha","Raihana","Mashrufa"];
// $uppercaseNames=array_map(fn($name)=>strtoupper($name),$names);

// // Reduce Example
// $prices=[10,20,30,40,50];
// $total=array_reduce($prices,fn($carry,$p)=>$carry+$p,0);




//✅ You can write elegant code in PHP. But you need to know how to write it elegantly.

class Country {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

class Address {
    public $country;

    public function __construct($country) {
        $this->country = $country;
    }
}

// Creating a Country object
$country = new Country("United States");

// Creating an Address object with a country
$address = new Address($country);

// Since PHP 8.0

// Don't write this

if ($address && $address->country) {
    echo $address->country->name;
}

// Write this
// Accessing country name using nullsafe operator
echo $address?->country?->name; // This will output "United States"
