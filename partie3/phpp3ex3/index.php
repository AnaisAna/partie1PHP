<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 3</title>
</head>
<body>
  <p>
    Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
    Tant que la première variable n'est pas inférieure ou égale à 10 :
  </p>
  <ul>
    <li>multiplier la première variable avec la deuxième</li>
    <li>afficher le résultat</li>
    <li>décrémenter la première variable</li>
  </ul>
  <p>Résultat : </p>
  <?php
  $firstNumber = 100;
  $secondNumber = rand(1,100);
  while ($firstNumber >= 10){ ?>
    <p><?php echo $firstNumber * $secondNumber .' '; ?></p>
    <?php $firstNumber--;
  }
  ?>
</body>
</html>
