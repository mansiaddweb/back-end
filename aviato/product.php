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

        <form method="post" enctype="multipart/form-data"> 
        <div class="kl">      
            <h2 style="text-align:center;">Product</h2>  
            Id: <input type="text" name="id" class="sign"><br>
            Name: <input type="text" name="name" class="sign"><br>
            Img: <input type="file" name="file" class="sign"><br>
            Color: <input type="color" name="color" class="sign"><br>
            Type: <input type="text" name="type" class="sign"><br>
            Sub_Type: <input type="text" name="subtype" class="sign"><br>
            Price: <input type="text" name="price" class="sign"><br>
            P_id: <input type="text" name="pid" class="sign"><br>
            Is_Active: <input type="text" name="isactive" class="sign"><br>
<div class="bttn" style="margin:15px 70px; border-radius:2rem;">
            <input type="submit" value="Add Product" name="insert" class="btn">
            </div></div>
        </form>

    </body>
</html>
<?php
include "con.php";
if(isset($_POST['insert']))
{
    $sid=$_POST['id'];
    // echo $sid;
        $sname=$_POST['name'];
    $filepath = "images/".$_FILES["file"]["name"];
    // echo $filepath;
    $scolor=$_POST['color'];
    $stype=$_POST['type'];
    $ssub=$_POST['subtype'];
    $sprice=$_POST['price'];
    $spid=$_POST['pid'];
    echo $spid;
    $sco=$_POST['isactive'];               
    if($spid==1){    
    $sql="Insert into clothes (id,img_url,name,color,type,subtype,price,pid,isactive) values($sid,'$filepath','$sname','$scolor','$stype','$ssub', $sprice,$spid,$sco)" ;
        
        echo $sql;
     }
        if($spid==2){

            $sql="Insert into jewellery (id,img_url,name,type,subtype,price,pid,isactive) values($sid,'$filepath','$sname','$stype','$ssub', $sprice,$spid,$sco)" ;
    echo $sql;
         }
         if($spid==3){
            $sql="Insert into beauty (id,img_url,name,color,type,price,pid,isactive) values($sid,'$filepath','$sname','$scolor','$stype',$sprice,$spid,$sco)" ;
        echo $sql;
         }
         move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
        $query = mysqli_query($con,$sql) or die("error in query");
        if($query)
        {
            echo "data inserted";
            header('Location:home.php.php');
        }
        else{
            echo "error in insertion";
        }
        
        mysqli_close($con);
}
?>