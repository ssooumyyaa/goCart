 
<?php
$con = mysqli_connect("localhost:3307","root","");
mysqli_select_db($con,"gocart");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>