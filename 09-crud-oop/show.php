<?php $page_name = 'single employee'; ?>
<?php include 'header.php' ?>
<?php include 'db.php' ?>
<?php if (isset($_GET['id'])) {
    $employee_id = $_GET['id'];
}

$query_single = "SELECT * from employees where employee_id =$employee_id";
$result_single = mysqli_query($conn, $query_single);


?>
<?php $row = mysqli_fetch_assoc($result_single); ?>

<div class="container p-5 mx-auto">
    <div class="border rounded shadow p-5">
        <h3><?php echo $row['EMPLOYEE_ID'] ?></h3>
        <h3><?php echo $row['FIRST_NAME'] ?></h3>
        <h3><?php echo $row['EMAIL'] ?></h3>
    </div>
</div>

<?php include 'footer.php' ?>