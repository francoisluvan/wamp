<?php

/*
if( isset($_POST['content']) && $_POST['content']!=""){

echo 'textsuccess';

}
else{
    echo "Failed";
}
*/

// chargement du fichier xml
$xml = simplexml_load_file("chat.xml");
// fonction optionnelle pour préciser le type
header('Content-Type: text/');

// S'il y a nouveau message :
if(isset($_POST['new_message']) && isset($_POST['author']) && isset($_POST['content'])) {

    //Trouvons l'identifiant du nouveau message

    //Si il y a déjà des messages
    if($xml->msg->count()>0) {
        $id = $xml->msg[count($xml->msg)-1]->attributes()->id;
    }
    else {
        $id = 0;
    }

	// écrire le nouveau message dans le fihcier xml
    $msg = $xml->addChild("msg");
    $msg->addAttribute("id", $id+1);
    $msg->addChild("author", $_POST['author']);
    $msg->addChild("content", $_POST['content']);
    $xml->asXml("chat.xml");
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
