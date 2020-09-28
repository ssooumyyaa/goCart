
<nav class="navbar navbar-expand-md navbar-light">
 
 <a class="navbar-brand" href="#"><i class="fab fa-phoenix-framework"></i><b> Go Cart</b></a>

 
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   <span class="navbar-toggler-icon"></span>
 </button>

 
 <div class="collapse navbar-collapse" id="collapsibleNavbar">
   <ul class="navbar-nav ml-auto" >



    
     
     

<li class="nav-item">

   <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit" style="background-color:#4B515D">Search</button>
  </form>
</li>

     

<li class="nav-item">
   <a 
   <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart/client/login.php") 
   { ?> 
        class="nav-link active" 
   <?php   } else {  ?>
        class="nav-link"
   <?php } ?>
        href="login.php"><i class="fas fa-user-alt"></i> Login </a>
</li>

<li class="nav-item">
   <a 
   <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart//registration.php") { ?> 
        class="nav-link active" 
   <?php   } else {  ?>
        class="nav-link"
   <?php } ?>
        href="registration.php"><i class="fas fa-user-plus"></i></i> Register
   </a>
</li>

   </ul>
 
 </div>
</nav>