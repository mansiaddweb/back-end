<?php
class ABC{
    public $name;
    public $city;

function __construct(   ){
echo "parent keyword in constructor";
}}
class xyz extends ABC{
function __construct(){
parent::__construct();
}

}
$car= new xyz();

?>