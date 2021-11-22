<?php
class ABC{
    public $name;
    public $city;

function __construct($nam , $ct){
$this->city =$ct;
    $this->name = $nam;

}
function get_name(){
    return $this->name;
}

function get_city(){
    return $this->city;
}
}
$car= new ABC("mansi","bhilwara");

echo $car->get_name()."<br>";
echo $car->get_city()."<br>";
?>