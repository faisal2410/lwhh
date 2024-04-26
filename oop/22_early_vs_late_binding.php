<?php
class Planet{
    public static function echoName(){
        // echo self::getName();
        echo static::getName();
    }
    public static function getName(){
        return "Planet";
    }
}


class Earth extends Planet{

    // public static function echoName(){
    //     echo "Earth";
    // }

    public static function getName(){
        return "Earth";
    }

}

// Planet::echoName();
Earth::echoName();

