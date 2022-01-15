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
    private $host = 'localhost';
    // new mysqli($host, '', '');
    // private $y = 'y';
    function connect($par){
        return $this->host;
    }

    function connect2($par){
        return $this->host;
    }
}

$ob = new b;
// $ob->y = 'y value';
echo $ob->p('ay 7aga');
