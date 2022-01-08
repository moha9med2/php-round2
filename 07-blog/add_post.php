<?php include 'header.php' ?>
<?php include 'db.php' ?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = $_POST['title'];
    $title = htmlspecialchars(trim($title));
    $content = $_POST['content'];
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "assets/posts/$image_name");

    $q_id = "SELECT id from users where email = '{$_SESSION['user_email']}' ";
    $r_id = mysqli_query($conn, $q_id);
    $user_id = mysqli_fetch_assoc($r_id)['id'];



    $query_insert = "INSERT INTO posts 
    (title , content , image, user_id , category_id)
    values 
    ('$title','$content', '$image_name' , $user_id, 1 )";
    mysqli_query($conn, $query_insert);

    echo mysqli_error($conn);
}







?>




<!-- Page Header-->
<header class="bg-dark">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Dashboard</h1>
                    <span class="subheading">Have questions? I have answers.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid bg-info">
    <div class="row">
        <div class="col-2 bg-dark text-white">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="add_post.php">Add Post</a>
                </li>

            </ul>
        </div>
        <div class="col-10">
            <div class="container p-5">
                <form action="add_post.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="title" placeholder="Post Title" class="form-control my-3">
                    <textarea type="textarea" name="content" placeholder="Post content" rows="7" class="form-control my-3"></textarea>
                    <input type="file" name="image" class="form-control my-3">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>