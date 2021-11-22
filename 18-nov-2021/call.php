<?php
function adder($str){
$str.=' call by value';
return $str;
}

$st="hello";
echo adder($st);
echo "<br>".$st;
?>