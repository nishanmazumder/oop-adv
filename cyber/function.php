<?php

// connect
function connect(){
    try {
        $con =  new \PDO("mysql:host=localhost;dbname=cyberphp", "root", "");
        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $con;
    } catch (\PDOException $err) {
        echo $err->getMessage();
    }

}

