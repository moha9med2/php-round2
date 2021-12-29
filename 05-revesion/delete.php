<?php include 'db.php' ?>

<?php

if (isset($_GET['id'])) {
    $employee_id = $_GET['id'];
}

$query_delete = "DELETE from employees where employee_id =$employee_id";



?>

<?php mysqli_query($conn, $query_delete); ?>

<?php header('location: table.php') ?>
