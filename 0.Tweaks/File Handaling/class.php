<?php

//Read File
trait FileHandling{
    public function read_file($file){
        return readfile($file);
    }

    public function read_file_fread($handler, $file){
        if(filesize($file) == 0 ){
            return "There have no text. please add some text!";
        }else{
            return fread($handler, filesize($file));
        }
        
    }

    public function file_handle($file, $mode){
        return fopen($file, $mode);
    }

    public function file_write($handle, $text){
        return fwrite($handle, $text);
    }
}

class File{
    use FileHandling;  
}
