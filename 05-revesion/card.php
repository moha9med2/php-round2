<?php $page_name = 'Card'; ?>

<?php include 'header.php' ?>
<?php include 'db.php' ?>




<div class="container p-5 mx-auto">
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-12 col-sm-6 col-md-4 my-3">
                <div class="card">
                    <div class="card-header">
                        <?php echo $row['EMPLOYEE_ID'] ?>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <?php echo $row['FIRST_NAME'] . '-' .   $row['LAST_NAME']; ?>
                        </li>
                        <li class="list-group-item"><?php echo $row['EMAIL'] ?></li>
                        <li class="list-group-item"><?php echo $row['PHONE_NUMBER'] ?></li>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include 'footer.php' ?>