<?php
$a=$_GET['hindi'];
$b=$_GET['eng'];
$c=$_GET['math'];
if ($a>$b&&$a>$c) {
	$max=$a;
}elseif ($b>$a&&$b>$c) {
	$max=$b;
}
else
{
	$max=$c;
}
echo "the maximum from 3 num :".$max;
?>
