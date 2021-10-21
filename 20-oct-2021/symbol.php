<?php
$num=$_GET['num'];
if($num>='A' && $num<='Z') {
	echo "this is upper case";
}
else if($num>='a' && $num<='z') {
	echo "this is lower case";
}
else if($num>='0' && $num<='9')
{
	echo "this is digit";
}
else{
	echo "this are special characters";
}
?>