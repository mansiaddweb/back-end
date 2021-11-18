<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <link rel="stylesheet" href="style.css"> 

</head>

<body id="body" style="margin-top:10px;">

<!-- nvbar     -->
  
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand">Aviato</a>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>
      <div class="navbar-nav">
        <a class="nav-link " href="dashboar.php">Dashboard</a>
        <a class="nav-link" href="#">Shop</a>
        <a class="nav-link" href="#">Pages</a>
        <a class="nav-link" href="#">Blog</a>
        <a class="nav-link" href="#">Elements</a>
      </div>
      
    </div>
   
  <button class="btn btn-primary" type="button"  style="color:white; background-color:rgb(100, 89, 64); width:100px; height:40px; margin-left: 230px;margin-top: 13px; font-size:1.4rem; border-radius:.5rem "><a href="logout.php  " style="color:white">LogOut</a></button> 
  </div>
</nav>

<!-- nvbar end -->


<section class="box" style="margin-top:100px;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          
          <h2 style="text-align:center">Login</h2>
          <form method="post" class="text-left clearfix">
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <input type="checkbox" name="remember" id="">Remember Me

            <div class="text-center">
              <input type="submit" class="btn btn-main text-center" value="Login" name="login">
            </div>
          <p class="mt-20">New in this site ?<a href="signinn.php"> Create New Account</a></p>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="js/script.js"></script>
    
  </body>
  </html>

  <?php

if(isset($_POST['login'])){
  $semail = $_POST['email'];
  $spassword = $_POST['password'];
 
include "con.php";

  $sql = "select * from student where email='$semail' and password ='$spassword'";
  $query = mysqli_query($con, $sql) or die("query failed.");
  $rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  if($rows>0){
  session_start();
  $_SESSION['email']=$semail;
  $_SESSION['Name']=$row['Name'];
 header("Location:dashboar.php");}

  else{
    echo "login failed ";
  }
 }
 if(isset($_POST['signup'])){
  //  echo "signup";
   header("Location:signn.php");
 }
 if(isset($_POST['remember'])){
   setcookie("email" ,$semail);
   setcookie("password",$spassword);
 }


 mysqli_close($con);

?>