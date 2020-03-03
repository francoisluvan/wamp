<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Page connexion TP open classrooms</title>
</head>
<body>


  <?PHP
  /*
  Session_start();
  //variables de session
  $_SESSION['pseudo']= ;

  //écrire un cookie
  setcookie ('prenom', 'Francois', time() + 365*24*3600, null, null, false, true);
*/



//  Récupération de l'utilisateur et de son pass hashé
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
//$checkbox=$_POST['connexionauto'];



$connect=mysqli_connect("localhost", "root", "", "membres");
$query = mysqli_query($connect, "SELECT * FROM membres where pseudo='$pseudo'");
$data = mysqli_fetch_assoc($query);
if (isset($_POST['blbl'])){
  setcookie('checkbox','oui');
}
else {
  setcookie('checkbox','non');
}
// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $data['pass']);

if (!$data)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $data['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
        setcookie ('pseudo', $pseudo);
        setcookie ('password', $data['pass']);
        echo '<a href="deconnexion.php"> Déconnexion </a>';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}




  ?>





</body>
</html>
