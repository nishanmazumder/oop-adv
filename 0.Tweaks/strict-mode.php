<?php

//declare(strict_types = 1);

$a = "1";
$b = 2;

function strict_mode(int $a, int $b){
    $c = $a + $b;
    return $c;
}

echo strict_mode($a, $b);