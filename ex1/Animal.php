<?php
class Animal{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public function hello(){
        echo $this->name;
    }
    public function year(){
        echo 'Родился в '. 2023-($this->age).' году';
    }
};