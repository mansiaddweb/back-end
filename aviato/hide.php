<?php
include "con.php";
$pid=$_GET['sid'];
$cid=$_GET['pid'];
if($cid==1){
$sql="select * from clothes where id=$pid ";
echo $sql;
}
if($cid==2){
    $sql="select * from jewellery where id=$pid ";}
    if($cid==3){
        $sql="select * from beauty where id=$pid ";
    }
        $query=mysqli_query($con,$sql) or die("error in query");
        $row=mysqli_fetch_array($query);
        echo $row['isactive'];
        if($row['isactive']==1)
        {
           $is = 0;
        }
        else{
            $is = 1;
        }
        if($cid==1){
            $sql1="update clothes set isactive='$is' where id=$pid ";
            echo $sql1;
            }
            if($cid==2){
                $sql1="update jewellery set isactive='$is' where id=$pid ";
            }
                if($cid==3){
                    $sql1="update beauty set isactive='$is' where id=$pid ";
                }
                $rquery=mysqli_query($con,$sql1) or die("error in 2 query");
            
        header("Location:home.php?id=$cid");
?>