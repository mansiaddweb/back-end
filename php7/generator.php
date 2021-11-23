<html>
<head>
<title> document</title>
</head>
<body>
<?php
   function gene(){
      yield "one<br>";
      yield "two<br>";
   }
   function genes(){
      yield "three<br>";
      yield "four<br>";
      yield "five<br>";
   }
   function geness(){
    yield "seven<br>";
    yield "eight<br>";
    yield from gene();
    yield "nine<br>";
    yield from genes();
    yield "ten<br>";
 }
 foreach (genes() as $value){
    echo $value, PHP_EOL;
 }
 foreach(geness() as $value){
    echo $value, PHP_EOL;
 }
?>
</body>
</html>
