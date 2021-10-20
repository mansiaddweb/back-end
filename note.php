<?php
$Rs=600;
$n100=$Rs/100;

$Rs=$Rs%100;
$n50=$Rs/50;
$Rs=$Rs%50;
$n20=$Rs/20;
$Rs=$Rs%20;
$n10=$Rs/10;
$Rs=$Rs%10;
$n5=$Rs/5;
$Rs=$Rs%5;
$n2=$Rs/2;
$Rs=$Rs%2;
echo "note of Rs=".(int)$n100."_"(int)$n50."_".(int)$n20."_".(int)$n10."_".(int)$n5."_".(int)$n2;
?>