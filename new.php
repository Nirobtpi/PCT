<?php
abstract class Father{
    function print100(){
        for($i=0;$i<100;$i+=10){
            echo $i;
            echo "\n";
        }
  }
}
class Son extends Father{
    function demo(){
        parent::print100();
    }
    function print100(){
        for($i=0;$i<100;$i+=10){
            echo $i;
            echo "\n";
        }
    }
}
$s = new Son();
// $s->print100();
$s->demo();


?>