<?php
function numberString($number, $string){
  return $number . ' ' . $string;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5</title>
</head>
<body>
  <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
  <p>J'ai <?= numberString(21,'ans')?></p>
</body>
</html>
