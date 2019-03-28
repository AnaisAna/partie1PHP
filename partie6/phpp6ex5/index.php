<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: </p>
<ul>
  <li>index.php?week=12</li>
</ul>
<?php
if (isset($_GET['week'])){
    echo 'Il y a ' . $_GET['week'] . ' week-end. ';
}else{
    echo ' ';
}
 ?>
  </body>
</html>
