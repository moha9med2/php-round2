<?php
namespace App\traits\b;

include 'a.php';

use App\Controller\A\a as AA;


class human{
    public $username = 'ali from b';
}


$ob = new AA\human();
echo $ob->username;