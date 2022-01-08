<?php session_start() ?>
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








<?php while ($row = mysqli_fetch_assoc($result)) {

    echo json_encode($row);
} ?>


