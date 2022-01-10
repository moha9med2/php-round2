<?php $page_name = 'Table'; ?>

<?php include 'header.php' ?>
<?php include 'db.php';


$search = $_GET['search'];
$query_search = "SELECT * from employees where FIRST_NAME like '%$search%' OR EMPLOYEE_ID like '%$search%'  ";


$result_search = mysqli_query($conn, $query_search);
// echo mysqli_error($conn);
?>

<div class="container p-5 mx-auto">
    <?php if (mysqli_num_rows($result_search) > 0) { ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Employee ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result_search)) { ?>
                    <tr>
                        <td><?php echo $row['EMPLOYEE_ID']; ?></td>
                        <td><?php echo $row['FIRST_NAME']; ?></td>
                        <td><?php echo $row['LAST_NAME']; ?></td>
                        <td><?php echo $row['EMAIL']; ?></td>
                        <td><?php echo $row['PHONE_NUMBER']; ?></td>
                        <td>
                            <a href="show.php?id=<?php echo $row['EMPLOYEE_ID'] ?>" class="btn btn-primary">show</a>
                            <a href="edit.php?id=<?php echo $row['EMPLOYEE_ID'] ?>" class="btn btn-success">edit</a>
                            <a href="delete.php?id=<?php echo $row['EMPLOYEE_ID'] ?>" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    <?php } else { ?>
        <div>
            <p>There is no results</p>
        </div>
    <?php } ?>
</div>


<?php include 'footer.php' ?>