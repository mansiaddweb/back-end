<?php
$a = array(8,21,5,8 );
$arrlength=count($a);
print_r($a);
// function palindrome(&$a){
$check=0;
for ($i=$arrlength-1, $j=0; $j <$arrlength ;$j++, $i--) {
       if($a[$j]!=$a[$i]){
            $check=1;
             break;
}
}
if($check==0){
	echo "palindrome";
}
else
{
	echo "not palindrome";
}

// palindrome($a);
?>