<?php
require_once('menu.php');

class Drink extends Menu {
  public function getData() {
  	parent:: __construct($name, $price, $image);
  }

}
?>