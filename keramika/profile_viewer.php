<?php session_start();
    include('php/conexion.php');
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
    <title>Keramika | Your Profile</title>
</head>
<body>
<?php include('layouts/header.php'); ?>
    <div class="row">
        <div class="col-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="media">
                        <img src="<?php echo $datos_user['profile_picture'];?>" class="mr-3" alt="Error while loading your profile picture..." width="30">
                        <div class="media-body">
                            <h5 class="mt-0"><?php echo $datos_user['name']." ".$datos_user['last_name'];?></h5>
                        </div>
                    </div>
                </li>
                <li class="list-group-item"><a class="ml-5 text-secondary" href="#"><i class="text-secondary fa-solid fa-home"></i> General</a></li>
                <li class="list-group-item"><a class="ml-5 text-secondary" href="#"><i class="text-secondary fa-solid fa-book"></i> Information</a></li>
                <li class="list-group-item"><a class="ml-5 text-secondary" href="#"><i class="text-secondary fa-solid fa-bag-shopping"></i> Your Products</a></li>
                <li class="list-group-item"><a class="ml-5 text-secondary" href="#"><i class="text-secondary fa-solid fa-language"></i> Language</a></li>
                <li class="list-group-item"><a class="ml-5 text-secondary" href="#"><i class="text-secondary fa-solid fa-power-off"></i> Log Out</a></li>
            </ul>
        </div>
        <div class="col-10">

        </div>
    </div>

    <script src="https://kit.fontawesome.com/11fc7704fb.js" crossorigin="anonymous"></script>
</body>
</html>