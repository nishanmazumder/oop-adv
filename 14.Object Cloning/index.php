<?php

class User{
    public $name;
    public $exam;

    function __construct($n)
    {
        echo $this->name = $n;
    }

    function setExam(Exam $xm){
        $this->exam = $xm;
    }

    function __clone()
    {
        $this->exam = clone $this->exam;
    }
}

class Exam{
    public $xmName;

    function __construct($xm)
    {
        $this->xmName = $xm;
    }
}
echo "<pre>";
$user = new User("Nishan");
$exam = new Exam("PHP");
$user->setExam($exam);

$user2 = clone $user;

$user2->name = "Mazumder";
$user2->exam->xmName = "JAVA";
//echo $user->name;

print_r($user);
print_r($user2);



