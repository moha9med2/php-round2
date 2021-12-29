<?php

$conn = mysqli_connect('localhost', 'root', '', 'hr');
$query = 'SELECT * from employees';



$result = mysqli_query($conn, $query);
