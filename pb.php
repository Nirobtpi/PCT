<?php
class Discount{
    public $original;
    public $discount;
    
    public function __construct($original,$discount){
        $this->original=$original;
        $this->discount=$discount;
    }
    function discountD(){
    $discount=$this->original*$this->discount/100;
    $this->original=$this->original-$discount;
    $this->discount=$discount;
    return $this->original;
}
}
$discount=new Discount(1000,30);
echo $discount->discountD();

class Name{
    public $name;
    function name($name){
        $this->name=$name;
    }
}
class Person extends Name{
    public $age;
    function age($age){
        $this->age=$age;
    }
}
$n=new Person();
$n->name("mohamed");
$n->age(20);
echo $n->name;
echo"\n";
echo $n->age;   

?>