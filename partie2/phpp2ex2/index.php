<?php
//On déclare un booléen qu'on initilaise à false.
//On ne met pas de quotes car c'est un booléen.
//on met le = car on attribut une valeur.
$isEasy = false;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 2</title>
</head>
<body>
  <p>
    Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
    Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
    Bonus : L'écrire de deux manières différentes.
  </p>
  <p>Le résultat quand c'est faux :</p>
  <!--Premiere solution-->
  <p><?php
  //On utilise le == pour faire un comparaison.
  //On pourrait utiliser le === pour comparer strictement (Comparer le type de valeur)
  if($isEasy == true){
    echo 'C\'est facile !!';
  }else{
    echo 'C\'est difficile !!';
  }
  ?></p>

  <!--Deuxieme solutions-->
  <?php if($isEasy == true){ ?>
    <p>C'est facile !!</p>
  <?php }else{ ?>
    <p>C'est difficile !!</p>
  <?php } ?>

  <!--Bonus-->
  <?php if($isEasy){ ?>
    <p>C'est facile !!</p>
  <?php }else{ ?>
    <p>C'est difficile !!</p>
  <?php } ?>

</body>
</html>
