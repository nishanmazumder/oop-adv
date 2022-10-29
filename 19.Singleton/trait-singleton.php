<?php

trait Singleton
{
    public static function get_instance()
    {
        static $instance = [];

        $called_class = get_called_class();

        if (!isset($instance[$called_class])) {
           // echo "Hello";
            $instance[$called_class] = new $called_class;
        }

        return $instance[$called_class];
    }
}

class User{

    use Singleton;

    public function __construct()
    {
        //echo "Test";
    }

    public function test(){
        echo "Test 2";
    }

    public function addSum($a, $b){
        $result = $a + $b;

        return $result;
    }


}

$user = User::get_instance();
$user2 = User::get_instance();
$user3 = User::get_instance();

//$user2 = new User;
//$user3->test();

print_r($user3);

