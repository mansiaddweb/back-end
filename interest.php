<?php
$p=1000;
$r=2;
$t=5;
$si=($p * $t * $r)/100;
$ci=$p(1+$r/100)**t;
echo "simple interest = ".$si;
echo "compound interest = ".$ci;
?>