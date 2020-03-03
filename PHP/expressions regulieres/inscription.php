<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Page inscription TP open classrooms</title>
</head>
<body>

<?php

/*Connexion automique :
if ($_COOKIE['checkbox']=='oui'){

$pseudal= $_COOKIE['pseudo'];

$connect=mysqli_connect("localhost", "root", "", "membres");
$query = mysqli_query($connect, "SELECT * FROM membres where pseudo='$pseudal'");
$data = mysqli_fetch_assoc($query);

// Comparaison du pass envoyé via le formulaire avec la base

  if ($_COOKIE['password']== $data['pass']){
    echo '<a href ="connexion.php"> Vous êtes connecté automatiquement </a>';
    exit;
  }
}
*/
?>


  <!--Formulaire d'inscription simple en POST-->
    <form action="inscription2.php" method="POST">
      <fieldset id = "fieldset1">
        <legend> Formulaire d'inscription : </legend>
        <div>
            <label for="pseudo">Pseudo</label>
            <input class="champ" type="text" id="pseudo" name="pseudo" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input class="champ" type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password2">Retapez le mot de passe</label>
            <input class="champ" type="password" id="password2" name="password2" required>
        </div>
        <div>
            <label for="email">Adresse email</label>
            <input class="champ" type="texte" id="email" name="email" required>
        </div>
        <div>
          <input id="valider" type=submit value="s'inscrire" name="valider">
        </div>
      </fieldset>
    </form>

<!--Formulaire de connexion -->
    <form action="connexion.php" method="POST">
      <fieldset id = "fieldset1">
        <legend> Se connecter : </legend>
        <div>
            <label for="pseudo">Pseudo</label>
            <input class="champ" type="text" id="pseudo" name="pseudo" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input class="champ" type="password" id="password" name="password" required>
        </div>
        <div>
          <label for="connexionauto">Connexion automatique</label>
          <input id="connexionauto" type=checkbox value="" name="connexionauto" checked>
        </div>
        <div>
          <input id="blbl" type=submit value="se connecter" name="blbl">
        </div>
      </fieldset>
    </form>




</body>
</html>
