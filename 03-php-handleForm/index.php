<?php include 'header.php' ?>


<!-- form section -->
<div class="container p-5 border rounded shadow my-5">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <label for="" class="form-label">Title</label>
        <input class="form-control mb-3" name="title" type="text">
        <?php if (empty($_POST['title'])) { ?>
            <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
            </div>
        <?php   } ?>

        <label for="" class="form-label">Description</label>
        <input class="form-control mb-3" name="description" type="text">
        <?php if (empty($_POST['title'])) { ?>
            <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
            </div>
        <?php   } ?>


        <label for="" class="form-label">Price</label>
        <input class="form-control mb-3" name="price" type="text">

        <label for="" class="form-label">Category</label>
        <input class="form-control mb-3" name="category" type="text">

        <label for="" class="form-label">Upload product Image</label>
        <input class="form-control mb-3" name="image" type="file">

        <label class="form-label">Choose Type: </label>
        <div class="form-check">
            <input class="form-check-input mb-3" name="type" value="new" type="radio">
            <label class="form-check-label">
                New
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input mb-3" name="type" value="used" type="radio">
            <label class="form-check-label">
                Used
            </label>
        </div>


        <input type="text" name="test">
        <button type="submit" name="send" class="btn btn-dark">Send</button>
    </form>
</div>

<?php

//  print_r (explode(",",$_POST['test'] ));
 echo strpos($_POST['test'],'@');
?>



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


<!-- cookie -->
<?php

//setcookie('id3', 'sdffdssdfdsfsf');

?>

<?php

// if (isset($_COOKIE['id3'])) {
//     echo $_COOKIE['id3'];
// }

?>



<?php

$arr = [4, 7, 8, 2, 4, 6, 2, 1];


var_dump($arr);


?>





<?php include 'footer.php' ?>