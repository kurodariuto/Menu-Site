<?php 
require_once('menu.php');
require_once('data.php');
?>

<!DOCTYPE html>
<html>    
<head>
  <meta charset="utf-8">
  <title>Food Menu</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Food Menu</h1>
    <h3>メニュー品
      <?php echo count($menusFood); ?>
    </h3>
    <form method="post" action="confirmFood.php">
      <div class="menu-items">
        <?php foreach ($menusFood as $menuFood): ?>
          <div class="menu-item">
            <img src="<?php echo $menuFood->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name">
              <?php echo $menuFood->getName()?>
            </h3>
            <p class="price">¥<?php echo $menuFood->getTaxIncludedPrice() ?>（税込）</p>
            <input type="text" value="0" name="<?php echo $menuFood->getName() ?>">
            <span>個</span>
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>
