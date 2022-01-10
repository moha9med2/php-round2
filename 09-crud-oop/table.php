<?php $page_name = 'Table'; ?>

<?php include 'header.php' ?>
<?php include 'db.php' ?>


<div class="container p-5 mx-auto">
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
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
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
</div>

<?php include 'footer.php' ?>