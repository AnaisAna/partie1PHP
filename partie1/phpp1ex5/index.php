<?php
/* On type une vriable pour éviter les problèmes de conversion.
surtout utilisé pour les nouvelles versions de php.
Settype prend en aramètre le nom de la variable et son type ''*/
settype($int, 'int');
//Le NULL c'est littéralement RIEN. INT est un nombre arrondi.
$int = NULL;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5</title>
</head>
<body>
  <?php
  echo $int;
  $int = 1;
  echo $int;
  ?>
</body>
</html>
