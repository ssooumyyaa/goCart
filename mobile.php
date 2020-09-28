<!DOCTYPE html>
<html>
    <head>
        <title>
             Mobile</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script>
             function getProduct()
             {
                 data=document.getElementById("search").value;
                 obj=new XMLHttpRequest();
                 obj.open("get","getproduct.php?id="+data,true);
                 obj.send();
                 obj.onreadystatechange=function(){
                     if(obj.readyState==4 && obj.status==200)
                     {
                         document.getElementById("t1").hidden=true;
                         document.getElementById("t2").innerHTML=ob
                     }
                 }
             }
         </script>
    </head>
    <body style="font-family:verdana">
       <?php include './header.php' ?>
     
          <div class="container" style="margin-top:50px">
               <?php
                include_once 'db.php';
                $result=mysqli_query($con,"select * from products where pro_type='mobile'");
                    if(mysqli_affected_rows($con)>0)
                    {
                    $x=1;
                        while($r=mysqli_fetch_assoc($result))
                        {
                            if($x==1)
                                echo "<div class='row text-center'>";
                                echo "<div class='col-sm-4'style='border-style:solid;' >";
                                    echo "<div class='row' style='margin:5px;padding: 5px;'>";
                                        echo "<br><div class='col-sm-12 text-center'><a href='mobile_desc.php?pro_id=$r[pro_id]'><img src='$r[pro_pic]' width='200px' height='220px'></a></div>";
                                    echo "</div>";
                                    echo "<div class='row' style='margin: 5px;padding: 5px;'>";
                                        echo "<div class='col-sm-6'>Name</div> <div class='col-sm-6'><b><font color='green' >$r[pro_name]</font></b></div>";
                                    echo "</div>";
                                    echo "<div class='row' style='margin: 5px;padding: 5px;'>";
                                        echo "<div class='col-sm-6'>Price</div> <div class='col-sm-6'><b><font color='red'>$r[pro_price]</font></b></div>";
                                    echo "<br></div>";
                                    echo "<br></div>";
                            $x++;
                            if($x==4)
                            {
                                echo "</div>";
                                $x=1;
                            } 
                        }
                    }
                    else
                    {
                    echo  "<h2>Currently no product avaiable</h2>";
                    } 
            ?>

          </div>

<br><br>
              <hr>
                   
    <div class=".container-fluid" style="width:100%">      
              <?php include './footer.php' ?>
</div>
    </body>
 
</html>