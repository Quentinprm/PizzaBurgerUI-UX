<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>PizzaBurger</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="accountmenu.css">
  <link rel="stylesheet" href="basket.css">
</head>
<body>
  <?php include("accountmenu.html");?>
  <?php include("basket.html")?>
  <div id="app">
    <div id="centre">
      <?php include("menu.html"); ?>
      <?php
        $ad=$_GET["ad"];
        include($ad);
      ?>
    </div>
  <?php include("profil.html"); ?>
  <?php include("panier.html"); ?>
  <?php include("footer.php"); ?>

</div>
</body>
<script src="accountmenu.js"></script>
<script src="basket.js"></script>
</html>
