<?php

spl_autoload_register(function($classes){
    require $classes.".php";
});

// use Product\Dealer as Dealer;
// use Product\Seller as Seller;

//$dealer = new Dealer\Product;
//$seller = new Seller\Product;

$dealer = new Product;





