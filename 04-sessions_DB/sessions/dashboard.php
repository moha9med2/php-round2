<?php include 'header.php' ?>
<?php

if (!isset($_SESSION['user_email'])) {
    header('location: index.php');
}

?>
<div class="container p-5 mx-auto">
    <div class="w-75 border rounded p-5">Dashooard</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>