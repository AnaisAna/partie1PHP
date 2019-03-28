<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:</p>
<ul>
  <li>index.php?startDate=2/05/2016&endDate=27/11/2016</li>
</ul>
<?php
if (isset($_GET['startDate']) AND isset($_GET['endDate'])){
    echo 'Date de début ' . $_GET['startDate'] . 'et sa date de fin ' . $_GET['endDate'];
}else{
    echo 'Il n\' y a pas de date à indiquer !';
}
?>
  </body>
</html>
