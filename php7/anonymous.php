<?php
   interface myclass {
      public function logs(string $msg);
   }


   class Application {
      private $more;


      public function getm(): myclass {
         return $this->more;
      }


      public function setm(myclass $more) {
         $this->more = $more;
  
        }  
    }
 
 
    $app = new Application;
    $app->setm(new class implements myclass {
       public function logs(string $msg) {
          print($msg);
       }
    });
 
 
    $app->getm()->logs("My first Message");
 ?>
 