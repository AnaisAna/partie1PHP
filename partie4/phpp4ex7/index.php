<?php
$gender = 'un homme';
$age = 28;

function genderAge($gender, $age){
  if ($age >= 18) {
  $message = 'Vous êtes ' . $gender . ' et vous êtes majeur';
  }else{
  $message =  'Vous êtes ' . $gender . ' et vous êtes mineur';
  }
  return $message;
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
<p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
<ul>
  <li>Homme</li>
  <li>Femme</li>
</ul>
<p>La fonction doit renvoyer en fonction des paramètres :</p>
<ul>
  <li>Vous êtes un homme et vous êtes majeur</li>
  <li>Vous êtes un homme et vous êtes mineur</li>
  <li>Vous êtes une femme et vous êtes majeur</li>
  <li>Vous êtes une femme et vous êtes mineur</li>
</ul>

<p>Si c'est <?= $gender ?> et que son age est <?= $age ?> ans.</p>
<p>Le résultat est : </p>
<p><?php echo genderAge('un homme', 28) ?></p>
  </body>
</html>
