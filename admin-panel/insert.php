<html>
    <body>
        <form method="post"> 
            id: <input type="text" name="id"><br>
            name: <input type="text" name="Name"><br>
            email: <input type="email" name="email"><br>
            password: <input type="text" name="password"><br>

            <input type="submit" value="insert" name="insert">
        </form>
    </body>
</html>
<?php
if(isset($_POST['insert']))
{
    $sid=$_POST['id'];
    $sname=$_POST['Name'];
    $semail=$_POST['email'];
    $spassword=$_POST['password'];
    error_reporting(0);
        include "includecon.php";

        $query=mysqli_query($con,"Insert into student(id,name,email,password) values($sid,'$sname','$semail','$spassword')") or die("error in query");

        if($query)
        {
            echo "data inserted";
header('Location:login.php');
        }
        else{
            echo "error in insertion";
        }
        mysqli_close($con);
}
?>
