<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>BD session</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>
<body>


  <!--Formulaire simple en POST-->
    <form action="BD.php" method="POST">
      <fieldset id = "fieldset1">
        <legend> Se connecter : </legend>
        <div>
            <label for="nom">Nom d'utilisateur</label>
            <input class="champ" type="text" id="nom" name="nom" required>
        </div>
        <div>
          <input id="valider" type=submit value="se connecter" name="valider">
        </div>
      </fieldset>
    </form>



</body>
</html>
