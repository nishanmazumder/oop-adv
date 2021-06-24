<?php

class Customer{

    public $name = "Nishan";

    public $customer = ['E', 'F', 'G'];

    function customer_data(array $data){
        foreach($data as $val){
            echo $val."</br>";
        }
    }

    function customer_data_pvt(){
        // foreach($data->customer as $val){
        //     echo $val."</br>";
        // }

        echo "test";

    }

}