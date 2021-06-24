<?php

class User{
    private static $instance;

    private function __construct()
    {
        echo "Run User!";
        echo get_called_class();
    }

    public static function get_instance(){
        if(!isset(self::$instance)){
            self::$instance = new User;
        }

        return self::$instance;
    }

    public static function query($sql){
       // mysql_query($sql);

       return $sql;
    }
}

$user1 = User::get_instance();
$user2 = User::query("test");
$user3 = User::get_instance();