<?php
class ABC{
    public $name;
    public $city;

function __construct($nam){
// $this->city =$ct;
    $this->name = $nam;

}
function __destruct(){
echo "the abc is {$this->name}";
}
}
$car= new ABC("mansi");

?>