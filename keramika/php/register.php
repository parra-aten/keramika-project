<?php session_start();
    /*     Level 1 = Administrador
           Level 2 = Artesano / Alfarero
           Level 3 = Cliente
    */

    include('./conexion.php');

    $name = $_POST["txtName"];
    $last_name = $_POST["txtLastN"];
    $email = $_POST["txtEmail"];
    $password = $_POST["txtPassword"];
    $secure_pass = sha1($password);
    $phone_number = $_POST["txtPhone"];
    $address = $_POST["txtAddress"];
    $city = $_POST["txtCity"];
    $country = $_POST["txtCountry"];
    $gender = $_POST["txtGender"];
    $profile_picture = "img/default.png";
    $rank_level = "3";    

    if($name == "" || $last_name == "" || $email == ""||$password == "" || $phone_number == "" || $address == "" || $city == "" || $country == "" || $gender == ""){
        echo '<h1>Please fill in all the fields</h1>';
        header('Location: ../index.php');
    }else{
        $conexion->query("insert into users (`name`, `last_name`, `email`, `password`, `phone_number`, `address`, `city`, `country`, `gender`, `profile_picture`, `rank_level`) values ('$name', '$last_name', '$email', '$secure_pass', '$phone_number', '$address', '$city', '$country', '$gender', '$profile_picture', '$rank_level');")or die($conexion->error);
        header('Location: ../auth/login.php?success=Registered successfully');
    }
?>