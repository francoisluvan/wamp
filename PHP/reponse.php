<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Votre réservation</title>
    <link rel="stylesheet" type="text/css" href="styleRep.css" />
</head>
<body>

  <section>
    <h1> Voici le récapitulatif de votre réservation </h1>

    <?php
    $depart= htmlentities ($_GET['lieuDep']);
    $arrivee= htmlentities ($_GET['lieuArr']);
    $dateDep= htmlentities ($_GET['dateDep']);
    $dateRet= htmlentities ($_GET['dateRet']);
    $adultes= htmlentities ($_GET['adultes']);
    $enfants= htmlentities ($_GET['enfants']);
    $bebes= htmlentities ($_GET['bebes']);

    echo '<p>Aller :</p>';
    echo '<ul>';
    echo '<li>Départ de '.$depart.'</li>';
    echo '<li>le '.$dateDep.'</li>';
    echo '<li>à destination de '.$arrivee.'</li>';
    echo '</ul>';

    echo '<p>Retour :</p>';
    echo '<ul>';
    echo '<li>Départ de '.$arrivee.'</li>';
    echo '<li>le '.$dateRet.'</li>';
    echo '<li>à destination de '.$depart.'</li>';
    echo '</ul>';

    echo '<p>Passagers :</p>';
    echo '<ul>';
    echo '<li>Adultes: '.$adultes.'</li>';
    echo '<li>Enfants: '.$enfants.'</li>';
    echo '<li>Bebes: '.$bebes.'</li>';
    echo '</ul>';
    ?>

    <h2>Nous recherchons les vols...</h2>
    </section>

    <button class="favorite styled"
            type="button">

        <a href="formulaire_avion.html">Retourner au formulaire</a>
    </button>


</body>
</html>
