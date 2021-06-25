<?php
trait getValue
{
    public function getValue($array)
    {
        foreach ($array as $value) {
            echo $value;
        }
    }
}

trait Override
{
    function ovr1()
    {
        echo "From Override!.\n";
    }
    function getValue($array)
    {
        foreach ($array as $value) {
            echo $value;
        }
    }

    private function ovrPrivate(){
        echo "Private!.\n";
    }
}


class Letter
{
    use getValue, Override{
        getValue::getValue insteadof Override;
        Override::getValue as arrayData;
        Override::ovrPrivate as public;
    }

    public $letter = ["A", "B", "C", "D", "E"];

    function setValu()
    {
        echo $this->ovr1();
        return $this->arrayData($this->letter);
    }

}

$letter = new Letter;

$letter->setValu();

$letter->ovrPrivate();


