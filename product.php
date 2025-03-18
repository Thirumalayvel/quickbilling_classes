<?php
// Online PHP compiler to run PHP program online
// Print "Try programiz.pro" message
class product{
  var $name;
var $imageURL;
 var $quantity;
public function __construct($name,$iurl,$quant){
    $this->name=$name;
    $this->imageURL=$iurl;
    $this->quantity=$quant;
}
public function set_quant($quant){
    $this->quantity=$quant;
}
public function print_product(){
    echo $this->name;
    echo $this->imageURL;
    echo $this->quantity;
}
}
?>
