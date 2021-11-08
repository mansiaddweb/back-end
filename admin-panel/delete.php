<!DOCTYPE html>
<?php 
session_start();
if($_SESSION['email']=='')
{
    header('Location:login.php');
}
else{
   $sid=$_GET['sid'];
   include "includecon.php";
$uquery="delete from student where id=$sid";
// echo $uquery;
    $usql = mysqli_query($con,$uquery) or die("second query failed.");
		if($usql){
			echo "data deleted successfully.";
            header('Location:selecttable.php');
		}
        else
        {
			echo "failed to delete data.";
		}
}
?>