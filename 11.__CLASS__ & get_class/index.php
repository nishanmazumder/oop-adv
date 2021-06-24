<?php
abstract class Data{
    function getClassData(){
        echo "Class Name => ".__CLASS__."<br/>";
        echo "Class Name =>".get_class($this);
    }
}

class Scope extends Data{
    function getClassName(){
        echo "Class Name => ".__CLASS__."<br/>";
        echo "Class Name =>".get_class($this);
    }

    function fromParent(){
        parent::getClassData();
    }
}

$data = new Scope;

$data->getClassData();
echo "<hr>";
$data->getClassName();
echo "<hr>";
$data->fromParent();