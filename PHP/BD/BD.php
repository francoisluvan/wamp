<?PHP
Session_start();
//variables de session
$_SESSION['nom']= $_POST['nom'];
?>

<!DOCTYPE html>
<!--voir exercice TP1 Procedures D -->
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Exercices du cours 3</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>
<body>

    <?PHP


    // on se connecte à la Base de données MariaDB
    $link = mysqli_connect("localhost", "root","", "exercice1") or die ("Impossible de se connecter: ".mysql_error());


    /*Question 1.  fonction qui étant donnée un num d'adhérent, retourne le nb d'années où il a cotisé. $n renvoie au numéro d'adhérent*/
    function NbAnneesCot($link, $n)
    {
    /*on récupère les infos de la Base de données, c'est à dire toutes les lignes où il y a un numéro d'adhérent + les lignes 'oui' = les années où l'adhérent a cotisé*/
      $numadh=mysqli_query($link, "SELECT * FROM cotisation WHERE numadh=$n AND paye='oui'");
    //voici la fonction qui compte les lignes 'oui'
      $n = mysqli_affected_rows ($link);
    //Sur la ligne précédente on donne une valeur à la fonction. Puis on fait le calcul avec return.
      return $n;
    }
    //On appelle la fonction en remplaçant $n par le numéro d'adhérent duquel on veut savoir le nb d'années de cotisation. exemple = l'adhérent 3 a cotisé 1 an. Le 1 s'affiche sur la page.
    $nb= NbAnneesCot($link, 3);
    echo $nb;


    $session=$_SESSION['nom'];
    /*Question 2. Il faut se connecter avec BD-session.php. Fonction qui donne le numéro adhérent de l'utilisateur connecté*/
    function MonNumero ($link){
    global $session;
    $rqt=mysqli_query($link, "SELECT * FROM adherent WHERE nom='$session'");
    //récupère les données sous forme de tableau associatif
    $data=mysqli_fetch_assoc($rqt);
    //donne le résultat de la colonne 'numadh' sur la même ligne que l'utilisateur connecté
    return $data['numadh'];
    }
    $a = MonNumero($link);
    echo "<br> Question 2. Mon num d'adhérent : " . $a . "<br>";




    /*Question 3. Ecrire une fonction MonBateau() qui, étant donné un numéro d'activité, donne le numéro du bateau pour lequel l'utilisateur connecté est chef de bord.*/
    function MonBateau($numact){
    global $link;
    $id = MonNumero($link);
    $qry=mysqli_query($link, "SELECT * FROM chefdebord WHERE numadh=$id AND numact=$numact");
    //récupère les données sous forme de tableau associatif
    $data=mysqli_fetch_assoc($qry);
    return $data['numbat'];
  }
    // la fonction affichera un numéro de bateau uniquement pour l'utilisateur root
    $result= MonBateau(2);
    echo "Question 3 : le numero du bateau est : ".$result;




    //Question 4 v1 erronnée. revoir avec Aous. Histoire de tableau Adam dans lequel on doit compter le nb de lignes
    /*function ReconduireEquipexxx($link, $numact1, $numact2){
    $qry=mysqli_query($link, "SELECT * FROM equipage WHERE numact=$numact1");
    $numact2=9;
    $monbat = MonBateau($link, $numact1);
    $rqt=mysqli_query ($link, "INSERT INTO equipage (numact, numadh, numbat) SELECT $numact2, numadh, numbat FROM equipage WHERE numbat=$monbat");
  }*/
    //Fonction annulée sinon elle crée des lignes à chaque rafraichissement de page
    //$reCequip= ReconduireEquipe($link, 2,9);



  //Question 4 v2. Un skipper connecté souhaite reconduire tout son équipage d'une activité à une autre.
  function ReconduireEquipe($numact1, $numact2){
  global $link;
  //On reprend la fonction MonBateau qui donne le numéro du bateau en fonction du numéro d'activité
  $bat=MonBateau($link, $numact1);
  //on récupère les lignes du tableau pour un numéro d'activité + un numéro de bateau donné
  $qry=mysqli_query($link, "SELECT * FROM equipage WHERE numact=$numact1 AND numbat=$bat");
  $rqt=mysqli_query ($link, "INSERT INTO equipage SELECT $qry FROM equipage WHERE numbat=$bat");
  }
  ReconduireEquipe(2,9);

  // Continuer la fonction, elle n'est pas finie



   //Question 5. Fonction pour créer un nouveau rallye + n régates avec num d'activités auto.
    function NouveauRallye($link, $depart, $arrivee, $datedebut, $datefin, $nbregates, $forcevent) {
    //Sélectionner le tableau activité
    $qry=mysqli_query($link, "SELECT * FROM activite");
    // Compter le nb de lignes du dernier tableau sélectionné
    $nblignes = mysqli_affected_rows ($link);
    // insérer de nouvelles lignes dans le tableau
    mysqli_query ($link, "INSERT INTO activite (numact, typeact, depart, arrivee, datedebut, datefin) VALUES ($nblignes+1, 'rallye','$depart', '$arrivee', '$datedebut', '$datefin')") or die (mysqli_error($link));
    mysqli_query ($link,"INSERT INTO regate (numact, numregate,forcevent) VALUES ($nblignes+1, $nbregates, $forcevent)" ) or die(mysqli_error($link));
    return $nblignes+1;
  }

//Fonction annulée sinon elle crée des lignes à chaque rafraichissement de page
 //NouveauRallye($link, 'Vannes', 'Vannes', '2019-06-10', '2019-06-30', 4, 7) ;






    ?>

</body>
</html>
