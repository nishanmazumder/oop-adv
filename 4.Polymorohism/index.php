<?php

class Product
{
    public $producto;
    protected $adress;

    function __construct($producto, $adress)
    {
        $this->producto = $producto;
        $this->adress = $adress;

        echo $producto . "---" . $adress;
    }

    function data()
    {
        echo "Product :" . $this->producto;
        echo "<br />";
        echo "Addr :" . $this->adress;
    }
}

class User extends Product
{
    public $user;

    function delivery()
    {
        echo "Name :" . $this->user;
        echo "<br />";
        $this->data();
    }
}

$data = new Product("Shirt", "Mirpur 1");
echo "<br />";
$data->data();
echo "<br />";
$user = new User("Shirt", "Mirpur 1");
echo "<br />";

if($user instanceof Product){
    $user->user = "Hori";
}
$user->delivery();
