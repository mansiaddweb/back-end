<?php
   class many { 
      public $obj1prop;   
   }
   class more {
      public $obj2prop;
   }
   $obj1 = new many();
   $obj1->obj1prop = 1;
   $obj2 = new more();
   $obj2->obj2prop = 2;
   $serializedObj1 = serialize($obj1);
   $serializedObj2 = serialize($obj2);
   $data = unserialize($serializedObj1 , ["allowed_classes" => true]);
   $data2 = unserialize($serializedObj2 , ["allowed_classes" => ["many", "more"]]);
  print($data->obj1prop);
  print("<br/>");
  print($data2->obj2prop);
?>
