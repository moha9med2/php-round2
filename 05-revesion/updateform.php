<?php include 'db.php';


$last = $_POST['last'];
$email = $_POST['email'];
$hire = $_POST['hire'];
$job = $_POST['job'];
$id = $_GET['id'];


$sql = "UPDATE employees 
set LAST_NAME = '$last', EMAIL =' $email', HIRE_DATE = $hire , JOB_ID = '$job' where EMPLOYEE_ID = $id";


mysqli_query($conn, $sql);

// echo mysqli_error($conn);

header('location: table.php');
