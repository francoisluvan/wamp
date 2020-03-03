<?PHP
Session_start();
//variables de session
$_SESSION['prenom']= 'Francois';
$_SESSION['nom']= 'Luvan';
$_SESSION['age']= '30';
//écrire un cookie
setcookie ('prenom', 'Francois', time() + 365*24*3600, null, null, false, true);
?>

<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>session</title>
</head>
<body>



<?PHP
//réponse à la session de cours2exercices
if (isset($_POST['mdp']) AND $_POST['mdp'] =="kangourou")
  {echo 'Bienvenue dans votre session. Grâce à mon cookie, je me souviens de ton prénom : '.$_COOKIE['prenom'];}
else
  {echo 'Le mot de passe est erroné. <br> Indice : le mot de passe est kangourou';
}




?>

<button class="favorite styled"
        type="button">

    <a href="cours2exercices.php">Retourner au formulaire</a>
</button>

</body>
</html>
