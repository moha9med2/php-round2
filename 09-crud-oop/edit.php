<?php $page_name = 'create employee'; ?>
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
        <form action="updateform.php?id=<?php echo $row['EMPLOYEE_ID'] ?>" method="post">
            <input value="<?php echo $row['LAST_NAME'] ?>" type="text" name="last" class="form-control my-3">
            <input value="<?php echo $row['EMAIL'] ?>" type="text" name="email" class="form-control my-3">
            <input value="<?php echo $row['HIRE_DATE'] ?>" type="date" name="hire" class="form-control my-3">
            <input value="<?php echo $row['JOB_ID'] ?>" type="text" name="job" class="form-control my-3">
            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
</div>

<?php include 'footer.php' ?>