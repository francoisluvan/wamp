<?php



// chargement du fichier xml
$xml = simplexml_load_file("chat.xml");
// fonction optionnelle pour préciser le type
//header('Content-Type: text/');


$msg= htmlentities ($_POST['new_message']);
$author= htmlentities ($_POST['author']);
$content= htmlentities ($_POST['content']);

$xmlopen = fopen("chat.xml","r+");


    $ajoutxt="<chat>".$content."</chat>";

    fputs($xmlopen, $ajoutxt);
    echo 'Lignes ajoutées au fichier xml avec succès';
    fclose($xmlopen);

    while (!feof($xmlopen)){
      $affiche=fgets($xmlopen);
      echo $affiche;
    }

// S'il y a nouveau message :
if(isset($_POST['new_message']) && isset($_POST['author']) && isset($_POST['content'])) {

    /*Trouvons l'identifiant du nouveau message*/

    /*Si il y a déjà des messages*/
    if($xml->msg->count()>0) {
        $id = $xml->msg[count($xml->msg)-1]->attributes()->id;
    }
    else {
        $id = 0;
    }
/*
	// écrire le nouveau message dans le fichier xml
    $msg = $xml->addChild("msg");
    $msg->addAttribute("id", $id+1);
    $msg->addChild("author", $_POST['author']);
    $msg->addChild("content", $_POST['content']);
    $xml->asXml("chat.xml");
*/



}






if(isset($_POST['last'])) {
    $new_msgs = $xml->xpath("//msg[@id>".$_POST['last']."]");
    $output = "<chat>";
    foreach($new_msgs as $n_msg) {
        $output .= $n_msg->asXml();
    }
    echo $output."</chat>";

}
else {
    echo $xml->asXml();
}

 ?>
