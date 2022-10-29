<?php

trait Singleton{
    public static $instance;

    // prevent direct construction
    private function __construct(){}

    // prevent cloning
    protected function __clone() {}

    public static function get_instance(){
        $calss = static::class;
        if(!isset(self::$instance)){
            self::$instance = new $calss;
        }

        return self::$instance;
    }
}

class User{
    use Singleton;

    public $name = "Nishan";

   function __construct()
   {
        echo $this->get_name();
   }

    function get_name(){
        return $this->name;
    }

    function calss_name(){
        return static::class;
    }
}

$user = User::get_instance();
$user2 = User::get_instance();
$user3 = User::get_instance();
$user4 = User::get_instance();

echo $user4->calss_name();

var_dump($user);