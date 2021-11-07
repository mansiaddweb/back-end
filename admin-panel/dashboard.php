<?php

if(isset($_GET['Insert'])){
    $sid=$_GET['id'];
    $sname=$_GET['name'];
    $semail=$_GET['email000'];
    $spassword=$_GET['password'];

    error_reporting(0);
    $con =mysqli_connect("localhost:3306","root","","org") or die("error in connection");
    $sql="insert into student(id, name, email, password) values($sid,'$sname','$semail','$spassword')"
    $query= mysqli_query()
}

?>