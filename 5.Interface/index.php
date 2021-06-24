<?php

interface Single{
    function single_product();
}

interface Cart{
    function product_cart();
}

class Product implements Single{
    function __construct()
    {
        $this->single_product();
    }

    function single_product()
    {
        echo "Single Product";
    }
}

class LoginUser extends Product implements Cart{
    function __construct()
    {
        $this->product_cart();
    }

    function product_cart()
    {
        echo "this is cart";
    }
}

$product = new Product;
echo "<br/>";
$user = new LoginUser;