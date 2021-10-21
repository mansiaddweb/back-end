<?php
$sp=$_GET['sp'];
$cp=$_GET['cp'];
if ($sp>$cp) {
    $profit=$sp-$cp;
    echo "The profit is = ".$profit;
}
elseif ($sp<$cp) {
	$loss=$cp-$sp;
	echo "The loss is = ".$loss;
}
else{
	echo "No loss and No profit";
}
?>