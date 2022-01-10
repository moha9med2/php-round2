<?php 

// encapsolation == access modifier

// public , protected , private

// private مبتخرجش بره الكلاس
// protected 

class a
{
    protected $x = 'x';
}

class b extends a
{
    function p(){
        return $this->x;
    }
}

$ob = new b;
echo $ob->x;
