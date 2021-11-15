<?php
try{
    $pdo = new PDO ("mysql:host=localhost;dbname=org","root","");
    $add='jaipur';
    $sql = "select * from student where address=:address";
    $query =$pdo->prepare($sql);
    $query->bindParam(':address', $add, PDO::PARAM_STR);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$query->fetch()){
        echo $row['id']." ".$row['Name']." ".$row['email']." ".$row['password']." ".$row['mobile']." ".$row['address']." "."<br>";
    }
}
catch(PDOException $e){
    die("could not connect to database");
}
?>