<?php

class Serialize{
    public $name;
    public $email;
    public $age;

    function __construct()
    {
        $this->name = "Nishan <br/>";
        $this->email = "arosh019@gmail.com";
        $this->age = "28";
    }
}

$data = new Serialize;


$serilize = serialize($data);

$writeFile = file_put_contents("seriliaze.txt", $serilize, FILE_APPEND|LOCK_EX);

$unserialize = file_get_contents("seriliaze.txt");

$check = unserialize($unserialize);

print_r($check);





