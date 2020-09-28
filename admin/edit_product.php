<?php

     include_once 'connection.inc.php';
     if(isset($_GET['pro_id']))
          {
          $id=$_GET['pro_id'];
          $result= mysqli_query($con,"select * from products where pro_id='$id'");
          $r=mysqli_fetch_array($result);
          }
     if(isset($_POST['update_product']))
          {
               $id = $_POST['txt_pro_id'];
               $name = $_POST['txt_pro_name'];
               $type = $_POST['txt_pro_type'];
               $price = $_POST['txt_pro_price'];
               $qry="";
               if($_FILES ['pro_pic']['name']!="")
               {
                    $sou = $_FILES['pro_pic']['tmp_name'];
                    $des = $_SERVER['DOCUMENT_ROOT'] ."gocart/mobile/" . $_FILES['pro_pic']['name'];
                    move_uploaded_file($sou, $des);
                    $path = 'mobile/' . $_FILES['pro_pic']['name'];
                    $qry="update products set pro_name='$name', pro_type='$type', pro_price='$price', pro_pic='$path' where pro_id=$id";
               }
               else
               {
                    $qry="update products set pro_name='$name', pro_type='$type', pro_price='$price' where pro_id=$id"; 
               }
               mysqli_query($con,$qry);
               header("location:mobile_add.php");
          }
?>

<!-- html CODE -->
<!DOCTYPE html>

<html>

<head>
        <title>
             Product Update</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>


<body>

     <?php include './header.php' ?>
   
     <section style="margin-top:50px">
          <div class="container">
               <div class="row">
               <div class="col-sm-12">
                    <h4 style="color:#4B515D;font-family:verdana;">Edit Product</h4>
                    <hr style="height:3px; border-width:0; background-color:#3E4551">
               </div>
               </div>
          </div>

          <div class="container">
               <div class="row">
                    <div class="col-sm-12">
                         <div class="alert alert-info">
                              <a href="mobile.php"><b>Add Product</b></a>
                         </div>
                    </div>
               </div>
          </div>

          <div class="container">
               <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                         <form action="" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                   <label>Product ID:</label>
                                   <input type="text" class="form-control" readonly=""
                                        value=" <?php if(isset($_GET['pro_id'])) echo $r[0]; ?>" name="txt_pro_id" required>
                              </div>
                              <div class="form-group">
                                   <label>Product Name:</label>
                                   <input type="text" class="form-control" name="txt_pro_name"
                                        value="<?php if(isset($_GET['pro_id'])) echo $r[1]; ?>" required>
                              </div>
                              <div class=" form-group">
                                   <label>Product Type:</label>
                                   <input type="text" class="form-control" name="txt_pro_type"
                                        value="<?php if(isset($_GET['pro_id'])) echo $r[2]; ?>" required>
                              </div>
                              <div class=" form-group">
                                   <label>Product Price:</label>
                                   <input type="text" class="form-control" name="txt_pro_price"
                                        value="<?php if(isset($_GET['pro_id'])) echo $r[3]; ?>" required>
                              </div>
                              <div class="form-group">
                                   <label>Product Image:</label>
                                   <input type="file" class="form-control" name="pro_pic">
                              </div>
                              <button type="submit" name="update_product" class="btn btn-info text-center"
                                   style=" width: 60%;">
                                   <i class="fa fa-edit" aria-hidden="true"></i>&nbsp;&nbsp;<b> Update Product</b>
                              </button>
                              <br>

                         </form>
                    </div>
                    <br>

                    <div class="col-sm-3"></div><br>
                    <br><br><br>
               </div>
          </div>
     </section>
<div style="margin-top:50px">
     <?php include './footer.php' ?>
<div>
</body>

</html>