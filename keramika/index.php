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
    <?php include('layouts/header.php'); ?>
    <div class="row">
        <div class="col-3">
            <div class="card m-5" style="width: 18rem;">
                <img src="./img/pots/pot1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-leaf"></i> The knowledge of life</h5>
                    <p class="card-text">Aqui un ejemplo de una olla elaborada por:<br><br><i> Joan Parra</i></p>
                    <a href="#" class="btn btn-success">Ver mas...</a>
                </div>
            </div>
            <div class="card m-5" style="width: 18rem;">
                <img src="./img/pots/pot2.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-shield-halved"></i> Resilencia</h5>
                    <p class="card-text">Aqui un ejemplo de una olla elaborada por:<br><br><i>        
                    <?php
                    echo $datos_user['name'];
                    ?>
                    </i>
                    </p>
                    <a href="#" class="btn btn-success">Ver mas...</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card m-5" style="width: 18rem;">
                <img src="./img/pots/pot3.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-cross"></i> La aguja de la fe</h5>
                    <p class="card-text">Aqui un ejemplo de una olla elaborada por:<br><br><i> Joan Parra</i></p>
                    <a href="#" class="btn btn-success">Ver mas...</a>
                </div>
            </div>
            <div class="card m-5" style="width: 18rem;">
                <img src="./img/pots/pot4.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-brands fa-phoenix-framework"></i> Fenix</h5>
                    <p class="card-text">Aqui un ejemplo de una olla elaborada por:<br><br><i> Joan Parra</i></p>
                    <a href="#" class="btn btn-success">Ver mas...</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card m-5" style="width: 18rem;">
                <img src="./img/pots/pot5.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-sailboat"></i> A la deriva</h5>
                    <p class="card-text">Aqui un ejemplo de una olla elaborada por:<br><br><i> Joan Parra</i></p>
                    <a href="#" class="btn btn-success">Ver mas...</a>
                </div>
            </div>
            <div class="card m-5" style="width: 18rem;">
                <img src="./img/pots/pot6.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-palette"></i> Red and white on black</h5>
                    <p class="card-text">Aqui un ejemplo de una olla elaborada por:<br><br><i> Joan Parra</i></p>
                    <a href="#" class="btn btn-success">Ver mas...</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card m-5" style="width: 18rem;">
                <img src="./img/pots/pot7.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-bacon"></i> Ramo de alcatraces</h5>
                    <p class="card-text">Aqui un ejemplo de una olla elaborada por:<br><br><i> Joan Parra</i></p>
                    <a href="#" class="btn btn-success">Ver mas...</a>
                </div>
            </div>
            <div class="card m-5" style="width: 18rem;">
                <img src="./img/pots/pot8.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-bacon"></i> Sin nombre</h5>
                    <p class="card-text">Aqui un ejemplo de una olla elaborada por:<br><br><i> Joan Parra</i></p>
                    <a href="#" class="btn btn-success">Ver mas...</a>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-8">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./img/pots/pot1.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><i class="fa-solid fa-leaf"></i> The knowledge of life</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="./img/pots/pot2.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><i class="fa-solid fa-shield-halved"></i> Resilencia</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="./img/pots/pot3.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><i class="fa-solid fa-cross"></i> La aguja de la fe</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        <div class="col-2"></div>
    </div>

    <script src="https://kit.fontawesome.com/11fc7704fb.js" crossorigin="anonymous"></script>
</body>
</html>