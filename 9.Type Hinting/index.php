<?php 

include "Customer.php";
include "User.php";

$customer = new Customer;

// $array = array(2, 3, "data");

// $customer->customer_data($array);

$user = new User($customer);

$user2 = new User;


// function user($class){
//     $class->user_data();
// }

// user($user);

// function customer_data_pvt($class){
//     $class->customer_data_pvt();
// }

// customer_data_pvt($user);





