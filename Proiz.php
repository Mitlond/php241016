<?php
require_once 'Baza.php';
class Proiz  extends   Baza {

    function anor () {
        $this->res=$this->a*$this->b;
    }
};
?>