<?php include 'header.php' ?>
<?php include 'db.php' ?>

<?php

if (isset($_SESSION['user_email'])) {
    $q_id = "SELECT id from users where email = '{$_SESSION['user_email']}' ";
    $r_id = mysqli_query($conn, $q_id);
    $user_id = mysqli_fetch_assoc($r_id)['id'];

    $query = "SELECT posts.*  , users.username , categories.title as cat_title 
        from posts
        join users 
        on posts.user_id = users.id
        join categories
        on posts.category_id = categories.id
        where posts.user_id = $user_id";

    $result = mysqli_query($conn, $query);
}



// if (mysqli_num_rows($result) > 0) {
// output data of each row

// } else {
//     echo "0 results";
// }

echo mysqli_error($conn);


?>




<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- <div style="position: relative;">
    <img src="assets/img/home-bg.jpg" class="img-fluid" alt="">
    <h1 style="position:absolute;top:50%;left:50%;transform: translate(-50%, -50%);" class="text-center">test</h1>
</div> -->


<!-- Main Content-->
<div class="container px-4 ">
    <div class="row gx-1 justify-content-center">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <div class="col-md-4">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.php">
                        <h2 class="post-title"><?php echo $row['title'] ?></h2>
                        <img src="assets/posts/<?php echo $row['image'] ?>" width="100">
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!"><?php echo $row['username'] ?></a>
                        <?php echo $row['date'] ?>
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
            </div>
        <?php  } ?>

    </div>
</div>
<?php include 'footer.php' ?>