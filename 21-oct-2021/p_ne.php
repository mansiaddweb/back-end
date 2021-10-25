<?php
$a = array(24, 0, 10,-3,-7,0,0,0 );
$arrlength=count($a);
$positive=0;
$negative=0;
$zero=0;
for ($i=0; $i <$arrlength ; $i++) { 
	if ($a[$i]==0) {
	$zero++;
	}
	elseif ($a[$i]>0) {
		$positive++;
	}
	else
	{
          $negative++;
	}
}
echo "the zero elements= ".$zero."<br>";
echo "the positive elements= ".$positive."<br>";
echo "the negative elements= ".$negative;
?>