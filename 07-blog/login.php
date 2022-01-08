<?php include 'header.php' ?>
<?php include 'db.php' ?>

<?php
if (isset($_SESSION['user_email'])) {
    header('location: dashboard.php');
}
?>


<?php
$check_login = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q_login_val = "SELECT * from users where email = '$email' and password = '$password' ";
    $r_login_val = mysqli_query($conn, $q_login_val);

    if (mysqli_num_rows($r_login_val) > 0) {
        $_SESSION['user_email'] = $email;
    } else {
        $check_login = 'email or password is wrong';
    }
}
?>

<?php
if (isset($_SESSION['user_email'])) {
    header('location: dashboard.php');
}
?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>login</h1>
                    <span class="subheading">Have questions? I have answers.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- login form -->
<div class="container w-75 p-5 m-5 mx-auto border shadow rounded">
    <div class="row">
        <div class="col-12">
            <form action="login.php" method="post">
                <input type="email" required name="email" placeholder="email" class="form-control my-3">
                <input type="password" required name="password" placeholder="password" class="form-control my-3">
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <?php echo $check_login ?>
        </div>
    </div>
</div>


<?php include 'footer.php' ?>