<?php
interface my{
    public function methodA();
    }

    interface myr{
        public function methodA();
        }    
        class myclass implements my,myr{
            public function methodA(){
                echo "methodA<br>";
            }
            public function methodB(){
                 echo "methodB";
            }
        }
        $ob =new myclass();
        $ob->methodA();
        $ob->methodB();
?>