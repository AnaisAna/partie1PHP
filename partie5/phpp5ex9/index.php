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
    <meta charset="utf-8">
    <title>Exercice 9</title>
  </head>
  <body>
  <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
<p>Le résultat : </p>
<?php foreach ($department as $element) { ?>
 <?= $element . ',' ?>
<?php } ?>
  </body>
</html>
