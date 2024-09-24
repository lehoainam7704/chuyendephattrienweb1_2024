<?php
include_once ('C.php');

Class B extends C{
    public function f(){

    }
    public function b1(){
        echo "This is function b1 from class B";
    }
}
$B = new B();
$B->B1(); 
?>