<?php session_start();
if(isset($_SESSION['datos_user'])) {
    $datos_user = $_SESSION['datos_user'];
} else {
    header("Location: auth/login.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/tab-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Keramika | Main</title>
</head>
<body>
    <?php include('layouts/header.php');?>

    <form action="./php/itemBD.php" method="POST" class="needs-validation" enctype="multipart/form-data">
        <input type="text" name="itemName" class="form-control">
        <select name="itemStyle" id="style" class="custom-select">
            <option value="Other">Other</option>
        </select>
        <select name="itemColor" id="color" class="custom-select">
            <option value="Other">Other</option>
        </select>
        <select name="itemSize" id="size" class="custom-select">
            <option value="Other">Other</option>
        </select>
        <input type="file" name="itemPic1" id="itemPic1">
        <button class="btn btn-outline-success w-100 mb-1" type="submit">Upload</button>
    </form>

    <script src="https://kit.fontawesome.com/11fc7704fb.js" crossorigin="anonymous"></script>
</body>
</html>