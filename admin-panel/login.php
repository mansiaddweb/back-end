<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form  method="post">
    <input type="text" name="email" placeholder="Email"><br><br>
    <input type="text" name="password" placeholder="Password"><br><br>
    <input type="submit" value="Insert" name="login">
</form>
</body>
</html>
<?php

if(isset($_POST['login'])){
  $semail = $_POST['email'];
  $spassword = $_POST['password'];
 
include "includecon.php";

  $sql = "select * from student where email='$semail' and password ='$spassword'";
  $query = mysqli_query($con, $sql) or die("query failed.");
  $rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  if($query>0){
  session_start();
  $_SESSION['email']=$semail;
  $_SESSION['Name']=$row['Name'];
 header("Location:selecttable.php");}

  else{
    echo "login failed ";
  }
  mysqli_close($con);
}
?>