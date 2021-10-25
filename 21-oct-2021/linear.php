<?php
$a = array(32,63,87,9,5,2 );
$ele=5;
for ($i=0; $i < count($a); $i++) { 
	if($ele==$a[$i]){
		echo "<br>$ele founnd at position ".($i+1)."in the array";
	}
}
print_r($a);
?>