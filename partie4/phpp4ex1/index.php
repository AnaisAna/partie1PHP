<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
  </head>
  <body>
    <p>Faire une fonction qui retourne true.</p>
    <?php
    $bool = false;
    function($bool){
      if ($bool != false) {
        return true;
      }else{
        return false;
      }
    }
     ?>

     <!--une autre solution-->
     <?php
function bool(){
  return true;
}
echo bool()?>

     <p>Résultat : <?= $bool; ?></p>
  </body>
</html>
