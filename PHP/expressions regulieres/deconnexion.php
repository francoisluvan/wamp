<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Page déconnexion TP open classrooms</title>
</head>
<body>


  <?PHP
  session_start();

  // Suppression des variables de session et de la session
  $_SESSION = array();
  session_destroy();

  // Suppression des cookies de connexion automatique
  setcookie('pseudo', '');
  setcookie('pass_hache', '');
  setcookie('checkbox','');
  echo 'Vous êtes déconnecté avec succès. Cookies dévorés !!';
  echo '<a href="inscription.php" > Retour </a>';

  ?>





</body>
</html>
