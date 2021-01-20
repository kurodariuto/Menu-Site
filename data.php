<?php
require_once('food.php');
require_once('dessert.php');
require_once('drink.php');
require_once('alcohol.php');

$menuLists = array('foodMenu', 'dessertMenu', 'drinkMenu', 'alcoholMenu');

$indexImages = array(
	'Food'=>
	'https://cdn.pixabay.com/photo/2014/06/11/17/00/food-366875__480.jpg', 

	'Dessert'=>
	'https://cdn.pixabay.com/photo/2015/03/26/09/39/cupcakes-690040__480.jpg', 

	'Drink'=>
	'https://cdn.pixabay.com/photo/2016/09/27/19/49/coffee-1699185__480.jpg', 

	'Alcohol'=>
	'https://cdn.pixabay.com/photo/2015/11/30/23/32/champagner-1071356__480.jpg');

$curry = new Food('Curry', 830, 'https://cdn.pixabay.com/photo/2016/10/13/05/16/thai-curry-1736806__480.jpg');
$ramen = new Food('Ramen', 730, 'https://cdn.pixabay.com/photo/2018/03/15/10/33/bars-ramen-in-saigon-3227779__480.jpg');
$pasta = new Food('Pasta', 930, 'https://cdn.pixabay.com/photo/2018/07/18/19/12/spaghetti-3547078__480.jpg');
$omeletteRice = new Food('Omeletterice', 1030, 'https://cdn.pixabay.com/photo/2016/10/23/05/40/restaurant-1762236__480.jpg' );

$sweetChestuts = new Dessert('Sweetchestuts', 430, 'https://cdn.pixabay.com/photo/2017/10/23/17/56/roasted-chestnuts-2881862__480.jpg');
$anninTofu = new Dessert('Annintofu', 530, 'https://thumb.photo-ac.com/c0/c03e0da8b8c86a1b81ef2e9dfecc00a2_w.jpg');
$sherbet = new Dessert('Sherbet', 630, 'https://cdn.pixabay.com/photo/2014/09/19/22/54/dessert-453132__480.jpg');
$parfait = new Dessert('Parfait', 730, 'https://cdn.pixabay.com/photo/2015/03/30/12/45/parfait-698633__480.jpg');

$orangeJuice = new Drink('Orangejuice', 530, 'https://cdn.pixabay.com/photo/2017/01/20/14/59/orange-1995044__480.jpg');
$oolongTea = new Drink('Oolongtea', 630, 'https://cdn.pixabay.com/photo/2020/06/08/19/53/green-tea-5275926__480.jpg');
$tea = new Drink('Tea',730, 'https://cdn.pixabay.com/photo/2015/07/01/08/42/oolong-827397__480.jpg');
$coffee = new Drink('Coffee', 830, 'https://cdn.pixabay.com/photo/2017/09/04/18/39/coffee-2714970__480.jpg');

$beer = new Alcohol('Beer', 930, 'https://cdn.pixabay.com/photo/2017/06/24/23/41/beer-2439237__480.jpg');
$whiskey = new Alcohol('Whiskey', 1330, 'https://cdn.pixabay.com/photo/2020/12/06/11/54/lifestyle-5808549__480.jpg');

$sake = new Alcohol('Sake', 1930, 'https://cdn.pixabay.com/photo/2014/10/09/14/46/rice-wine-481965__480.jpg');
$wine = new Alcohol('Wine', 2730, 'https://cdn.pixabay.com/photo/2016/10/22/20/34/wine-1761613__480.jpg');

$menusFood = array($curry, $ramen,
	               $pasta, $omeletteRice);

$menusDessert = array($sweetChestuts, $anninTofu, 
	                  $sherbet, $parfait);

$menusDrink = array($orangeJuice, $oolongTea,
                    $tea,$coffee);

$menusAlcohol = array($beer, $whiskey, 
	                  $sake, $wine);