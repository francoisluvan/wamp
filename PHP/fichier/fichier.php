<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Fichier</title>
</head>
<body>

    <?PHP

//Q1,Q2,Q3.Fonction pour écrire dans un fichier texte
    $fpout = fopen("pates.txt","r+");// ouvre le fichier en lecture et écriture
    //if ($fpout){
      $ligne=
      "J'aime les pâtes !
      Et les boulettes!
      J'aime les pâtes !
      Et les boulettes!
      J'aime les pâtes !
      Et les boulettes!";
      fputs($fpout, $ligne);//fonction pour écrire dans le fichier
      echo'ca marche ptet';
      //on parcourt les lignes du fichier
      while (!feof($fpout)){//end of file pour dire qu'il s'arrete à la fin
        $affiche=fgets($fpout);//chope la ligne
        echo $affiche;//lit la ligne
      }
    fclose($fpout);



//Q4.Fonction pour écrire dans un fichier csv
    $csvopen = fopen("fichier.csv","r+");
    $ajout= array (
   array("J'aime les pâtes !"),
   array("Et les boulettes!"),
   array("J'aime les pâtes !"),
   array("Et les boulettes!"),
   array("J'aime les pâtes !"),
   array("Et les boulettes!"),
);
    /*Je grise la fonction sinon elle essaie d'ajouter de nouvelles lignes :
    foreach ($ajout as $fields){
    fputcsv($csvopen,$fields);
  }*/




//Q5.lire le fichier csv dans un tableau associatif.
  $numRow = 0;
  while (($row = fgetcsv($csvopen)) !== FALSE) {
       // lecture de la 1ere ligne pour récupérer les noms des champs
       if ($numRow == 0) {
           $cols = $row;
       } else {
           // lecture des autres lignes
           $data[] = array_combine($cols, $row);
       }
   $numRow++;
   }
  fclose($csvopen);
  var_dump($data);



//Q6. Ecrire 5 enregistrements de la même taille sur un fichier à accès direct.

    $opendauphin = fopen("dauphin.txt","r+");
    /*écriture des 5 enregistrements de même taille
    $texte= 'E1';
    fputs($opendauphin, $texte);
    $texte= 'E2';
    fputs($opendauphin, $texte);
    $texte= 'E3';
    fputs($opendauphin, $texte);
    $texte= 'E4';
    fputs($opendauphin, $texte);
    $texte= 'E5';
    fputs($opendauphin, $texte);
    */

    fseek($opendauphin, 6);
    $data=fgets($opendauphin, 3);
    echo $data;

    fclose($opendauphin);




    ?>

</body>
</html>
