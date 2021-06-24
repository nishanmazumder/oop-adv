<?php

class User{

    public $customer = ['A', 'B', 'C'];

    public $name = "Nishan";
    
    function __construct()
    {
        echo "This is User! </br>";

        //$customer->customer_data($this->customer);
    }

    function iteration(){
        foreach($this as $key=>$val){
            foreach($val as $value){
                echo "<pre>";
                echo "$value";
            }
            echo "<pre>";
            echo "$key=>$val";
        }
    }


}