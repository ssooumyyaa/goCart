<!DOCTYPE html>
<html>
<head>
        <title>
            Home</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style2.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
<body style= "background-color:white; color=black font-family:verdana">

<!-- Navigation -->
<?php include 'header1.php'?>
<!-- Slide Show -->
<section>
  <img class="mySlides" src="images/p1.png"
  style="width:100%">
  <img class="mySlides" src="images/p2.png"
  style="width:100%">
  <img class="mySlides" src="images/p3.png"
  style="width:100%">
</section>

<!-- Band Description -->
<section class="container w3-container w3-center w3-content" style="max-width:600px text-align:center">
  <h2 class="w3-wide" style="margin-top:50px;text-align:center">Our Best Sellers</h2>
   
</section>

 
<div class="row" >
  <div class="column">
    <div class="card">
      <img src="iphone.jpg" alt="I Phone" style="width:100%">
      <div class="container">
        <h2>I Phone</h2>
        <p class="title">Launched in 2020</p>
        <p>Available In All Colors</p>
        <p>Brand: Apple</p>
        <p><button class="button">Buy Now</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="laptop.webp" alt="laptop" style="width:100%">
      <div class="container">
        <h2>Laptops</h2>
        <p class="title">Laptop</p>
        <p>Best Laptops</p>
        <p>Brand: Apple</p>
        <p><button class="button">Buy Now</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="headphone.jpg" alt="headphone" style="width:100%">
      <div class="container">
        <h2>Headphones</h2>
        <p class="title">Best Sellers</p>
        <p>Headphones of all types</p>
        <p>Brand:every brands available</p>
        <p><button class="button">Buy Now</button></p>
      </div>
    </div>
  </div>
</div>
 
</body>
 

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
<?php include 'footer.php'?>
</body>
</html>

