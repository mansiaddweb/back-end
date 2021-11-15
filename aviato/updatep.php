<?php
    error_reporting(0);
    ob_start();

//                     session_start();
//     if($_SESSION['email']==''){
//         header('Location:login.php');
// }

    $sid = $_GET['sid'];

    include "con.php";
        // getting the previous info
    $sql = "select * from beauty where id='$sid'";
	$query = mysqli_query($con,$sql) or die("query failed.");
    $row_details = mysqli_fetch_array($query);
    $sid= $row_details['id'];
    $sname = $row_details['Name'];
    $semail = $row_details['email'];
    $spassword = $row_details['password'];

?>



<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>sign-up</title>
        <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:grey">
	
		<form action="" method="post">
        <div class="login kkl">
            Id: <input type="text" name="id" class="sign"><br>
            Name: <input type="text" name="name" class="sign"><br>
            Img: <input type="file" name="file" class="sign"><br>
            Color: <input type="color" name="color" class="sign"><br>
            Type: <input type="text" name="type" class="sign"><br>
            Sub_Type: <input type="text" name="subtype" class="sign"><br>
            Price: <input type="text" name="price" class="sign"><br>
            P_id: <input type="text" name="pid" class="sign"><br>
            Is_Active: <input type="text" name="isactive" class="sign"><br>
<div class="bttn">
            <input type="submit" value="Add Product" name="insert" class="btn">
</div></div>
		</form>
	</body>
</html>

<?php 
if(isset($_POST['submit']))
{    $udname = $_POST['Name'];
     $udemail = $_POST['email'];
    $udpassword = $_POST['password'];
    include "con.php";
$uquery="update beauty set Name='$udname',email= '$udemail',password=$udpassword where id=$sid";
// echo $uquery;
    $usql = mysqli_query($con,$uquery) or die("second query failed.");
		if($usql){
			echo "data inserted successfully.";
            header('Location:selecttable.php');
		}else{
			echo "failed to update data.";
		}
    
}
if(isset($_POST['logout'])){
    header("Location:session.php");
}


?>