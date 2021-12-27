<?php
$conn = mysqli_connect('localhost', 'root', '', 'db');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$title = $_POST['title'];
$price = $_POST['price'];






// $query = 'SELECT * from products';
$insert = "INSERT into products (title,price) values ('$title',$price)";
$result = mysqli_query($conn, $insert);

echo mysqli_error($conn);



// while ($data = mysqli_fetch_assoc($result)) {
//    echo $data['id'];
// }

mysqli_close($conn);

// foreach($data as $single){
//     var_dump($single);
//     // echo $single[3];
// }






// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = ($conn, $sql);
