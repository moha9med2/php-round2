<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5 p-5 m-auto w-75 border rounded">
        <form action="data.php" method="post" enctype="multipart/form-data">
            <input type="text" name="username" placeholder="Enter your name" class="form-control my-3">
            <input type="text" name="phone" placeholder="Enter your phone" class="form-control my-3">
            <input type="text" name="email" placeholder="Enter your email" class="form-control my-3">
            <input type="file" name="image" class="form-control my-3">
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>


</body>

</html>