<?php include 'db.php';


$last =$_POST['last'];
$email =$_POST['email'];
$hire =$_POST['hire'];
$job =$_POST['job'];

$sql = "INSERT INTO employees (LAST_NAME, EMAIL, HIRE_DATE, JOB_ID)
VALUES ('$last', '$email', '$hire','$job')";

mysqli_query($conn,$sql);

header('location: table.php');
