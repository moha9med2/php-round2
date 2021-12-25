<?php include 'header.php' ?>


<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
    <!-- single product -->
    <div class="container p-5 border rounded shadow my-5 d-flex justify-content-center">
        <div class="card <?php echo $_POST['type'] == 'new' ? 'bg-success' : 'bg-primary'   ?> p-relative" style="width: 18rem;">
            <p class="category-label bg-light px-3 py-1"><?php echo $_POST['category'] ?></p>
            <img src="<?php echo $_FILES['image']['name'] ?>" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_POST['title'] ?></h5>
                <p class="card-text"><?php echo $_POST['description'] ?></p>
                <p class="card-text"><?php echo $_POST['price'] ?></p>
            </div>
        </div>
    </div>
<?php } else {
    header('location: index.php');
} ?>




<?php include 'footer.php' ?>