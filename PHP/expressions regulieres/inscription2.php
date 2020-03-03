<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Votre inscription</title>
</head>
<body>



    <?php
    // Vérification de la validité des informations
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];


    $connect=mysqli_connect("localhost", "root", "", "membres");
    $query = mysqli_query($connect, "SELECT pseudo FROM membres WHERE pseudo = '$pseudo'");
    $data = mysqli_fetch_assoc($query);
    if($data!= 0){
    // Pseudo déjà utilisé
    echo 'Ce pseudo est déjà utilisé. <a href="inscription.php">Revenir</a> ';
    exit;
    }

    if ($password!==$password2){
      echo 'mots de passe différents ! <a href="inscription.php">Revenir</a>';
      exit;
    }

    if (!preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email)){
      echo 'revois ton email ! <a href="inscription.php">Revenir</a>';
      exit;
    }

    // Pseudo libre
    $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query2 = mysqli_query($connect, "SELECT * FROM membres");
    //on compte les lignes du tableau de la BDD avec affected rows qui prend toujours la dernière requête de la connexion. Et on ajoute +1 chaque fois
    $compte=mysqli_affected_rows($connect)+1;
    mysqli_query($connect,"INSERT INTO membres (id, pseudo, pass, email, date_inscription) VALUE ($compte,'$pseudo','$pass_hache','$email', CURDATE())");
    echo 'inscription enregistrée avec succès <a href="inscription.php">Revenir</a>';




 ?>



</body>
</html>
