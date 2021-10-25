<?php 
$a=array(1,2,3,4);
$b=array(5,6,7,8);
function swap(&$arr,&$brr){
$arrlength=count($arr);
		for($i=0; $i <$arrlength; $i++) { 
			$temp=$arr[$i];
		$arr[$i]=$brr[$i];
		$brr[$i]=$temp;
	}

}    echo "first array";
print_r($a);
echo "<br>second array";
print_r($b)."<br>";
swap($a,$b);
echo "after swap A=";
print_r($a);
print_r($b);


 ?>