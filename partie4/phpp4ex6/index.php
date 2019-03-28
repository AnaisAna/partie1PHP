<?php
function information($name, $firstName, $age){
  return 'Bonjour ' . $name . ' ' . $firstName . ', tu as ' . $age . ' ans';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 6</title>
</head>
<body>
  <p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :</p>
  <dl>
    <dd>"Bonjour" + nom + prénom + ",tu as" + age + "ans".</dd>
  </dl>
  <p>Résultat :</p>
  <p><?php echo information('Fradin', 'Anais', 21) ?></p>
</body>
</html>
