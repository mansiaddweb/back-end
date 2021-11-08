<?php
    error_reporting(0);
    ob_start();

    session_start();
    if($_SESSION['email']==''){
        header('Location:login.php');
}else{
    $sid = $_GET['id'];

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
	<link rel="stylesheet" type="text/css" href="signup.css">
	<title>sign-up</title>
</head>
<body>



	<div class="form">
		<form action="" method="post">
			<input type="text" name="Name" value="<?php echo $sname; ?>" ><br>
			<input type="email" name="email" value="<?php echo $semail; ?>" ><br>
			<!-- <input type="tel" name="phone" value="<?php echo $vphone; ?>"><br> -->
			<!-- <textarea name="address" rows="5" cols="25"><?php echo $vaddress; ?></textarea><br> -->
			<input type="password" name="password" value="<?php echo $spassword; ?>"><br>
			<input type="submit" name="submit" value="submit">
			<input type="reset" name="">
		</form>
	</div>

</body>
</html>

<?php 
$udid = $_POST['id'];
    $udname = $_POST['Name'];
    $udemail = $_POST['email'];
    // $udphone = $_POST['phone'];
    // $udaddress = $_POST['address'];
    $udpassword = $_POST['password'];
    // echo $udaddress;

    include "includecon.php";
$query="update student set Name='$udname',email= '$udemail',password='$udpassword' where id=$udid";
echo $query;
    $usql = mysqli_query($con,$query) or die("second query failed.");

		if($usql){
			echo "data inserted successfully.";
            header('Location:selecttable.php');
		}else{
			echo "failed to update data.";
		}
    
}
?>