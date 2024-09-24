<?php
include_once ('C.php');

Class A extends C{
    public function f(){
        echo "This is function a1 from class A";
    }
    public function a1(){
        echo "This is function a1 from class A";
    }
}
$a = new A();
$a->a1(); 
?>