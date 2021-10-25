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
    	if ($r==0) {
    		// code...
         $sum=$sum+$a[$r][$c];
    }     
    else{
    	$b=$b+$a[$r][$c];
    }
    }echo "<br>";
    
	
}
echo "sum of first rows =".$sum."<br>";
echo "sum of second rows =".$b;
        
?>