<?php

namespace NM\Inc;



// function nm_autoloder($class){
//     include 'classes/class-'.$class.'.php';
// }

// spl_autoload_register('nm_autoloder');

spl_autoload_register(function($class){
    //$calssName = strtolower($class);
    //print_r($calssName);
    //print_r($class);
    include $class.'.php';
});
