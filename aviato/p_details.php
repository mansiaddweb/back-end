<?php
    error_reporting(0);
    ob_start();

                    session_start();
    if($_SESSION['email']==''){
        header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/3dfc59ae00.js" crossorigin="anonymous"></script>

</head>
<body>

<!-- nvbar     -->
  
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand">Aviato</a>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="dashboar.php">Dashboard</a>
        <a class="nav-link" href="#">Shop</a>
        <a class="nav-link" href="#">Pages</a>
        <a class="nav-link" href="#">Blog</a>
        <a class="nav-link" href="#">Elements</a>
      </div>
      
    </div>
    <button class="btn btn-primary" type="button" style="color:white; background-color:rgb(100, 89, 64); width:180px; height:40px; font-size:1.4rem; border-radius:.5rem "><a href="category.php" style="color:white">Add Category</a></button>
  <button class="btn btn-primary" type="button"  style="color:white; background-color:rgb(100, 89, 64); width:100px; height:40px; font-size:1.4rem; border-radius:.5rem "><a href="login.php" style="color:white">LogOut</a></button> 
  </div>
</nav>

<!-- nvbar end -->



<section>
<div>
<img src="img/15.png" width="550px" alt="">
</div>
<div class="necc">
    <div style="margin-left: 30px;"><h2 >Diamond Simul Neckless</h2><div>
        <div >
            <i class="fas fa-star" style="color: yellow;"></i>
            <i class="fas fa-star" style="color: yellow;"></i>
            <i class="fas fa-star" style="color: yellow;"></i>
            <i class="fas fa-star" style="color: yellow;"></i>
            <i class="fas fa-star-half-alt" style="color: yellow;"></i>
            <p style="color: gray; margin-left: 130px; margin-top: -22px;">Write Reviews</p>
        </div>
        <div style="font-size: 1.7rem;"> $22.00  <strike style="color: gray;">$26.00</strike></div>
        <br>
        <div style="color: gray;">
            <p>Vendor:  Rose-Ishi
            <br>Product Type: Jewellery</p>
        </div>
        <div><i class="fas fa-heart" style="color: red;"></i>  Add to Wishlist </div><br>
        <div>Size :
            <button type="button" class="btn btn-light">S</button>
            <button type="button" class="btn btn-light">M</button>
        </div>
        <br>
        <div>Color :
            <button type="button" class="btn btn-light" style="background-color: brown; height: 30px;"></button>
            <button type="button" class="btn btn-light" style="background-color: rgb(31, 77, 25); height: 30px;"></button>
        </div><br>
     <div>Unit : <input type="number" name="num" id="nn"></div> <br>
     <div> <button type="button" class="btn btn-light qw" style="background-color: rgb(241, 201, 245,0.3); height: 40px; width: 200px;">ADD TO CART</button></div><br>
     <div><button type="button" class="btn btn-light qw" style="background-color: rgb(5, 4, 5); height: 40px; width: 200px; color: white;">BUY NOW</button></div>
    </div>

    

</div>
</section>

<script src="js/bootstrap.min.js"></script>

</body>
</html>