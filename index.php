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
      <div id="menu">
        <?php
          $ad=$_GET["ad"];
          switch($ad){
            case 'type.html':
              $class1="class='gris'";
              $suivant="pate.html";
              break;
            case 'pate.html':
                $class1="class='gris'";
                $class2="class='gris'";
                $suivant="base.html";
              break;
            case 'base.html':
              $class1="class='gris'";
              $class2="class='gris'";
              $class3="class='gris'";
              $suivant="viande.html";
              break;
            case 'viande.html':
              $class1="class='gris'";
              $class2="class='gris'";
              $class3="class='gris'";
              $class4="class='gris'";
              $suivant="legumes.html";
              break;
            case 'legumes.html':
              $class1="class='gris'";
              $class2="class='gris'";
              $class3="class='gris'";
              $class4="class='gris'";
              $class5="class='gris'";
              $suivant="fromage.html";
              break;
            case 'fromage.html':
              $class1="class='gris'";
              $class2="class='gris'";
              $class3="class='gris'";
              $class4="class='gris'";
              $class5="class='gris'";
              $class6="class='gris'";
              $suivant="sauce.html";
              break;
            case 'sauce.html':
              $class1="class='gris'";
              $class2="class='gris'";
              $class3="class='gris'";
              $class4="class='gris'";
              $class5="class='gris'";
              $class6="class='gris'";
              $class7="class='gris'";
              $suivant="recap.html";
              break;
            case 'recap.html':
              $class1="class='gris'";
              $class2="class='gris'";
              $class3="class='gris'";
              $class4="class='gris'";
              $class5="class='gris'";
              $class6="class='gris'";
              $class7="class='gris'";
              $suivant="popup.html";
              break;
            case 'popup.html':
                $class1="class='gris'";
                $class2="class='gris'";
                $class3="class='gris'";
                $class4="class='gris'";
                $class5="class='gris'";
                $class6="class='gris'";
                $class7="class='gris'";
                break;
            case 'popupvalider.html':
                $class1="class='gris'";
                $class2="class='gris'";
                $class3="class='gris'";
                $class4="class='gris'";
                $class5="class='gris'";
                $class6="class='gris'";
                $class7="class='gris'";
                break;
          }
        ?>
        <ul class="menu_horizontal">
          <li><a id="first" <?php echo $class1; ?> href="index.php?ad=type.html"><p>Type</p></a></li>
          <li><a <?php echo $class2; ?> href="index.php?ad=pate.html"><p>Pâte</p></a></li>
          <li><a <?php echo $class3; ?> href="index.php?ad=base.html"><p>Base</p></a></li>
          <li><a <?php echo $class4; ?> href="index.php?ad=viande.html"><p>Viandes</p></a></li>
          <li><a <?php echo $class5; ?> href="index.php?ad=legumes.html"><p>Légumes</p></a></li>
          <li><a <?php echo $class6; ?> href="index.php?ad=fromage.html"><p>Fromage</p></a></li>
          <li><a <?php echo $class7; ?> href="index.php?ad=sauce.html"><p>Sauce</p></a></li>
        </ul>
      </div>
      <?php
        include($ad);
      ?>
    </div>
  <?php include("profil.html"); ?>
  <?php include("panier.html"); ?>
  <div id="footer">
    <ul>
      <?php if($ad=="recap.html" OR $ad=="popup.html" OR $ad=="popupvalider.html"){
        $nomLien="Valider commande";
        echo "<li id='retour'><a href='index.php?ad=type.html'>Retour</a></li>";
      }else{
        $nomLien="Suivant";
      }
      ?>
      <li id="suivant"><a href="index.php?ad=<?php echo $suivant; ?>"><p><?php echo $nomLien; ?></p></a></li>
    </ul>
  </div>
</div>
</body>
<script src="accountmenu.js"></script>
<script src="basket.js"></script>
</html>
