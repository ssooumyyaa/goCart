<!DOCTYPE html>
<html>
    <head>
        <title>
             My Cart</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
<body>
 <?php include 'header.php'?>

 <div class="container">
            <?php
                if(isset($_COOKIE['cart']))
                {
                    echo "<div class='categories-shop' style='padding:50px'>";
                    echo "<div class='row'";
                    echo "<div class='col-lg-12'>";
                    echo "<div class='title-all text-center'>";
                        echo "<h1>Your Cart Items are Here !!!!</h1>";
                    echo "</div></div></div></div>";
                    include_once './db.php';
                    $result=mysqli_query($con,"select * from products where pro_id in($_COOKIE[cart])");
                    
                    echo "<table class='table table-striped' width='100'>";
                    echo "<tr><th>Product ID</th><th>Product Name</th><th>Product Price</th>";
                    $amount=0;
                    while ($row=mysqli_fetch_assoc($result))
                    {
                        echo '<div>';
                        echo "<tr>";
                        echo "<td>$row[pro_id]</td><td>$row[pro_name]</td><td>$row[pro_price]</td>";
                        echo "<td><a href='mcart.php?id=$row[pro_id]' class='btn btn-primary'>Delete Product</a></td>";
                        echo "</tr>";
                        echo '</div>';
                        $amount=$amount+$row['pro_price'];
                    }
                    echo "<table><br>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-6 text-left'><h1 style='color:black'>Total Amount :  Rs. ".$amount."</h1></div>";
                    echo "<div class='col-sm-6 text-right'><input type='submit' name='btn_checkout'/></div>";
                    echo "</div></table>";
                }
                else{
                    echo "<div class='categories-shop'>";
                    echo "<div class='row'";
                    echo "<div class='col-lg-12'";
                    echo "<div class='title-all text-center'";
                        echo "<h1>Your Cart is Empty!!!!</h1>";
                    echo "</div></div></div></div>";
                }
            ?>
        </div>
        <div class="row"><div class="col-sm-12">&nbsp;</div></div>
 
 <?php include 'footer.php'?>
</body>
</html>