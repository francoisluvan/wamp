<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Erreurs</title>
</head>
<body>

    <?PHP

/*Q1
    error_reporting(0);
    $chiffre1 = 8;
    $chiffre2 = 0;

    $division = $chiffre1 / $chiffre2;

    echo $division;
*/

/*Q2
  @include('inexistant.php');
*/

/*Q3
function inverse($x) {
    if (!$x) {
        throw new Exception('Division par zéro.');
    }
    return 1/$x;
}

try {
    echo inverse(5);
    echo inverse(0);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage();
}
*/

/*Q4
  if (1!=0){
  error_log("message erreur");
}
*/

//Q5
function persoerreurs($fatal, $str, $file, $line){
  switch($fatal){
    //Erreur fatale
    case E_USER_ERROR:
      echo '<p><strong>ERREUR FATAAAALE !</strong> : '.$str.'</p>';
      exit;
      break;

    //Avertissement
    case E_USER_WARNING:
      echo '<p><strong>Avertissement</strong> : '.$str.'</p>';
      break;

    //note
    case E_USER_NOTICE:
    echo '<p><strong>Note</strong> : '.$str.'</p>';
    break;

    // Erreur générée par PHP
    default:
      echo '<p><strong>Erreur inconnue !!</strong> ['.$fatal.'] : '.$str.'<br/>';echo 'Dans le fichier : "'.$file.'", à la ligne '.$line.'.</p>';
      break;

  }


}

set_error_handler('persoerreurs');

echo $dsfgesg;

    ?>

</body>
</html>
