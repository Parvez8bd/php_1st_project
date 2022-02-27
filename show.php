<?php
if (isset($_POST['submit'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $img_name = $_FILES['img']['name'];
     $tmp_name = $_FILES['img']['tmp_name'];
     move_uploaded_file($tmp_name,"img/".$img_name);
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <div class="row">
        <h1>User info:</h1>
            <div class="mb-3">
                <label for="name" class="form-label">Name : <?php echo(isset($name) ?  $name : '')  ?> </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address : <?php echo(isset($email) ?  $email : '')  ?></label>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Phone: <?php echo(isset($phone) ?  $phone : '')  ?></label>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Photo: </label>
                <img src="img/<?php echo(isset($img_name) ?  $img_name : '')  ?>" alt="">
            </div>
    </div>
</div>



























<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>