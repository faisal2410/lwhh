<?php
class DistrictsCollection implements IteratorAggregate,Countable
{
    private $districts;

    public function __construct()
    {
        $this->districts = [];
    }

    public function add($district)
    {
        array_push($this->districts, $district);
    }

    // public function getDistricts(){
    //     return $this->districts;

    // }
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }

    public function count(): int
    {
        return count($this->districts);
    }
}

$districts = new DistrictsCollection;
$districts->add("Sylhet");
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Chittagong");

echo count($districts);