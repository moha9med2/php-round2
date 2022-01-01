<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload files</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container p-5 m-5 rounded border shadow">
        <div class="row">
            <div class="col-12">
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="image">
                    <button type="submit" class="btn btn-primary">send</button>
                </form>
            </div>
        </div>
    </div>

    <?php


    $conn = mysqli_connect('localhost', 'root', '', 'db');

    if (isset($_FILES['image']['name'])) {
        $image_name = uniqid ().$_FILES['image']['name'];
        $image_tmb_name = $_FILES['image']['tmp_name'];
        $query = "INSERT INTO images (name) values ('$image_name')";
        mysqli_query($conn, $query);
        // var_dump($_FILES['image']);

        move_uploaded_file($image_tmb_name,"images/$image_name");

    }


    // echo mysqli_error($conn);

    $query_select = "SELECT * from images";

    $result = mysqli_query($conn, $query_select);


    ?>



    <div class="container p-5 m-5">
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-3 border rounded">
                    <img class="img-fluid" src="images/<?php echo $row['name'] ?>" alt="">
                </div>
            <?php    } ?>
        </div>
    </div>


</body>

</html>