<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Exercice expressions regulières</title>
</head>
<body>

    <?PHP
//cherche sous chaine dans une chaine
    if (preg_match("#spaghetti#i", "j'aime les Spaghettis !"))
      {
      echo 'VRAI';
      }
      else
      {
      echo 'FAUX';
    }

    echo "<br>";

//chercher si une chaine commence par un mot
    if (preg_match("#^spaghetti#i", "spaghetti, j'aime les Spaghettis"))
      {
      echo 'VRAI';
      }
      else
      {
      echo 'FAUX';
    }

echo "<br>";

//chercher si un num de téléphone est valide
    if (preg_match("#[0-9]{10}+#", "0160102444"))
      {
      echo 'VRAI';
      }
      else
      {
      echo 'FAUX';
    }

echo "<br>";

//trouver url et remplacer par lien cliquable

if (preg_replace("[#www.spaghetti.com#]", "aller sur http://boulettes.com", "aller sur www.spaghetti.com"))
  {
  echo 'Ok, url remplacée';
  }
  else
  {
  echo 'ne fonctionne pas';
}

 ?>

</body>
</html>
