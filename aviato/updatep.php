<?php
    error_reporting(0);
    ob_start();

                    session_start();
    if($_SESSION['email']==''){
        header('Location:login.php');
}

    $sid = $_GET['sid'];
$pid = $_GET['pid'];
    include "con.php";
       if($pid==3){
    $sql = "select * from beauty where id='$sid'";
       }
       if($pid==2){
        $sql = "select * from jewellery where id='$sid'";
           }
           if($pid==1){
            $sql = "select * from clothes where id='$sid'";
               }
    $query = mysqli_query($con,$sql) or die("query failed.");
    $row_details = mysqli_fetch_array($query);
    $sid= $row_details['id'];
    $sname = $row_details['name'];
    $ofilepath= $row_details['img_url'];
    $scolor = $row_details['color'];
    $stype = $row_details['type'];
    $ssub = $row_details['subtype'];
    $sprice = $row_details['price'];
    $sepid = $row_details['pid'];
    $sis = $row_details['isactive'];

?>



<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>sign-up</title>
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
<h1 style="text-align:center; color:burlywood; margin:20px"> ADD PRODUCT</h1>
	
		<form action="" method="post">
        <div class="kl" style="padding-top:2rem;">
            Id: <input type="text" name="id" value="<?php echo $sid; ?>" class="sign"><br>
            Name: <input type="text" value="<?php echo $sname; ?>" name="name" class="sign"><br>
            Img: <input type="file" value="<?php echo $ofilepath; ?>" name="file" class="sign"><br>
            Color: <input type="color" name="color" value="<?php echo $scolor; ?>" class="sign"><br>
            Type: <input type="text" name="type" value="<?php echo $stype; ?>" class="sign"><br>
            Sub_Type: <input type="text" name="subtype" value="<?php echo $ssub; ?>" class="sign"><br>
            Price: <input type="text" name="price" value="<?php echo $sprice; ?>"class="sign"><br>
            P_id: <input type="text" name="pid" value="<?php echo $sepid; ?>" class="sign"><br>
            Is_Active: <input type="text" name="isactive" value="<?php echo $sis; ?>" class="sign"><br>
<div class="bttn">
            <input type="submit" value="Add Product" name="insert" class="btn" style=" margin:50px 90px">
</div></div>
		</form>
	</body>
</html>

<?php 
if(isset($_POST['insert']))
{    $udname = $_POST['name'];
        $udimg = $_POST['file'];
        $udcolor = $_POST['color'];
        $udtype = $_POST['type'];
        $udsub = $_POST['subtype'];
        $udprice = $_POST['price'];
     $udpid = $_POST['pid'];
    $udis = $_POST['isactive'];
    if($_FILES['file']['size']==0){
        $filepath=$ofilepath;
    }
    else{
        $filepath="images/".$_FILES['file']['name'];
    }
    include "con.php";
    if($udpid==3){
$uquery="update beauty set name='$udname', img_url='$filepath', color='$udcolor', type='$udtype', price='$udprice', pid='$udpid',isactive='$udis' where id=$sid";
echo $uquery;}
if($udpid==2){
    $uquery="update jewellery set name='$udname', img_url='$filepath',type='$udtype', subtype='$udsub', price='$udprice', pid='$udpid',isactive='$udis' where id=$sid";
    echo $uquery;
}
if($udpid==1){
    $uquery="update clothes set name='$udname', img_url='$filepath', color='$udcolor', type='$udtype', subtype='$udsub', price='$udprice', pid='$udpid',isactive='$udis' where id=$sid";
    echo $uquery;
}
    $usql = mysqli_query($con,$uquery) or die("second query failed.");
		if($usql){
			echo "data inserted successfully.";
            header('Location:home.php');

		}else{
			echo "failed to update data.";
		}
    
}
if(isset($_POST['logout'])){
    header("Location:home.php");
}


?>