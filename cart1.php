<?php
    $id=$_GET['pro_id'];
    if(isset($_COOKIE['cart']))
    {
        $data=$_COOKIE['cart'].",".$id;
        setcookie("cart",$data);
    } 
     else 
     {
         setcookie("cart",$id,time()+3600);
     }
     header("location:mobile_desc.php?pro_id=".$id);
 ?>