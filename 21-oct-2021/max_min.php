<?php
$a = array( 24, 21, 10,53 );
$arrlength=count($a);
$sum=0;
for ($i=0,$max=$a[$i],$min=$a[$i]; $i <$arrlength ; $i++) { 
	if($max<$a[$i])
	{
		$max=$a[$i];
	}
		if($min>$a[$i])
	{
		$min=$a[$i];
	}
}
echo "the max of elements= ".$max;
echo "the min of elements= ".$min;
?>