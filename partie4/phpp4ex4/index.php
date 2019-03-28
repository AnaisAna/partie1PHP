<?php
//Je déclare mes deux variables
$firstNumber = 80;
$secondNumber = 45;
//Je créer un fontion et j'ajoute (mes deux paramettres);
function fonction ($firstNumber, $secondNumber){
  if ($firstNumber == $secondNumber) {
    $result  = 'ils sont égaux.';
  }else if($firstNumber < $secondNumber){
    $result = 'le premier nombre est plus petit que le deuxième.';
  }else{
    $result = 'le premier nombre est plus grand que le deuxième.';
  }
  return $result; //IL faut afficher toujours qu'un seul return.
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 4</title>
</head>
<body>
  <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
  <ul>
    <li>le premier nombre est plus grand si le premier nombre est plus grand que le deuxième.</li>
    <li>le premier nombre est plus petit si le premier nombre est plus petit que le deuxième.</li>
    <li>les deux nombres sont identiques si les deux nombres sont égaux.</li>
  </ul>
<p>Résultat</p>
<ul>
  <li>Premier nombre : <?= $firstNumber ?></li>
  <li>Deuxième nombre : <?= $secondNumber ?></li>
</ul>
<!--J'appelle ma fonction et je lui passe deux int en parametres-->
<p>Alor <?php echo fonction(80, 100) ?></p> <!--J'affiche ma fonction-->
</body>
</html>
