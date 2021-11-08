<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:gray">
  <form  method="post">
    <div class="login">
          <input type="text" name="email" placeholder="Email" class="txt"><br><br>
    <input type="text" name="password" placeholder="Password" class="txt"><br><br>
  <div class="bttn">
    <input type="submit" value="Login" name="login" class="btn"><br><br>
  <input type="submit" value="Sign Up" name="signup" class="btn">
</div></div>
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
 }
 if(isset($_POST['signup'])){
  //  echo "signup";
   header("Location:insert.php");
 }


 mysqli_close($con);

?>
