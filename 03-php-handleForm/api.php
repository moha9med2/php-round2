<?php

$arr = [
    ['name'=>'ali'],
    ['name'=>'ali'],
    ['name'=>'ali'],
    ['name'=>'ali'],
    ['name'=>'ali'],
];

$arr2 = [
    ['name'=>'ali'],
    ['name'=>'ali'],
    ['name'=>'ali'],
    ['name'=>'ali'],
    ['name'=>'ali'],
];

// array_merge($arr,$arr2);

echo json_encode(array_merge($arr,$arr2));


?>
