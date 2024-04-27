<?php
class MyException extends Exception{}
class NetworkException extends Exception{}

 function testExceptions(){
    throw new NetworkException();

    }

    try{
        testExceptions();
    }catch(MyException $e){
        echo "My exception caught \n";

    }catch(NetworkException $e){
        echo "NetworkException caught \n";
    }finally{
        echo "Cleaned up \n";
    }