<?php

class DB{
    private static $instance;

    function __construct()
    {
        if(!self::$instance){
            self::$instance = $this;
            echo "NEW";
            return self::$instance;
        }else{
            echo "OLD";
            return self::$instance;
        }
    }
}

$db = new DB;
$db = new DB;
$db = new DB;
$db = new DB;