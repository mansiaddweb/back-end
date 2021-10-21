<?php
$num=$_GET['num'];
$a=0;
for ($i=1; $i <=$num/2 ; $i++) { 
      if($num%$i==0){
      	$a=$i+$a;
      }
}
if($a==$num){
      	echo "This is a perfect num";
      }
      else
      {
      	echo "This is not perfect num";
      }
?>