<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Formulaire de contact</title>
    <link rel="stylesheet" type="text/css" href="script2.css" />
</head>
<body>


  <form action=merci.php method="GET">

      <h1> Formulaire de contact </h1>

    <fieldset id = "fieldset1">
      <legend> Vos coordonnées : </legend>
      <div>
          <label for="Nom">Nom</label>
          <input class="champ" type="text" id="Nom" name="nom">
      </div>
      <div>
          <label for="Prenom">Prénom</label>
          <input class="champ" type="text" id="prénom" name="prenom">
      </div>
      <div>
          <label for="e-mail">e-mail</label>
          <input class="champ" type="text" id="e-mail" name="email">
      </div>

      <div>
          <label for="Nom">Vous êtes...</label>
          <input type="radio" id="Nom" name="statut"> étudiant </input>
          <input type="radio" id="prénom" name="statut"> enseignant </input>
          <input type="radio" id="e-mail" name="statut"> autre </input>
      </div>
    </fieldset>

    <fieldset id="fieldset2">
      <legend> Votre message : </legend>
        <div>
            <textarea id="destination" name="message" >
            </textarea>
        </div>
    </fieldset>

    <div>
    <input id="newsletter" type=checkbox name="newsletter"> Recevoir la newsletter </input>
    </div>

    <div>
    <input id="newsletter" type=checkbox name="infos"> Recevoir information des partenaires </input>
    </div>

    <div>
      <input id="valider" type=submit value=valider name="valider">
      <input id="effacer" type=reset value=effacer >
    </div>
  </form>

    <?PHP




    ?>

</body>
</html>
