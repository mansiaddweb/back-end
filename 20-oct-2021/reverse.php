<?php
$num=$_GET['num'];
$r=0;
while ($num>0) {
 	
 	$x=$num%10;
    $r=($r*10)+$x;
	$num=(int)($num/10);
}
echo "Reverse of num =".$r;
?>