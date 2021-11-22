<?php
abstract class base{
    abstract function prin();
}
class derived extends base{
    function prin(){
        echo "derived class";
    }
}
$b= new derived;
$b->prin();
?>