<!DOCTYPE html>
<!--voir exercice TP1 Procedures D -->
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Exercices de TD enonces</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>
<body>

    <?PHP


    // on se connecte à la Base de données MariaDB
    $link = pg_connect("host=localhost port=5432 dbname=Zoo user=luvan password=tae") or die ("Impossible de se connecter.");


/*Q1. Ecrire une fonction DernierCas qui, étant donné le nom d’une maladie, retourne la date à laquelle cette maladie a été contractée par un animal du zoo pour la dernière fois.*/
    function DernierCas($nommal){
    global $link;
    $qry=pg_query($link, "SELECT datem FROM estmalade WHERE nommal='$nommal' ORDER BY datem DESC");
    $data=pg_fetch_assoc($qry);
/* Q3.Lever une exception si la maladie n'a jamais été contractée.*/
    if ($data==0){
      throw new Exception ("Cette maladie n'a jamais été contractée.<br>");}
    else {
    return $data['datem'];
    }
  }
    //Q2. Appeler la fonction pour le typhus.
    $derniercas = DernierCas('typhus');
    echo 'La maladie a été contractée pour la dernière fois le '.$derniercas. '.<br><br>';


/*Q4. Ecrire une fonction DerniersCas qui, étant donné le nom d’une maladie, retourne la liste des animaux ayant déjà contracté cette maladie, de la date la plus récente à la plus ancienne.*/

    Function DerniersCas($nommal){
      global $link;
      $qry=pg_query($link, "SELECT noma, datem FROM estmalade WHERE  nommal='$nommal' ORDER BY datem DESC");
      /*Q. Bonus : on créée et on remplie un tableau pour afficher à la fois la variable nom animal et la variable date. Puis on retourne le tableau.*/
      for ($i=0;$data=pg_fetch_assoc($qry);$i++){
        $tableau[$i]=$data['noma']." ".$data['datem'];
      }
      return $tableau;
    }

    $DerniersCas=DerniersCas('typhus');
    echo 'Liste des animaux ayant déjà contracté cette maladie : <br>' ;
    foreach ($DerniersCas as $value){
      echo $value.'<br>';
    }



/*Q5.Ecrire une fonction CageDispo qui, étant donné un type de cage, renvoie le numéro d’une cage de ce type contenant le moins d’animal. On supposera que toute cage contient au moins un animal.*/
    function CageDispo($typec){
      global $link;
      $qry=pg_query($link, "SELECT cage.numc FROM cage, animal WHERE  typec='$typec' ORDER BY animal.numc ASC");
      $data=pg_fetch_assoc($qry);
      return $data['numc'];
    }
    $cagedispo = CageDispo('cage à fauves');
    echo '<br>numéro de cage dispo : '.$cagedispo. '.<br><br>';

/*Q6. Ecrire une fonction InsererLionFauves qui, étant donné le nom, le sexe, le pays d’origine et la date de naissance d’un nouveau lion, l’enregistre dans la table animal avec le numéro de la cage de type ‘fauves’ la moins remplie. */
    function InsererLionFauves($noma,$espece,$sexe,$pays,$datea){
      global $link;
      $cagedispo = CageDispo('cage à fauves');
      pg_query($link, "INSERT INTO animal values('$noma','$espece','$sexe','$pays','$datea', $cagedispo)");
    }

    /*Je ferme ma fonction mais elle fonctionne:
    InsererLionFauves('ronron', 'lion','m','europe','2020-01-22');*/


  /*Q7. Ecrire une fonction InsererLionFauvesAdv qui fasse le même travail que InsererLionFauves mais ajoute un numéro au nom du lion si un autre animal possède le même nom. Par exemple, s’il existe déjà un animal nommé gilderoy, un nouveau lion de même nom sera enregistré avec le nom gilderoy2, le suivant avec le nom gilderoy3 etc.*/

    Function InsererLionFauvesAdv($noma,$espece,$sexe,$pays,$datea){
      global $link;
      $cagedispo = CageDispo('cage à fauves');
      $qry=pg_query($link, "SELECT * FROM animal where noma='$noma'");
      $data= pg_fetch_assoc($qry);
      $nominser=$noma;
      $i=1;
// Tant que $data est différent de zéro, cela veut dire qu'il existe déjà un doublon.
      while($data!=0)
      {
//Du coup, on ajoute +1 au nom de l'animal tant que la condition est vraie
        $i++;
        $nominser=$noma.$i;
//On peut mettre plusieurs query et même dans un while ou if.
        $qry=pg_query($link, "SELECT * FROM animal where noma='$nominser'");
        $data= pg_fetch_assoc($qry);
      }
// Et enfin la fonction qui insère le nouvel animal.
      pg_query($link, "INSERT INTO animal values('$nominser','$espece','$sexe','$pays','$datea', $cagedispo)");
    }

    InsererLionFauvesAdv('ronron', 'lion','m','europe','2020-01-22');


/*Q.8. Ecrire une fonction RemedesUtilises qui, pour un nom de maladie donné, renvoie le remède le plus
utilisé pour la soigner. Si plusieurs remèdes satisfont cette propriété, alors il faut tous les afficher.*/

  function RemedesUtilises($nommal){
    global $link;
    // Je compte les remèdes et je vois quel est le remède max.
    $qry=pg_query($link, "SELECT COUNT(remede), remede FROM estmalade WHERE  nommal='$nommal' GROUP BY remede ORDER BY COUNT(remede) DESC");
    $data=pg_fetch_assoc($qry);
    //récupère le maximum count des remèdes.
    $variable = $data['count'];
    //je sélectionne les remèdes qui ont comme count ce maximum. Grace au having count.
    $qry2=pg_query($link, "SELECT COUNT(remede), remede FROM estmalade WHERE  nommal='$nommal' GROUP BY remede having count(remede)=$variable");
    //Je remplis mon tableau avec le nom des remèdes.
    for ($i=0;$data2=pg_fetch_assoc($qry2);$i++){
      $tableau[$i]=$data2['remede'];

    }
    return $tableau;

  }
  $remedesutilises=RemedesUtilises('gale');
  echo 'Le remède le plus utilisé est : <br>' ;
  //Je parcours mon tableau qui a le nom des remèdes.
  foreach ($remedesutilises as $value) {
    //Dans cet exemple, un seul remède s'affichera mais il pourrait y en avoir plus.
    echo $value . "<br>";
  }

    ?>

</body>
</html>
