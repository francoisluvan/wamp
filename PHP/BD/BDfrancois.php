<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Exercices du cours 3</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>
<body>

    <?PHP
    $link = mysqli_connect("localhost", "root") or die ("Impossible de se connecter: ".mysql_error());
    echo 'connexion réussie';
    mysqli_close($link);


    ?>

</body>
</html>
