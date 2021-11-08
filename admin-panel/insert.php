<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="post"> 
            <div class="login">
            Id: <input type="text" name="id" class="sign"><br>
            Name: <input type="text" name="Name" class="sign"><br>
            Email: <input type="email" name="email" class="sign"><br>
            Password: <input type="text" name="password"class="sign"><br>
            Confirm Password: <input type="text" name="cp" class="sign" ><br>
            Mobile: <input type="text" name="mobile" class="sign"><br>
<div class="bttn">
            <input type="submit" value="Sign Up" name="insert" class="btn">
</div></div>
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
    $scp=$_POST['cp'];
    $smobile=$_POST['mobile'];
    error_reporting(0);
        include "includecon.php";
        if($scp != $spassword){
            echo "<script>
                alert('Password Missmatch');
            </script>
            ";
        }
        else{

        $query=mysqli_query($con,"Insert into student(id,name,email,password,mobile) values($sid,'$sname','$semail','$spassword','$smobile')") or die("error in query");

        if($query)
        {
            echo "data inserted";
            header('Location:login.php');
        }
        else{
            echo "error in insertion";
        }
        }
        mysqli_close($con);
}
?>
