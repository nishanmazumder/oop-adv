<?php

class Statics{
    static $name = "Nishan";
    const AGE = 28;

    public function data(){
        echo "Name :". self::$name;    
        echo "</br>";
        echo "Age :".Statics::AGE;
    }

    static function static(){
        echo "Static!";
    }
}

$static = new Statics;

$static->data();
echo "</br>";
echo Statics::$name;
echo "</br>";
echo Statics::static();




