<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>En allant de 1 à 200 avec un pas de 12, afficher le message On tient le bon bout.</p>
     <?php for($not = 1; $not <=200; $not +=12){ ?>
      <p> <?php echo $not ?>
       On tient le bon bout</p>
     <?php } ?>
  </body>
</html>
