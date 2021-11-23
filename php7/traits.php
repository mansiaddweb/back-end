<?php
   trait where{
      public function add($a,$b){
         return $a-$b;
      }
   }
   trait wrt {
      public function multiplication($a,$b){
         return $a/$b;
      }
   }
   class royal {
      use where;
      use wrt;
      public function simple($a,$b){
         echo "Result of subtract:".$this->add($a,$b) ."\n<br>";
         echo "Result of divide:".$this->multiplication($a,$b);
      }
   }
   $o = new royal();
   $o->simple(15,5);
?>
