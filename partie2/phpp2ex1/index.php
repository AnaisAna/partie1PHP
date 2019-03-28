<?php
//On déclare une variable et on l'initialise à 18 ou un autre nombre
$age = 18;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 1</title>
</head>
<body>
  <p>Créer une variable age et l'initialiser avec une valeur.</p>
  <p>Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
  <p>Le résultat est :</p>
  <p>Si sont age est <?= $age ?>  alors
    <?php
    if ($age <18){
      echo 'vous êtes mineur.';
    }else{
      echo 'vous êtes majeur.';
    }
    ?></p>
  </body>
  </html>
