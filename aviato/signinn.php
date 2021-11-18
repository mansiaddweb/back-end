<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:burlywood
">

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
   
  <button class="btn btn-primary" type="button"  style="color:white; background-color:rgb(100, 89, 64); width:100px; height:40px; margin-left: 230px;margin-top: 13px; font-size:1.4rem; border-radius:.5rem "><a href="login.php  " style="color:white">LogOut</a></button> 
  </div>
</nav>

<!-- nvbar end -->

    <section class="box">
<h2 class="text-center">Create Your Account</h2>
          <form action="login.php">
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="First Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Last Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control"  placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  placeholder="Password">
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  placeholder="Confirm Password">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center">Sign In</button>
            </div>
          </form>
          <p class="mt-20">Already have an account ?<a href="login.php"> Login</a></p>
          <p><a href="forget-password.html"> Forgot your password?</a></p>
        
          </section>
</body>
</html>