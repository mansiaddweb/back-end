<?php
$a[0][0]=3;
$a[0][1]=2;
$a[1][0]=9;
$a[1][1]=1;

$arrlength=count($a);
$sum=0;
$b=0;
for ($r=0; $r <$arrlength ; $r++) 
{
    for ($c=0; $c <$arrlength ; $c++) 
    {
    	echo $a[$r][$c];
        $sum=$a[$r][$c]+$sum;

    	

         }echo "<br>";
   
	
}
   echo "<br>sum of first rows =".$sum;
        
?>