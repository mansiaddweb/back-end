<?php
$a = array( 24, 21, 10,53 );
$arrlength=count($a);
$sum=0;
for ($i=0,$max=$a[$i]; $i <$arrlength ; $i++) { 
	if($max<$a[$i])
	{
		$max=$a[$i];
	}
}
echo "the sum of elements= ".$max;
?>