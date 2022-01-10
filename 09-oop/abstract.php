<?php

abstract class a
{
    public $x = 'x';
    abstract function print();
}

class b extends a
{
    function print()
    {
        return ' abstract method';
    }
    
}

$ob = new b;
echo $ob->x;
