<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
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
    <button class="btn btn-primary" type="button" style="color:white; background-color:rgb(100, 89, 64); width:180px; height:40px; font-size:1.4rem; border-radius:.5rem "><a href="product.php" style="color:white">Add Product</a></button>
  <button class="btn btn-primary" type="button"  style="color:white; background-color:rgb(100, 89, 64); width:100px; height:40px; font-size:1.4rem; border-radius:.5rem "><a href="login.php" style="color:white">LogOut</a></button> 
  </div>
</nav>
<!-- <div class="container-fluid" style="background:burlywood; height:45px">
   
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        
        <a class="nav-link active" aria-current="page" href="dashboar.php"></a>
        <a class="nav-link" href="#">Shop</a>
        <a class="nav-link" href="#">Pages</a>
        <a class="nav-link" href="#">Blog</a>
        <a class="nav-link" href="#">Elements</a>
      </div>
    </div>
  </div> -->


<!-- nvbar end -->
<h1 style="text-align:center;">Welcome</h1>
    
    
</body>
</html>
<?php
include "con.php";
$sid=$_GET['id'];
if($sid==1){
    $sql= "select * from clothes";

}
if($sid==2){
    $sql= "select * from jewellery";
}
if($sid==3){
    $sql= "select * from beauty";
}
$query= mysqli_query($con,$sql) or die("error in query");
?>
<table class="table">
<thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Image</th>
    <th scope="col">Name</th>
    <th scope="col">Category</th>
    <th scope="col">Price</th>
    <th scope="col">Edit</th>
    <th scope="col">Available</th>
  </tr>
</thead>
<?php
    while($row=mysqli_fetch_array($query))
    {
        $sid=$row['id'];
        $ptype=$row['type'];
        echo "<tr>";
        echo "<td>".$sid."</td>";
        echo "<td><img src=".$row['img_url']." width=130px height=120px></td>";
        echo "<td>".$row['name']."</td>";
        echo "<td><a href=update.php?type=$ptype>".$row['type']."</a></td>";
        echo "<td>".$row['price']."</td>";
        echo "<td><a href=updatep.php?sid=".$sid.">Edit</a></td>";
        echo "<td><a href=login.php?pid=".$pid.">Delete</a></td>";
    }
    echo "</table>";
    
    if(isset($_POST['logout'])){
        header("Location:login.php");
    }
    
    mysqli_close($con);



?>












