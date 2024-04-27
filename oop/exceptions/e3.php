<?php

class ServerLoadException extends Exception{}
class NetworkException extends Exception{}
class DiskFullException extends Exception{}
interface NetworkStorage{
    function connect();
    function getName();
    function report($data);
}

class MySQLServer implements NetworkStorage{
    public function connect()
    {
        throw new DiskFullException();
    }
    public function getName(){
        return "MySQL";
    }
    public function report($data){

    }
}
class PostgreSQLServer implements NetworkStorage{
    public function connect()
    {
        throw new ServerLoadException();
    }
      public function getName(){
        return "PostgreSQL ";
    }
     public function report($data){
        
    }
}
class MSSQLServer implements NetworkStorage{
    public function connect()
    {
        return $this;
    }
      public function getName(){
        return "MSSQL ";
    }
     public function report($data){
        
    }
}


class ConnectionPool{
    private $connection;
    private $storage;
    public function __construct(){
        $this->storage=[];

    }

    public function addStorage(NetworkStorage $storage){
        array_push($this->storage,$storage);
    }

    public function getConnection(){
        foreach($this->storage as $storage){
            try{
            $this->connection= $storage->connect();
            }catch(ServerLoadException $e){
                echo $storage->getName()." is facing huge load \n";
                $storage->report(array("ip"=>"123.123.123.111","error"=>"load"));

            }catch(NetworkException $e){
                 echo $storage->getName()." is having some problem with it's network \n";
                 $storage->report(array("ip"=>"123.123.123.111","error"=>"load"));
            }catch(DiskFullException $e){
                 echo $storage->getName()." has it's disk full\n";
                 $storage->report(array("ip"=>"123.123.123.111","error"=>"load"));
            }
            if($this->connection){
                break;
            }
        }
        if($this->connection){
            return $this->connection;
        }
        return false;
    }
}

$mysql=new MySQLServer();
$pgsql=new PostgreSQLServer();
$mssql=new MSSQLServer();

$cp=new ConnectionPool();

$cp->addStorage($mysql);
$cp->addStorage($pgsql);
$cp->addStorage($mssql);

$connection=$cp->getConnection();
print_r($connection);

