<?php
require_once('menu.php');

class Alcohol extends Menu {
  public function getData() {
  	parent:: __construct($name, $price, $image);
  }

}
?>