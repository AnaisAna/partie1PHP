<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 5</title>
</head>
<body>
  <p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>
  <!--Premiere solution-->
  <?php
  $not = 1;
  while ($not <= 15){ ?>
    <p><?php echo $not . ' On y arrive presque. '?></p>
    <?php $not++;
  }
  ?>
  <!--Deuxième solution-->
  <?php
  for ($not=1; $not <= 15 ; $not++) { ?>
    <p><?php echo $not . ' On y arrive presque. ';?></p>
    <?php $not++;
  }
  ?>
</body>
</html>
