<?php session_start() ?>


<?php $_SESSION['user_email'] = $_POST['email'] ?>

<?php header('location: index.php') ?>