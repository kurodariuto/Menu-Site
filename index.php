<?php 
require_once('data.php');
require_once('menu.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Main Menu</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Main Menu</h1>
    <h3>メニュー品
      <?php echo Menu::getCount(); ?>
    </h3>
      <div class="menu-items">
        <?php foreach ($indexImages as $indexImage => $value): ?>
          <div class="menu-item">
            <img src="<?php echo $value;?>" class="menu-item-image">
            <?php if ($indexImage == 'Food'): ?>
              <h3 class="menu-item-name">
                <a href='<?php  echo 'foodMenu.php'?>'>
                  <?php echo $indexImage;?> 
                </a>
              </h3>
            <?php endif ?>
            <?php if ($indexImage == 'Dessert'): ?>
              <h3 class="menu-item-name">
                <a href='<?php  echo 'dessertMenu.php'?>'>
                  <?php echo $indexImage;?>
                </a>
              </h3>
            <?php endif ?>
            <?php if ($indexImage == 'Drink'): ?>
              <h3 class="menu-item-name">
                <a href='<?php  echo 'drinkMenu.php'?>'>
                  <?php echo $indexImage;?>
                </a>
              </h3>
            <?php endif ?>
            <?php if ($indexImage == 'Alcohol'): ?>
              <h3 class="menu-item-name">
                <a href='<?php  echo 'alcoholMenu.php'?>'>
                  <?php echo $indexImage;?>
                </a>
              </h3>
            <?php endif ?>
          </div>
        <?php endforeach ?>
      </div>
  </div>
</body>
</html>
