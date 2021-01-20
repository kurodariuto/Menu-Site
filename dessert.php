<?php 
require_once('menu.php');

class Dessert extends Menu {
	public function getData() {
		parent:: __construct($name, $price, $image);
	}	
}
?>
