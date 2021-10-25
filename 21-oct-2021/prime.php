<?php
$a = array(5,11,15, 23);
$arrlength=count($a);
$sum=0;
$c=0;
print_r($a);
for ($i=0; $i <$arrlength ; $i++) {
	for($j=2; $j<=$a[$i]/2; $j++){
if ($a[$i]%$j==0) {
     $sum=1;
     break;
}
else {
	$c++;
}
}
}
$c=($c/$arrlength-1);
// print_r($c);
if($sum==0){
	// echo "prime";
    echo "$c elements are prime <br>";
}
else
{ echo "<br>$c elements are prime from $arrlength";
	// echo "<br>not prime";
}
?>