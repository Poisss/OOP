<?php
class MathSelect{
    public $a;
    public $b;
    public $type;
    public function __construct($a,$b,$type)
    {
        $this->a=$a;
        $this->b=$b;
        $this->type=$type;
    }
    public function math(){
        if($this->type==1){
            echo $this->a+$this->b;
        }
        if($this->type==2){
            echo $this->a-$this->b;
        }
        if($this->type==3){
            echo $this->a*$this->b;
        }
        if($this->type==4){
            echo $this->a/$this->b;
        }
    }
}