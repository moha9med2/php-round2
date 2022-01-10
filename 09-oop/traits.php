<?php 

trait c
{
    public $c = 'c';
}

class b 
{
    public $b = 'b';
}

class a extends b
{
    use c;

}

$ob = new a;
echo $ob->c;
echo $ob->b;