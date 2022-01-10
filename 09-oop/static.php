<?php 

class b
{
    static $x = 'x';
    static function p(){
        return 'static method';
    }
}

$ob = new b;
// echo $ob->x;

echo b::$x;
echo b::p();