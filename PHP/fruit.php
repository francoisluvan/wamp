<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Merci</title>
</head>
<body>



<?PHP

//réponse au formulaire de cours2exercices
if ($_GET["fruit"]== "Pomme"){
  echo "<br> Merci, je trouve que tu as une bonne pomme ! <br> <br>";
}
elseif ($_GET["fruit"]== "Banane"){
  echo "<br> Trop cool, tu as la banane ! <br> <br>";
}
elseif ($_GET["fruit"]== "Pêche"){
  echo "<br> Merci, j'ai la pêche aujourd'hui ! <br> <br>";
};



?>

<button class="favorite styled"
        type="button">

    <a href="cours2exercices.php">Retourner au formulaire</a>
</button>

</body>
</html>
