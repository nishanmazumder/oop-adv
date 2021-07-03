<?php

//Read File
trait FileHandling
{
    public function read_file($file)
    {
        return readfile($file);
    }

    public function read_file_fread($handler, $file)
    {
        if (filesize($file) == 0) {
            return "There have no text. please add some text!";
        } else {
            return fread($handler, filesize($file));
        }
    }

    public function file_handle($file, $mode)
    {
        return fopen($file, $mode);
    }

    public function file_write($handle, $text)
    {
        return fwrite($handle, $text);
    }
}

class File
{
    use FileHandling;

    public $file_name;
    public $handle;

    function __construct($file_name)
    {
        $this->file_name = $file_name;
        $this->handle = $this->file_handle($this->file_name, "a+") or die("Unable to open file!");
    }

    public function show_data()
    {
        if (is_readable($this->file_name)) {
            $this->read_file($this->file_name);
            clearstatcache();
        }
        //fclose($this->handle);
    }

    public function add_data($text)
    {
        if (is_writable($this->file_name)) {
            $this->file_write($this->handle, $text . " ");
            clearstatcache();
        }
        //fclose($this->handle);
    }
}

//echo __DIR__;
//echo dirname(__FILE__);
//$files = scandir(__DIR__);
//$path = getcwd();



//Global


//Read File ::>
// if(file_exists($file_name)){
//     echo $file->read_file($file_name);
//     //exit;
// }

//Set file handler
//$handle = $file->file_handle($file_name, "a+") or die("Unable to open file!");


//Write File



//print_r(fgetc($handle));


// $path = __DIR__;

// $files = array_diff(scandir($path), array('.', '..'));

// foreach ($files as $file) {
//     echo $file . "<br />";
// }


//print_r($test);