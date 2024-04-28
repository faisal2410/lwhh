<?php

class Dir{
    private $directories=[];
    private $files=[];
    private $path;
    private $directoryObjects=[];

    public function __construct($path)
    {
        if(is_readable($path)){
            $this->path=$path;
            $entries=scandir($path);
            foreach($entries as $entry){
                if("."!=$entry && ".."!=$entry){
                    if(is_dir($path.DIRECTORY_SEPARATOR.$entry)){
                        array_push($this->directories,$entry);
                    }else{
                        array_push($this->files, $entry);
                    }
                }

            }

        }
    }

    public function getDirectory($index){
        if(isset($this->directories[$index])){
            if(!isset($this->directoryObjects[$index])){
                echo "Creating new Object\n";
                
                $this->directoryObjects[$index]
                = new Dir($this->path . DIRECTORY_SEPARATOR . $this->directories[$index]);
                
            }else{
                echo "Using Old Object\n";
            }
            return $this->directoryObjects[$index];
           
        }else{
            throw new Exception("Directory does not exists");
        }
        return false;
    }

    public function getDirectories(){
        return $this->directories;

    }
    public function getFiles(){
        return $this->files;

    }

}

$directory=new Dir(getcwd());

print_r($directory->getDirectories());
print_r($directory->getFiles());

$test=$directory->getDirectory(0);
// var_dump($test);
var_dump($test->getDirectories());
var_dump($test->getFiles());

$test2=$directory->getDirectory(0);

var_dump($test2->getDirectories());


