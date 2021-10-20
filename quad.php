<?php
$a=2;
$b=5;
$c=3;
$root=sqrt(($b*$b)-(4*$a*$c));
$f_r=($root-$b)/(2*$a);
$s_r=(-$root-$b)/(2*$a);
echo "equation's first root=".$f_r."<br>second root=".$s_r;
?>