<?php
// interface & polymorphism

class c{

}

interface a
{
    function a();
    function b();
    function c();
}

interface x {

}


class b extends c implements a,x
{
    function a()
    {
        return '';
    }
    function b()
    {
    }
    function c()
    {
    }
}
