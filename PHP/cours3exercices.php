<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Exercices du cours 3</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>
<body>

    <?PHP

    //Utiliser les fonctions
    //Question 1
    define('CHAT', 'miaou');
    echo 'Question 1. Utiliser la fonction de données DEFINE : <br> - la constante CHAT stocke la valeur ' .CHAT.'<br/><br/>';

    //Question 2
    echo '<br> <br>Question 2. Utiliser la fonction de tableaux : <br>';
    $ages= ['Mathilde' =>27, 'Pierre'=>29, 'Amandine'=>21];
    foreach($ages as $clef=>$valeur) {
    echo $clef.' a ' .$valeur. ' ans.<br>';}

    //Question 3
    $chiffre = pow(2,2);
    echo '<br> <br>Question 3. Utiliser la fonction mathématique pow pour calculer 2² = <br>'.$chiffre;

    $date = date("Y-m-d");
    echo '<br> <br>Question 3. Utiliser la fonction temporelle date : <br>'.$date;

    $ch = '- ceci est un paragraphe en minuscules mis en forme avec la fonction ucwords qui ajoute des majuscules <br>';
    $chpetit = ucwords($ch);
    $var1 = "chaine 1";
    $var2= "chaine 2";

    //Question 4
    echo '<br> <br>Question 4. Utiliser les fonctions de chaines de caractères : <br>' . $chpetit . '- Manipulation de chaine avec strlen pour connaitre la longueur de la phrase ci-dessus en valeur numérique :'.strlen($ch);
    if (strcmp($var1, $var2) !==0) {
      echo "<br> - Grâce à la fonction strcmp, je sais que = $var1 n'est pas égal à $var2 par comparaison sensible à la casse. <br>";
    };


    //Question 5
    echo "<br> Question 5. Dans la phrase 'j'aime jouer de la guitare', la fonction régulière preg_match permet de savoir si il y a le mot guitare =";
    if (preg_match ("#guitare#", "j'aime jouer de la guitare."))
    {echo 'VRAI <br><br>';
    }
    else {
      echo 'FAUX <br><br>';
    };


    foreach (gd_info() as $key => $value)
    echo "$key: <b>$value</b><br>";

    /* l'extension GD ne fonctionne pas : internal server error
    header ("Content-type : image/jpeg");
    $image = imagecreatefromjpeg("avion.jpg");*/

    /*
    header ("Content-type : image/jpeg");
    $image = imagecreate(200,50);
    */






    ?>

</body>
</html>
