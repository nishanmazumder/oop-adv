<?php

class School{
    public $name;
    private $age;
    protected $gender;

    public $views;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

        echo "Student name:". $this->name;
        echo "</br>";
        echo "Student age:".$this->age;
    }

    public function student_name($Name){
        //echo "This is name!";
        //$this->name = $studentName;
        //echo "Student name:". $this->name;
        echo "Student name:". $Name;
        echo "</br>";
        $this->student_age();
    }

    private function student_age($Age = 12){
        //$this->age = $stdAge;
        //echo "Student age:".$this->age;
        echo "Student age:".$Age;
    }

    protected function student_gender(){
        echo "Student gender:".$this->gender;
    }

    public function student_data(){
        echo "Student name:". $this->name;
        echo "</br>";
        echo "Student age:". $this->age;
        echo "</br>";
        $this->student_gender();
    }

    function __destruct()
    {
       if(empty($this->views)){
            echo "UNKNOWN";
        }
    }

}

$student = new School("Hori", "15");
echo "</br>";
echo $student->name = "Hori";
echo "</br>";
$student->student_name("Nishan");
echo "</br>";
$student->student_data();

class Student extends School{
    function nameIt(){
        echo $this->name;


    }


}

echo "<hr>";

$test = new Student("mm", "sET");
$test->nameIt();


