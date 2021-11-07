<?php
session_start();
include "includecon.php";

if($_SESSION['email']=='')
{
    header('Location:login.php');
}
else
{   $Name=$_SESSION['Name'];
    $email=$_SESSION['email'];
    $query1=mysqli_query($con, "select Name from student where email='$semail'") or die("error in query");
    $row1= mysqli_fetch_array($query1);

       echo "hello ".$rows['Name'];
    $query=mysqli_query($con, "select * from student") or die("error in query");
    echo "<table border=3><tr> <td>id</td><td>Name</td><td>email</td><td>password</td></tr>";
    while($row=mysqli_fetch_array($query))
    {
        $sid=$row['id'];
        echo "<tr>";
        echo "<td>".$sid."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td><a href=update.php?sid=$sid>Edit</a></td>";
        echo "<td><a href=delete.php?sid=$sid>Delete</a></td>";
    }
    echo "</table>";
    mysqli_close($con);
}
    ?>