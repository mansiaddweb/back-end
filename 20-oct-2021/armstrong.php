<?php
$num=$_GET['num'];
$a=0;
$r=$num;
while ($num>0) {
 	
 	$x=$num%10;
 	$a=($x**3)+$a;
   // $r=($r*10)+$x;
	$num=(int)($num/10);
} 
if ($a==$r) {
	// code...
    echo "This is armstrong number";
}
else{
	echo "This is not armstrong number";
}
?>