<?php
function check($var){
    if(is_object($var)){
        return "oggetto";
    }
    else {
        return "non è un oggetto";
    }
    
}
class Fruit {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function get_name() {
      return $this->name;
    }
    function get_color() {
      return $this->color;
    }
  }
  $apple = new Fruit("mela", "rossa");
  echo check($apple);
  