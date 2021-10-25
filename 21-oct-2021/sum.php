<?php
$a = array( 24, 21, 10 );
$arrlength=count($a);
$sum=0;
for ($i=0; $i <$arrlength ; $i++) { 
	$sum=$sum+$a[$i];
}
echo "the sum of elements= ".$sum;
?>