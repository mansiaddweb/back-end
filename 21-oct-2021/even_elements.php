<?php
$a = array( 24, 21, 10 ,8,12,32,51);
$arrlength=count($a);
$sum=0;
for($i=0 ; $i <$arrlength ; $i++)
{
    if($i%2==0){
        $sum=$a[$i]+$sum; 
        
	}
}
   echo "sum of even elements =".$sum;
        
?>