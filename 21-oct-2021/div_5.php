<?php
$a = array(20, 25, 10,3,7 );
$arrlength=count($a);
$five=0;
for ($i=0; $i <$arrlength ; $i++) { 
	if ($a[$i]%5==0) {
	$five++;
	}

}
echo "the count of elements divisible by 5 = ".$five."<br>";

?>