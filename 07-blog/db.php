<?php

$conn = mysqli_connect('localhost','root','','blog');

if ($conn === false){
    echo mysqli_connect_error();
    die();
}

