<?php
session_start();
$con = mysqli_connect("localhost:3307","root","");
mysqli_select_db($con,"gocart");
?>