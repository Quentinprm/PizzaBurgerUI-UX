<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Type</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
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
</html>
