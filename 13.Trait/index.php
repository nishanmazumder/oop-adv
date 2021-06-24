<?php
trait getValue{
    public function getValue($array){
        foreach($array as $value){
            echo $value;
        }
    }
}

class Letter{
    use getValue;

    // public function __construct()
    // {
    //     $this->setValu();
    // }

    public $letter = ["A", "B", "C", "D", "E"];

    function setValu(){
        return $this->getValue($this->letter);
    }

    
}

$letter = new Letter;

$letter->setValu();
