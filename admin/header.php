 
<nav class="navbar navbar-expand-md bg-info navbar-dark">
 
 <a class="navbar-brand" href="dashboard.php" style="font-weight :bolder; font-size:20px"><img src="admin.png" alt="Avatar"width="30" height="30"> Admin Dashboard</a>

 
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   <span class="navbar-toggler-icon"></span>
 </button>

 
 <div class="collapse navbar-collapse" id="collapsibleNavbar">
   <ul class="navbar-nav ml-auto" >
   <li class="nav-item">

   <a 
   <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart/admin/dashboard.php") { ?> 
        class="nav-link active" 
   <?php   } else {  ?>
        class="nav-link"
   <?php } ?>
        href="dashboard.php"> <i class="fa fa-fw fa-home"></i></i>Home
   </a>
</li>

     
     <li class="nav-item">
   <a 
   <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart/admin/users.php") { ?> 
        class="nav-link active" 
   <?php   } else {  ?>
        class="nav-link"
   <?php } ?>
        href="users.php"> <i class="fas fa-user-friends"></i></i>Users
   </a>
</li>
   
     <li class="nav-item dropdown">
     <a  
     <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart/admin/mobile_add.php"||"/gocart/admin/view_pro_desc.php") { ?> 
        class="nav-link dropdown-toggle active" 
   <?php   } else {  ?>
        class="nav-link dropdown-toggle"
   <?php } ?> id="navbardrop" data-toggle="dropdown"><i class="fab fa-product-hunt" href="#"></i>
        Product
     </a>
     <div class="dropdown-menu">
       <a class="dropdown-item" href="mobile_add.php">Mobile</a>
       <a class="dropdown-item" href="#">Laptops</a>
       <a class="dropdown-item" href="#">Headphones</a>
     </div>
   </li>


   <li class="nav-item">
   <a 
   <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart/admin/queries.php") 
   { ?> 
        class="nav-link active" 
   <?php   } else {  ?>
        class="nav-link"
   <?php } ?>
        href="queries.php"><i class="fas fa-comments"></i>Queries
   </a>
</li>
     
<li class="nav-item">
   <a 
   <?php if ($_SERVER['SCRIPT_NAME'] == "/gocart/admin/logout.php") { ?> 
        class="nav-link active" 
   <?php   } else {  ?>
        class="nav-link"
   <?php } ?>
        href="logout.php"><i class="fas fa-sign-out-alt"></i></i>Log Out
   </a>
</li>

   </ul>
 
 </div>
</nav>