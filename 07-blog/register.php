<?php include 'header.php' ?>
<?php include 'db.php' ?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $_FILES['image']['name'];

    $query = "INSERT INTO users 
            (username , password , email , phone ) 
            values 
            ('{$_POST['username']}','$password','$email','$phone')";


    mysqli_query($conn, $query);
    echo mysqli_error($conn);

}
?>

<!-- Page Header-->
<header class="masthead" style="height:10px ;background-image: url('assets/img/contact-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Contact Me</h1>
                    <span class="subheading">Have questions? I have answers.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- register form -->
<div class="container w-75 p-5 m-5 mx-auto border shadow rounded">
    <div class="row">
        <div class="col-12">
            <form action="register.php" method="post" enctype="multipart/form-data">
                <input type="text" name="username" placeholder="username" class="form-control my-3">
                <input type="password" name="password" placeholder="password" class="form-control my-3">
                <input type="email" name="email" placeholder="email" class="form-control my-3">
                <input type="text" name="phone" placeholder="phone" class="form-control my-3">
                <input type="file" name="image" class="form-control my-3">
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>


<?php include 'footer.php' ?>