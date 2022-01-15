<?php

// procedual
$name = 'ahmed';
$name = 'gfsdgdgd';

define ('name','ali');




// echo name;
function calcAge()
{
    return '12';
}

// echo $name;
// echo calcAge();



// class & object 

class human
{
    // function __construct()
    // {
    //     echo "this is construct method";
    // }


    public $name;


    const name = 'ali';

    function calcAge()
    {
        // return $this->name;
        return self::name;
    }
}

$ob1 = new human();
// $ob2 = new human();

// echo $ob1->name;
// echo "<br>";
// echo $ob1->calcAge();



class route{

    static function get($x,$y){

        return $x*$y;
    }
}

echo route::get('/about',6);