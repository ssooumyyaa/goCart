<!DOCTYPE html>
 
<html>
<head>
        <title>
             Mobile Description</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>

    <body>
        <?php include"header.php" ?>
        <div style="padding:40px">
        <?php
        
            include_once 'db.php';
            $result=mysqli_query($con,"select * from products where  pro_id=$_GET[pro_id]");
            $r=mysqli_fetch_assoc($result);
           echo "<div class='row'>";
            echo "<div class='col-md'>";
                echo '<div class="col-md">';
                    echo "<img src='$r[pro_pic]' width='500' style='position:relative; margin-top";
                    
                 echo "</div>";
                 

                 echo "<div class='col-md'>";
                echo "<div class='col-md text-left '>";
                    echo "<div class='row'><div class='col-md'>Name</div><div class='col-md'<strong>$r[pro_name]</strong></div></div>";
                    echo "<div class='row'><div class='col-md'>Price</div><div class='col-md'>$r[pro_price]</div></div>";
                 
                    echo "<div class='row col-sm-12'>";
                        echo "<div class='alert alert-success'>";
                        echo "<strong>Available Offers</strong>";
                        echo "<ol>";
                            echo "<li>* 10% off with SBI Credit card</li>";
                            echo "<li>* 5% cashback on shop card";
                        echo "</ol>";
                        echo "</div>";
                    echo '</div>';
                    
                    echo '<div class="row"><div class="col-sm-6">Rating</div><div class="col-sm-6"></div></div>';
                    echo "<div class='row'><div class='col-sm-6'>Check Delivery</div><div class='col-sm-6'>"
                    . "<input type='text' name='d1'</div></div>";
                    echo "<div class='row'><div class='col-sm-2'><a href='cart1.php?pro_id=$r[pro_id]'>"
                    . "<br><br><button style='width:150px;height:50px' class='btn btn-info btn-lg' name='addtocart' value='Add to Cart'>Add to Cart</button></a></div><div class='col-sm-3'></div></div>";
        echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

        
        ?>
 
     </body>

  
</html>