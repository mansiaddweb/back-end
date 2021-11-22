<?php
class abc{
    function add($n1,$n2){
        $sum=$n1 +$n2;
        return $sum;

    }
   
}
$value = new abc();
$v= $value->add(10,20);
echo $v;
?>