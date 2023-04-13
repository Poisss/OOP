<?php
class Kot extends Animal{
    public $type;
    public function __construct($name,$age,$type)
    {
        parent::__construct($name,$age);
        $this->type=$type;
    }
    public function hello(){
        echo parent::hello().' '.$this->type;
    }
}