<?php
class Person extends Construct{
    public $surname;
    public function __construct($name,$age,$surname)
    {
        parent::__construct($name,$age);
        $this->surname=$surname;
    }
    public function go(){
        echo parent::go(). "surname ".$this->surname;
    }
}