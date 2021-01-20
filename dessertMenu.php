<?php 
require_once('menu.php');
require_once('data.php');
?>

<!DOCTYPE html>
<html>    
<head>
  <meta charset="utf-8">
  <title>Dessrt Menu</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Dessrt Menu</h1>
    <h3>メニュー品
      <?php echo count($menusDessert); ?>
    </h3>
    <form method="post" action="confirmDessert.php">
      <div class="menu-items">
        <?php foreach ($menusDessert as $menuDessert): ?>
          <div class="menu-item">
            <img src="<?php echo $menuDessert->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name">
              <?php echo $menuDessert->getName()?>
            </h3>
            <p class="price">¥<?php echo $menuDessert->getTaxIncludedPrice() ?>（税込）</p>
            <input type="text" value="0" name="<?php echo $menuDessert->getName() ?>">
            <span>個</span>
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>
