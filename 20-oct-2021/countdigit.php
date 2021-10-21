<?php
$num=$_GET['num'];
$r=0;
while ($num>0) {
 	
 	$x=$num%10;
    $r++;
	$num=(int)($num/10);
}
echo "the digits in number  =".$r;
?>