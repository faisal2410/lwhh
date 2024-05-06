<?php

interface BaseStorage1{
    public function setFileName($fn);
    public function writeData($data);
    public function setMode($mode);
   
    
}

class Storage1 implements BaseStorage1{
    private $fn;
    private $mode;
    public function __construct($fn, $mode=null)
    {
        $this->setFileName($fn);
        $this->mode=$mode;
    }

    public function setFileName($fn)
    {
        $this->fn = $fn;
    }

    public function writeData($data)
    {
        // Write $data to the file specified by $this->fn
        file_put_contents($this->fn, $data,$this->mode);
    }
    public function setMode($mode){
        $this->mode=$mode;
    }
  

  
}

// class DataManager{
//     public function saveData($filename, $data){
//         $storage=new Storage1($filename);
//         $storage->writeData($data);


//     }
// }

class DataManager{
    public function saveData(BaseStorage1 $storage, $data){

        $storage->writeData($data);


    }
}



// $dm=new DataManager();
// $dm->saveData("abcd.txt","My Data 2");

$st=new Storage1("abcd.txt");
$st->setMode(FILE_APPEND);

$dm=new DataManager();
$dm->saveData($st, "I love PHP. I am learning PHP");