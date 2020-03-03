<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Exercice PHP</title>
</head>
<body>

    <?PHP
      setlocale(LC_CTYPE, 'fr_FR.UTF-8');
      $a = 'Bonjour';
      $b = '4';
      $c = '7';
      $chats = array('persan','gouttière','chartreux');
      $ages= ['Mathilde' =>27, 'Pierre'=>29, 'Amandine'=>21];
      $mails ['Mathilde']='math@gmail.com';
      $mails['Pierre']='pierre@gmail.com';
      $mails['Amandine']='amandine@gmail.com';
      $nom ='Mathilde';
      $nom ='Pierre';
      $nom ='Amandine';
      $trigo= array('Circonférence'=>'3,14',
      'Angle droit'=>'90°',
      'équilatéral'=>'60°');


      echo $a . '<br/><br/>';

      define('DIX', 10);
      echo 'la constante DIX stocke la valeur ' .DIX.'<br/><br/>';

      function somme ($b,$c) {
        $resultat= $b+$c;
        return $resultat;
      }

      echo 'Voici un calcul : 4+7=' .somme($b,$c). '<br/><br/>';

      echo ucfirst("la lettre initiale est une majuscule !") . '<br/><br/>';

      echo 'version actuelle de PHP: ' . phpversion() . '<br/><br/>';

      echo 'Cette phrase est codée entre apostrophes' . '<br/>';
      echo "Cette phrase est codée entre guillemets" . '<br/><br/>';

      echo 'Ci-dessous un tableau : <br/>';
      echo 'Chat 1 = '. $chats[]= 'persan'. '<br/>';
      echo 'Chat 2 = '. $chats[]= 'gouttière'. '<br/>';
      echo 'Chat 3 = '. $chats[]= 'chartreux'. '<br/><br/>';

      echo 'Ci-dessous un tableau associatif : <br>';
      foreach($ages as $clef=>$valeur) {
        echo $clef.' a ' .$valeur. ' ans.<br><br>';}

      function Bonjour ($nom) {
        echo $nom. ', Bienvenue sur mon site<br><br>';
      }

      Bonjour('Mathilde');
      Bonjour('Pierre');
      Bonjour('Amandine');





    ?>


</body>
</html>
