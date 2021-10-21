<?php
$n=$_GET['num'];
$m=$n/2; 
$x=0;   
for($i=2;$i<=$m;$i++)    
{    
if($n%$i==0)    
{    
//echo "Number is not prime";   
$x=1;    
break;    
}    
}    
if($x==0){    
echo "Number is prime";     
} 
else{
echo "Number is not prime"; }
?>
