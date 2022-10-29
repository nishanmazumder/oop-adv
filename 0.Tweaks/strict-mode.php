<?php

//declare(strict_types = 1);

// $a = "1";
// $b = 2;

// function strict_mode(int $a, int $b){
//     $c = $a + $b;
//     return $c;
// }

$array = ['a', 'b', 'c', 5, 7, '100', 'name'];

$array[] = "New Value";

$i = 10;

foreach ($array as $key => $value) {
    echo "<pre>";
    //echo "$key = $value";

    if (is_string($value)) {
        $string[$i] = $key . $value;
        
    }elseif(is_int($value)){
        $int[$i] = $key . $value;
    }

    $i++;
}

//unset($string);

//$merge = array_merge($string, $int);

//echo "<pre>";

//$splice = array_splice($array, 1, count($array), 'test');

print_r($splice);
