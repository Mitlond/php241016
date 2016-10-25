<?php
class Baza {
    public $a,$b,$res;
    function add ($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    function test(){
        $this->res=$this->a+$this->b;
    }
};
?>