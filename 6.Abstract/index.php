<?php

abstract class User
{
    
    public function user_data()
    {
        echo "User Data";
    }

    abstract public function user_pw();
}

class Product extends User
{

    public function seller_data()
    {
        return parent::user_data();
        //return $this->user_data();
    }

    function user_pw()
    {
        echo "1234";
    }
}

$user = new Product;
$user->seller_data();
$user->user_pw();
