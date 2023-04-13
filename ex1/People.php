<?php
class People{
    public $name='Tom';
    public $age;
    public function go(){
        echo'GO!';
    }
    public function go1(){
        return ++$this->age;
    }
}