<?php

abstract class a{
    abstract static public function b();
}
class c extends a{
       // Triển khai phương thức tĩnh từ lớp trừu tượng
       static public function b() {
        echo "Phương thức b() được gọi!\n";
    }
}
C::b();
$a= new c();
$a->b();