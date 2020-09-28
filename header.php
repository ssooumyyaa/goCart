
<nav class="navbar navbar-expand-md navbar-light">
 
 <a class="navbar-brand" href="home.php"><i class="fab fa-phoenix-framework"></i><b> Go Cart</b></a>

 
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   <span class="navbar-toggler-icon"></span>
 </button>

 
 <div class="collapse navbar-collapse" id="collapsibleNavbar">
   <ul class="navbar-nav ml-auto" >



   <li class="nav-item">

   <a 
   <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart/client/home.php") { ?> 
        class="nav-link active" 
   <?php   } else {  ?>
        class="nav-link"
   <?php } ?>
        href="home.php"> <i class="fa fa-fw fa-home"></i></i> Home
   </a>
</li>

     
     <li class="nav-item">
   <a 
   <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart/client/cart.php") { ?> 
        class="nav-link active" 
   <?php   } else {  ?>
        class="nav-link"
   <?php } ?>
        href="cart.php"><i class="fas fa-cart-arrow-down"></i></i> My Cart
   </a>
</li>
   
     <li class="nav-item dropdown">
     <a  
     <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart/client/mobile.php") { ?> 
        class="nav-link dropdown-toggle active" 
   <?php   } else {  ?>
        class="nav-link dropdown-toggle"
   <?php } ?> id="navbardrop" data-toggle="dropdown"><i class="fab fa-product-hunt" href="#"></i>
         Products
     </a>
     <div class="dropdown-menu">
       <a class="dropdown-item" href="mobile.php">Mobile</a>
       <a class="dropdown-item" href="#">Laptops</a>
       <a class="dropdown-item" href="#">Headphones</a>
     </div>
   </li>

   <li class="nav-item">
   <a 
   <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart/client/profile.php") 
   { ?> 
        class="nav-link active" 
   <?php   } else {  ?>
        class="nav-link"
   <?php } ?>
        href="profile.php"><i class="fas fa-user-alt"></i> My Profile
   </a>
</li>

<li class="nav-item">

   <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit" style="background-color:#4B515D">Search</button>
  </form>
</li>

     
<li class="nav-item">
   <a 
   <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart/admin/login.php") { ?> 
        class="nav-link active" 
   <?php   } else {  ?>
        class="nav-link"
   <?php } ?>
        href="login.php"><i class="fas fa-sign-out-alt"></i></i> Log Out
   </a>
</li>

   </ul>
 
 </div>
</nav>