<?php
$gender = 'homme';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>Traduire ce code avec des if et des else :</p>
    <p>< ? php
  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
? ></p>
<p>Voici le résultat :</p>
<!-- < ?php
//une ternaire bien pour les formulaires
echo($gender =='homme')?'C\'est une developpeuse !!';'C\'est un developpeur !!'?> -->

<?php
if ($gender != 'homme') {
echo 'C\'est une developpeuse !!';
}else{
echo 'C\'est un developpeur !!';
}
 ?>
  </body>
</html>
