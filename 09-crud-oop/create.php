<?php $page_name = 'create employee'; ?>
<?php include 'header.php' ?>
<?php include 'db.php' ?>

<div class="container p-5 mx-auto">
    <div class="border rounded shadow p-5">
        <form action="handleform.php" method="post">
            <input type="text" name="last" class="form-control my-3">
            <input type="text" name="email" class="form-control my-3">
            <input type="date" name="hire" class="form-control my-3">
            <input type="text" name="job" class="form-control my-3">
            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
</div>

<?php include 'footer.php' ?>