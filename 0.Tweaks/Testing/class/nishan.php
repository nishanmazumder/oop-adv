<?php

namespace App;

class nisaClass{
    public $data = "test";


}

define("DB_NAME", "events");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_HOST", "localhost");

define("TITLE", "Event Site");
define("KEYWORD", "It's online events selling site");

class Connection {

    private $host_name = DB_HOST;
    private $user_name = DB_USER;
    private $dbPassword = DB_PASS;
    private $dbName = DB_NAME;

    protected $db_connect;

    public function __construct() {
        //$this->db_connect = mysqli_connect($this->host_name, $this->user_name, $this->dbPassword, $this->dbName);

        $this->db_connect  = new \mysqli($this->host_name, $this->user_name, $this->dbPassword, $this->dbName);

        if (!$this->db_connect) {
            echo "Connection Failed";
            die('Connection Failed' . mysqli_error($this->db_connect));
        }else{
            echo "Connection done!";
        }
    }

    public function get_data(){

    }

}

//$nis = new Connection();
