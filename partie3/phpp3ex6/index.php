<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 6</title>
  </head>
  <body>
    <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
     <!--Deuxième solution-->
<?php for($number = 20; $number >= 0; $number -=1){ ?>
 <p><?= $number ?> C'est presque bon</p>
<?php } ?>
  </body>
</html>
