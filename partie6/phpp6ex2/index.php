<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
  </head>
  <body>
    <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean</p>
<?php
if (isset($_GET['age']) && isset($_GET['firstname']) && isset($_GET['lastname'])){
    echo $_GET['firstname'] . ' ' . $_GET['lastname'] . ' ' . $_GET['age'] . ' ans.';
}else{
    echo 'Votre age n\'est pas indiqué !';
}
?>
  </body>
</html>
