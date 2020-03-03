<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Exercices du cours 3</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>
<body>

    <?PHP
    $maconnexion = mysqli_connect("localhost","user","password","base");

    $db = mysqli_connect('localhost', 'login', 'password',"base");
    $sql = 'SELECT sigle, adresse, logo FROM entreprises';
    $req=mysql_query ($db, $sql);

    ?>

</body>
</html>
