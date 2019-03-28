<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <p>
    Créer une variable et l'initialiser à 0.
    Tant que cette variable n'atteint pas 10, il faut :
  </p>
  <ul>
    <li>l'afficher</li>
    <li>l'incrementer</li>
  </ul>
  <p>Résultat : </p>
  <?php
  $number = 0;
  while ($number <= 10){ ?>
    <p><?= $number ?></p>
    <?php  $number++;
  }
  ?>
</body>
</html>
