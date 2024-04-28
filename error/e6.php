<?php
$person = [
    "name" => "xyz",
    "id" => "some_id",
    "age" => "18",
    "sex" => "M"
];

function processMaternityLeave($person)
{
    if ($person["age"] < 18) {
        throw new Exception("Too Young \n");
    } else if ("F" == $person["sex"]) {
        echo "Processed";
    } else {
        throw new GenderMismatchException($person);
    }
}

class GenderMismatchException extends Exception
{
    private $person;
    function __construct($person)
    {
        $this->person = $person;
        parent::__construct("Gender Mismatch\n");
    }
    function getDetailedMessage()
    {
        echo "Gender Mismatch for Person with ID {$this->person['id']}";
    }
}

try {

    processMaternityLeave($person);
} catch (GenderMismatchException $e) {
    echo $e->getMessage();
    $e->getDetailedMessage();
} catch (Exception $e) {
    echo $e->getMessage();
    echo "Other Exception \n";
}
