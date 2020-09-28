<?php
    
    $msg = "";
    if (isset($_POST['add_product'])) {
         $id = $_POST['txt_pid'];
         $name = $_POST['txt_pname'];
         $type = $_POST['txt_ptype'];
         $price = $_POST['txt_pprice'];
         $sou = $_FILES['pro_pic']['tmp_name'];
         $des = $_SERVER['DOCUMENT_ROOT'] ."/gocart/mobile/" . $_FILES['pro_pic']['name'];
         move_uploaded_file($sou, $des);
         $path = 'mobile/' . $_FILES['pro_pic']['name'];
         $link = mysqli_connect("localhost:3307", "root", "");
         mysqli_select_db($link,"gocart");
         include 'connection.inc.php';       
         $qry = "insert into products values($id,'$name','$type','$price','$path')";
         mysqli_query( $link,$qry);
         if (mysqli_affected_rows($link)) {
              $msg = "<font color='darkgreen'>product added !!</font>";
         } else {
              $msg = "<font color='red'>Error in adding the Product</font>";
         }

         mysqli_close($link);
    }
?>
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
    <body style="color:#4B515D;font-family:verdana;">

<?php include './header.php' ?>
 
<section style="margin-top:50px">
     <div class="container">
          <div class="row">
               <div class="col-sm-12">
                    <h4 style="color:#4B515D;font-family:verdana;">Add Product Mobile</h4>
                    <hr style="height:3px; border-width:0; background-color:#3E4551">
               </div>
          </div>
     </div>

     <div class="container">
          <div class="row">
               <div class="col-sm-12">
                    <div class="alert alert-info">
                         <a href="mobile.php"><b> Add New Product</b></a>
                    </div>
               </div>

               <div class="col-sm-6"></div>
          </div>
     </div>

     <div class="container">
          <div class="row">
               <div class="col-sm-3"></div>
               <div class="col-sm-6">
                    <form action="" method="POST" enctype="multipart/form-data">
                         <div class="form-group">
                              <label>Product ID:</label>
                              <input type="text" class="form-control" name="txt_pid" required>
                         </div>
                         <div class="form-group">
                              <label>Product Name:</label>
                              <input type="text" class="form-control" name="txt_pname" required>
                         </div>
                         <div class=" form-group">
                              <label>Product Type:</label>
                              <input type="text" class="form-control" name="txt_ptype" required>
                         </div>
                         <div class=" form-group">
                              <label>Product Price:</label>
                              <input type="text" class="form-control" name="txt_pprice" required>
                         </div>
                         <div class="form-group">
                              <label>Product Image:</label>
                              <input type="file" class="form-control" name="pro_pic" required>
                         </div>
                         <button type="submit" name="add_product" class="btn btn-info text-center"
                              style=" width: 50%;">
                              <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;<b> Add Product</b>
                         </button>
                         <br>
                         <br>
                         
                         <?php
                         echo $msg;
                         ?>

                    </form>
               </div>
               <br>

               <div class="col-sm-3"></div><br>
          </div>
     </div>
</section>
<br>
    <?php include './footer.php' ?>

</body>
</html>