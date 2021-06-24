<?php

//https://www.php.net/manual/en/book.spl.php

$name = ["A", "B", "C", "D", 1];

$arIt = new ArrayIterator($name);
$chIt = new CachingIterator($arIt);

foreach($data = new LimitIterator($chIt, 0, 4) as $value){
    echo $value;
    if($chIt->hasNext()){
        echo ",";
    }

}

//print_r($chIt);
