<?php

namespace App;

use App\nisaClass;

class ntest{
    public $age = 29;



}

if (class_exists('App\nisaClass')){
    echo "done";
}else{
    echo "none";
}

class blaki extends nisaClass{
    public function get_data(){
        return $this->data;
    }
}
