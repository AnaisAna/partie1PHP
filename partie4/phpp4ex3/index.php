<?php
function functionZ($mot){//functionZ est un paramettre
  return $mot;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 3</title>
</head>
<body>
  <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
  <p> Je suis <?= functionZ('développeuse')?> et j'ai trouvé <?= functionZ('solution') ?></p>
</body>
</html>
