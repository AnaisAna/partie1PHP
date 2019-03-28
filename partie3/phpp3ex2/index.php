<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
  </head>
  <body>
    <p>
      Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
      Tant que la première variable n'est pas supérieure à 20 :
    </p>
    <ul>
      <li>multiplier la première variable avec la deuxième</li>
      <li>afficher le résultat</li>
      <li>incrementer la première variable</li>
    </ul>
    <?php
    $firstNumber = 0;
    $secondNumber = round(1,100);

    while ($firstNumber <= 20){ ?>
      <p><?php echo $firstNumber * $secondNumber .' '; ?></p>
      <?php $firstNumber++;
    }
     ?>
  </body>
</html>
