<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
</head>

<body>

    <?php var_dump($_POST) ?>
    <?php var_dump($_FILES) ?>

    <h1><?php echo $_REQUEST['username'] ?></h1>
    <h1><?php //echo $_POST['email'] ?></h1>
    <h1><?php //echo $_POST['phone'] ?></h1>
    <img src="<?php echo $_FILES['image']['name'] ?>" alt="">

</body>

</html>