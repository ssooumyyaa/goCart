<?php
    $id=$_GET['pid'];
    $link=mysqli_connect("localhost:3307", "root","");
    mysqli_select_db($link,"gocart");
    mysqli_query($link,"DELETE FROM `products` WHERE `products`.`pro_id` = 1;");
    mysqli_query($link,"delete from mobile_desc where pro_id='$id'");
    mysqli_close($link);
    header("location:mobile_add.php");
?>