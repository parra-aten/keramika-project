<?php session_start();
    include('./conexion.php');
    
    $name = $_POST["itemName"];
    $style = $_POST["itemStyle"];
    $color = $_POST["itemColor"];
    $size = $_POST["itemSize"];

    $pic1=$_FILES['itemPic1'];
    $filename1=$pic1['name'];
    $temp=$pic1['tmp_name'];
    $ruta='../img/pots/'.$filename1;
    move_uploaded_file($temp,$ruta);


    move_uploaded_file($pic1['tmp_name'],'../img/pots/'.$name.'/'.$filename1);
    $foto1='img/pots/'.$name.'/'.$filename1;

    $pic2=$_FILES['itemPic2'];
    $filename2=$pic2['name'];
    move_uploaded_file($pic2['tmp_name'],'../img/pots/'.$name.'/'.$filename2);
    $foto2='img/pots/'.$name.'/'.$filename2;

    $pic3=$_FILES['itemPic3'];
    $filename3=$pic3['name'];
    move_uploaded_file($pic3['tmp_name'],'../img/pots/'.$name.'/'.$filename3);
    $foto3='img/pots/'.$name.'/'.$filename3;
?>
