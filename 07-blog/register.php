<?php include 'header.php' ?>
<?php include 'db.php' ?>

<?php
if (isset($_SESSION['user_email'])) {
    header('location: dashboard.php');
}
?>

<?php
$result = $usernameError = $check_email_exist = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp, "assets/users/$image_name");
    $q_email_val = "SELECT email from users where email = '$email'";
    $r_email_val = mysqli_query($conn, $q_email_val);



    if ($username == '') {
        $usernameError = 'user name is required';
    } else if (mysqli_num_rows($r_email_val) > 0) {
        $check_email_exist = 'Email is already used';
    } else {
        $query = "INSERT INTO users 
            (username , password , email , phone , image ) 
            values 
            ('$username','$password','$email','$phone' , '$image_name')";

        $result =  mysqli_query($conn, $query);
        echo mysqli_error($conn);
    }
}
?>

<!-- Page Header-->
<header class="masthead" style="height:10px ;background-image: url('assets/img/contact-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Register</h1>
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
            <?php if (isset($result) && $result === true) { ?>
                <div class="alert alert-success" role="alert">
                    Registered Successufully
                </div>
            <?php } ?>
            <?php if ($check_email_exist != '') { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $check_email_exist ?>
                    </div>
                <?php } ?>
            <form action="register.php" method="post" enctype="multipart/form-data">
                <input type="text" required name="username" placeholder="username" class="form-control my-3">
                <?php if ($usernameError != '') { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $usernameError ?>
                    </div>
                <?php } ?>
                <input type="password" required name="password" placeholder="password" class="form-control my-3">
                <input type="email" required name="email" placeholder="email" class="form-control my-3">
                <input type="text" required name="phone" placeholder="phone" class="form-control my-3">
                <input type="file" name="image" class="form-control my-3">
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>


<?php include 'footer.php' ?>