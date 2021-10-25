<?php
$a = array(24, 21, 10,3,7 );
$arrlength=count($a);
$even=0;
$odd=0;
for ($i=0; $i <$arrlength ; $i++) { 
	if ($a[$i]%2==0) {
	$even++;
	}
	else
	{
          $odd++;
	}
}
echo "the even elements= ".$even."<br>";
echo "the odd elements= ".$odd;
?>