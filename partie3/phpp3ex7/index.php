<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
     <?php for($not = 1; $not <=100; $not +=15){ ?>
      <p> <?php echo $not ?>
       On tient le bon bout</p>
     <?php } ?>
  </body>
</html>
