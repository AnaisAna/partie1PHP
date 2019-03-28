<?php
$department = array (
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme',
  '51' => 'Marne');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 10</title>
</head>
<body>
  <p>
    Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
    Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département.
  </p>
  <p>Résultat : </p>
   <?php foreach($department as $cle => $element){ ?>
  <p>Le département <?= $element ?> à le numéro <?= $cle ?> , du départment.</p>
  <?php } ?>
</body>
</html>
