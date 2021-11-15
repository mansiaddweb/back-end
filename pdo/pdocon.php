<?php
try{
    $pdo = new PDO ("mysql:host=localhost;dbname=org","root","");
    $sql ="select * from student";
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$q->fetch()){
        echo "{$row['id']}-{$row['Name']}-{$row['email']}-{$row['password']}-{$row['mobile']}<br>";
    }
}catch(PDOException $e){
 die("Could not connect to the database");
}


?>