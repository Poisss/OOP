<?php
class Construct{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public function go(){
        echo 'Name '.$this->name.' ';
    }
}