<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: </p>
<ul>
  <li>index.php?building=12&room=101</li>
</ul>
<?php
if (isset($_GET['building']) && (isset($_GET['room']))){
    echo 'Il y a ' . $_GET['building'] . ' bâtiment et ' . $_GET['room'] . ' numeros de la pièces.';
}else{
    echo ' ';
}
 ?>
  </body>
</html>
