<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/tab-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/login.css">
    <title>Keramika | Log in</title>
</head>
<body>
    <div id="login-pane" class="container mt-4 rounded">
        <div class="row align-items-stretch">
            <div id="login-background" class="col"></div>
            <div class="col">
                <div id="logo-title" class="text-end mb-4">
                    <a href="./login.php"><img src="../img/title-logo.png" alt="error while loading the image"
                            width="350"></a>
                </div>
                <?php 
                if(isset($_GET['error'])) {
                    ?>
                    <div class="alert alert-danger">
                        <p><?php echo $_GET['error']?></p>
                    </div>
                    <?php
                }
                ?>
                <form action="../php/verificar.php" method="POST" class="needs-validation">
                    <div class="mb-4 was-validated">
                        <label for="email" class="form-label"><i class="fa-solid fa-user"></i> E-mail</label>
                        <input name="email" type="email" class="form-control" name="email" placeholder="E-mail address" required>
                        <div class="invalid-feedback">
                            Please enter a valid e-mail address
                        </div>
                    </div>
                    <div class="mb-4 was-validated">
                        <label for="password" class="form-label"><i class="fa-solid fa-lock"></i> Password</label>
                        <input name="password" type="password" class="form-control" name="password" placeholder="**********" required>
                        <div class="invalid-feedback">
                            Please enter a valid password
                        </div>
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="stay_logged" class="form-check-input" style="cursor: pointer;">
                        <label for="stay_logged" class="form-check-label">Remember me</label>
                    </div>
                    <div class="d-grid mt-5" style="text-align: center;">
                        <button class="btn btn-outline-success w-100 mb-1" type="submit">Log in</button>
                        <button class="btn btn-outline-primary w-100 mt-1" type="submit">Forgot password?</button>
                    </div>
                    <div class="my-3" style="text-align: center;">
                        <span>Don't have an account? <a href="./signup.php">Sign up</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/11fc7704fb.js" crossorigin="anonymous"></script>
</body>
</html>