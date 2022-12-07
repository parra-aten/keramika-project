<?php session_start();
    include('./conexion.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    $secure_pass = sha1($password);

    if($email == "" || $password == "") {
        header('Location: ../auth/login.php?error=Favor de llenar todos los campos.');
    } else {
         $re = $conexion->query("select * from users where email='$email' and password='$secure_pass' limit 1;")or die($conexion->error);
         if(mysqli_num_rows($re) > 0) {
             $datos = mysqli_fetch_row($re);
             $_SESSION['datos_user'] = [
                "id"=>$datos[0],
                "name"=>$datos[1],
                "last_name"=>$datos[2],
                "email"=>$datos[3],
                "password"=>$datos[4],
                "phone_number"=>$datos[5],
                "address"=>$datos[6],
                "city"=>$datos[7],
                "country"=>$datos[8],
                "gender"=>$datos[9],
                "profile_picture"=>$datos[10],
                "rank_level"=>$datos[11]
             ];
             header('Location: ../index.php');
         } else {
            header('Location: ../auth/login.php?error=Credenciales incorrectas o no encontradas.');
         }
    }
?>