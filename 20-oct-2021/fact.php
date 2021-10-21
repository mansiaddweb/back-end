<?php


for($x=1,$num=$_GET['num'];$num>0;$num--)
{
	$x=$num*$x;
	
}
echo "The factorial is = ".$x;
?>
