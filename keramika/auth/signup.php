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
    <title>Keramika | Sign up</title>
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
                    if(isset($_GET['error'])){  
                ?>
                        <div class="alert alert-danger">
                            <p><?php echo $_GET['error']; ?></p>
                        </div>
                <?php } ?>
                <form action="../php/register.php" method="POST" class="needs-validation" enctype = "multipart/form-data">
                    <div class="row">
                        <div class="col mb-4 was-validated">
                            <label for="email" class="form-label"><i class="fa-solid fa-user"></i> E-mail</label>
                            <input name="txtEmail" type="email" class="form-control" placeholder="E-mail address" required>
                            <div class="invalid-feedback">
                                Please enter a valid e-mail address
                            </div>
                        </div>
                        <div class="col mb-4 was-validated">
                            <label for="password" class="form-label">Password</label>
                            <input name="txtPassword" type="password" class="form-control" placeholder="**********" required>
                            <div class="invalid-feedback">
                                Please enter a valid password
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4 was-validated">
                            <label for="name" class="form-label"><i class="fa-solid fa-book"></i> Name</label>
                            <input name="txtName" type="text" class="form-control" placeholder="Your name" required>
                        </div>
                        <div class="col mb-4 was-validated">
                            <label for="last_name" class="form-label">Last name</label>
                            <input name="txtLastN" type="text" class="form-control" placeholder="Your last name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4 was-validated">
                            <label for="phone" class="form-label"><i class="fa-solid fa-phone"></i> Phone number</label>
                            <input name="txtPhone" type="text" class="form-control" placeholder="6561002050" required>
                        </div>
                        <div class="col mb-4 was-validated">
                            <label for="address" class="form-label">Address</label>
                            <input name="txtAddress" type="text" class="form-control" placeholder="Street #0000" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4 was-validated">
                            <label for="city" class="form-label"><i class="fa-solid fa-earth-americas"></i> City <i style="font-size: 10px;">(do not put your state or province)</i></label>
                            <input name="txtCity" type="text" class="form-control" placeholder="Los Angeles" required>
                        </div>
                        <div class="col mb-4">
                            <label for="country_select" class="form-label">Country</label>
                            <?php include('../layouts/country_select.php'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="gender" class="form-label"><i class="fa-solid fa-venus-mars"></i> Gender</label><br>
                            <select name="txtGender" id="gender" class="custom-select">
                                <option value="None" selected>Choose a gender...</option>
                                <option value="Masculine">Masculine</option>
                                <option value="Feminine">Feminine</option>
                                <option value="Other">Other</option>
                            </select>                          
                        </div>
                    </div>
                    <div class="d-grid mt-3" style="text-align: center;">
                        <button class="btn btn-outline-success w-100 mb-1" type="submit">Sign up</button>
                    </div>
                    <div class="my-3" style="text-align: center;">
                        <span>Already have an account? <a href="./login.php">Log in</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/11fc7704fb.js" crossorigin="anonymous"></script>
</body>

</html>