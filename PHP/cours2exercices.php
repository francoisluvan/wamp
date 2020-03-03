<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Exercices du cours 2</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>
<body>

<!--Formulaire simple en GET-->
  <form action="fruit.php" method="GET">
  <fieldset>
    <div>
        <label for="fruit">Quel fruit aimez-vous ?</label>
        <input type="radio" value="Pomme" id="Pomme" name="fruit" checked> Pomme </input>
        <input type="radio" id="Banane" name="fruit" value="Banane"> Banane </input>
        <input type="radio" id="Pêche" value="Pêche" name="fruit"> Pêche </input>
    </div>
    <div>
      <input id="valider" type=submit value=valider name="valider">
    </div>
  </fieldset>
  </form>

  <!--Formulaire simple en POST-->
    <form action="session.php" method="POST">
      <fieldset id = "fieldset1">
        <legend> Vos identifiants : </legend>
        <div>
            <label for="user_id">Nom d'utilisateur</label>
            <input class="champ" type="text" id="user_id" name="user_id" required>
        </div>
        <div>
            <label for="Prenom">Mot de passe</label>
            <input class="champ" type="text" id="mdp" name="mdp" required>
        </div>
        <div>
          <input id="valider" type=submit value="se connecter" name="valider">
        </div>
      </fieldset>
    </form>


    <?PHP

    //Afficher des variables d'environnement en boucle
    $nombre_de_lignes = 1;

    while ($nombre_de_lignes < 5){
      echo '<br>Votre adresse IP est: '.$_SERVER['REMOTE_ADDR'];

      echo '<br> Le nom du serveur est: '.$_SERVER['SERVER_NAME'];

      $nombre_de_lignes++;
    }

    ?>

</body>
</html>
