<?php


class User{
    public $user;
    protected $password;

    const NAME = "Nishan";

    function __construct($user, $pass)
    {
        //$this->user = $user;
        //$this->password = $pass;

        echo "User: ".$user." & "."PW :". $pass;
    }


    function __destruct()
    {
        unset($this->user);
        unset($this->password);
    }

}

$data = new User("Nishan", "Test");

