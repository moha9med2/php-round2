<?php

class c
{
    public $y = 'y';
}

class a extends c
{
    function print()
    {
        return 'function from class a';
    }
}

class b extends a
{

    function print()
    {
        return 'function from class b';
    }
}

$ob = new b;
echo $ob->print();
