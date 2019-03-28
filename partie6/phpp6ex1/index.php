<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?lastname=Nemare&firstname=Jean</p>
    <p><?php
    //$_GET est un tabelau, ['CLE ASSOCIATIF'], isset déttermine si une variable est déclarée.
if (isset($_GET['lastname']) AND isset($_GET['firstname'])){
    echo 'Bonjour ' . $_GET['lastname'] . ' ' . $_GET['firstname'] . ' !';
}else{

    echo 'Il faut renseigner un nom et un prénom !';
}

?></p>
  </body>
</html>
