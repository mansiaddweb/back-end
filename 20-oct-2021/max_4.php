<?php
$a=$_GET['hindi'];
$b=$_GET['eng'];
$c=$_GET['math'];
$d=$_GET['maths'];
if ($a>$b&&$a>$c&&$a>$d) {
	$max=$a;
}elseif ($b>$a&&$b>$c&&$b>$d) {
	$max=$b;
}
elseif($c>$a&&$c>$b&&$c>$d)
{
	$max=$c;
}
else{
	$max=$d;
}
echo "the maximum from 4 num :".$max;
?>
