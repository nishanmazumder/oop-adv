<?php

class User{

    public $customer = ['A', 'B', 'C'];
    
    function __construct()
    {
        echo "This is User! </br>";

        //$customer->customer_data($this->customer);
    }

    function user_data(){
        echo "this is user data!"; 
    }


}