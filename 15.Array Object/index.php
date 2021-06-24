<?php

$name = ["A", "B", "C", "D", 1];

$arObj = new ArrayObject($name);

$arObj ->append("E");

$loop = $arObj->getIterator();

while($loop->valid()){
    echo $loop->current();
    $loop->next();
}

print_r($arObj);
