<?php session_start();

    unset($_SESSION['datos_user']);
    header("Location: ../auth/login.php");

?>