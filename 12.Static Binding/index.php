<?php

use NM\Classes\User as ClassesUser;
use User as GlobalUser;

class User{
    static $name = "Nishan";

    static function getName(){
        echo self::$name;
        echo static::$name;
    }
}


class Person extends User{
   static $name = "Mazumder";
}

Person::getName();

