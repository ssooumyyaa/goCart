<?php
    
    include_once 'connection.inc.php';
    if(isset($_GET['pro_id']))
         {
            $id=$_GET['pro_id'];
            $result= mysqli_query($con,"select * from mobile_desc where pro_id='$id'");
            $r=mysqli_fetch_array($result);
         }
?>
<!DOCTYPE html>

<html>

<head>
        <title>
             Product Description</title>
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
                    <h4 style="color:#4B515D;font-family:verdana;">Product Description</h4>
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
                                   <input type="text" class="form-control" name="txt_model_no" readonly=""
                                        value="<?php if(isset($_GET['pro_id'])) echo $r['1']; ?>" required>
                              </div>
                              <div class=" form-group">
                                   <label>Company Name:</label>
                                   <input type="text" class="form-control" name="txt_cname" readonly=""
                                        value="<?php if(isset($_GET['pro_id'])) echo $r['2']; ?>" required>
                              </div>
                              <div class=" form-group">
                                   <label>Processor:</label>
                                   <input type="text" class="form-control" name="txt_processor" readonly=""
                                        value="<?php if(isset($_GET['pro_id'])) echo $r['3']; ?>" required>
                              </div>
                              <div class="form-group">
                                   <label>Ram:</label>
                                   <input type="text" class="form-control" name="txt_ram" readonly=""
                                        value="<?php if(isset($_GET['pro_id'])) echo $r['4']; ?>" required>
                              </div>
                              <div class="form-group">
                                   <label>Screen Size:</label>
                                   <input type="text" class="form-control" name="txt_screen_size" readonly=""
                                        value="<?php if(isset($_GET['pro_id'])) echo $r['5']; ?>" required>
                              </div>
                              <div class=" form-group">
                                   <label>Storage:</label>
                                   <input type="text" class="form-control" name="txt_storage" readonly=""
                                        value="<?php if(isset($_GET['pro_id'])) echo $r['6']; ?>" required>
                              </div>
                              <div class=" form-group">
                                   <label>Front Camera:</label>
                                   <input type="text" class="form-control" name="txt_front_camera" readonly=""
                                        value="<?php if(isset($_GET['pro_id'])) echo $r['7']; ?>" required>
                              </div>
                              <div class=" form-group">
                                   <label>Back Camera:</label>
                                   <input type="text" class="form-control" name="txt_back_camera" readonly=""
                                        value="<?php if(isset($_GET['pro_id'])) echo $r['8']; ?>" required>
                              </div>
                              <div class=" form-group">
                                   <label>Battery Capacity:</label>
                                   <input type="text" class="form-control" name="txt_battery_cap" readonly=""
                                        value="<?php if(isset($_GET['pro_id'])) echo $r['9']; ?>" required>
                              </div>
                            
 
                            <div class="col-sm-12">
                                <div class="alert alert-info" >
                                    
                                    <a href="edit_pro_desc.php" class="fa fa-plus">&nbsp;&nbsp;<b>Edit Product Description</b></a>
                                </div>
                            </div>
                         </form>
                        
                         <br><br><br>
                    </div>
                    <br>

                    <div class=" col-sm-3"></div><br>
               </div>
            </div>
     </section>






     <?php include './footer.php' ?>

</body>

</html>
