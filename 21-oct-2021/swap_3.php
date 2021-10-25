<?php
$a = array(1 ,2,3,4 );
$b = array(5,6,7,8 );
$temp=array();
for ($i=0; $i < count($a); $i++) { 
	echo $a[$i]." ";
}
echo"<br>";
function swap(&$a, &$b ,$temp)
{
	$temp=$a;
	$a=$b;
	$b=$temp;
}
echo "first array";
print_r($a);
echo "second array";
print_r($b);
swap($a,$b,$temp);
echo "array after swapping:<br>";
echo "first array";
print_r($a);
echo "second array";
print_r($b);
?>