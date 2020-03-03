<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Exercice PHP</title>
</head>
<body>

    <?PHP
      $a = 'Bonjour';
      $name = 'François';
      $date = date("d-m-Y");
      $heure = date("H:i");
      $nom='Mickaël';
      $age=17;
      $gars=true;
      $taille=1.75;

      echo $a . '<br>';
      Print ("<br> Bienvenue $name <br>");
      Print("<br> Nous sommes le $date et il est $heure <br>");
      echo'<p>Bonjour à tous.<br/>
            Mon vrai nom n\'est pas Toto.<br/>
            Mon vrai nom est '.$nom.'<br/>
            J\'ai '.$age.' ans et je mesure '.$taille.'m.<br/>
            Et comme mon nom l\'indique, je suis ';
            if ($gars==true){
                echo 'un garçon.</p>';
            }
            else{
                echo 'une fille. </p>';
            }
    ?>

  <br>
  <br>

    <form name="inscription" method="post" action="exercice.php">
                Entrez votre pseudo : <input type="text" name="pseudo"/> <br/>
                Entrez votre ville : <input type="text" name="ville"/><br/>
                <input type="submit" name="valider" value="OK"/>
    </form>

    <?php
    if(isset($_POST['valider'])){
        $pseudo=$_POST['pseudo'];
        $ville=$_POST['ville'];
        echo 'Salut '. $pseudo.' de '. $ville.'<br/>Bienvenue sur mon site !';
    }
    ?>


    <?PHP echo '<br> Merci '.$name; ; ?>

</body>
</html>
