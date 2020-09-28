<?php
    $id=$_GET["id"];
    $data=$_COOKIE['cart'];
    $d1=str_replace($id,0, $data);
    setcookie("cart",$d1, time()+3600);
    header("location:cart.php");
            

?>