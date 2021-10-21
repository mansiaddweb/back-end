<?php
$hindi=$_GET['hindi'];
$eng=$_GET['eng'];
$math=$_GET['math'];
$total=$math+$eng+$hindi;
$per=$total/150*100;
if($per>59)
{$div="first division";}
elseif ($per<60&&$per>44) {
	$div="second division";
}
elseif($per<45&&$per>36){
	$div="third division";
}
else
{$div="fail";}
echo "the total out of 150 : ".$total."<br> the percentage is: ".$per."<br> division is : ".$div;
?>
