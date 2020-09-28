<?php
     include_once'connection.inc.php';
     if(isset($_GET['pro_id']))
        {
          $id=$_GET['pro_id'];
          $result= mysqli_query($con,"select * from mobile_desc where pro_id='$id'");
          $r=mysqli_fetch_array($result);
        }
?>

<?php    
    

     $msg = "";
     if (isset($_POST['add_product_desc'])) 
        {
            $id = $_POST['txt_pro_id'];
            $modelno = $_POST['txt_model_no'];
            $cname = $_POST['txt_cname'];
            $processor = $_POST['txt_processor'];
            $ram = $_POST['txt_ram'];
            $ssize = $_POST['txt_screen_size'];
            $storage = $_POST['txt_storage'];
            $fcamera = $_POST['txt_front_camera'];
            $bcamera = $_POST['txt_back_camera'];
            $battery_cap = $_POST['txt_battery_cap'];

            $con = mysqli_connect("localhost:3307", "root", "");
            mysqli_select_db($con,"gocart");
            
            $qry = "insert into mobile_desc values($id,'$modelno','$cname','$processor','$ram','$ssize','$storage','$fcamera','$bcamera','$battery_cap')";
            mysqli_query($con,$qry);
            echo mysqli_affected_rows($con);
            if (mysqli_affected_rows($con)) 
             {
            $msg = "<font color='yellow'>product description added !!</font>";
            
            } 
            else
            {
                $msg = "<font color='red'>Error in adding the Product description</font>";
            }

        mysqli_close($con);
     }
?>

<!DOCTYPE html>

<html>

<head>
        <title>
             Add Description</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>

<body style="font-family:verdana;">

     <?php include './header.php' ?>
    
     <section style="margin-top:50px">
          <div class="container">
               <div class="row">
               <div class="col-sm-12">
                    <h4 style="color:#4B515D;font-family:verdana;">Add Product Description</h4>
                    <hr style="height:3px; border-width:0; background-color:#3E4551">
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
                                   <input type="text" class="form-control" name="txt_pro_id" readonly=""
                                        value="<?php if(isset($_GET['pro_id'])) echo $_GET['pro_id']; ?>" required>
                              </div>
                              <div class="form-group">
                                   <label>Model Number:</label>
                                   <input type="text" class="form-control" name="txt_model_no" 
                                          value="<?php if(isset($_GET['pro_id'])) echo $r['1']; ?>" required>
                              </div>
                              <div class=" form-group">
                                   <label>Company Name:</label>
                                   <input type="text" class="form-control" name="txt_cname" 
                                          value="<?php if(isset($_GET['pro_id'])) echo $r['2']; ?>"required>
                              </div>
                              <div class=" form-group">
                                   <label>Processor:</label>
                                   <input type="text" class="form-control" name="txt_processor" 
                                          value="<?php if(isset($_GET['pro_id'])) echo $r['3']; ?>"required>
                              </div>
                              <div class="form-group">
                                   <label>Ram:</label>
                                   <input type="text" class="form-control" name="txt_ram" 
                                          value="<?php if(isset($_GET['pro_id'])) echo $r['4']; ?>"required>
                              </div>
                              <div class="form-group">
                                   <label>Screen Size:</label>
                                   <input type="text" class="form-control" name="txt_screen_size" 
                                          value="<?php if(isset($_GET['pro_id'])) echo $r['5']; ?>"required>
                              </div>
                              <div class=" form-group">
                                   <label>Storage:</label>
                                   <input type="text" class="form-control" name="txt_storage" 
                                          value="<?php if(isset($_GET['pro_id'])) echo $r['6']; ?>"required>
                              </div>
                              <div class=" form-group">
                                   <label>Front Camera:</label>
                                   <input type="text" class="form-control" name="txt_front_camera" 
                                          value="<?php if(isset($_GET['pro_id'])) echo $r['7']; ?>"required>
                              </div>
                              <div class=" form-group">
                                   <label>Back Camera:</label>
                                   <input type="text" class="form-control" name="txt_back_camera" 
                                          value="<?php if(isset($_GET['pro_id'])) echo $r['8']; ?>"required>
                              </div>
                              <div class=" form-group">
                                   <label>Battery Capacity:</label>
                                   <input type="text" class="form-control" name="txt_battery_cap" 
                                          value="<?php if(isset($_GET['pro_id'])) echo $r['9']; ?>"required>
                              </div>

                              <button type="submit" name="add_product_desc" class="btn btn-info text-center"
                                   style=" width: 60%;">
                                   <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;<b> Add Product
                                        Description</b>
                              </button>
                              <br>
                              <?php
                              echo $msg;
                              ?>
                              <br>
                              <div class="container">
                                   <div class="row">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-4 text-center">
                                             <div class="alert alert-info">
                                                  <a href="mobile_add.php"><b>Product</b></a>
                                             </div>
                                        </div>
                                        <div class="col-sm-4"></div>

                                   </div>
                              </div>
                              <br><br><br>

                         </form>
                    </div>
                    <br>

                    <div class=" col-sm-3"></div><br>
               </div>
               </>
     </section>






     <?php include './footer.php' ?>

</body>

</html>