<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Merci</title>
</head>
<body>


<?PHP

  if(isset($_GET['valider'])){
      $nom = $_GET['nom'];
      $prenom = $_GET['prenom'];
  echo 'Merci '. $prenom . ' '. $nom . ' , nous avons bien reçu votre message. Nous vous répondrons dans les meilleurs délais. <br> <br>';
};

  if(isset($_GET['newsletter'])){
  echo 'Vous avez coché la case pour recevoir la newsletter. <br> <br>';
};

if(isset($_GET['infos'])){
echo 'Vous avez coché la case pour recevoir les informations de nos partenaires. <br> <br>';
};


?>

<button class="favorite styled"
        type="button">

    <a href="script2.php">Retourner au formulaire</a>
</button>

</body>
</html>
