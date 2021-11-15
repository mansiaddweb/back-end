<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
</head>
<body >
<form action="" method="post">
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
   <div style="text-align:center; font-size:2.5rem; margin-bottom:30px; margin-top:50px; font-family: 'Yuji Boku', serif; color:brown">PRODUCT CATEGORY</div>
    <div class="row">
<?php
include "con.php";

    $query=mysqli_query($con, "select * from pcategory") or die("error in query");
    while($row=mysqli_fetch_array($query))
    {
        $sid=$row['pid'];
        $sname=$row['name'];
        $simg= $row['img_url'];
    
        ?>
        <a href= "home.php?id=<?php echo $sid;?>">
                      <div class="col picc"><img src= "<?php echo $simg; ?> " ></div>
                        <div class="col-3"><?php echo $sname;?></div>
    </a>
       <?php
    }
    if(isset($_POST['logout'])){
        header("Location:session.php");
    }
    
    mysqli_close($con);

    ?>
    </div>
    </form>
</body>
</html>
