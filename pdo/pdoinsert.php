<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Id: <input type="text" name="id" required><br/>
Name:<input type="text" name="Name" required><br/>
Email:<input type="text" name="email" required><br/>
Password:<input type="text" name="password" required><br/>
Mobile:<input type="text" name="mobile" maxlength="10" required><br/>
Address:<input type="text" name="address" required><br/>

<input type="submit" name="insert" value="Submit"><br/>

    </form>
</body>
</html>
<?php
if(isset($_POST['insert']))
{
	$id=$_POST['id'];
	$name=$_POST['Name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
	$mobile=$_POST['mobile'];
    $address=$_POST['address'];
	
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=org", "root", "");
        $sql = 'insert into student(id, Name,email,password, mobile , address) values(:id,:Name,:email,:password,:mobile,:address)';
        $query = $pdo -> prepare($sql);
        $query -> bindParam(':id', $id, PDO::PARAM_STR);
        $query -> bindParam(':Name', $name, PDO::PARAM_STR);
        $query -> bindParam(':email', $email, PDO::PARAM_STR);
        $query -> bindParam(':password', $password, PDO::PARAM_STR);
        $query -> bindParam(':mobile', $mobile, PDO::PARAM_STR);
        $query -> bindParam(':address', $address, PDO::PARAM_STR);
        $query -> execute();
	$lastInsertId=$pdo->lastInsertId();
	if($lastInsertId!="")
	{
		echo "Data Inserted Successfully";
	}
	else
	{
		echo "Error in Inserting";
	}
}
catch(PDOException $e){
die ("could not connect to database");
}
}
?>