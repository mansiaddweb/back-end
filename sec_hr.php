<?php

$sec=7890;
$ss = $sec%60;
$hh = $sec/60;
 $mm = $hh%60;
 $hh=$hh/60;
print("time is=".(int)$hh.":".(int)$mm.":".(int)$ss);
?>