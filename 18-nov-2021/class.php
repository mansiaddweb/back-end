<?php
class ABC{
    public $name;
    public $city;

function set_name($nam){

    $this->name = $nam;

}
function get_name(){
    return $this->name;
}
}
$car= new ABC();
$car->set_name("mansi");
echo $car->get_name()."<br>";
var_dump($car instanceof ABC);
?>