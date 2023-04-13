<?php
class Animal{
    public $name;
    public $type;
    public $age;
    public function hello(){
        echo $this->type.' '.$this->name;
    }
    public function year(){
        echo 'Родился в '. 2023-($this->age).' году';
    }
};