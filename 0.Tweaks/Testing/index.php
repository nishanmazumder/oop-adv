<?php

if (file_exists(__DIR__ . '/../../vendor/autoload.php')){
    require __DIR__ . '/../../vendor/autoload.php';
}else{
    echo "Autoloader not found!";
}

use App\ntest;
use App\blaki;

 $testn = new ntest();

 echo $testn->age;

 $nameNis = new blaki();

 echo $nameNis->get_data();

class Index{
    public function number_arg()
    {
        $number = func_num_args();

        return "total:".$number;
    }
}

$index= new Index();

class arrayTest
{
    public $arrData;

    function __construct($array)
    {
        $this->arrData = $array;
    }

    function formatArray()
    {
        ksort($this->arrData);
        return $this->arrData;
    }
}




$data = ['9','string', 4 => 'key', 'test', 'PRV' => 'PRV', 8 => 'DOUBLE', '' => NULL, true, ['array1', false]];

$arrays = new arrayTest($data);

// echo '<pre>';
// print_r($arrays->arrData);
$allData = $arrays->formatArray();

// print_r($allData);

// echo $allData[3];

// foreach($allData as $key => $val){
//     echo '<pre>';
//     echo $val. '-'. $key;
// }

// $getData = $arrays->formatArray($data);


// print_r($getData);

//var_dump($array->arrData);


// $test->number_arg(1,2,3,10, "Nihsan");



// asort($data);
// echo '<pre>';
// print_r($data);






