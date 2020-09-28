

<!DOCTYPE html>

<html>

<head>
        <title>
             Contact Admin</title>
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
        <div class="content-wrapper"  style="margin-top:30px;margin-bottom:30px;">
              <div class="container">
                   <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        &nbsp;&nbsp;Please Fill Your Queries In This Form
                   </div>
              </div>
         </div>
        <div class="container" style="margin-bottom:30px;">
            <div class="row">
                <div class="col-sm-4">
                    <strong>Address</strong>
                    <textarea name="txt_body" class="form-control" required=""></textarea>
                </div>
                <div class="col-sm-8">
                    <form class="form" action="db.php">
                        <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="txt_name" class="form-control"required=""/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="txt_email" class="form-control" required=""/>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="txt_phone" class="form-control" required=""/>
                            </div>
                            <div class="form-group">
                                <label>Enter your Query</label>
                                <textarea name="txt_body" class="form-control" required=""></textarea>

                           </div>
                           <button type="submit" name="add_product" class="btn btn-info text-center"
                              style=" width: 50%;">
                                Submit Query
                         </button>
                    </form>
                </div>
            </div>
        </div>
        <?php include './footer.php' ?>

    </body>

</html>

