<?php
    error_reporting(0);
    ob_start();

    session_start();
    if($_SESSION['email']==''){
        header('Location:login.php');
}
else
{
    $sid = $_GET['sid'];

    include "includecon.php";
        // getting the previous info
    $sql = "select * from student where id='$sid'";
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
        <input type="submit" value="Logout" name="logout" class="logout">
        <div class="up">
        
			Name : <input type="text" name="Name" value="<?php echo $sname; ?>" class="txt"><br>
			Email: <input type="email" name="email" value="<?php echo $semail; ?>" class="txt"><br>
			Password :	<input type="password" name="password" value="<?php echo $spassword; ?>" class="txt"><br>
		<div style="margin-top:30px">
            <input type="submit" name="submit" value="submit" class="btn">
			<input type="reset" name="" class="btn">
</div></div>
		</form>
	</body>
</html>

<?php 
if(isset($_POST['submit']))
{    $udname = $_POST['Name'];
     $udemail = $_POST['email'];
    $udpassword = $_POST['password'];
    include "includecon.php";
$uquery="update student set Name='$udname',email= '$udemail',password=$udpassword where id=$sid";
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

}
?>