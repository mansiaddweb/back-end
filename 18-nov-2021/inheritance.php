<?php
class abc{
    public $name;
    public $city;
    public function __construct($nam,$ct){
        $this->name = $nam;
        $this->city = $ct;
    }
    public function intro(){
        echo "the person is {$this->name} and the city is {$this->city}.";
    }
}
class xyz extends abc{
public function msg(){
       echo "the class xyz<br>";
}
}
$p =new xyz("mansi","bhilwara");
$p->msg();
$p->intro();
?>