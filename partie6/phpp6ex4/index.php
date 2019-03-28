<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: </p>
<ul>
  <li>index.php?language=PHP&server=LAMP</li>
</ul>
<?php
if (isset($_GET['language']) AND isset($_GET['server'])){
    echo 'Le language que j\'utilise est ' . $_GET['language'] . ' qui est sur le serveur ' . $_GET['server'];
}else{
    echo 'Ce URL n\'existe pas !';
}
 ?>
  </body>
</html>
