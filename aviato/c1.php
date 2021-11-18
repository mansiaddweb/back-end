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
    
    <title>clothes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:rgb(230, 200, 162)  ">
    <!-- nvbar     -->
  
<nav class="navbar navbar-expand-lg">
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
    <button class="btn-primary" type="button" style="color:white; background-color:rgb(100, 89, 64); width:170px; height:40px; font-size:1.4rem; border-radius:.5rem; border:2px solid gray"><a href="product.php" style="color:white">Add Product</a></button>
  <button class="btn-primary" type="button"  style="color:white; background-color:rgb(100, 89, 64); width:100px; height:40px; font-size:1.4rem; border-radius:.5rem; margin-left:5px; border:2px solid gray"><a href="login.php" style="color:white">LogOut</a></button> 
  </div>
</nav>
<!-- nvbar end -->
   <div style="text-align:center; font-size:2.5rem; margin-bottom:30px; margin-top:50px; font-family: 'Yuji Boku', serif; color:brown">PRODUCT</div>
   
   <div class="container" style=
    "margin-left: 93px;
    padding-left: 0px;
    padding-right: 313px;
    ">
   <div class="row" >

  <?php
  include "con.php";
  $sid=$_GET['id'];
  if($sid==1){
    $query=mysqli_query($con, "select * from cl") or die("error in query");
  }
  if($sid==2){
    $query=mysqli_query($con, "select * from je") or die("error in query");
  }
  if($sid==3){
    $query=mysqli_query($con, "select * from be") or die("error in query");
  }
    while($row=mysqli_fetch_array($query))
    {
        $sid=$row['id'];
        $pid=$row['pid'];
        $sname=$row['name'];
        $simg= $row['img_url'];
    
  ?>
  <div class="col-6 mb-5" ">
    <a href= "home.php?id=<?php echo $pid;?>">
    <div class="card" style="width: 350px; text-align:center; margin-left:150px; margin-right:100px; border: 2px coral;" >
      <img src="<?php echo $simg; ?> " class="card-img-top" height=300 width=auto>
      <div class="card-body">
        <h5 class="card-title"><?php echo $sname;?></h5>
      </div>
    </div>
    </a>
  </div>
  <?php
    }
    if(isset($_POST['logout'])){
        header("Location:login.php");
    }  
    mysqli_close($con);
  ?>
  </div>
</div>
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>



