<?php
declare(strict_types=1);
include_once ('A.php');
include_once ('B.php');
include_once ('C.php');
include_once ('I.php');
   
class Demo
    {
        //Số trường hợp type A
        public function typeAReturnA(): A
        {
            echo __FUNCTION__ . "<br>";
            return new A;
        }
    
        public function typeAReturnB(): A
        {
            echo __FUNCTION__ . "<br>";
            return new B;
        }
    
        public function typeAReturnC(): A
        {
            echo __FUNCTION__ . "<br>";
            return new C;
        }
    
        public function typeAReturnI(): A
        {
            echo __FUNCTION__ . "<br>";
            return new II;
        }
    
        public function typeAReturnNull(): A
        {
            echo __FUNCTION__ . "<br>";
            return null;
        }
    
        //Số trường hợp type B
        public function typeBReturnA(): B
        {
            echo __FUNCTION__ . "<br>";
            return new A;
        }
    
        public function typeBReturnB(): B
        {
            echo __FUNCTION__ . "<br>";
            return new B;
        }
    
        public function typeBReturnC(): B
        {
            echo __FUNCTION__ . "<br>";
            return new C;
        }
    
        public function typeBReturnI(): B
        {
            echo __FUNCTION__ . "<br>";
            return new II;
        }
    
        public function typeBReturnNull(): B
        {
            echo __FUNCTION__ . "<br>";
            return null;
        }
    
        //Số trường hợp type C
        public function typeCReturnA(): C
        {
            echo __FUNCTION__ . "<br>";
            return new A;
        }
    
        public function typeCReturnB(): C
        {
            echo __FUNCTION__ . "<br>";
            return new B;
        }
    
        public function typeCReturnC(): C
        {
            echo __FUNCTION__ . "<br>";
            return new C;
        }
    
        public function typeCReturnI(): C
        {
            echo __FUNCTION__ . "<br>";
            return new II;
        }
    
        public function typeCReturnNull(): C
        {
            echo __FUNCTION__ . "<br>";
            return null;
        }
    
        //Số trường hợp type I
        public function typeIReturnA(): II
        {
            echo __FUNCTION__ . "<br>";
            return new A;
        }
    
        public function typeIReturnB(): II
        {
            echo __FUNCTION__ . "<br>";
            return new B;
        }
    
        public function typeIReturnC(): II
        {
            echo __FUNCTION__ . "<br>";
            return new C;
        }
    
        public function typeIReturnI(): II
        {
            echo __FUNCTION__ . "<br>";
            return new II;
        }
    
        public function typeIReturnNull(): II
        {
            echo __FUNCTION__ . "<br>";
            return null;
        }
    
        //Số trường hợp type Null
        public function typeNullReturnA(): null
        {
            echo __FUNCTION__ . "<br>";
            return new A;
        }
    
        public function typeNullReturnB(): null
        {
            echo __FUNCTION__ . "<br>";
            return new B;
        }
    
        public function typeNullReturnC(): null
        {
            echo __FUNCTION__ . "<br>";
            return new C;
        }
    
        public function typeNullReturnI(): null
        {
            echo __FUNCTION__ . "<br>";
            return new II;
        }
    
        public function typeNullReturnNull(): null
    {
            echo __FUNCTION__ . "<br>";
            return null;
        }
    }
    
    $demo = new Demo();
    
    $demo->typeAReturnA();
    $demo->typeAReturnB();
    $demo->typeAReturnC();
    $demo->typeAReturnI();
    $demo->typeAReturnNull();
    
    $demo->typeBReturnA();
    $demo->typeBReturnB();
    $demo->typeBReturnC();
    $demo->typeBReturnI();
    $demo->typeBReturnNull();
    
    $demo->typeCReturnA();
    $demo->typeCReturnB();
    $demo->typeCReturnC();
    $demo->typeCReturnI();
    $demo->typeCReturnNull();
    
    $demo->typeIReturnA();
    $demo->typeIReturnB();
    $demo->typeIReturnC();
    $demo->typeIReturnI();
    $demo->typeIReturnNull();
    
    $demo->typeNullReturnA();
    $demo->typeNullReturnB();
    $demo->typeNullReturnC();
    $demo->typeNullReturnI();
    $demo->typeNullReturnNull();
?>