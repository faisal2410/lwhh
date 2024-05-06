<?php

use FieldInterface as GlobalFieldInterface;

class Sodium{
    public static function addForm($id):Sodium
    {
       return new Sodium();
    }

    public function addColumn($columnSize):Sodium
    {
        return $this;
    }

    public function addFields(FieldInterface ...$fields):Sodium
    {
        return $this;
    }
}


class FieldFactory{

    public static function createTextField():FieldInterface{

    }
    public static function createRadio():FieldInterface{

    }

}

class TextField extends AbstractField{

}
class Radio extends AbstractField{

}

class GoogleMap extends AbstractField{

}

class AbstractField implements FieldInterface{
    public static function create($id): FieldInterface
    {
        
    }
    public function setId():FieldInterface{
        return $this;
    }
    public function setLabel(): FieldInterface{
        return $this;
    }
    public function setDefault(): FieldInterface{
        return $this;
    }
    public function setValue(): FieldInterface{
        return $this;
    }

}

interface FieldInterface{

public static function create($id):FieldInterface;
public function setId():FieldInterface;
public function setLabel():FieldInterface;
public function setDefault():FieldInterface;
public function setValue():FieldInterface;

}

// Sodium::addForm("myform")->addColumn(70)->addFields()->addColumn(30)->addFields();
// Sodium::addForm("myform")->addColumn(70)->addFields(
//     [
//         FieldFactory::createTextField()->setID(),
//         FieldFactory::createRadio()->setLabel(),

//     ]
//     );

// Sodium::addForm("myform")->addColumn(70)->addFields(
    
//         FieldFactory::createTextField()->setID()->setDefault()->setValue(),
//         FieldFactory::createRadio()->setLabel(),

    
//     );

Sodium::addForm('myform')->addFields(
    TextField::create('id')->setValue()->setDefault()->setLabel(),
    Radio::create()->setLabel()->setDefault(),
    GoogleMap::create('mapid')->setLabel()


);

// Sodium::addColumns(65)->addFields();