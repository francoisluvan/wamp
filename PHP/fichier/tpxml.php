<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Fichier</title>
</head>
<body>

    <?PHP

//Q4.d’afficher à la demande les noms des étudiants par ordre alphabétique.
    $fichier= 'iut.xml';
    $xml= simplexml_load_file($fichier);
    $tableau = array();
    $ligne = array();
    foreach ($xml as $etudiant){
      $nom= $etudiant['nom'];
      $id =$etudiant['id'];
      $uv =$etudiant->uv1;
      $ligne = array ("$id"=>"$nom");
      $tableau = array_replace($tableau, $ligne);
    }

    asort($tableau, SORT_NATURAL);
    foreach ($tableau as $key=>$value){
      echo $key. " ".$value. $uv. "<br>";
    }




//Q1. Q2. Pour afficher les données du fichier xml dans un tableau :

/*Je grise cette partie pour pouvoir faire la Q3.
  $fichier= 'iut.xml';
  $xml= simplexml_load_file($fichier);

  echo'<table>';
  echo'<tr> <th> ID </th> <th> Nom </th> <th> UV1 </th> <th> UV2 </th> </tr>';
  foreach ($xml as $etudiant){
    echo '<tr> <td>'. $etudiant["id"]. '</td> <td>'. $etudiant["nom"] . '</td> <td>'.$etudiant->uv1. '</td> <td>'.$etudiant->uv2. '</td> </tr>';
  }
  echo '</table>';
*/


/*Q3. Créez un formulaire permettant d’insérer des données dans le fichier iut.xml.
  $nom= htmlentities ($_GET['nom']);
  $id= htmlentities ($_GET['id']);
  $uv1= htmlentities ($_GET['uv1']);
  $uv2= htmlentities ($_GET['uv2']);

  $xmlopen = fopen("iut.xml","r+");
      fseek($xmlopen,-8, SEEK_END);

      $ajoutxt="<etudiant id="."'".$id."'"." nom="."'".$nom."'". ">
      ".
        "<uv1> ".$uv1. " </uv1>
        ".
        "<uv2> ".$uv2. " </uv2>
        ".
      "</etudiant>
      </iut>";

      fputs($xmlopen, $ajoutxt);
      echo 'Lignes ajoutées au fichier xml avec succès';
      fclose($xmlopen);
*/



      /*afficher les lignes insérées
      while (!feof($xmlopen)){//end of file pour dire qu'il s'arrete à la fin
        $affiche=fgets($xmlopen);//chope la ligne
        echo $affiche;//lit la ligne
      }
      */




/* Révision du COURS :
  //ouvrir un fichier xml
  $fichier= 'iut.xml';
  //créer un objet XML
  $dom = new DomDocument();
  //charge le fichier xmln
  $dom->load('iut.xml');
  //sauvegarde le dom dans un fichier xml
  $dom->save('iutsave.xml');
  //vérifie l'écriture
  $xml= simplexml_load_file ('iutsave.xml');
*/



/* travail perso : Méthode objet (trop compliquée pour moi, pas finie)
$fichier= 'iut.xml';
$dom = new DomDocument();
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;

//crée les éléments principaux
$etudiant = $dom->createElement('étudiant1');
$etudiant2 = $dom->createElement('étudiant2');

//crée les attributs des éléments principaux
$attr_1 = $dom->createAttribute('id');
$attr_1->value = '1';

$attr_2 = $dom->createAttribute('nom');
$attr_2->value = 'Jean';

//crée un élément child
$uv1 = $dom->createElement('UV1');
$etudiant->appendChild($uv1);


//Ajoute les attributs
$etudiant->appendChild($attr_1);
$etudiant->appendChild($attr_2);

//crée la structure xml
$etudiant->appendChild($attr_1);
$etudiant->appendChild($attr_2);
$etudiant->appendChild($uv1);


$dom->appendChild($etudiant);
$dom->appendChild($etudiant2);

//saveXML() méthode qui affiche le xml
print_r ($dom->saveXML());
*/

    ?>

</body>
</html>
