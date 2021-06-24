<?php 

class Magic{

    private $name;

    private $data = ["Name" => "Nishan", "XM"=>"PHP", "Time"=>"2pm/Sun"];

    function __construct(){
        echo "Conastructor ! <br />";
    }

    function getName(){
        echo $this->name;
    }

    function __get($key){
        if(array_key_exists($key, $data = $this->data)){
            return $data[$key];
        }elseif(in_array($key, $this->data)){
            return $key;
        }else{
            echo $key." Not Exist! <br />";
        }
    }

    function __set($property, $value)
    {
       //echo "Value from $name:$value <br />";

       if(property_exists($this, $property)){
        $this->$property = $value;
       }else{
           echo "This Property ($property) not exist!";
       }
    }

    function __call($name, $arguments)
    {
      echo "this ".$name." has value :". implode(',', $arguments)."<br/>";  
    }

    function __destruct()
    {
        echo "magic done !";
    }
}

$magic = new Magic;

$magic->Nishan;

$magic->Age=20;

$magic->method(2, 3, 4, 5);

echo "<hr>";

echo $magic->Name;

echo $magic->Nishan."\n";

echo "<hr>";

$magic->name = "Nishan";

echo $magic->test = "Test Name";

$magic->getName();