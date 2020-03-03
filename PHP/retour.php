<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Merci !</title>
</head>
<body>



<?PHP

  //affichage des noms et prénoms
  if(isset($_GET['Commander'])){
      $nom = $_GET['nom'];
      $prenom = $_GET['prenom'];
  echo 'Merci '. $prenom . ' '. $nom . ', pour votre commande. <br> <br>';
  };


  //affichage des résultats de cases à cocher
  if(isset($_GET['commande'])){
    echo 'Conformément à votre demande, nous vous enverrons prochainement : <br>';
  };

  if(isset($_GET['commande'])){
    foreach($_GET['commande'] as $commande)
    echo '-'.$commande. '<br>';
};


  //affichage des résultats de liste déroulante "select"
  if(isset($_GET['coyote']) && $_GET["coyote"]== "coyote en peluche"){
    echo "<br> Nous n'oublierons pas votre cadeau : <B> un coyote en peluche !</B> <br> <br>";
  };

  if(isset($_GET['coyote']) && $_GET["coyote"]== "coyote en sucre"){
    echo "<br> Nous n'oublierons pas votre cadeau : <B> un coyote en sucre !<B> <br> <br>";
  };

  if(isset($_GET['coyote']) && $_GET["coyote"]== "coyote en plastique"){
    echo "<br> Nous n'oublierons pas votre cadeau : <B> un coyote en plastique ! </B> <br> <br>";
  };


  //affichage si coché recevoir les publicités
  if ($_GET["pub"]== "oui"){
    echo "<br> Nous vous enverrons aussi nos publicités ! <br> <br>";
  };


?>



<br>
<p> A bientôt sur notre site ! </p>
<br>

<button class="favorite styled"
        type="button">

    <a href="formulaire_acme.html">Retourner au formulaire</a>
</button>

</body>
</html>
