<?php
$a=3;
$b=4;
$c=5;
$p=$a+$b+$c;
$s = ($a + $b + $c)/2;
  $Area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
echo "area of triangle = ".$Area;
echo "perimeter of trianle = ".$p;
?>