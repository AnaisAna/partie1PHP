<?php
$months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
<p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
<p>Le résutat : </p>
<?php for($numero = 0; $numero < 12; $numero++){
  echo $months[$numero]. ' '; // Ca permet d'avoir tous les mois sur une ligne séparer.
}?>
  </body>
</html>
