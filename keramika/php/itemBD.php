<?php session_start();
    include('./conexion.php');
    
    $name = $_POST["itemName"];
    $style = $_POST["itemStyle"];
    $color = $_POST["itemColor"];
    $size = $_POST["itemSize"];
    
    mkdir('../img/pots/'.$name);

    $pic1=$_FILES['itemPic1'];
    $filename1=$pic1['name'];
    $pic_one='./img/pots/'.$name.'/'.$filename1;
    move_uploaded_file($pic1['tmp_name'],'.'.$pic_one);
    

    $pic2=$_FILES['itemPic2'];
    $filename2=$pic2['name'];
    $pic_two='./img/pots/'.$name.'/'.$filename2;
    move_uploaded_file($pic2['tmp_name'],'.'.$pic_two);
    

    $pic3=$_FILES['itemPic3'];
    $filename3=$pic3['name'];
    $pic_three='./img/pots/'.$name.'/'.$filename3;
    move_uploaded_file($pic3['tmp_name'],'.'.$pic_three);

    if($name == "" || $style == "" || $color == ""||$size == ""){
        echo '<h1>Please fill in all the fields</h1>';
        header('Location: ../index.php');
    }else{
        $conexion->query("insert into items (`name`, `style`, `color`, `size`, `price`, `pic_one`, `pic_two`, `pic_three`) values ('$name', '$style', '$color', '$size', '800', '$pic_one', '$pic_two', '$pic_three');")or die($conexion->error);
        header('Location: ../upload_items.php?success=upload_successfully');
    }
?>
