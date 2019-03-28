<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 4</title>
</head>
<body>
  <p>Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10, il faut : l'afficher, l'incrementer de la moitié de sa valeur</p>
  <?php
  $fistName = 1;
  while ($fistName < 10){ ?>
    <p><?php echo $fistName .' '; ?></p>
    <?php $fistName =  $fistName + ($fistName /2) ;
  }
  ?>
</body>
</html>
