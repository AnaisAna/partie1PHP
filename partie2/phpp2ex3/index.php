<?php
$gender = 'femme';
$age = 18 ;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>
    <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :</p>
<ul>
  <li>Homme</li>
  <li>Femme</li>
</ul>
<p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
<ul>
  <li>Vous êtes un homme et vous êtes majeur</li>
  <li>Vous êtes un homme et vous êtes mineur</li>
  <li>Vous êtes une femme et vous êtes majeur</li>
  <li>Vous êtes une femme et vous êtes mineur</li>
</ul>
<p> Résultat :
  <!--Premiere solution-->
<?php
if ($age >= 18) {
echo 'Vous êtes ' . $gender . ' et vous êtes majeur';
}else{
echo 'Vous êtes ' . $gender . ' et vous êtes mineur';
}
 ?></p>

 <!--Deuxieme solution qui est conseillé -->
 
  </body>
</html>
