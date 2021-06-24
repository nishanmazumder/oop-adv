<?php 

class Magic{

    private $name;

    private $data = ["Name" => "Nishan", "XM"=>"PHP", "Time"=>"2pm/Sun"];

    function __construct(){
        //echo "Conastructor ! <br />";
    }

    private function getName($name){
        echo $this->name = $name;
    }

    //Get
    function __get($key){
        if(array_key_exists($key, $data = $this->data)){
            return $data[$key];
        }elseif(in_array($key, $this->data)){
            return $key;
        }else{
            echo $key." Not Exist! <br />";
        }
    }

    //Set
    function __set($property, $value)
    {
       //echo "Value from $name:$value <br />";

       if(property_exists($this, $property)){
        $this->$property = $value;
       }else{
           echo "This Property ($property) not exist!";
       }
    }

    //Call
    function __call($method, $arg)
    {
      //echo "this ".$method." has value :". implode(',', $arg)."<br/>";  
        if(method_exists($this, $method)){
            call_user_func_array([$this, $method], $arg);
        }else{
            echo "Method ($method) dose not exist!";
        }

    }

    //Isset
    private $fname;
    private $lname;
    public $test = "Test";

    function getNameCheck($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }

    function __isset($property)
    {
        echo isset($this->$property);
    }

    function __destruct()
    {
        //echo "magic done !";
    }
}


$magic = new Magic;

//Get
echo $magic->Name.     "<br/>";

//Set
echo $magic->name = "Mazumder";

//Call
$magic->getName("Call Name");

//Isset
$magic->getNameCheck("Nishan", "M");
echo isset($magic->fname);

echo "<hr>";


