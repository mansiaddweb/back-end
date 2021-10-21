<?php
$num=$_GET['num'];
$r=0;
$a=$num;
while ($num>0) {
 	
 	$x=$num%10;
    $r=($r*10)+$x;
	$num=(int)($num/10);
}
if ($r==$a) {
	// code...
echo "This is a palindrome number";
}
else{
echo "This is a not palindrome number";
}
?>