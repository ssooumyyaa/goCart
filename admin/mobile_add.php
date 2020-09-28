<!DOCTYPE html>
<html>
    <head>
        <title>
             Product </title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    
    <body style="color:#4B515D;font-family:verdana;">

     <?php include './header.php' ?>
     <section style="margin-top:50px">
          <div class="container">
               <div class="row">
               <div class="col-sm-12">
                    <h4 style="color:#4B515D;font-family:verdana;">Mobiles</h4>
                    <hr style="height:3px; border-width:0; background-color:#3E4551">
               </div>
               </div>
          </div>

          <div class="container">
               <div class="row">
                    <div class="col-sm-12">
                         <div class="alert alert-info">
                              <a href="mobile.php"><b>Add New Product</b></a>
                         </div>
                    </div>
               </div>
          </div>
         </section>
    <section>
    <div class="container " style="font-family:verdana">
              <div class="row table table-responsive">
                
                <div class="col-sm-12"><?php
                    include_once'connection.inc.php';
                    
                    $result= mysqli_query($con,"select * from products");

                    if(mysqli_affected_rows($con))
               {
                    echo "<table class='table table-striped table-hover' width='100%'>";
                    echo "<tr>";
                    echo "<th>product ID</th><th>Name</th><th>Type</th><th>price</th><th>Image</th><th>Edit</th><th>Delete</th><th> ADD Description</th><th>View Description</th>";
                    echo "</tr>";
                    while($r=mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                    echo "<td>$r[0]</td>";
                    echo "<td style='width: 20%'>$r[1]</td>";
                    echo "<td>$r[2]</td>";
                    echo "<td>$r[3]</td>";
                    echo "<td><img src='../$r[4]' width='50' height='60'/></td>";
                    echo "<td><a href='edit_product.php?pro_id=$r[0]'><input type='button' value='Edit' class='btn1'</td>";
                    echo "<td><a href='delete_pro.php?pro_id=$r[0]'><input type='button' value='Delete' class='btn1'</td>";
                    echo "<td><a href='add_pro_desc.php?pro_id=$r[0]'><input type='button' value='Add Desc' class='btn2'</td>";
                    echo "<td><a href='view_pro_desc.php?pro_id=$r[0]'><input type='button' value='View Desc' class='btn2'</td>";
                    echo "</tr>";
                    }
                    echo"</table>";
               }
                    else
                    {
                         echo "<h3>No product Found !</h3>";
                    }

                    ?>
               </div>
                 
            </div>
            </div>
     </section>
     
<?php include './footer.php' ?>
 
</body>
