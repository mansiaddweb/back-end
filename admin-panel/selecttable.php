<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:wheat">
<form action="" method="post">
    <input type="submit" value="Logout" name="logout" class="logout">
</form>
</body>
</html>

<?php
session_start();
include "includecon.php";

if($_SESSION['email']=='')
{
    header('Location:login.php');
}
else
{  

     $Name=$_SESSION['Name'];
    $email=$_SESSION['email'];
    $query1=mysqli_query($con, "select * from student where email='$semail'") or die("error in query");
    $row1= mysqli_fetch_array($query1);

       echo "<h1>Hello ".$Name."</h1>";
    $query=mysqli_query($con, "select * from student") or die("error in query");
    echo "<table  border=2><tr style='color:black'> <td>Id</td><td>Name</td><td>Email</td><td>Password</td><td>Mobile</td><td>Edit</td><td>Delete</td></tr>";
    while($row=mysqli_fetch_array($query))
    {
        $sid=$row['id'];
        echo "<tr>";
        echo "<td>".$sid."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['mobile']."</td>";
        echo "<td><a href=update.php?sid=$sid>Edit</a></td>";
        echo "<td><a href=delete.php?sid=$sid>Delete</a></td>";
    }
    echo "</table>";
    }
    if(isset($_POST['logout'])){
        header("Location:session.php");
    }
    
    mysqli_close($con);

    ?>