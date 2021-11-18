<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <!-- nvbar     -->
  
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand">Aviato</a>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>
      <div class="navbar-nav">
        <a class="nav-link "href="dashboar.php">Dashboard</a>
        <a class="nav-link" href="#">Shop</a>
        <a class="nav-link" href="#">Pages</a>
        <a class="nav-link" href="#">Blog</a>
        <a class="nav-link" href="#">Elements</a>
      </div>
      
    </div>
    <button class="btn btn-primary" type="button" style="color:white; background-color:rgb(100, 89, 64); width:180px; height:40px; font-size:1.4rem; border-radius:.5rem "><a href="category.php" style="color:white">Add Category</a></button>
  <button class="btn btn-primary" type="button"  style="color:white; background-color:rgb(100, 89, 64); width:100px; height:40px; font-size:1.4rem; border-radius:.5rem "><a href="login.php  " style="color:white">LogOut</a></button> 
  </div>
</nav>

<!-- nvbar end -->

   
        <form method="post" enctype="multipart/form-data"> 
            <div class="lg">
            <h2 style="text-align:center;">Category</h2>  
            Id: <br><input type="text" name="pid" class="sign" style="
    margin-left: 82px;
"><br>
            Name: <input type="text" name="name" class="sign" 
style="
    margin-left: 83px;
"
><br>
            Img: <br><input type="file" name="file" class="sign" style="
    margin-left: 82px;
"><br>
            
<div class="bttn" style="
    margin-left: 137px;
    margin-top: 43px;
">
            <input type="submit" value="Add Category" name="insert" class="btn">
</div></div>
        </form>

    </body>
</html>
<?php
include "con.php";
if(isset($_POST['insert']))
{
    $sid=$_POST['pid'];
    $sname=$_POST['name'];
    $filepath = "images/".$_FILES["file"]["name"];
                   
        $sql="Insert into pcategory (pid,name,img_url) values($sid,'$sname','$filepath')" ;
        move_uploaded_file($_FILES["file"]["tmp_name"], $filepath); 
        $query = mysqli_query($con,$sql) or die("error in query");
        if($query)
        {
            echo "data inserted";
            header('Location:dashboar.php');
        }
        else{
            echo "error in insertion";
        }
        
        mysqli_close($con);
}
?>