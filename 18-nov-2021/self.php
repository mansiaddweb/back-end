<?php
class abc{
    
    public static function star(){
   echo "self keyword";
    }
    public static function intro(){
      echo self::star();
    }
}
abc::intro();
?>