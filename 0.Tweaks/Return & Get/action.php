<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $input = $_POST['input'];

    $err = '';
    if(strlen($input) < 4){
        return $err;
    }else{
        return $input;
    }



    // print_r($input);
}
