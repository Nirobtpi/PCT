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
echo "\n";

interface SayHello{
    public function SayName();

}
class Nirob implements SayHello{
    public function SayName(){
        echo "Nirob";
    }
}
$n=new Nirob();
$n->SayName();
echo "\n";

trait Hello{
    public function SayHello(){
        echo "Hello Chikcu";
    }
}
class Nirob1{
    use Hello;
}
$nirob1=new Nirob1();
$nirob1->SayHello();
echo "\n";

class MyFather{

  private  function jomi(){
        echo "This Is Jomi";
    }
   protected function Bike(){
        echo "This Is Father Bike";
    }

    function murgi(){
        echo "This Is Murgi";
    }

}
class HisSon extends MyFather{
    function Bike(){
        echo "This Is Son Bike";
    }
    
}
$son=new HisSon();

echo "\n";
$son->Bike();

for($i=1;$i<=10;$i++){

    for($j=1;$j<=$i;$j++){
         echo "$i x $j = " . ($i * $j) . "\n";
    }
}


?>